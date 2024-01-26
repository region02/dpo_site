<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @vite('resources/js/courses.js')

    @stack('scripts')
    <!-- resources/views/welcome.blade.php -->


</head>

<body class='bg-[#F4F4F4] '>
    @include('general/header_white ')
    <main class="w-full  mt-10 px-3 lg:px-20">
        <a href="/" class="flex gap-[10px]">
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
                <select  id="countries" class="bg-[#d4d5d952] border-none  text-[#24272B] text-sm rounded-[8px]
                                              focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                              dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                                              dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                                              max-w-[280px]">
                    <option selected>Порядок: по умолчанию</option>
                    <option value="HP">Цена: по возрастанию</option>
                    <option value="LP">Цена: по убыванию</option>
                    <option value="AB">Названия: А–Я</option>
                    <option value="BA">Названия: Я–А</option>
                </select>
            </div>

        </div>
        <div class="courses__container flex flex-row gap-[5%]">
            <div class="courses__sidebar hidden xl:flex flex-col gap-10">
                <div class="sidebar__type">
                    <h5 class="type_title text-[#24272B] text-[22px] font-[700] pb-5">Тип</h5>
                    <div class="type__checkbox-party flex flex-col gap-3">
                        <div class="flex items-center me-4">
                            <input id="training-checkbox" type="checkbox" value="" class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="training-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Повышение квалификации
                            </label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="retraining-checkbox" type="checkbox" value="" class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="retraining-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Профессиональная
                                переподготовка
                            </label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="schools-checkbox" type="checkbox" value="" class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="schools-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Летние/Зимние/Осенние/
                                Весенние ШКОЛЫ
                            </label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="kids-checkbox" type="checkbox" value="" class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="kids-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Курсы для детей
                            </label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="webinars-checkbox" type="checkbox" value="" class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="webinars-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Вебинары
                            </label>
                        </div>


                    </div>
                </div>
                <div class="sidebar__reception">
                    <h5 class="type_title text-[#24272B] text-[22px] font-[700] pb-5">Прием заявок</h5>
                    <div class="type__checkbox-party flex flex-col gap-3">
                        <div class="flex items-center me-4">
                            <input id="upgoing-checkbox" type="checkbox" value="" class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="upgoing-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Уже идет
                            </label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="will-be-checkbox" type="checkbox" value="" class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="will-be-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Скоро начнется
                            </label>
                        </div>



                    </div>
                </div>
            </div>
            <div class="courses__content">
                <div class="courses-list grid grid-cols-1 md:grid-cols-2 place-items-center
                            gap-x-0 sm:gap-x-[20px] gap-y-[15px] sm:gap-y-[50px]">
                    <div class="course-card flex flex-col gap-4 max-w-[430px]">
                        <div class="card__body relative">
                            <div class="card__type">
                                <h5 class="absolute text-[#E5E5E5] text-[12px] sm:text-[18px]
                                           font-[500] tracking-[.9px] rounded-[12px]
                                           bg-gradient-to-r from-[#FF512F] to-[#DD2476]
                                           m-[10px] sm:m-[20px] px-[15px] py-[7px] sm:px-[20px] sm:py-[9px] ">
                                    Повышение квалификации
                                </h5>
                            </div>
                            <img src="{{url('img/test-bg__2.png')}}" alt="">
                        </div>
                        <div class="card__info flex flex-col gap-3">
                            <h4 class="card__title text-[#24272B] text-[25px] font-[700]">
                                Интенсив-курс профессионального перевода (английский язык)
                            </h4>
                            <h5 class="card__subtitle text-[#24272B] text-[20px] font-[400]">
                                Научитесь искусству перевода
                                по-переводчески
                            </h5>
                            <h4 class="card__price text-[#24272B] text-[30px] font-[700]">
                                10 000 ₽
                            </h4>
                        </div>
                    </div>
                    <div class="course-card flex flex-col gap-4 max-w-[430px]">
                        <div class="card__body relative">
                            <div class="card__type">
                                <h5 class="absolute text-[#E5E5E5] text-[12px] sm:text-[18px]
                                           font-[500] tracking-[.9px] rounded-[12px]
                                           bg-gradient-to-r from-[#FF512F] to-[#DD2476]
                                           m-[10px] sm:m-[20px] px-[15px] py-[7px] sm:px-[20px] sm:py-[9px] ">
                                    Повышение квалификации
                                </h5>
                            </div>
                            <img src="{{url('img/test-bg__2.png')}}" alt="">
                        </div>
                        <div class="card__info flex flex-col gap-3">
                            <h4 class="card__title text-[#24272B] text-[25px] font-[700]">
                                Интенсив-курс профессионального перевода (английский язык)
                            </h4>
                            <h5 class="card__subtitle text-[#24272B] text-[20px] font-[400]">
                                Научитесь искусству перевода
                                по-переводчески
                            </h5>
                            <h4 class="card__price text-[#24272B] text-[30px] font-[700]">
                                10 000 ₽
                            </h4>
                        </div>
                    </div>
                    <div class="course-card flex flex-col gap-4 max-w-[430px]">
                        <div class="card__body relative">
                            <div class="card__type">
                                <h5 class="absolute text-[#E5E5E5] text-[12px] sm:text-[18px]
                                           font-[500] tracking-[.9px] rounded-[12px]
                                           bg-gradient-to-r from-[#FF512F] to-[#DD2476]
                                           m-[10px] sm:m-[20px] px-[15px] py-[7px] sm:px-[20px] sm:py-[9px] ">
                                    Повышение квалификации
                                </h5>
                            </div>
                            <img src="{{url('img/test-bg__2.png')}}" alt="">
                        </div>
                        <div class="card__info flex flex-col gap-3">
                            <h4 class="card__title text-[#24272B] text-[25px] font-[700]">
                                Интенсив-курс профессионального перевода (английский язык)
                            </h4>
                            <h5 class="card__subtitle text-[#24272B] text-[20px] font-[400]">
                                Научитесь искусству перевода
                                по-переводчески
                            </h5>
                            <h4 class="card__price text-[#24272B] text-[30px] font-[700]">
                                10 000 ₽
                            </h4>
                        </div>
                    </div>
                    <div class="course-card flex flex-col gap-4 max-w-[430px]">
                        <div class="card__body relative">
                            <div class="card__type">
                                <h5 class="absolute text-[#E5E5E5] text-[12px] sm:text-[18px]
                                           font-[500] tracking-[.9px] rounded-[12px]
                                           bg-gradient-to-r from-[#FF512F] to-[#DD2476]
                                           m-[10px] sm:m-[20px] px-[15px] py-[7px] sm:px-[20px] sm:py-[9px] ">
                                    Повышение квалификации
                                </h5>
                            </div>
                            <img src="{{url('img/test-bg__2.png')}}" alt="">
                        </div>
                        <div class="card__info flex flex-col gap-3">
                            <h4 class="card__title text-[#24272B] text-[25px] font-[700]">
                                Интенсив-курс профессионального перевода (английский язык)
                            </h4>
                            <h5 class="card__subtitle text-[#24272B] text-[20px] font-[400]">
                                Научитесь искусству перевода
                                по-переводчески
                            </h5>
                            <h4 class="card__price text-[#24272B] text-[30px] font-[700]">
                                10 000 ₽
                            </h4>
                        </div>
                    </div>

                </div>

            @include('general.courses_footer')
            </div>
        </div>


    </main>


    <div id="modal" class="filter-modal z-30 fixed top-0 left-0 right-0 bottom-0 flex justify-center items-center p-4 hidden">
        <div class="filter-modal__window flex flex-col gap-[30px] rounded-[20px]
                                         bg-[#fff] px-[25px] py-[40px]
                                        ">
            <div class="filter-modal__head flex justify-between items-center ">
                <h3 class="filter-modal__title text-[#24272B]
                                           uppercase font-sans text-[22px] font-[700]">Фильтры</h3>
                <button id="close-modal" class="filter-modal__close flex items-center">
                    <img src="{{url('img/icons/close-modal.svg')}}">
                </button>
            </div>
            <div class="filter-modal__body flex flex-col gap-[30px]">
                <div class="sidebar__type">
                    <h5 class="type_title text-[#24272B] text-[22px] font-[700] pb-5">Тип</h5>
                    <div class="type__checkbox-party flex flex-col gap-3">
                        <div class="flex items-center me-4">
                            <input id="training-checkbox" type="checkbox" value="" class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="training-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Повышение квалификации
                            </label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="retraining-checkbox" type="checkbox" value="" class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="retraining-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Профессиональная
                                переподготовка
                            </label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="schools-checkbox" type="checkbox" value="" class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="schools-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Летние/Зимние/Осенние/
                                Весенние ШКОЛЫ
                            </label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="kids-checkbox" type="checkbox" value="" class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="kids-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Курсы для детей
                            </label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="webinars-checkbox" type="checkbox" value="" class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="webinars-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Вебинары
                            </label>
                        </div>


                    </div>
                </div>
                <div class="sidebar__reception">
                    <h5 class="type_title text-[#24272B] text-[22px] font-[700] pb-5">Прием заявок</h5>
                    <div class="type__checkbox-party flex flex-col gap-3">
                        <div class="flex items-center me-4">
                            <input id="upgoing-checkbox" type="checkbox" value="" class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="upgoing-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Уже идет
                            </label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="will-be-checkbox" type="checkbox" value="" class="w-6 h-6 text-purple-600 bg-gray-100 border-[#24272B] border-solid border-[2px] rounded-[50%] focus:ring-purple-500  focus:ring-2 ">
                            <label for="will-be-checkbox" class="ms-3 text-[16px] font-[400] text-[#24272B]">
                                Скоро начнется
                            </label>
                        </div>



                    </div>
                </div>
                <button class="filter-modal__bt bg-gradient-to-r from-[#FF512F] to-[#DD2476]
                                text-[16px] text-[#fff] px-[20px] py-[10px] w-full
                                flex items-center justify-center rounded-[100px] ">
                    показать
                </button>
            </div>
        </div>

    </div>
    <div id="modal-overlay" class="filter-modal__overlay fixed top-0 bottom-0 left-0 right-0 z-20 bg-[#24272B] opacity-[0.5] hidden"></div>
</body>


</html>
