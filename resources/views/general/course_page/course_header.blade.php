<nav class=" bg-white bg-opacity-10 border-b-[1px] border-[#ffffff] border-opacity-10 py-4">
    <div class="max-w-screen-2xl w-full mx-auto flex  justify-between items-center gap-x-2 md:gap-x-0  px-3 lg:px-24">
        <a href="https://rudn.ru/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ url('img/icons/logo_white_rudn.svg') }}" class="h-11 block" alt="Логотип РУДН" />
        </a>
        <a href="https://phil.rudn.ru/o_kafedre_ija" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ url('img/icons/logo_white_cafedra.svg') }}" class="h-11 block" alt="Логотип РУДН" />
        </a>
        <a href="{{route('course.all')}}" class="uppercase font-sans text-white text-xl font-bold
                                             tracking-wider hidden  justify-center md:flex  ">
            курсы
        </a>
    </div>
    <a href="{{route('course.all')}}" class="uppercase font-sans text-white text-xl font-bold
                                             tracking-wider flex justify-center md:hidden pt-[15px] ">
        курсы
    </a>
</nav>

