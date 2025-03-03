import { useState, useRef, useEffect } from "react";
import { Calendar, momentLocalizer } from "react-big-calendar";
import moment from "moment";
import "react-big-calendar/lib/css/react-big-calendar.css";
import "tailwindcss/tailwind.css";
import * as Popover from "@radix-ui/react-popover";
import * as DropdownMenu from "@radix-ui/react-dropdown-menu";
import { Pen, Plus, ShoppingBasket, ChevronDown, X, Clock } from "lucide-react";
import { useSidebar } from '@/components/ui/Sidebar';

const localizer = momentLocalizer(moment);

const initialEvents = [
  { title: "Hand Infection", start: new Date(2024, 9, 4, 12, 30), end: new Date(2024, 9, 4, 13, 0), type: "consultation" },
  { title: "Monthly Checkup", start: new Date(2024, 9, 6, 11, 30), end: new Date(2024, 9, 6, 12, 0), type: "routine" },
  { title: "Malaria Fever", start: new Date(2024, 9, 12), end: new Date(2024, 9, 15), type: "sick" }
];

const eventColors = {
  emergency: "bg-[#074A2D]",
  examination: "bg-[#FECA57]",
  routine: "bg-[#F80D38]",
  consultation: "bg-[#0DB16A]",
  sick: "bg-[#18E614]",
};

type EventType = keyof typeof eventColors;

const eventStyleGetter = (event: { title: string; start: Date; end: Date; type: EventType }) => {
  return { className: `${eventColors[event.type] || "bg-transparent"} text-white p-1 px-3 rounded-xl shadow-md text-sm w-[90%] mx-auto` };
};


const CustomCalendar = () => {

  const { state } = useSidebar()
  const isCollapsed = state === "collapsed"

  const [events, setEvents] = useState(() => {
    const savedEvents = localStorage.getItem("events");
    return savedEvents
      ? JSON.parse(savedEvents, (key, value) => (key === "start" || key === "end" ? new Date(value) : value))
      : initialEvents;
  });
  
  const [startTime, setStartTime] = useState("");
  const [endTime, setEndTime] = useState("");
  const [selectedEvent, setSelectedEvent] = useState<{ title: string; start: Date; end: Date; type: EventType } | null>(null);
  const [selectedSlot, setSelectedSlot] = useState<{ start: Date; end: Date } | null>(null);
  const [eventTitle, setEventTitle] = useState("");
  const [eventType, setEventType] = useState("consultation");
  const [popoverPosition, setPopoverPosition] = useState({ top: 0, left: 0 });
  const calendarRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    localStorage.setItem("events", JSON.stringify(events));
  }, [events]);

  useEffect(() => {
    if (selectedEvent) {
      setEventTitle(selectedEvent.title);
      setEventType(selectedEvent.type);
      setStartTime(moment(selectedEvent.start).format("HH:mm"));
      setEndTime(moment(selectedEvent.end).format("HH:mm"));
    }
  }, [selectedEvent]);

  const dayPropGetter = (date: Date) => {
    const today = new Date();
    today.setHours(0, 0, 0, 0); // Reset time for accurate date comparison

    const firstDayOfMonth = new Date(today.getFullYear(), today.getMonth(), 1);
    const lastDayOfMonth = new Date(today.getFullYear(), today.getMonth() + 1, 0);  
  
    if (date < today && (date < firstDayOfMonth || date > lastDayOfMonth)) {
      return { className: "dark:bg-[#080827] dark:text-gray-400" }; // Past dates (before today)
    } else if (date.toDateString() === today.toDateString()) {
      return { className: "dark:bg-[#1f1f1f] dark:text-white" }; // Current date
    } else if (date > today && (date < firstDayOfMonth || date > lastDayOfMonth)) {
      return { className: "dark:bg-[#080827] dark:text-[#2f3339] " }; // Future dates
    }
  
    // // Dates outside the current month (past or future)
    // if (date < firstDayOfMonth || date > lastDayOfMonth) {
    //   return { className: "dark:bg-[#d82121] dark:text-gray-500 opacity-50" }; // Dimmed appearance for out-of-month dates
    // }
  
    return { className: "bg-transparent" }; // Default styling
  };  

  const handleSelect = ({ start, end, box }: { start: Date; end: Date; box?: { x: number; y: number } }) => {
    setSelectedSlot({ start, end });
    setSelectedEvent(null);
    if (box && calendarRef.current) {
      const calendarRect = calendarRef.current.getBoundingClientRect();
      let left = box.x - calendarRect.left + window.scrollX;
      let top = box.y - calendarRect.top + window.scrollY;

      const popoverWidth = 256;
      const popoverHeight = 300;
      const windowWidth = window.innerWidth;
      const windowHeight = window.innerHeight;

      if (left + popoverWidth > windowWidth) {
        left = windowWidth - popoverWidth - 20;
      }
      if (top + popoverHeight > windowHeight) {
        top = windowHeight - popoverHeight - 20;
      }

      setPopoverPosition({ top, left });
    }
  };

  const handleEventClick = (event: { title: string; start: Date; end: Date; type: EventType }, e: React.SyntheticEvent) => {
    setSelectedEvent(event);
    setSelectedSlot(null);
    const mouseEvent = e as React.MouseEvent<HTMLElement>;
    if (calendarRef.current) {
      const calendarRect = calendarRef.current.getBoundingClientRect();
      let left = mouseEvent.clientX - calendarRect.left + window.scrollX;
      let top = mouseEvent.clientY - calendarRect.top + window.scrollY;

      const popoverWidth = 256;
      const popoverHeight = 300;
      const windowWidth = window.innerWidth;
      const windowHeight = window.innerHeight;

      if (left + popoverWidth > windowWidth) {
        left = windowWidth - popoverWidth - 20;
      }
      if (top + popoverHeight > windowHeight) {
        top = windowHeight - popoverHeight - 20;
      }

      setPopoverPosition({ top, left });
    }
  };

  const addOrUpdateEvent = () => {
    if (eventTitle.trim() && selectedSlot && startTime && endTime) {
      const [startHours, startMinutes] = startTime.split(":").map(Number);
      const [endHours, endMinutes] = endTime.split(":").map(Number);
  
      const start = new Date(selectedSlot.start);
      start.setHours(startHours || 0, startMinutes || 0);
  
      const end = new Date(selectedSlot.start);
      end.setHours(endHours || 0, endMinutes || 0);
  
      setEvents((prev: typeof initialEvents) => [...prev, { title: eventTitle, start, end, type: eventType as EventType }]);
    } else if (selectedEvent) {
      setEvents((prev: typeof initialEvents) =>
        prev.map((ev) =>
          ev === selectedEvent
            ? { ...ev, title: eventTitle, type: eventType as EventType, start: selectedEvent.start, end: selectedEvent.end }
            : ev
        )
      );
    }
    closePopover();
  };
  
  

  const deleteEvent = () => {
    if (selectedEvent) {
      setEvents((prev: typeof initialEvents) => prev.filter((ev) => ev !== selectedEvent));
      closePopover();
    }
  };

  const closePopover = () => {
    setSelectedSlot(null);
    setSelectedEvent(null);
    setEventTitle("");
    setEventType("consultation");
  };

  return (
    <div ref={calendarRef} className={`p-5 relative h-full mt-36 max-sm:ml-[3rem] max-md:ml-16 -ml-2  max-sm:mr-10 transition-all dark:bg-transparent grid ${isCollapsed ? 'w-screen md:w-[90vw] grid-cols-1' : 'w-screen md:w-[80vw] grid-cols-1'}`}>
      <Calendar
        localizer={localizer}
        events={events}
        startAccessor="start"
        endAccessor="end"
        selectable
        onSelectSlot={handleSelect}
        onSelectEvent={handleEventClick}
        style={{ height: "100%"}}
        className={`rounded-xl md:w-full w-screen max-sm:-mr-5 overflow-hidden`}
        eventPropGetter={(event) => eventStyleGetter(event)}
        dayPropGetter={dayPropGetter}
      />

      {(selectedSlot || selectedEvent) && (
        <Popover.Root open={true} onOpenChange={(open) => !open && closePopover()}>
          <Popover.Trigger asChild>
            <button type="button" className="hidden" aria-hidden="true" />
          </Popover.Trigger>
          <Popover.Content
            className="bg-white dark:bg-black text-black dark:text-white shadow-xl rounded-xl p-6 w-64 absolute z-10 border border-[#2f3339]  dark:border-[#2f3339] "
            style={{ top: popoverPosition.top, left: popoverPosition.left }}
          >
            <div>
              <div className="border-b border-[#2f3339] pb-2 flex justify-between items-center">
                <h3 className="uppercase text-xs font-bold">make new appointment</h3>
                <button type="button" className="bg-transparent  border-[#2f3339] text-black dark:text-white p-2 rounded-full border hover:-translate-y-0.5 transition-all duration-300 hover:border-t hover:border-b hover:bg-black hover:shadow-[0_2px_0_0_rgba(0, 38, 255, 0.976)] hover:border-[#1429e6] hover:border-b-2" onClick={closePopover} title="Close"><X size={12}/></button>
              </div>

              <div>
                <label htmlFor="title" className="block mt-4 ml-1 text-[#2f3339]  dark:text-gray-200 font-medium text-[10px] uppercase">Title</label>
                <input
                  type="text"
                  className="w-full border border-[#2f3339]  dark:border-[#2f3339] bg-transparent p-1.5 rounded-full focus:outline-none focus:ring-1 focus:ring-[#18E614] placeholder:text-xs text-xs"
                  placeholder="Enter Title"
                  id="title"
                  name="title"
                  value={eventTitle}
                  onChange={(e) => setEventTitle(e.target.value)}
                />              
              </div>

              <div>
                <label htmlFor="eventType" className="block mt-4 ml-1 text-[#2f3339]  dark:text-gray-200 font-medium text-[10px] uppercase">Categories</label>
                <DropdownMenu.Root>
                  <DropdownMenu.Trigger asChild>
                    <button type="button" className="w-full border border-[#2f3339]  dark:border-[#2f3339]  bg-transparent p-1.5 text-xs rounded-full flex justify-between items-center focus:outline-none focus:ring-1 focus:ring-[#18E614]">
                      {eventType.charAt(0).toUpperCase() + eventType.slice(1)}
                      <ChevronDown size={16} />
                    </button>
                  </DropdownMenu.Trigger>
                  <DropdownMenu.Content className=" bg-black border border-[#2f3339]  dark:border-[#2f3339]  shadow-md rounded-md w-44 text-xs">
                    {Object.keys(eventColors).map((type) => (
                      <DropdownMenu.Item
                        key={type}
                        className="p-2 hover:bg-gray-200 dark:hover:bg-[#2f3339]  cursor-pointer"
                        onSelect={() => setEventType(type as EventType)}
                      >
                        {type.charAt(0).toUpperCase() + type.slice(1)}
                      </DropdownMenu.Item>
                    ))}
                  </DropdownMenu.Content>
                </DropdownMenu.Root>              
              </div>

              <div className="flex justify-between">
                <div>
                  <label className="block mt-4 ml-1 text-[#2f3339] dark:text-gray-200 font-medium text-[10px] uppercase">
                    Start Time
                  </label>
                  <div className="relative flex items-center">
                    <Clock className="absolute left-2 text-[#2f3339] dark:text-gray-400" size={16} />
                    <input
                      type="time"
                      className="w-fit pl-8 border border-[#2f3339] dark:border-[#2f3339] bg-transparent p-1.5 text-xs rounded-full focus:outline-none focus:ring-1 focus:ring-[#18E614] hover:border-[#18E614] dark:hover:border-[#18E614]"
                      value={startTime}
                      onChange={(e) => setStartTime(e.target.value)}
                      title="Select start time"
                    />
                  </div>
                </div>

                <div>
                  <label className="block mt-4 ml-1 text-[#2f3339] dark:text-gray-200 font-medium text-[10px] uppercase">
                    End Time
                  </label>
                  <div className="relative flex items-center">
                    <Clock className="absolute left-2 text-[#2f3339] dark:text-gray-400" size={16} />
                    <input
                      type="time"
                      className="w-full pl-8 border border-[#2f3339] dark:border-[#2f3339] bg-transparent p-1.5 text-xs rounded-full focus:outline-none focus:ring-1 focus:ring-[#18E614] hover:border-[#18E614] dark:hover:border-[#18E614]"
                      value={endTime}
                      onChange={(e) => setEndTime(e.target.value)}
                      title="Select end time"
                    />
                  </div>
                </div>                
              </div>



              <div className="mt-4 flex justify-between">
                {selectedEvent && 
                  <button type="button" className="bg-transparent  border-[#2f3339] text-black dark:text-white p-2 rounded-full border hover:-translate-y-0.5 transition-all duration-300 hover:border-t hover:border-b hover:bg-black hover:shadow-[0_2px_0_0_rgb(255, 0, 81)] hover:border-[#e61414] hover:border-b-2" onClick={deleteEvent} title="Delete Event">
                    <ShoppingBasket size={20} />
                  </button>
                }
                  <button
                    type="button"
                    className="bg-transparent border-[#2f3339] text-black dark:text-white p-2 rounded-full border hover:-translate-y-1 transition-all duration-300 hover:border-t hover:border-b hover:bg-black hover:shadow-[0_2px_0_0_rgba(204,255,0,0.811)] hover:border-[#18E614]"
                    onClick={addOrUpdateEvent}
                  >
                    {selectedEvent ? (
                      <div className="flex items-center gap-1">
                      <Pen size={10} /> 
                      <span className="block text-[#2f3339] dark:text-gray-200 font-medium text-[10px] uppercase">Edit appointment</span>
                    </div>
                    ) : (
                      <div className="flex items-center gap-1">
                        <Plus size={10} /> 
                        <span className="block text-[#2f3339] dark:text-gray-200 font-medium text-[10px] uppercase">New appointment</span>
                      </div>
                    )}
                  </button>
              </div>

            </div>

          </Popover.Content>
        </Popover.Root>
      )}
    </div>
  );
};

export default CustomCalendar;
