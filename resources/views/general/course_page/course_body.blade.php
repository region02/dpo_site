<main @if(session('status') == 'registered') x-data="{ modalOpen: true }" @else x-data="{ modalOpen: false }"
      @endif class="px-5 sm:px-8 xl:px-44 pt-5 [&_h2]:text-[22px] xs:[&_h2]:text-[30px] sm:[&_h2]:text-[40px]">
    <a href="{{ route('course.all') }}" class="flex gap-[10px]">
        <img src="{{url('img/icons/return_arrow-white.svg')}}">
        <h5 class="text-[#E5E5E5] text-[16px] 3xl:text-[21px] font-[400]">все курсы</h5>
    </a>
    <div class="course-container pt-5 sm:pt-20">
        <div class="course__profile flex flex-col px-0 xl:px-10 gap-[30px]">
            <div class="profile__head flex flex-col gap-2 justify-between xl:flex-row">
                <div
                    class="profile__title flex flex-col gap-[24px] items-center xl:items-start max-w-full   xl:max-w-[calc(100%-305px)] ">
                    <a href="{{ route('course.all') }}?filter_type[]={{ $course->courseType->id }}" class=" w-[fit-content] text-[#E5E5E5] text-[12px] sm:text-[18px] 3xl:text-[23px]
                                font-[500] tracking-[.9px] rounded-[12px]
                                bg-gradient-to-r from-[#FF512F] to-[#DD2476]
                                px-[15px] py-[7px] sm:px-[20px] sm:py-[9px]
                                flex items-center text-center xl:text-left
                                "
                       style="background: linear-gradient(90deg, {{$course->courseType->color_from}} 0%, {{$course->courseType->color_to}} 100%);">
                        {{$course->courseType->text}}
                    </a>
                    <h2 class="uppercase text-[#fff] text-[17px] sm:text-[30px] 3xl:text-[40px] text-center xl:text-left font-[600] ">
                        {{$course->title}}
                    </h2>
                    <h5 class="card__subtitle text-[#fff] text-[20px] 3xl:text-[25px] text-center xl:text-left font-[400]">
                        {{$course->subtitle}}
                    </h5>
                    <div class="course__reg w-full flex justify-start">
                        <button @click="modalOpen=true" class="reg__link px-[50px] py-[15px] rounded-[15px]
                                            border-solid border-[2px] border-[#e5e5e5]"
                                style="background: linear-gradient(90deg, {{$course->courseType->color_from}} 0%, {{$course->courseType->color_to}} 100%);">
                            <h4 class="card__subtitle text-[#fff] text-[20px] 3xl:text-[25px] font-[400] uppercase">
                                Записаться
                            </h4>
                        </button>
                    </div>

                </div>
                <div class="course__photo w-[305px] aspect-square hidden xl:flex   ">
                    <img class="h-[100%] max-w-[100%] rounded-[20px] object-cover" src="/storage/{{$course->avatar}}"
                         alt="">
                </div>
            </div>

            <div class="gradient-border bg-[#e5e5e514] grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4
                        rounded-[15px] justify-items-center gap-8
                         px-[25px] 3xl:px-[15px] py-[20px] relative">
                <div
                    class=" profile__item relative w-full flex justify-center sm:justify-start xl:justify-center after:hidden xl:after:flex">
                    <div class=" flex flex-col gap-2 px-7 3xl:px-6 relative items-center sm:items-start">
                        <img width="46px" src="{{url('img/icons/course_calendar.svg')}}">
                        <h5 class="card__subtitle text-[#fff] text-[20px] 3xl:text-[25px] font-[600]">
                            Старт
                        </h5>
                        <h5 class="card__subtitle text-[#fff] text-[16px] 3xl:text-[20px] font-[200] text-center sm:text-start">
                            @if(!is_null($course->start_at))
                                {{$course->start_at->translatedFormat('j F ')}}
                            @else
                                Идет прием заявок
                            @endif
                        </h5>
                    </div>
                </div>

                <div
                    class="profile__item relative w-full flex justify-center sm:justify-start xl:justify-center after:hidden xl:after:flex">
                    <div class="  flex flex-col gap-2 px-7 3xl:px-6 relative items-center sm:items-start">
                        <img width="46px" src="{{url('img/icons/course_time.svg')}}">
                        <h5 class="card__subtitle text-[#fff] text-[20px] 3xl:text-[25px] font-[600]">
                            Длительность
                        </h5>
                        <h5 class="card__subtitle text-[#fff] text-[16px] 3xl:text-[20px] font-[200] text-center sm:text-start">
                            {{$course->duration}}
                        </h5>
                    </div>
                </div>

                <div
                    class="profile__item relative w-full flex justify-center sm:justify-start xl:justify-center after:hidden xl:after:flex">
                    <div class="profile__item flex flex-col gap-2 px-7 3xl:px-6 relative items-center sm:items-start">
                        <img width="46px" src="{{url('img/icons/course_hat.svg')}}">
                        <h5 class="card__subtitle text-[#fff] text-[20px] 3xl:text-[25px] font-[600]">
                            Нагрузка
                        </h5>
                        <h5 class="card__subtitle text-[#fff] text-[16px] 3xl:text-[20px] font-[200] text-center sm:text-start">
                            {{$course->load}}
                        </h5>
                    </div>
                </div>

                <div
                    class="profile__item relative w-full flex justify-center sm:justify-start xl:justify-center after:hidden xl:after:flex">
                    <div class="profile__item flex flex-col gap-2 px-7 3xl:px-6 relative items-center sm:items-start">
                        <img width="46px" src="{{url('img/icons/course_book.svg')}}">
                        <h5 class="card__subtitle text-[#fff] text-[20px] 3xl:text-[25px] font-[600]">
                            Формат
                        </h5>
                        <h5 class="card__subtitle text-[#fff] text-[16px] 3xl:text-[20px] font-[200] text-center sm:text-start">
                            {{$course->format}}
                        </h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <section class="course-about mt-12">
        <h2 class="text-[30px]  3xl:text-[35px] text-[#e5e5e5] font-[700] uppercase mb-6">для кого?</h2>
        <div class="c-about-puzzle__container ">
            @foreach($course->section_who as $item_who)
                <div class="gradient-border c-about__item_2-disabled relative  px-[30px] py-[20px]
                            h-auto backdrop-blur-[2px] bg-[#ffffff14] rounded-[15px] flex flex-col gap-2">
                    <h4 class="text-[#fff] text-[16px] sm:text-[25px] 3xl:text-[28px]  font-[700] leading-[1.4rem] sm:leading-[2rem]">{!!$item_who['title']!!}</h4>
                    <h5 class="text-[#fff] text-[14px] sm:text-[18px] 3xl:text-[21px]  font-[400] ">{!! $item_who['subtitle'] !!}</h5>
                </div>
            @endforeach


        </div>
    </section>
    <section class="course-about mt-12">
        <h2 class="text-[30px]  3xl:text-[40px]  text-[#e5e5e5] font-[700] uppercase mb-6">О чем курс?</h2>
        <div class="c-about__container max-w-[100%]">
            <ul class="timetable__list  leading-[170%] text-[#fff] text-[16px] font-[200]  flex flex-col gap-[12px]">

                @foreach($course->section_about_what as $about_what_point)
                    <li class="timetable__list-item flex flex-row gap-[10px] items-center ">
                        <img class="w-[16px] sm:w-[22px] h-[16px] sm:h-[22px]" src="{{url('img/icons/info-dots.svg')}}"
                             alt="">
                        <h5 class="text-[16px] sm:text-[20px] 3xl:text-[25px] ">
                            {{$about_what_point["point"]}}
                        </h5>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="classes mt-28">
        <div class="gradient-border px-[25px] py-[20px] relative
                    rounded-[15px] backdrop-blur-[2px] bg-[#ffffff14]
                     flex flex-col gap-[35px]">
            <h2 class="text-[40px] text-[#e5e5e5] font-[700] uppercase text-center ">
                Результат
            </h2>
            <div class="c-result__container grid grid-cols-1 md:grid-cols-2  gap-x-[20px] gap-y-[40px] py-[15px] px-[7%] 2xl:px-[11%] 3xl:px-[5%]  ">


                @foreach($course->section_result as $num => $result_item)
                    <div class="c-result__item flex flex-col gap-[10px]">
                        <div class="c-result__head flex gap-[10px] items-center ">
                            <img src="{{url('img/icons/course_hat_blue.svg')}}" alt="">
                            <span class="text-[35px] 3xl:text-[40px]  text-[#e5e5e5] font-[700] uppercase">№{{$num+1}}</span>
                        </div>
                        <div class="c-result__body">
                            <h5 class="text-[#fff] text-[16px] sm:text-[20px] 3xl:text-[25px]  font-[200]">
                                {{$result_item['content']}}
                            </h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="course-about mt-12">
        <h2 class="text-[30px] 3xl:text-[35px] text-[#e5e5e5] font-[700] uppercase mb-6">КАК ПРОХОДЯТ ЗАНЯТИЯ?
        </h2>
        <div class="c-about__container max-w-[100%]">
            <ul class="timetable__list  leading-[170%] text-[#fff] text-[16px] font-[200]  flex flex-col gap-[12px]">



                @foreach($course->section_how_it_goes as $item)

                    <li class="timetable__list-item flex flex-row gap-[10px] items-center ">
                        <img class="w-[16px] sm:w-[22px] h-[16px] sm:h-[22px]" src="{{url('img/icons/info-dots.svg')}}"
                             alt="">
                        <h5 class="text-[16px] sm:text-[20px] 3xl:text-[25px]">
                            {!!   $item["point"]  !!}
                        </h5>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
{{--    <section class="classes mt-28">--}}
{{--        <div class="gradient-border px-[25px] py-[20px] relative--}}
{{--                    rounded-[15px] backdrop-blur-[2px] bg-[#ffffff14]--}}
{{--                     flex flex-col gap-[35px]">--}}
{{--            <h2 class="text-[40px] text-[#e5e5e5] font-[700] uppercase text-center ">--}}
{{--                Как проходят занятия?--}}
{{--            </h2>--}}
{{--            <div class="classes__body grid  grid-cols-1 md:grid-cols-3 px-0 sm:px-[25px] [&_strong]:font-[700]">--}}
{{--                <div class="c-result__item flex flex-col gap-[10px]--}}
{{--                            px-0 sm:px-[25px] pb-[35px] pt-[20px]">--}}
{{--                    <div class="c-result__head flex gap-[10px] items-end ">--}}
{{--                        <img src="{{url('img/icons/course_hat_blue.svg')}}" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="c-result__body">--}}
{{--                        <h5 class="text-[#fff] text-[16px] font-[200] ">--}}
{{--                            {!!$course->section_how_it_goes[0]['first']!!}--}}
{{--                        </h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="c-result__item flex flex-col gap-[10px]--}}
{{--                            px-0 sm:px-[25px] pb-[35px] pt-[20px]">--}}
{{--                    <div class="c-result__head flex gap-[10px] items-end ">--}}
{{--                        <img src="{{url('img/icons/course_chat_blue.svg')}}" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="c-result__body">--}}
{{--                        <h5 class="text-[#fff] text-[16px] font-[200]">--}}
{{--                            {!! $course->section_how_it_goes[0]['second'] !!}--}}
{{--                        </h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="c-result__item flex flex-col gap-[10px]--}}
{{--                            px-0 sm:px-[25px] pb-[35px] pt-[20px]">--}}
{{--                    <div class="c-result__head flex gap-[10px] items-end ">--}}
{{--                        <img src="{{url('img/icons/course_cassette_blue.svg')}}" alt="">--}}

{{--                    </div>--}}
{{--                    <div class="c-result__body">--}}
{{--                        <h5 class="text-[#fff] text-[16px] font-[200]">--}}
{{--                            {!! $course->section_how_it_goes[0]['third'] !!}--}}
{{--                        </h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="timetable mt-12 sm:mt-28">
        <h2 class="text-[30px] 3xl:text-[35px] text-[#e5e5e5] font-[700] uppercase  ">
            Расписание
        </h2>
        <ul class="timetable__container mt-8">
            @foreach($course->section_schedule as $accord)
                <li class="timetable__item relative border-t border-[#dbdbdb33] "
                    x-data="{ selected: null, IsVisible: true }">

                    <button class="timetable__head w-full px-4 py-6 text-left" type="button"
                            @click="selected !== 1 ? selected = 1 : selected = null; IsVisible = !IsVisible">
                        <div class="flex items-center justify-between">
                            <h4 x-bind:class="IsVisible ? 'text-[20px] 3xl:text-[25px]' : 'text-[25px] 3xl:text-[30px]' "
                                class="text-[#fff]  font-[700] uppercase transition-[font-size] duration-150 w-[80%] sm:w-full ">
                                {{$accord['title']}}
                            </h4>
                            <span class="ico-plus w-[50px] sm:w-[50px]">
                <img width="100%"
                     x-bind:src="IsVisible ? '{{url('img/icons/course_collapse_plus.svg')}}' : '{{url('img/icons/course_collapse_minus.svg')}}'"
                     alt="">
            </span>
                        </div>
                    </button>

                    <div class="timetable__body relative overflow-hidden transition-all max-h-0  duration-700" style=""
                         x-ref="container1"
                         x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                        <div class="px-6 md:px-20 pt-4 pb-10">
                            <ul class="timetable__list  leading-[170%] text-[#fff] text-[16px] 3xl:text-[25px] font-[200] w-full sm:w-[80%] flex flex-col gap-[10px]">
                                @foreach($accord['content'] as $content)
                                    <li class="timetable__list-item flex flex-row gap-[10px] 3xl:gap-[15px] items-baseline   ">
                                        <img src="{{url('img/icons/info-dots.svg')}}" alt="">
                                        <h5>
                                            {{$content['li']}}
                                        </h5>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </li>
            @endforeach
        </ul>
    </section>
    @foreach($course->teacherAssoc as $teacherAssoc)
        @include('general.course_page.teacher',['teacher' => $teacherAssoc->teacher])
    @endforeach


    <section class="cost mt-12 sm:mt-28">
        <div class="gradient-border px-[25px] py-[20px] relative
                    rounded-[15px] backdrop-blur-[2px] bg-[#ffffff14]
                     flex flex-col gap-[35px]">
            <h2 class="text-[40px] 3xl:text-[45px] text-[#e5e5e5] font-[700] uppercase  ">
                Стоимость обучения
            </h2>
            <div class="cost__container flex flex-col gap-[10px]">
                <h4 class="text-[#fff]  font-[700] uppercase text-[25px] 3xl:text-[30px]  ">
                    {{$course->formattedCost()}} ₽
                </h4>
                <ul class="list-disc marker:text-[#fff] ml-6 leading-[170%]
                                                        text-[#fff] text-[16px] 3xl:text-[25px] font-[200]">
                    @foreach($course->cost_description as $cost_point)
                        <li>
                            <h5>
                                {{$cost_point["point"]}}
                            </h5>
                        </li>
                    @endforeach

                </ul>
                <div
                    @keydown.escape.window="modalOpen = false"
                    :class="{ 'z-40': modalOpen }" class="relative w-auto h-auto">
                    <button @click="modalOpen=true" class="reg__link w-full sm:w-[fit-content] px-[50px] py-[15px] rounded-[15px]
                                                border-solid border-[2px] border-[#e5e5e5] my-6 "
                            style="background: linear-gradient(90deg, {{$course->courseType->color_from}} 0%, {{$course->courseType->color_to}} 100%);">
                        <h4 class="card__subtitle text-[#fff] text-[20px] 3xl:text-[25px] font-[400] uppercase">
                            Записаться
                        </h4>
                    </button>
                    <template x-teleport="body">
                        <div x-show="modalOpen"
                             class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
                             x-cloak>
                            <div x-show="modalOpen"
                                 x-transition:enter="ease-out duration-300"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100"
                                 x-transition:leave="ease-in duration-300"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0"
                                 @click="modalOpen=false"
                                 class="absolute inset-0 w-full h-full  backdrop-blur-md bg-opacity-70"></div>
                            @if(session('status') == 'registered')
                                <div x-show="modalOpen"
                                     x-trap.inert.noscroll="modalOpen"
                                     x-transition:enter="ease-out duration-300"
                                     x-transition:enter-start="opacity-0 -translate-y-2 sm:scale-95"
                                     x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                     x-transition:leave="ease-in duration-200"
                                     x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                     x-transition:leave-end="opacity-0 -translate-y-2 sm:scale-95"
                                     class="gradient-border relative w-full rounded-[20px] p-10 bg-[#1D4A81] mx-[1.5rem]
                                        sm:max-w-fit flex flex-col gap-[40px]">
                                    <div class="flex items-center justify-between gap-[30px] pb-3">
                                        <h4 class="card__subtitle text-[#fff] text-[20px] 3xl:text-[25px] font-[700] ">Отправлено</h4>
                                        <div class="gradient-border before:p-[5px] relative w-12 h-12">
                                            <button @click="modalOpen=false"
                                                    class="border-none absolute flex items-center justify-center text-[#E5E5E5] rounded-[15px]  border-[#f5f5f5] border-[2px] focus-visible:ring-0 focus-visible:outline-0">
                                                <svg class="w-12 h-12" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 24 24" stroke-width="2.0" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M6 18L18 6M6 6l12 12"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-center">
                                        <lord-icon
                                            class="max-w-[250px] max-h-[250px] w-[160px] h-[160px] sm:w-[250px] sm:h-[250px]"
                                            src="https://cdn.lordicon.com/dangivhk.json"
                                            trigger="hover"
                                            stroke="light"
                                            colors="primary:#121331,secondary:#da22ff"
                                        >
                                        </lord-icon>
                                        <h4 class="card__subtitle text-[#fff] text-[20px] 3xl:text-[25px] text-center font-[400]">Ваша
                                            заявка поступила к нам на обработку</h4>
                                        <h4 class="card__subtitle text-[#fff] text-[20px] 3xl:text-[25px] text-center font-[400]">Скоро
                                            мы с вами свяжемся</h4>
                                    </div>
                                </div>
                            @else
                                <form action="{{route('course.user.put',$course)}}" method="post" x-show="modalOpen"
                                      x-trap.inert.noscroll="modalOpen"
                                      x-transition:enter="ease-out duration-300"
                                      x-transition:enter-start="opacity-0 -translate-y-2 sm:scale-95"
                                      x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                      x-transition:leave="ease-in duration-200"
                                      x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                      x-transition:leave-end="opacity-0 -translate-y-2 sm:scale-95"
                                      class="gradient-border relative w-full rounded-[20px] p-10 bg-[#1D4A81] mx-[1.5rem]
                                            sm:max-w-fit  flex flex-col gap-[40px]">
                                    @csrf
                                    @method('PUT')
                                    <div class="flex items-center justify-between gap-[30px] pb-3">
                                        <h2 class="uppercase font-sans text-[#E5E5E5]
                                                   text-[1.5rem] font-[800] tracking-wider leading-[1.975rem] sm:leading-[1.975rem]
                                                   max-[500px]:text-[1.5rem] max-[500px]:font-[700] max-[500px]:tracking-wider
                                                   sm:text-[1.5rem] sm:font-[800] sm:tracking-wider
                                                   md:text-[2.0rem] md:font-[800] md:tracking-wider
                                                   lg:text-[2.3rem] lg:font-[800] lg:tracking-wider
                                                   xl:text-[2.5rem] xl:font-[800] xl:tracking-wider
                                                   3xl:text-[2.8rem]">Запись на
                                            курс</h2>
                                        <div class="relative w-12 h-12">
                                            <button @click="modalOpen=false"
                                                    class="absolute  flex items-center justify-center  text-[#E5E5E5] rounded-[15px] border-solid border-[#f5f5f5] border-[2px] ">
                                                <svg class="w-12 h-12" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M6 18L18 6M6 6l12 12"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-[30px]">

                                        <div class=" relative ">
                                            <label for="name"
                                                   class=" absolute inline-flex mb-2 text-sm 3xl:text-lg font-medium text-[#fff] bg-[#012F66] rounded-[5px] px-1 translate-y-[-50%] translate-x-[5px]">ФИО</label>
                                            <input type="text" id="name" name="name" autocomplete="full-name"
                                                   class="bg-transparent border border-[#fff] text-[#fff] text-sm 3xl:text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-[60px] p-2.5 "
                                                   required>
                                        </div>
                                        <div class=" relative  ">
                                            <label for="phone"
                                                   class=" absolute inline-flex mb-2 text-sm 3xl:text-lg font-medium text-[#fff] bg-[#012F66] rounded-[5px] px-1 py-[2px] translate-y-[-50%] translate-x-[5px] border-none">телефон</label>
                                            <input type="tel" maxlength=11 id="phone" name="phone" autocomplete="phone"
                                                   class="bg-transparent border border-[#fff] text-[#fff] text-sm 3xl:text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-[60px] p-2.5 "
                                                   required>
                                        </div>
                                        <div class=" relative  ">
                                            <label for="email"
                                                   class=" absolute inline-flex mb-2 text-sm 3xl:text-lg font-medium text-[#fff] bg-[#012F66] rounded-[5px] px-1 py-[2px] translate-y-[-50%] translate-x-[5px] border-none">почта</label>
                                            <input type="email" id="email" name="email" autocomplete="email"
                                                   class="bg-transparent border border-white text-white text-sm 3xl:text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-[60px] p-2.5"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="flex flex-col-reverse sm:flex-row relative h-[52px] ">
                                        <button type="submit"
                                                @if(session('status') == 'registered') @click="modalOpen=false"
                                                @endif class=" absolute text-white  w-full bg-gradient-to-r from-[#DA22FF] to-[#9733EE]
                                                               px-5 py-3.5 text-center rounded-[20px] mx-auto lg:mx-0 text-[20px] 3xl:text-[25px] ">
                                            Отправить
                                        </button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </section>

</main>
