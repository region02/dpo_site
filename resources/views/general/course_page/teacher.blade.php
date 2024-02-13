<section class="teachers mt-28">
    <div class="gradient-border px-0 sm:px-[10%] pt-[30px] pb-[40px] relative
                    rounded-[15px] backdrop-blur-[2px] bg-[#ffffff14]
                     flex flex-col gap-[35px]">
        <h2 class="text-[40px] text-[#e5e5e5] font-[700] uppercase text-center ">
            Преподаватель
        </h2>
        <div class="teacher__profile flex flex-col px-4 sm:px-[25px]">
            <div class="teacher__title flex flex-row gap-[20px] items-center ">
                <div class="teacher__avatar w-[129px] h-[129px]">
                    <img class="max-w-full h-full" src="{{url("storage/$teacher->avatar")}}" alt="">
                </div>
                <h4 class="text-[#fff] text-[20px] sm:text-[25px] font-[700] ">
                    {{explode(" ",$teacher->name)[0]}} <br>
                    {{explode(" ",$teacher->name)[1]}} <br>
                    {{explode(" ",$teacher->name)[2]}}</h4>
            </div>
            <div class="teacher__content">
                <ul class="timetable__container mt-8">

                    <li class="timetable__item relative border-t border-[#dbdbdb33] " x-data="{ selected: null, IsVisible: true }">

                        <button class="timetable__head w-full px-4 sm:px-8 py-2 sm:py-6 text-left" type="button" @click="selected !== 1 ? selected = 1 : selected = null; IsVisible = !IsVisible">
                            <div class="flex items-center justify-between">
                                <h4 x-bind:style="IsVisible ? 'font-size:20px' : 'font-size:25px' "  class="text-[#fff]  font-[700] uppercase transition-[font-size] duration-150 ">
                                    Должность
                                </h4>
                                <span class="ico-plus">
                <img x-bind:src="IsVisible ? '{{url('img/icons/course_collapse_plus.svg')}}' : '{{url('img/icons/course_collapse_minus.svg')}}'" alt="">
            </span>
                            </div>
                        </button>

                        <div class="timetable__body relative overflow-hidden transition-all max-h-0  duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                            <div class="px-6 sm:px-20 py-4 sm:pt-4 sm:pb-10">
                                <ul class="timetable__list  leading-[170%] text-[#fff] text-[14px] sm:text-[16px] font-[200] w-[80%] flex flex-col gap-[10px]">
                                    <li class="timetable__list-item flex flex-row gap-[10px] items-center ">
                                        <img src="{{url('img/icons/info-dots.svg')}}" alt="">
                                        <h5>
                                            {{$teacher->position}}
                                        </h5>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </li>

                    <li class="timetable__item relative border-t border-[#dbdbdb33] " x-data="{ selected: null, IsVisible: true }">

                        <button class="timetable__head w-full px-4 sm:px-8 py-2 sm:py-6 text-left" type="button" @click="selected !== 1 ? selected = 1 : selected = null; IsVisible = !IsVisible">
                            <div class="flex items-center justify-between">
                                <h4 x-bind:style="IsVisible ? 'font-size:20px' : 'font-size:25px' "  class="text-[#fff]  font-[700] uppercase transition-[font-size] duration-150  ">
                                    О себе
                                </h4>
                                <span class="ico-plus w-[40px] sm:w-[50px]">
                <img width="100%" x-bind:src="IsVisible ? '{{url('img/icons/course_collapse_plus.svg')}}' : '{{url('img/icons/course_collapse_minus.svg')}}'" alt="">
            </span>
                            </div>
                        </button>

                        <div class="timetable__body relative overflow-hidden transition-all max-h-0  duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                            <div class="px-6 sm:px-20  py-4 sm:pt-4 sm:pb-10">
                                <ul class="timetable__list  leading-[170%] text-[#fff] text-[14px] sm:text-[16px] font-[200] w-[90%] flex flex-col gap-[10px]">
                                    @foreach($teacher->about as $about)
                                        <li class="timetable__list-item flex flex-row gap-[10px] items-start ">
                                            <img class="mt-[6px]" src="{{url('img/icons/info-dots.svg')}}" alt="">
                                            <div class="[&_ul]:list-disc
                                                        [&_ul]:marker:text-[#fff]
                                                        [&_ul]:ml-6
                                                        [&_ul]:leading-[170%]
                                                        [&_ul]:text-[#fff]
                                                        [&_ul]:text-[14px] sm:[&_ul]:text-[16px]
                                                        [&_ul]:font-[200]">

                                                        {!! $about['content'] !!}
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
