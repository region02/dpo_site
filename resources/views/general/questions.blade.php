@vite('resources/js/feedback.js')
<section id="feedback" class="feedback">
    <div class="feedback__wrapper px-3 lg:px-12 pt-28">
        <div class="feedback__container bg-white bg-opacity-10 rounded-[15px] px-10 py-14 min-h-[424px]">
            <div class="feedback__name flex flex-col gap-[10px]">
                <h2 class="uppercase font-sans text-[#E5E5E5]
                        text-[2.5rem] font-[800] tracking-wider leading-[2.975rem] sm:leading-[1.975rem]
                        max-[500px]:text-[1.5rem] max-[500px]:font-[700] max-[500px]:tracking-wider
                        sm:text-[1.5rem] sm:font-[800] sm:tracking-wider
                        md:text-[2.0rem] md:font-[800] md:tracking-wider
                        lg:text-[2.3rem] lg:font-[800] lg:tracking-wider
                        xl:text-[2.5rem] xl:font-[800] xl:tracking-wider ">остались вопросы?</h2>
                <h5 class="text-[#fff] text-[20px] font-[600]">Мы с вами свяжемся</h5>
            </div>


            <form class="feedback__form  w-[100%] max-w-[100%] lg:max-w-[383px] flex flex-col justify-center gap-[30px]" action="{{route('index.questions')}}" method="post">
                @csrf
                <div class=" relative ">
                    <label for="name" class=" absolute inline-flex mb-2 text-sm font-medium text-[#fff] bg-[#012F66] rounded-[5px] px-1 translate-y-[-50%] translate-x-[5px]">ФИО</label>
                    <input type="text" id="name" name="name" autocomplete="full-name" class="bg-transparent border border-[#fff] text-[#fff] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-[60px] p-2.5 "  required>
                </div>
                <h5 class="text-[#fff] text-[18px] font-[600]">Предпочитаемый способ связи:</h5>
                <div class=" radio-party flex  justify-center flex-col gap-[20px] sm:gap-[15px] sm:flex-row">
                    <div class="flex items-center me-4">
                        <input  id="messanger-bt" type="radio" value="мессенджер" name="feedback_type"  class=" relative w-[25px] h-[25px]      bg-transparent border-[#fff]
                                                                                            border-[2px] z-0 checked:border-transparent checked:bg-transparent
                                                                                            before:scale-0
                                                                                            checked:before:scale-100
                                                                                            before:absolute before:content-[' '] before:bg-[#DA22FF]
                                                                                            before:w-[15px] before:h-[15px] before:rounded-[50%]
                                                                                            before:p-0 before:left-[4px] before:top-[4px]
                                                                                            before:z-10

                                                                                            after:scale-0
                                                                                            checked:after:scale-100
                                                                                            after:absolute after:content-[' ']
                                                                                            after:w-[27px] after:h-[27px] after:rounded-[50%]
                                                                                            after:border-[3px] after:border-solid after:border-[#DA22FF]
                                                                                            after:z-11 after:left-[-2px] after:top-[-2px]" >
                        <label for="messanger-bt" class="ms-2 text-sm font-medium text-[#fff] ">мессенджер</label>
                    </div>
                    <div class="flex items-center me-4">
                        <input  id="email-bt" type="radio" value="почта" name="feedback_type"  class=" relative w-[25px] h-[25px]      bg-transparent border-[#fff]
                                                                                            border-[2px] z-0 checked:border-transparent checked:bg-transparent
                                                                                            before:scale-0
                                                                                            checked:before:scale-100
                                                                                            before:absolute before:content-[' '] before:bg-[#DA22FF]
                                                                                            before:w-[15px] before:h-[15px] before:rounded-[50%]
                                                                                            before:p-0 before:left-[4px] before:top-[4px]
                                                                                            before:z-10

                                                                                            after:scale-0
                                                                                            checked:after:scale-100
                                                                                            after:absolute after:content-[' ']
                                                                                            after:w-[27px] after:h-[27px] after:rounded-[50%]
                                                                                            after:border-[3px] after:border-solid after:border-[#DA22FF]
                                                                                            after:z-11 after:left-[-2px] after:top-[-2px]">
                        <label for="email-bt" class="ms-2 text-sm font-medium text-[#fff] ">почта</label>
                    </div>
                    <div class="flex items-center me-4">
                        <input  id="phone-bt" type="radio" checked value="телефон" name="feedback_type"  class=" relative w-[25px] h-[25px]      bg-transparent border-[#fff]
                                                                                            border-[2px] z-0 checked:border-transparent checked:bg-transparent
                                                                                            before:scale-0
                                                                                            checked:before:scale-100
                                                                                            before:absolute before:content-[' '] before:bg-[#DA22FF]
                                                                                            before:w-[15px] before:h-[15px] before:rounded-[50%]
                                                                                            before:p-0 before:left-[4px] before:top-[4px]
                                                                                            before:z-10

                                                                                            after:scale-0
                                                                                            checked:after:scale-100
                                                                                            after:absolute after:content-[' ']
                                                                                            after:w-[27px] after:h-[27px] after:rounded-[50%]
                                                                                            after:border-[3px] after:border-solid after:border-[#DA22FF]
                                                                                            after:z-11 after:left-[-2px] after:top-[-2px]">
                        <label for="phone-bt" class="ms-2 text-sm font-medium text-[#fff] ">телефон</label>
                    </div>



                </div>

                <div class=" relative  ">
                    <label for="name" id="radio-link" class=" absolute inline-flex mb-2 text-sm font-medium text-[#fff] bg-[#012F66] rounded-[5px] px-1 py-[2px] translate-y-[-50%] translate-x-[5px] border-none">телефон</label>
                    <input type="text" id="contact" name="contact" autocomplete="phone" class="bg-transparent border border-[#fff] text-[#fff] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-[60px] p-2.5 " required>
                </div>


                <button type="submit" class="text-white  w-[141px] bg-gradient-to-r from-[#DA22FF] to-[#9733EE] px-5 py-2.5 text-center rounded-[20px] mx-auto lg:mx-0">Отправить</button>
            </form>

            <div class="feedback__contacts flex flex-col gap-[20px] flex-1">
                <div class="feedback__call flex gap-3">
                    <img src="{{url("img/icons/feedback__call.svg")}}">
                    <h5 class=" text-[16px] xs:text-lg font-medium text-[#fff]">+7 (968) 581 98 76</h5>
                </div>
                <div class="feedback__call flex gap-3">
                    <img src="{{url("img/icons/feedback__email.svg")}}">
                    <h5 class=" text-[16px] xs:text-lg font-medium text-[#fff]">dpo_foreignl@rudn.ru</h5>
                </div>
                <div class="feedback__call flex gap-5">

                    <h5 class=" text-[16px] xs:text-lg font-medium text-[#fff]">Мы в соц. сетях</h5>
                    <a href="#" class="flex items-center">
                        <img src="{{url("img/icons/feedback__TG.svg")}}">
                    </a>
                    <a href="#" class="flex items-center">
                        <img src="{{url("img/icons/feedback__VK.svg")}}">
                    </a>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="wrapper --}}
{{--    bg-white bg-opacity-10--}}
{{--    border-[1px] border-[#ffffff] border-opacity-10 --}}
{{--    my-16 py-16">--}}
{{--        <div class="flex flex-col md:flex-row w-full px-5" id="contact-form">--}}
{{--            <div class="md:w-1/2 w-full flex flex-col justify-between">--}}
{{--                <div>--}}
{{--                    <h3 class="uppercase font-sans text-[#E5E5E5] --}}
{{--                        text-[2.5rem] font-[700] tracking-wider leading-[1.375rem]--}}
{{--                        max-[500px]:text-[1.5rem] max-[500px]:font-[700] max-[500px]:tracking-wider max-[500px]:leading-[0.5rem]--}}
{{--                        sm:text-[1.5rem] sm:font-[700] sm:tracking-wider sm:leading-[0.5rem]--}}
{{--                        md:text-[2.0rem] md:font-[700] md:tracking-wider md:leading-[1.2rem]--}}
{{--                        lg:text-[2.3rem] lg:font-[700] lg:tracking-wider lg:leading-[1.35rem]--}}
{{--                        xl:text-[2.5rem] xl:font-[700] xl:tracking-wider xl:leading-[1.375rem]--}}
{{--                        mb-6">--}}
{{--                        Остались вопросы?--}}
{{--                    </h3>--}}
{{--                    <p class="font-sans text-[#E5E5E5]--}}
{{--                            text-[1.25rem] font-[700] tracking-wider">--}}
{{--                        Мы с вами свяжемся</p>--}}

{{--                </div>--}}
{{--                <div>--}}
{{--                    <ul>--}}
{{--                        <li>1</li>--}}
{{--                        <li>2</li>--}}
{{--                        <li>3</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <div class="md:w-1/2 w-full mt-10 md:mt-0 md:pl-28">--}}
{{--                <h1 class="text-4xl text-gray-800 sm:text-4xl font-bold title-font mb-4">Contact Form</h1>--}}
{{--                <form action="send-contact.php" method="post" id="submit-contact-form">--}}
{{--                    <div class="p-2 w-full">--}}
{{--                        <div class="relative">--}}
{{--                            <label for="name" class="leading-7 py-4 text-lg text-gray-900">Your Name</label>--}}
{{--                            <input type="text" id="name" name="name" required="" class="w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="p-2 w-full">--}}
{{--                        <div class="relative">--}}
{{--                            <label for="email" class="leading-7 py-4 text-lg text-gray-900">Your Email</label>--}}
{{--                            <input type="email" id="email" name="email" required="" class="w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="p-2 w-full">--}}
{{--                        <div class="relative">--}}
{{--                            <label for="message" class="leading-7 py-4 text-lg text-gray-900">Your Message</label>--}}
{{--                            <textarea id="message" name="message" required="" class="w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 h-32 text-base outline-none text-gray-900 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out "></textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="p-2 w-full">--}}
{{--                        <button type="submit" class="flex text-white bg-gray-900 border-0 py-4 px-6 focus:outline-none hover:bg-blue-900 rounded text-xl font-bold shadow-lg mx-0 flex-col text-center g-recaptcha">--}}
{{--                            Send Message ✉--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</section>




