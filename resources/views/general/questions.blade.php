<section id="questions" class="questions">
    <div class="wrapper 
    bg-white bg-opacity-10
    border-[1px] border-[#ffffff] border-opacity-10 
    my-16 py-16">
        <div class="flex flex-col md:flex-row w-full px-5" id="contact-form">
            <div class="md:w-1/2 w-full flex flex-col justify-between">
                <div>
                    <h3 class="uppercase font-sans text-[#E5E5E5] 
                        text-[2.5rem] font-[700] tracking-wider leading-[1.375rem]
                        max-[500px]:text-[1.5rem] max-[500px]:font-[700] max-[500px]:tracking-wider max-[500px]:leading-[0.5rem]
                        sm:text-[1.5rem] sm:font-[700] sm:tracking-wider sm:leading-[0.5rem]
                        md:text-[2.0rem] md:font-[700] md:tracking-wider md:leading-[1.2rem]
                        lg:text-[2.3rem] lg:font-[700] lg:tracking-wider lg:leading-[1.35rem]
                        xl:text-[2.5rem] xl:font-[700] xl:tracking-wider xl:leading-[1.375rem]
                        mb-6">
                        Остались вопросы?
                    </h3>
                    <p class="font-sans text-[#E5E5E5]
                            text-[1.25rem] font-[700] tracking-wider">
                        Мы с вами свяжемся</p>

                </div>
                <div>
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                    </ul>
                </div>

            </div>
            <div class="md:w-1/2 w-full mt-10 md:mt-0 md:pl-28">
                <h1 class="text-4xl text-gray-800 sm:text-4xl font-bold title-font mb-4">Contact Form</h1>
                <form action="send-contact.php" method="post" id="submit-contact-form">
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="name" class="leading-7 py-4 text-lg text-gray-900">Your Name</label>
                            <input type="text" id="name" name="name" required="" class="w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="email" class="leading-7 py-4 text-lg text-gray-900">Your Email</label>
                            <input type="email" id="email" name="email" required="" class="w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-900 py-1 px-1 leading-8 transition-colors duration-200 ease-in-out ">
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="message" class="leading-7 py-4 text-lg text-gray-900">Your Message</label>
                            <textarea id="message" name="message" required="" class="w-full bg-white rounded border border-gray-400 focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200 h-32 text-base outline-none text-gray-900 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out "></textarea>
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <button type="submit" class="flex text-white bg-gray-900 border-0 py-4 px-6 focus:outline-none hover:bg-blue-900 rounded text-xl font-bold shadow-lg mx-0 flex-col text-center g-recaptcha">
                            Send Message ✉
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>