<section class="footer px-5 sm:px-8 xl:px-44  ">
    <div class="footer__wrapper ">
        <div class="footer__container flex flex-col  border-t-[2px] border-t-[#fff] border-solid gap-[30px] mt-14 sm:mt-28 pb-16 sm:pb-32">
            <ul class="nav-list flex flex-wrap gap-[15px] sm:gap-[20px] pt-8 max-w-[100%] sm:max-w-[80%]">
                @foreach($types as $type)
                    <li class=" text-[16px] xs:text-xl 3xl:text-[25px] font-medium text-[#fff] pr-14">
                        <a href="{{ route('course.all') }}?filter_type[]={{ $type->id }}">
                            {{$type->text}}
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="footer__contacts flex flex-col gap-[25px] md:flex-row md:gap-[40px] ">
                <div class="feedback__call flex gap-3">
                    <img src="{{url("img/icons/feedback__call.svg")}}">
                    <h5 class=" text-[16px] xs:text-lg 3xl:text-[22px] font-medium text-[#fff]">+7 (968) 581 98 76</h5>
                </div>
                <div class="feedback__call flex gap-3">
                    <img src="{{url("img/icons/feedback__email.svg")}}">
                    <h5 class=" text-[16px] xs:text-lg 3xl:text-[22px]  font-medium text-[#fff]">dpo_foreignl@rudn.ru</h5>
                </div>
            </div>
            <div class="footer__mark flex flex-row align-center gap-x-4 w-[100%] md:w-[50%] ">
                <img src="{{url("img/icons/logo_only.svg")}}">
                <h5 class="text-[12px] xs:text-lg 3xl:text-[22px] font-[400] text-[#fff] self-center">Российский университет дружбы народов
                    имени Патриса Лумумбы
                </h5>
            </div>
            <h3 class="text-[#d3d3d3] text-[12px] 3xl:text-[17px] ">This site is protected by reCAPTCHA and the Google
                <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.
            </h3>
        </div>
    </div>
</section>
