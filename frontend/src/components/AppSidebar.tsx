"use client"

import {
  Vibrate,
  Gift,
} from "lucide-react"
import {
  Sidebar,
  SidebarContent,
  SidebarFooter,
  SidebarHeader,
  SidebarMenu,
  SidebarMenuItem,
  SidebarMenuButton,
  useSidebar,
  SidebarTrigger,
} from "@/components/ui/Sidebar"
import { Link, useLocation } from "react-router-dom"
import { useTheme } from "@/components/theme-provider"
import { cn } from "@/lib/utils"
import { Separator } from "@radix-ui/react-separator"

import mentalIcon from "@/assets/mental_Icon.svg"
import mentalIconDark from "@/assets/mental_Icon_dark.svg"
import mentalIconMobileLight from "@/assets/mental_Icon_mobile_light.svg"
import mentalIconMobileDark from "@/assets/mental_Icon_mobile_dark1.svg"
import overview from '@/assets/Overview Icon.svg'
import appointments from '@/assets/Appointments Icon.svg'
import doctors from '@/assets/Doctors Icon.svg'
import medicalIcon from '@/assets/medical.svg'
import chats from '@/assets/Chats Icon.svg'
import setttings from '@/assets/Settings Icon.svg'
import logout from '@/assets/Logout Icon.svg'



export function AppSidebar({ className }: { className?: string }) {
  const { state, isMobile } = useSidebar()
  const { theme } = useTheme()
  const isCollapsed = state === "collapsed"
  const location = useLocation();


  const mainNavItems = [
    {
      title: "Overview",
      icon: () => (<img src={overview} alt="Overview Icon" className={`${isCollapsed ? "h-5 w-5" : "h-4 w-4"}`} />),
      href: "/home",
    },
    {
      title: "Appointments",
      icon: () => (<img src={appointments} alt="Appointments Icon" className={`${isCollapsed ? "h-5 w-5" : "h-4 w-4"}`} />),
      href: "/appointments",
    },
    {
      title: "Doctors",
      icon: () => (<img src={doctors} alt="Doctors Icon" className={`${isCollapsed ? "h-5 w-5" : "h-4 w-4"}`} />),
      href: "/doctors",
    },
    {
      title: "Medical",
      icon: () => (<img src={medicalIcon} alt="Medical Icon" className={`${isCollapsed ? "h-5 w-5" : "h-4 w-4"}`} />),
      href: "/medical",
    },
    {
      title: "Chats",
      icon: () => (<img src={chats} alt="Chats Icon" className={`${isCollapsed ? "h-5 w-5" : "h-4 w-4"}`} />),
      href: "/chats",
      badge: "1",
    },
    {
      title: "Claims",
      icon: Gift,
      href: "/claims",
    },
  ]
  
  const accountNavItems = [
    {
      title: "Settings",
      icon: () => (<img src={setttings} alt="Settings Icon" className={`${isCollapsed ? "h-5 w-5" : "h-4 w-4"}`} />),
      href: "/settings",
    },
    {
      title: "Logout",
      icon: () => (<img src={logout} alt="Logout Icon" className={`${isCollapsed ? "h-5 w-5" : "h-4 w-4"}`} />),
      href: "/logout",
      className: "text-[#F80D38] hover:text-red-600",
    },
  ]


  const getIcon = () => {
    if (isMobile) {
      return theme === 'dark' ? mentalIconMobileDark : mentalIconMobileLight
    }
    return isCollapsed ? (theme === 'dark' ? mentalIconMobileDark : mentalIconMobileLight) : (theme === 'dark' ? mentalIconDark : mentalIcon)
  }

  const sidebarContent = (
    <Sidebar className={cn(`transition-all overflow-hidden md:relative rounded-3xl m-3 max-md:mx-1 max-sm:mx-0 w-44 min-h-[95vh] max-md:h-screen max-xs:pb-5 border-[#d2d2d2ea] dark:border-[#3D3D3D] border tracking-wider flex flex-col  ${className}`, theme === 'dark' ? 'bg-background' : 'bg-zinc-50')}>
      <SidebarHeader className="border-b dark:border-[#2f3339]  h-24">
        <div className={cn("flex items-center justify-between", isCollapsed ? 'gap-0 flex-col' : 'md:gap-7 gap-1')}>
          <Link to={"/home"} className="flex items-center justify-between px-1 relative z-[52]">
            <img
              src={getIcon()}
              alt="Mental Verse"
              className={cn("logo fill-mental transition", isCollapsed ? 'h-12 w-7' : 'md:h-20 md:w-48 h-16 w-32')}
            />
          </Link>
          <Separator orientation="vertical" className={`w-px h-5 bg-[#2f3339] ${isCollapsed ? 'hidden' : 'block'}`} />
          <SidebarTrigger className={cn("flex items-center justify-center hover:-translate-y-1  rounded-lg transition-all duration-300 hover:border-t hover:border-b", isCollapsed ? 'w-6 h-6' : 'w-7 h-7', theme === 'dark' ? 'bg-background hover:bg-black hover:shadow-[0_2px_0_0_rgba(204,255,0,0.811)] hover:border-[#18E614]' : 'bg-white hover:border-black hover:shadow-[0_2px_0_0_rgba(0,0,0,0.811)]')} />
        </div>
      </SidebarHeader>
      <SidebarContent className="flex flex-col gap-2 md:gap-2 mt-1">
        <SidebarMenu className="flex gap-2 md:gap-3">
          {mainNavItems.map((item: { title: string; icon: React.FC; href: string; badge?: string }) => (
            <SidebarMenuItem key={item.href} className={cn("h-full w-full", theme === 'dark' ? 'hover:bg-[#DFE0E2]' : 'hover:bg-[#000]', location.pathname === item.href && (theme === 'dark' ? 'bg-[#DFE0E2]' : 'bg-[#000]'))}>
              <SidebarMenuButton
                asChild
                isActive={location.pathname === item.href}
                tooltip={isCollapsed ? item.title : undefined}
                className="hover:text-[#18E614] brightness-90"
              >
                <Link
                  to={item.href}
                  className={`flex items-center md:gap-6 ${location.pathname === item.href ? 'text-[#18E614] font-medium' : (theme === 'dark' ? 'text-white' : 'text-black')}`}
                >
                  <item.icon className={`${isCollapsed ? "h-5 w-5" : "h-4 w-4"}`} />
                  {/* {isCollapsed ? <span>{item.title}</span>} */}
                  {!isCollapsed && <span>{item.title}</span>}
                  {item.badge && ( 
                    <span className={`ml-auto flex h-5 w-5 items-center justify-center rounded-full bg-[#F80D38] text-xs text-white ${isCollapsed ? 'hidden' : 'flex'}`}>
                      {item.badge}
                    </span>
                  )}
                </Link>
              </SidebarMenuButton>
            </SidebarMenuItem>
          ))}
        </SidebarMenu>

        <div className="px-4 py-2">
          {!isCollapsed && <div className="text-xs font-semibold uppercase text-muted-foreground">Account</div>}
        </div>

        <SidebarMenu>
          {accountNavItems.map((item) => (
            <SidebarMenuItem key={item.href} className={cn("h-full w-full", theme === 'dark' ? 'hover:bg-[#DFE0E2]' : 'hover:bg-[#000]', location.pathname === item.href && (theme === 'dark' ? 'bg-[#DFE0E2]' : 'bg-[#000]'))}>
              {/* // <SidebarMenuItem key={item.href} className={cn(`h-full w-full ${theme === 'dark' ? 'hover:bg-[#DFE0E2]' : 'hover:bg-[#DFE0E2]'} ${location.pathname === item.href && (theme === 'dark' ? 'bg-[#DFE0E2]' : 'bg-[#DFE0E2]')}`)}> */}
              <SidebarMenuButton
                asChild
                isActive={location.pathname === item.href}
                tooltip={isCollapsed ? item.title : undefined}
                className="hover:text-[#18E614] brightness-90"
              >
                <Link
                  to={item.href}
                  className={cn(`flex items-center md:gap-6 ${location.pathname === item.href ? 'text-[#18E614] font-medium' : (theme === 'dark' ? 'text-white' : 'text-black')}`, item.className)}
                >
                  <item.icon />
                  {!isCollapsed && <span>{item.title}</span>}
                </Link>
              </SidebarMenuButton>
            </SidebarMenuItem>
          ))}
        </SidebarMenu>
      </SidebarContent>
      <SidebarFooter className="border-t dark:border-[#2f3339] p-4 pl-6 tracking-wide flex flex-row gap-5 h-fit">
        <Vibrate className="self-center text-[#18E614]" />
        {!isCollapsed && (
          <div className="flex flex-col gap-2 justify-items-end">
            <div className="text-sm font-semibold text-[#F80D38]">Emergency Hotlines:</div>
            <div className="flex flex-col justify-between ml-2">
              <div className="text-xs text-muted-foreground">+234 812 345 6789</div>
              <div className="text-xs text-muted-foreground">+234 812 345 6789</div>
            </div>
          </div>
        )}
      </SidebarFooter>
    </Sidebar>
  )

  return sidebarContent
}
