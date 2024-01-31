<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body class="bg-color-main">

@include('general.course_page.course_header')
@include('general.course_page.course_body')
@include('general.course_page.course_footer')

</body>
