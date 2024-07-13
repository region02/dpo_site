
    <div class="footer__wrapper w-full ">
        <div class="footer__container flex flex-col max-w-[100%]  border-t-[2px] border-t-[#0279C1] border-solid gap-[30px] mt-28 pb-32">
            <ul class="nav-list flex flex-row flex-wrap gap-5 pt-8 max-w-[990px]">
                @foreach($types as $type)
                    <li class=" text-[16px] xs:text-xl 3xl:text-[25px] font-medium text-[#0279C1] pr-14">
                        <a href="{{ route('course.all') }}?filter_type[]={{ $type->id }}">
                            {{$type->text}}
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="footer__contacts flex flex-col gap-[25px] md:flex-row md:gap-[40px] ">
                <div class="feedback__call flex gap-3">
                    <img src="{{url("img/icons/feedback_blue__call.svg")}}">
                    <h5 class=" text-[16px] xs:text-lg font-medium text-[#0279C1]">+7 (968) 581 98 76</h5>
                </div>
                <div class="feedback__call flex gap-3">
                    <img src="{{url("img/icons/feedback_blue__email.svg")}}">
                    <h5 class=" text-[16px] xs:text-lg font-medium text-[#0279C1]">dpo_foreignl@rudn.ru</h5>
                </div>
            </div>
            <div class="footer__mark flex flex-row align-center gap-x-4 w-[100%] md:w-[50%] ">
                <img  src="{{url("img/icons/logo_blue_only.svg")}}">
                <h5 class="text-[12px] xs:text-lg font-[400] text-[#0279C1] self-center">Российский университет дружбы народов
                    имени Патриса Лумумбы
                    </h5>
            </div>
            <h3 style="font-size: 12px; text-decoration: none; color: #d3d3d3;">This site is protected by reCAPTCHA and the Google
                <a href="https://policies.google.com/privacy">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.
            </h3>
        </div>
    </div>

