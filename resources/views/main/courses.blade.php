<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @vite('resources/js/courses.js')
    @vite('resources/js/app.js')

    @stack('scripts')
    <!-- resources/views/welcome.blade.php -->


</head>
<body class='bg-[#F4F4F4]'
      x-data="{ resetFilters:
      @if(empty($old_values))
      false
      @elseif(count($old_values) == 1 and array_key_exists('sort',$old_values))
      false
      @else true
      @endif }">
    @include('general/header_white ')
    <main class="w-full mt-3 sm:mt-10 px-3 lg:px-20">
        <a href="{{route('index.show')}}" class="flex gap-[10px]">
            <img src="{{url('img/icons/return_arrow.svg')}}">
            <h5 class="text-[#0279C1] text-[16px] font-[400]">вернуться назад</h5>
        </a>
        <div class="courses__hat flex flex-col sm:flex-row justify-between items-start sm:items-center py-3 sm:py-10">
            <h1 class="text-[#24272B] uppercase font-sans
                        text-[1.7rem] font-[700] tracking-wider leading-[2.975rem] sm:leading-[1.975rem]
                        max-[500px]:text-[1.5rem] max-[500px]:font-[700] max-[500px]:tracking-wider
                        sm:text-[1.7rem]  sm:tracking-wider
                        md:text-[1.7rem]  md:tracking-wider
                        lg:text-[1.7rem]  lg:tracking-wider
                        xl:text-[2.7rem]  xl:tracking-wider">все курсы</h1>

            <div class="select-party flex flex-row gap-2 sm:gap-6">

                <div class="filter flex items-center">
                    <button id="open-modal"  class="filter-bt w-[105px] rounded-[8px] bg-[#d4d5d952] flex flex-row gap-[10px] items-center p-[10px] xl:hidden">
                        <img src="{{url('img/icons/filter.svg')}}">
                        <h5 class="text-[#24272B] text-sm ">Фильтры</h5>
                    </button>

                </div>
                <select form="filter-form"
                        id="countries"
                        name="sort"
                        x-on:change="document.getElementById('filter-form').submit()"
                        class="bg-[#d4d5d952] border-none  text-[#24272B] text-sm rounded-[8px]
                                              focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                              dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                              dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                              max-w-[280px]">
                    <option
                        @isset($old_values['sort'])
                            @if($old_values['sort'] === '') selected @endif
                        @else
                            selected
                        @endisset
                        value="">Порядок: по умолчанию</option>
                    <option
                        @isset($old_values['sort'])
                            @if($old_values['sort'] === 'cost') selected @endif value="cost">Цена: по возрастанию</option>
                        @endisset
                    <option
                        @isset($old_values['sort'])
                            @if($old_values['sort'] === '-cost') selected @endif
                        @endisset
                        value="-cost">Цена: по убыванию</option>
                    <option
                        @isset($old_values['sort'])
                            @if($old_values['sort'] === 'title') selected @endif
                        @endisset
                        value="title">Названия: А–Я</option>
                    <option
                        @isset($old_values['sort'])
                            @if($old_values['sort'] === '-title') selected @endif
                        @endisset
                        value="-title">Названия: Я–А</option>
                </select>
            </div>

        </div>
        <div class="courses__container flex flex-row justify-between gap-0 xl:gap-24">
            <form id="filter-form" method="GET" action="">
            <div class="courses__sidebar hidden xl:flex flex-col gap-10">
                <div class="sidebar__type">
                    <h5 class="type_title text-[#24272B] text-[22px] font-[700] pb-5">Тип</h5>
                    <div class="type__checkbox-party flex flex-col gap-3">
                        @foreach($types as $type)
                            <div class="flex items-center me-4">
                                <input id="training-checkbox-{{$type->id}}"
                                       onclick="document.getElementById('training-checkbox-modal-{{$type->id}}').checked = this.checked"
                                       name="filter_type[]"
                                       @click="resetFilters = true"
                                       type="checkbox"
                                       value="{{$type->id}}"
                                       class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 "
                                       @isset($old_values['filter_type'])
                                            @if(in_array($type->id, $old_values['filter_type'])) checked @endif
                                       @endisset>
                                <label for="training-checkbox-{{$type->id}}" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                    {{$type->text}}
                                </label>
                            </div>
                        @endforeach


                    </div>
                </div>
                <div class="sidebar__reception">
                    <h5 class="type_title text-[#24272B] text-[22px] font-[700] pb-5">Прием заявок</h5>
                    <div class="type__checkbox-party flex flex-col gap-3">
                        <div class="flex items-center me-4">
                            <input id="will-be-checkbox"
                                   onchange="document.getElementById('will-be-checkbox-modal').value = this.value"
                                   name="filter_started"
                                   type="radio"
                                   @click="resetFilters = true"
                                   value="soon_started"
                                   @isset($old_values['filter_started'])
                                       @if($old_values['filter_started'] == 'soon_started') checked @endif
                                   @endisset
                                   class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="will-be-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Скоро стартует
                            </label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="will-be-checkbox"
                                   onchange="document.getElementById('will-be-checkbox-modal').value = this.value"
                                   name="filter_started"
                                   type="radio"
                                   @click="resetFilters = true"
                                   value="application_acceptance"
                                   @isset($old_values['filter_started'])
                                       @if($old_values['filter_started'] == 'application_acceptance') checked @endif
                                   @endisset
                                   class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="will-be-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Идет прием заявок
                            </label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col  gap-4">
                    <button  form="filter-form" class="filter-modal__bt bg-gradient-to-r from-[#FF512F] to-[#DD2476]
                                text-[16px] text-[#fff] px-[20px] py-[10px] w-full
                                 items-center justify-center rounded-[100px] hidden xl:flex" type="submit">
                        показать
                    </button>

                    <button
                        x-cloak
                        @click.prevent="resetFiltersAction()"
                        form="filter-form" class="filter-modal__bt bg-gradient-to-r from-[#FF512F] to-[#DD2476]
                                text-[16px] text-[#fff] px-[20px] py-[10px] w-full
                                items-center justify-center rounded-[100px] hidden xl:flex" type="reset">
                        сбросить фильтры
                    </button>
                </div>
            </div>

            </form>
            <div class="courses__content">
                <div x-data class="courses-list grid grid-cols-1 md:grid-cols-2 min-[1700px]:grid-cols-3
                            gap-x-0 sm:gap-x-[20px] gap-y-[30px] sm:gap-y-[50px]">
                    @foreach($courses as $course)
                        <a href="{{route('course.show',$course)}}" x-intersect.threshold.15="$refs.course_img_{{$course->id}}.src = $refs.course_img_{{$course->id}}.dataset.img" class="course-card flex flex-col gap-4 max-w-[430px] mx-auto">
                            <div class="card__body relative w-full max-w-[430px] max-h-[280px] h-[280px]">
                                <div class="card__type">
                                    <h5 style="background: linear-gradient(90deg, {{$course->courseType->color_from}} 0%, {{$course->courseType->color_to}} 100%);" class="absolute text-[#E5E5E5] text-[18px]
                                           font-[500] tracking-[.9px] rounded-[12px]
{{--                                           bg-gradient-to-r from-[{{$course->courseType->color_from}}] to-[{{$course->courseType->color_to}}]--}}
                                           m-[10px] sm:m-[20px] px-[15px] py-[7px] sm:px-[20px] sm:py-[9px] ">
                                        {{$course->courseType->text}}
                                    </h5>
                                </div>
                                <div class="card__date">
                                    <h5 style="background: linear-gradient(90deg, {{$course->courseType->color_from}} 0%, {{$course->courseType->color_to}} 100%);" class="absolute right-0 bottom-0 text-[#E5E5E5] text-[12px] sm:text-[18px]
                                           font-[500] tracking-[.9px] rounded-[12px]
{{--                                           bg-gradient-to-r from-[{{$course->courseType->color_from}}] to-[{{$course->courseType->color_to}}]--}}
                                           m-[10px] sm:m-[20px] px-[15px] py-[7px] sm:px-[20px] sm:py-[9px] ">
                                        @if(!is_null($course->start_at))
                                            {{$course->start_at->translatedFormat('j F ')}}
                                        @else
                                            Идет прием  заявок
                                        @endif
                                    </h5>
                                </div>
                                <img
                                    x-ref="course_img_{{$course->id}}"
                                    class="opacity-0 rounded-[18px] object-cover h-full "
                                    src="{{url('img/icons/preloader.svg')}}"
                                    width="100%"
                                    alt="Картинка курса предмета <<{){$course->title}}>>"
                                    data-img="/storage/{{$course->avatar}}"
                                    onload="this.classList.add('opacity-100')">
                                <div class="absolute flex sm:hidden flex-row px-[9px] py-[10px] bg-[#F4F4F4] rounded-t-[13px] translate-y-[-100%] w-full ">
                                    <div class="flex flex-col gap-[3px] pr-[3%] border-solid border-r-[1px] border-[#24272b4d]  ">
                                        <h5 class="card__subtitle text-[#24272B] text-[13px] font-[700] w-fit">
                                            Начало:
                                        </h5>
                                        <h5 class="card__subtitle text-[#24272B] text-[12px] font-[400] w-max">
                                            @if(!is_null($course->start_at))
                                                {{$course->start_at->translatedFormat('j F ')}}
                                            @else
                                                Идет прием <br> заявок
                                            @endif
                                        </h5>
                                    </div>
                                    <div class="flex flex-col gap-[3px] pl-[3%] pr-[3%] border-solid border-r-[1px] border-[#24272b4d]">
                                        <h5 class="card__subtitle text-[#24272B] text-[13px] font-[700] ">
                                            Длительность:
                                        </h5>
                                        <h5 class="card__subtitle text-[#24272B] text-[12px] font-[400]">
                                            {{$course->duration}}
                                        </h5>
                                    </div>
                                    <div class="flex flex-col gap-[3px] pl-[3%] ">
                                        <h5 class="card__subtitle text-[#24272B] text-[13px] font-[700]">
                                            Формат:
                                        </h5>
                                        <h5 class="card__subtitle text-[#24272B] text-[12px] font-[400]">
                                            {{$course->format}}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card__info flex flex-col gap-1 sm:gap-3">
                                <h4 class="card__title text-[#24272B] text-[25px] font-[700] leading-7 sm:leading-[2.25rem]">
                                    {{$course->title}}
                                </h4>
                                <h5 class="card__subtitle text-[#24272B] text-[20px] font-[400]">
                                    {{$course->subtitle}}
                                </h5>
                                <h4 class="card__price text-[#24272B] text-[30px] font-[700]">
                                    {{$course->formattedCost()}} ₽
                                </h4>
                            </div>
                        </a>
                    @endforeach
                </div>

            @include('general.courses_footer')
            </div>
        </div>


    </main>


    <div id="modal" class="filter-modal z-30 fixed top-0 left-0 right-0 bottom-0 flex justify-center items-center p-4 hidden">
        <div class="filter-modal__window flex flex-col gap-[20px] rounded-[20px]
                                         bg-[#fff] px-[25px] py-[40px]
                                        ">
            <div class="filter-modal__head flex justify-between items-center ">
                <h3 class="filter-modal__title text-[#24272B]
                                           uppercase font-sans text-[22px] font-[700]">Фильтры</h3>
                <button id="close-modal" class="filter-modal__close flex items-center">
                    <img src="{{url('img/icons/close-modal.svg')}}">
                </button>
            </div>
            <div class="filter-modal__body flex flex-col gap-[20px]">
                <div class="sidebar__type">
                    <h5 class="type_title text-[#24272B] text-[22px] font-[700] pb-5">Тип</h5>
                    <div class="type__checkbox-party flex flex-col gap-3">
                        @foreach($types as $type)
                            <div class="flex items-center me-4">
                                <input form="filter-form"
                                       onclick="document.getElementById('training-checkbox-{{$type->id}}').checked = this.checked"
                                       id="training-checkbox-modal-{{$type->id}}"
                                       name="filter_type[]"
                                       type="checkbox"
                                       @click="resetFilters = true"
                                       value="{{$type->id}}"
                                       @isset($old_values['filter_type'])
                                            @if(in_array($type->id, $old_values['filter_type'])) checked @endif
                                       @endisset
                                       class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                                <label for="training-checkbox-modal-{{$type->id}}" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                    {{$type->text}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="sidebar__reception">
                    <h5 class="type_title text-[#24272B] text-[22px] font-[700] pb-5">Прием заявок</h5>
                    <div class="type__checkbox-party flex flex-col gap-3">
                        <div class="flex items-center me-4">
                            <input id="will-be-checkbox"
                                   onchange="document.getElementById('will-be-checkbox-modal').value = this.value"
                                   name="filter_started"
                                   type="radio"
                                   @click="resetFilters = true"
                                   value="soon_started"
                                   @isset($old_values['filter_started'])
                                       @if($old_values['filter_started'] == 'soon_started') checked @endif
                                   @endisset
                                   class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="will-be-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Скоро стартует
                            </label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="will-be-checkbox"
                                   onchange="document.getElementById('will-be-checkbox-modal').value = this.value"
                                   name="filter_started"
                                   type="radio"
                                   @click="resetFilters = true"
                                   value="application_acceptance"
                                   @isset($old_values['filter_started'])
                                       @if($old_values['filter_started'] == 'application_acceptance') checked @endif
                                   @endisset
                                   class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="will-be-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Идет прием заявок
                            </label>
                        </div>
                    </div>
                </div>
                <button  form="filter-form" class="filter-modal__bt bg-gradient-to-r from-[#FF512F] to-[#DD2476]
                                text-[16px] text-[#fff] px-[20px] py-[10px] w-full
                                 items-center justify-center rounded-[100px] flex xl:hidden" type="submit">
                    показать
                </button>

                <button
                    x-cloak
                    @click.prevent="resetFiltersAction()"
                    form="filter-form" class="filter-modal__bt bg-gradient-to-r from-[#FF512F] to-[#DD2476]
                                text-[16px] text-[#fff] px-[20px] py-[10px] w-full
                                items-center justify-center rounded-[100px] flex xl:hidden" type="reset">
                    сбросить фильтры
                </button>
            </div>
        </div>

    </div>

    <div id="modal-overlay" class="filter-modal__overlay fixed top-0 bottom-0 left-0 right-0 z-20 bg-[#24272B] opacity-[0.5] hidden"></div>
</body>

<footer>
    <script>
        function resetFiltersAction() {
            var oldValues = @json($old_values);
            if ( oldValues && Object.keys(oldValues).length > 0){
                window.location.href = window.location.href.split('?')[0];
            }
            else {
                document.getElementById('filter-form').reset();
            }
        }
    </script>
</footer>

</html>
