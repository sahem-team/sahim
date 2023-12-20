@extends('layouts.master')
@section('content')
    {{-- Header --}}
    <div class="  bg-sahem_pr-50 z-0  ">
        <div class="flex flex-col max-w-screen-xl justify-end pt-12 mx-auto relative z-0 overflow-x-clip">
            <img src="/assets/graphics/box.svg" alt=""
                class="sm:w-[150px] w-[50px] absolute rotate-12 sm:top-8 top-0 sm:right-0 right-24 box-1">
            <img src="/assets/graphics/box.svg" alt=""
                class="w-[200px] sm:block hidden absolute -rotate-12 bottom-80 left-0 box-2-3">
            <img src="/assets/graphics/box.svg" alt=""
                class="w-[60px] absolute -rotate-12 top-0 sm:right-[47%] left-24 box-2-3 z-0">
            <div class="flex flex-col gap-6 mt-8">
                <h1 class="text-sahem_pr-500 font-almaria font-bold text-center text-6xl z-10 ">ساهم، لنغذي الحاجة والأمل
                </h1>
                <p class="text-center text-xl font-madani text-dark_2 ">طعامك الفائض قد يعني الكثير لآخرين</p>
            </div>
            <div class="flex justify-center gap-8 mt-8 sm:flex-row flex-col sm:mx-0 mx-8">
                <button
                    class="relative px-8 py-2 rounded-md bg-sahem_pr-500 isolation-auto z-10 border-2 border-sahem_pr-800 text-light_1 hover:text-dark_1
        before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-right-full before:hover:right-0 before:rounded-full  before:bg-white before:-z-10  before:aspect-square before:hover:scale-150 overflow-hidden before:hover:duration-700">
                    تصفح التبرعات</button>
                <button
                    class="relative px-8 py-2 rounded-md bg-white isolation-auto z-10 border-2 border-sahem_pr-800 text-dark_1 hover:text-light_1
        before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-right-full before:hover:right-0 before:rounded-full  before:bg-sahem_pr-500 before:-z-10  before:aspect-square before:hover:scale-150 overflow-hidden before:hover:duration-700">
                    قم بتبرع</button>

            </div>
            <img class="sm:h-[500px] sm:-mb-12 -mb-6 characters z-50" src="assets/graphics/header.svg" alt="">
        </div>
    </div>
    {{-- Section 1 --}}
    <div class="bg-dark_1">
        <div
            class="flex flex-col max-w-screen-xl mx-auto justify-center py-12 text-center gap-5 overflow-x-clip bg-dark_1 sm:px-0 px-4">
            <h2 class="text-light_1 font-madani text-4xl">دورنا في المجتمع</h2>
            <p class="text-light_2 font-almaria text-lg text-justify sm:text-center ">تسعى منصة "ساهم" إلى الحد من هدر
                الطعام ودعم المحتاجين، من خلال
                توفير وسيلة لربط المؤسسات الخيرية بالمطاعم والمتاجر التي تمتلك طعامًا فائضًا، مما يتيح فرصة استغلال هذا
                الفائض وتوجيهه للمحتاجين بدلاً من التخلص منه، فتأتي منصة "ساهم" كوسيلة للتعاون والتكامل بين مختلف الجهات
                لتقديم الدعم والإغاثة لأولئك الذين في حاجة ماسة إلى الطعام.</p>
        </div>
    </div>
    {{-- Section 2 --}}
    <div class="bg">
        <div class="max-w-screen-xl mx-auto pt-8 ">
            <h2 class="text-dark_1 font-madani text-4xl text-center mb-10 sm:mb-0 ">كيف تعمل المنصة</h2>
            {{-- Step 1 --}}
            <div class="flex justify-start items-center sm:gap-24 sm:flex-row flex-col-reverse mb-16 sm:mb-0">
                <img src="assets/graphics/step-2.svg" alt="" class="sm:h-96 sm:w-[40%] w-96 ">
                <div class="flex gap-4 items-start sm:w-2/3 px-4 sm:px-0">
                    <div class="w-24 bg-sahem_pr-500 rounded-full flex justify-center items-center aspect-square">
                        <p class=" text-light_2 font-madani text-3xl">1</p>
                    </div>
                    <div>
                        <h3 class="text-2xl mb-2  "> يقوم ممثل المطعم أو المتجر بوضع تبرع في المنصة</h3>
                        <p class="sm:block hidden">عندما يقرر ممثل المطعم أو المتجر التبرع بالطعام الفائض، يقوم بالدخول إلى
                            منصة "ساهم" ويسجل التبرع
                            بوصف مفصل للطعام المتاح للتبرع. يقدم المعلومات الضرورية مثل نوع الطعام، كمية الفائض، وتفاصيل
                            الاتصال.</p>

                    </div>
                </div>
            </div>
            {{-- Step 2 --}}
            <div class="flex sm:flex-row-reverse flex-col-reverse  justify-end items-center sm:gap-48 mb-16 sm:mb-0">
                <img src="assets/graphics/step-joj.svg" alt="" class="sm:h-96 sm:w-1/3 w-96">
                <div class="flex gap-4 items-start sm:w-2/3 px-4 sm:px-0">
                    <div class="w-24 bg-sahem_pr-500 rounded-full flex justify-center items-center aspect-square">
                        <p class=" text-light_2 font-madani text-3xl">2</p>
                    </div>
                    <div>
                        <h3 class="text-2xl mb-2 "> يقوم ممثل المؤسسة الخيرية بتصفح التبرعات و تقديم الطلب</h3>
                        <p class="sm:block hidden">بمجرد أن يتم وضع التبرع على المنصة، يقوم ممثل المؤسسة الخيرية بتصفح
                            التبرعات المتاحة عبر الصفحة
                            والبحث عن الطعام الذي يناسب احتياجات المحتاجين الذين يخدمونهم. يمكنهم طلب الكميات المحددة
                            والاتصال بممثل المتجر أو المطعم لترتيب استلام الطعام.
                        </p>

                    </div>
                </div>
            </div>
            {{-- Step 3 --}}
            <div class="flex justify-start items-center sm:gap-24 sm:flex-row flex-col-reverse mb-16 sm:mb-0">
                <img src="assets/graphics/step-1.svg" alt="" class="sm:h-96 sm:w-1/3 w-96">
                <div class="flex gap-4 items-start sm:w-2/3 px-4 sm:px-0">
                    <div class="w-24 bg-sahem_pr-500 rounded-full flex justify-center items-center aspect-square">
                        <p class=" text-light_2 font-madani text-3xl">3</p>
                    </div>
                    <div>
                        <h3 class="text-2xl mb-2 "> يقبل المتبرع الطلب و يقوم بتسليمه للمؤسسة الخيرية
                        </h3>
                        <p class="sm:block hidden">عندما يتم تقديم طلب من ممثل المؤسسة الخيرية، يقوم المتبرع بالتأكيد على
                            الطلب ويقبله. يتم ترتيب
                            توصيل الطعام أو تحديد مكان الاستلام بين المتبرع والمؤسسة الخيرية. المتبرع يعمل على تسليم الطعام
                            بطريقة تضمن سلامته وجودته، ليتمكن المستفيدون النهائيون من الاستفادة منه بشكل أفضل.</p>

                    </div>
                </div>
            </div>
            {{-- Step 4 --}}
            <div class="flex sm:flex-row-reverse flex-col-reverse justify-end items-center sm:gap-48 mb-16 sm:mb-0">
                <img src="assets/graphics/step-4.svg" alt="" class="sm:h-96 sm:w-1/3 w-96">
                <div class="flex gap-4 items-start sm:w-2/3 px-4 sm:px-0">
                    <div class="w-24 bg-sahem_pr-500 rounded-full flex justify-center items-center aspect-square">
                        <p class=" text-light_2 font-madani text-3xl">4</p>
                    </div>
                    <div>
                        <h3 class="text-2xl mb-2 ">تقوم المؤسسة بتوزيع التبرعات على المحتاجين </h3>
                        <p class="sm:block hidden">بمجرد استلام الطعام من المتبرع، تقوم المؤسسة الخيرية بتنظيم وتوزيع الطعام
                            على المحتاجين. يتم
                            التعامل بحرفية لضمان توزيع الطعام بشكل عادل وفقًا للاحتياجات الملحة، ويمكن أن يشمل ذلك التوزيع
                            عبر مطابخ خيرية أو توصيل الطعام مباشرةً للعائلات أو الأفراد الذين يحتاجون إليه بشكل مباشر.</p>

                    </div>
                </div>
            </div>
            {{-- ////////////////////////////////////////////////////////////// --}}

        </div>

        <div class="w-full">
            <svg preserveAspectRatio="none" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg"
                style="fill: #ffffff; width: 100%; height: 80px; transform: rotate(180deg) scaleX(-1);">
                <path
                    d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z"
                    opacity=".25" />
                <path
                    d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z"
                    opacity=".5" />
                <path
                    d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
            </svg>
        </div>


    </div>
    {{-- Section 3 --}}
    <div class=" max-w-screen-xl mx-auto py-8 ">
        <h2 class="text-dark_1 font-madani text-4xl text-center">أرقامنا </h2>
        <div class="flex justify-around mt-12 sm:flex-row flex-col gap-12 sm:gap-0 ">
            <div class="flex flex-col justify-center items-center gap-4 ">
                <img src="assets/graphics/restaurants.svg" alt="" class="w-24">
                <div class="flex gap-4 items-center justify-center sm:hidden ">
                    <div class="counter font-madani text-5xl " data-target="30"></div>
                    <span class="font-madani text-3xl ">متبرع</span>
                </div>
                <div class="counter font-madani text-5xl hidden sm:block " data-target="30"></div>
                <span class="font-madani text-3xl hidden sm:block ">متبرع</span>

            </div>
            <div class="flex flex-col justify-center items-center gap-4 ">
                <img src="assets/graphics/charities.svg" alt="" class="w-24">
                <div class="flex gap-4 items-center justify-center sm:hidden ">
                    <div class="counter font-madani text-5xl " data-target="10"></div>
                    <span class="font-madani text-3xl">مؤسسة خيرية </span>
                </div>
                <div class="counter font-madani text-5xl hidden sm:block " data-target="10"></div>
                <span class="font-madani text-3xl hidden sm:block ">مؤسسة خيرية </span>
            </div>
            <div class="flex flex-col justify-center items-center gap-4 ">
                <img src="assets/graphics/donation.svg" alt="" class="w-24">
                <div class="flex gap-4 items-center justify-center sm:hidden ">
                    <div class="counter  font-madani text-5xl " data-target="250"></div>
                    <span class="font-madani text-3xl"> تبرع</span>
                </div>
                <div class="counter  font-madani text-5xl hidden sm:block " data-target="250"></div>
                <span class="font-madani text-3xl hidden sm:block "> تبرع</span>
            </div>
        </div>
    </div>
    {{-- Section 4 --}}
    <div class="max-w-screen-xl mx-auto pt-12 flex flex-col gap-8 ">
        <h2 class="text-dark_1 font-madani text-4xl text-center">إبداء بتبرع الان </h2>
        <button
            class="relative px-8 py-2 mx-8 sm:mx-0 rounded-md bg-sahem_pr-500 isolation-auto z-10 border-2 border-sahem_pr-800 text-light_1 hover:text-dark_1
        before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-right-full before:hover:right-0 before:rounded-full  before:bg-white before:-z-10  before:aspect-square before:hover:scale-150 overflow-hidden before:hover:duration-700">
            قم بتبرع</button>

        <img class="sm:h-[500px] sm:-mb-10 mt-8 sm:mt-0 -mb-[20px] " src="/assets/graphics/step-3.svg" alt="">


    </div>
@endsection
