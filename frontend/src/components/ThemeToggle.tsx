"use client"

import { Moon, Sun } from "lucide-react"
import { useTheme } from "@/components/theme-provider"
import { Button } from "@/components/ui/Button"
import { cn } from "@/lib/utils"

export function ThemeToggle() {
  const { theme, setTheme } = useTheme()

  return (
    <Button
      variant="ghost"
      size="icon"
      className={cn("relative h-8 w-8 md:h-10 md:w-10 flex items-center justify-center hover:-translate-y-1 rounded-lg transition-all duration-300 hover:border-t hover:border-b", theme === 'dark' ? 'bg-background hover:bg-black hover:shadow-[0_2px_0_0_rgba(204,255,0,0.811)] hover:border-lime-400' : 'bg-white hover:border-black hover:shadow-[0_2px_0_0_rgba(0,0,0,0.811)]')}
      onClick={() => setTheme(theme === "light" ? "dark" : "light")}
    >
      <Sun className={cn(
        "h-4 w-4 md:h-5 md:w-5 transition-all",
        theme === 'dark' ? 'rotate-90 scale-0' : 'rotate-0 scale-100'
      )} />
      <Moon className={cn(
        "absolute h-4 w-4 md:h-5 md:w-5 transition-all",
        theme === 'dark' ? 'rotate-0 scale-100' : 'rotate-90 scale-0'
      )} />
      <span className="sr-only">Toggle theme</span>
    </Button>
  )
} 