import React from 'react';
import { Bar } from 'react-chartjs-2';
import { chartOptions, chartData } from '@/components/ui/chartConfig';
import { ArrowUpFromDot } from 'lucide-react';
import { useTheme } from "@/components/theme-provider"

interface prop {
  className?: string;
}

export const StackedBarLineChart: React.FC<prop> = ({ className }) => {

  const { theme } = useTheme()

  return (
    <div className={`rounded-3xl shadow-md pt-2 h-fit relative overflow-hidden border ${className}`}>
      <div className='absolute p-5 max-lg:relative max-md:absolute max-lg:ml-3'>
        <h2 className="uppercase font-bold text-xs max-lg:text-lg">Health Index</h2>
        <div className='flex items-center max-lg:mt-12'>
          <span className={`text-[#18E614] text-4xl max-lg:text-[50px] font-bold ${theme === 'dark' ? 'text-white' : 'text-[#18E614]'}`} >75%</span>
          <ArrowUpFromDot className="text-[#F80D38] w-10 h-10 font-extrabold text-3xl" />
        </div>
        <div className='flex flex-col items-start mt-3'>
          <span className={`text-[10px] max-lg:text-[18px] pb-0 ${theme === 'dark' ? 'text-white' : 'text-gray-600'}`}>Patience health rate</span>
          <span className={`text-[10px] max-lg:text-[18px] ${theme === 'dark' ? 'text-white' : 'text-gray-600'}`}>from Jan to Dec.</span>
        </div>
      </div>
      <div className="h-64 max-md:mt-32 mt-10 lg:mt-[24px]">
        <Bar options={chartOptions} data={chartData} className='h-[10rem] -m-8 -mt-[0px]' />
      </div>
    </div>
  );
};
