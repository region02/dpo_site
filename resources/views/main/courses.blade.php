<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

    @vite('resources/js/app.js')
    @stack('scripts')
    <!-- resources/views/welcome.blade.php -->
    <script type="module" defer src="{{ asset('build/assets/feedback-w40geAFS.js') }}"></script>

</head>

<body class='bg-[#F4F4F4]'>
    @include('general/header_white ')
    <main class="w-full  mt-10 px-3 lg:px-20">
        <a href="/" class="flex gap-[10px]">
            <img src="{{url('img/icons/return_arrow.svg')}}">
            <h5 class="text-[#0279C1] text-[16px] font-[400]">вернуться назад</h5>
        </a>
        <div class="courses__hat flex flex-row justify-between py-10">
            <h1 class="text-[#24272B] uppercase font-sans
                        text-[2.7rem] font-[700] tracking-wider leading-[2.975rem] sm:leading-[1.975rem]
                        max-[500px]:text-[1.5rem] max-[500px]:font-[700] max-[500px]:tracking-wider
                        sm:text-[1.7rem]  sm:tracking-wider
                        md:text-[2.2rem]  md:tracking-wider
                        lg:text-[2.5rem]  lg:tracking-wider
                        xl:text-[2.7rem]  xl:tracking-wider">все курсы</h1>
            <select id="singleSelection" data-te-select-init>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
            </select>
        </div>
        <div class="courses__container flex flex-row gap-[5%]">
            <div class="courses__sidebar">

            </div>
            <div class="courses__content">

            </div>
        </div>


    </main>

</body>


</html>
