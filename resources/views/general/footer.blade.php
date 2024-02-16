<section class="footer  ">
    <div class="footer__wrapper px-3 lg:px-12">
        <div class="footer__container flex flex-col max-w-[100%]  border-t-[2px] border-t-[#fff] border-solid gap-[30px] mt-28 pb-32">
            <ul class="nav-list flex flex-wrap gap-[20px] max-w-[100%] sm:max-w-[70%] pt-8">
                @foreach($types as $type)
                    <li class=" text-[16px] xs:text-xl font-medium text-[#fff] pr-14">{{$type->text}}</li>
                @endforeach


            </ul>
            <div class="footer__contacts flex flex-col gap-[25px] md:flex-row md:gap-[40px] ">
                <div class="feedback__call flex gap-3">
                    <img src="{{url("img/icons/feedback__call.svg")}}">
                    <h5 class=" text-[16px] xs:text-lg font-medium text-[#fff]">+7 (968) 581 98 76</h5>
                </div>
                <div class="feedback__call flex gap-3">
                    <img src="{{url("img/icons/feedback__email.svg")}}">
                    <h5 class=" text-[16px] xs:text-lg font-medium text-[#fff]">dpo_foreignl@rudn.ru</h5>
                </div>
            </div>
            <div class="footer__mark flex flex-row align-center gap-x-4 w-[100%] md:w-[50%] ">
                <img src="{{url("img/icons/logo_only.svg")}}">
                <h5 class="text-[12px] xs:text-lg font-[400] text-[#fff] self-center">Российский университет дружбы народов
                    имени Патриса Лумумбы
                    </h5>
            </div>
        </div>
    </div>
</section>
