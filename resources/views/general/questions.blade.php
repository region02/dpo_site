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
                        xl:text-[2.5rem] xl:font-[800] xl:tracking-wider
                        3xl:text-[2.8rem]">остались вопросы?</h2>
                <h5 class="text-[#fff] text-[20px] 3xl:text-[25px] font-[600]">Мы с вами свяжемся</h5>
            </div>


            <form class="feedback__form  w-[100%] max-w-[100%] lg:max-w-[383px] 3xl:max-w-[520px] flex flex-col justify-center gap-[30px] 3xl:gap-[40px]"
                  action="{{route('index.questions')}}" method="post">
                @csrf
                <div class=" relative ">
                    <label for="name"
                           class=" absolute inline-flex mb-2 text-sm 3xl:text-[19px] font-medium text-[#fff] bg-[#012F66] rounded-[5px] px-1 3xl:px-2 py-[3px] translate-y-[-50%] translate-x-[5px]">ФИО</label>
                    <input type="text" id="name" name="name" autocomplete="full-name"
                           class="bg-[#255C96] border border-[#fff] text-[#fff] text-sm 3xl:text-[20px] rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-[60px] p-2.5 "
                           required>
                </div>
                <h5 class="text-[#fff] text-[18px] 3xl:text-[23px] font-[600]">Предпочитаемый способ связи:</h5>
                <div class=" radio-party flex  justify-center flex-col gap-[20px] sm:gap-[15px] sm:flex-row">
                    <div class="flex items-center me-4">
                        <input id="messanger-bt" type="radio" value="мессенджер" name="feedback_type" class=" relative w-[25px] h-[25px]      bg-[#255C96] border-[#fff]
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
                        <label for="messanger-bt" class="ms-2 text-sm 3xl:text-[20px] font-medium text-[#fff] ">мессенджер</label>
                    </div>
                    <div class="flex items-center me-4">
                        <input id="email-bt" type="radio" value="почта" name="feedback_type" class=" relative w-[25px] h-[25px]      bg-[#255C96] border-[#fff]
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
                        <label for="email-bt" class="ms-2 text-sm 3xl:text-[20px] font-medium text-[#fff] ">почта</label>
                    </div>
                    <div class="flex items-center me-4">
                        <input id="phone-bt" type="radio" checked value="телефон" name="feedback_type" class=" relative w-[25px] h-[25px]      bg-[#255C96] border-[#fff]
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
                        <label for="phone-bt" class="ms-2 text-sm 3xl:text-[20px] font-medium text-[#fff] ">телефон</label>
                    </div>


                </div>

                <div class=" relative  ">
                    <label for="name" id="radio-link"
                           class=" absolute inline-flex mb-2 text-sm 3xl:text-[19px] font-medium text-[#fff] bg-[#012F66] rounded-[5px] px-1 3xl:px-2 py-[3px] translate-y-[-50%] translate-x-[5px]">телефон</label>
                    <input type="text" id="contact" name="contact" autocomplete="phone"
                           class="bg-[#255C96] border border-[#fff] text-[#fff] text-sm 3xl:text-[20px] rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-[60px] p-2.5 "
                           required>
                </div>

                <div class=" relative  ">
                    <label for="question" id="radio-link"
                           class=" absolute inline-flex mb-2 text-sm 3xl:text-[19px] font-medium text-[#fff] bg-[#012F66] rounded-[5px] px-1 3xl:px-2 py-[3px] translate-y-[-50%] translate-x-[5px]">вопрос</label>
                    <textarea x-data="{
                                    resize () {
                                        $el.style.height = '60px';
                                        $el.style.height = $el.scrollHeight + 2 + 'px'
                                    }
                                }"
                              x-init="resize()"
                              @input="resize()" type="text" id="question" name="question" autocomplete="off"
                              class="bg-[#255C96] border border-[#fff] text-[#fff] text-sm 3xl:text-[20px] rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-[60px] p-2.5 pt-[1.2rem] "
                              placeholder="У меня возник вопрос по поводу..." required></textarea>
                </div>

                <div>
                    <div class="inline-flex items-center gap-3">
                        <label class="relative flex items-center  rounded-full cursor-pointer" for="agreement">
                            <input type="checkbox" required name="agreement"
                                   class="bg-[#255C96] outline outline-[#DA21FF] outline-[3px] border-none before:content[''] peer relative h-6 w-6 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-[#255C96] checked:before:bg-gray-900 hover:before:opacity-10 !ring-[#DA21FF] !ring-offset-[#DA21FF]"
                                   id="agreement"/>
                            <span
                                class="absolute text-[#DA21FF] ring-[#DA21FF] ring-offset-[#DA21FF] transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-[20px] w-7 stroke-[3px]"
                                   viewBox="0 0 20 20" fill="currentColor"
                                   stroke="currentColor" stroke-width="1">
                                <path fill-rule="evenodd"
                                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                      clip-rule="evenodd"></path>
                              </svg>
                            </span>
                        </label>
                        <label class="mt-px font-light text-gray-700  select-none" >
                            <p class="flex items-center flex-wrap font-sans text-[16px] xs:text-sm 3xl:text-[20px]  text-[#fff]  antialiased font-medium leading-relaxed text-blue-gray-900">
                                Я согласен на обработку &nbsp;

                                <a href="#"
                                   class="block w-fit font-sans  antialiased font-medium leading-relaxed text-blue-500 transition-colors underline underline-offset-[4px] hover:text-[#DA21FF]">
                                    персональных данных
                                </a>

                            </p>
                        </label>
                    </div>
                </div>


                <button type="submit"
                        class="text-white text-sm 3xl:text-[20px]   w-[141px] 3xl:w-fit bg-gradient-to-r from-[#DA22FF] to-[#9733EE] px-5 3xl:px-7 py-2.5 3xl:py-3.5 text-center rounded-[20px] mx-auto lg:mx-0">
                    Отправить
                </button>
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
                    <a href="https://t.me/s/rudnffkiya" class="flex items-center">
                        <img src="{{url("img/icons/feedback__TG.svg")}}">
                    </a>
                    <a href="https://vk.com/rudnffkiya?ysclid=lsott5imcy57472619" class="flex items-center">
                        <img src="{{url("img/icons/feedback__VK.svg")}}">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div x-data="{ modalOpen: @json(session('status') ? true : false) }"
         :class="{ 'z-40': modalOpen }" class="relative w-auto h-auto">

        <template x-teleport="body">
            <div x-show="modalOpen" class="fixed top-0 left-0 z-[99] flex items-center justify-center w-screen h-screen"
                 x-cloak>
                <div x-show="modalOpen"
                     x-transition:enter="ease-out duration-300"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="ease-in duration-300"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     @click="modalOpen=false"
                     class="absolute inset-0 w-full h-full backdrop-blur-md bg-opacity-70"></div>
                @if(session('status') == 'feedback-ok')
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
                        <div class="flex items-center justify-between gap-[30px]  pb-3">
                            <h4 class="card__subtitle text-[#fff] text-[20px] font-[700] ">Отправлено</h4>
                            <div class="gradient-border before:p-[5px] relative w-12 h-12">
                                <button @click="modalOpen=false"
                                        class="border-none absolute flex items-center justify-center text-[#E5E5E5] rounded-[15px]  border-[#f5f5f5] border-[2px] focus-visible:ring-0 focus-visible:outline-0">
                                    <svg class="w-12 h-12" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke-width="2.0" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
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
                            <h4 class="card__subtitle text-[#fff] text-[20px] text-center font-[400]">Ваша заявка принята, скоро мы с вами свяжемся</h4>
                            <h4 class="card__subtitle text-[#fff] text-[20px] text-center font-[400]">Скоро мы с вами свяжемся</h4>
                        </div>
                    </div>
                @else
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
                            <h4 class="card__subtitle text-[#fff] text-[20px] font-[400] uppercase">Не отправлено</h4>
                            <div class="gradient-border before:p-[5px] relative w-12 h-12">
                                <button @click="modalOpen=false"
                                        class="border-none absolute flex items-center justify-center text-[#E5E5E5] rounded-[15px]  border-[#f5f5f5] border-[2px] focus-visible:ring-0 focus-visible:outline-0">
                                    <svg class="w-12 h-12" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke-width="2.0" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col items-center">
                            <lord-icon
                                src="https://cdn.lordicon.com/dangivhk.json"
                                trigger="hover"
                                stroke="light"
                                colors="primary:#121331,secondary:#da22ff"
                                style="width:250px;height:250px">
                            </lord-icon>
                            <h4 class="card__subtitle text-[#fff] text-[20px] text-center font-[400]">Ваша заявка не поступила к нам на обработку</h4>
                            <h4 class="card__subtitle text-[#fff] text-[20px] text-center font-[400]">Убедитесь, что все данные введены верно</h4>
                        </div>
                    </div>
                @endif
            </div>
        </template>
    </div>

</section>




