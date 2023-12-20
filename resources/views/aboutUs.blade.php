@extends('layouts.master')
@section('content')
    <div class="flex flex-col max-w-screen-xl justify-end pt-12 mx-auto relative z-0 overflow-x-clip">
        <img src="/assets/graphics/about us.svg" class="sm:h-[500px] characters -z-50 sm:-mb-[26px] -mb-3" alt="">
    </div>
    <div class="bg-dark_1">
        <div class="text-center  text-light_1 max-w-screen-xl mx-auto py-8">
            <h1 class="text-5xl mb-4 font-almaria ">نبذة عنا</h1>
            <p class="text-xl font-madani sm:text-center text-justify mx-6 sm:mx-0">نحن مجموعة من الشباب الملتزمين بقيم المسؤولية الاجتماعية، ندير منصة 'ساهم' برؤية
                تطوعية وأهداف غير ربحية.
                يدفعنا الحماس والرغبة في تحسين المجتمع من خلال استثمار طاقاتنا ومهاراتنا في جمع الطعام الفائض وتوجيهه إلى من
                يحتاجون إليه. نعتبر أن العمل التطوعي والتعاون مع المطاعم والمتاجر والمؤسسات الخيرية هو مفتاح للمساهمة في
                إحداث تغيير إيجابي في حياة الأفراد وتعزيز الرفاهية الاجتماعية.</p>
        </div>
    </div>
    {{-- Accordion --}}
    <div class=" max-w-screen-xl justify-end py-12 sm:mx-auto mx-6">
        <h1 class="text-5xl mb-4 font-almaria text-center "> أسئلة شائعة</h1>

        <div id="accordion-collapse" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                    aria-controls="accordion-collapse-body-1">
                    <span class="font-madani">كيف يمكن للمطاعم والمتاجر المشاركة في منصة "ساهم"؟</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 bg-sahem_pr-50 border-gray-200   ">
                    <p class="mb-2 text-gray-500  ">
                        يمكن للمطاعم والمتاجر التبرع بالطعام الفائض من خلال التسجيل في المنصة ووضع التبرعات المتاحة بوصف
                        مفصل للطعام وكميته وتفاصيل الاتصال.</p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-2">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                    aria-controls="accordion-collapse-body-2">
                    <span class="font-madani">هل يتم توفير تقنيات خاصة لجمع وتوزيع الطعام؟</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 border border-b-0 bg-sahem_pr-50  border-gray-200  ">
                    <p class="mb-2 text-gray-500  ">
                        نحن نقدم منصة تواصل بين المطاعم والمتاجر الذين يودون التبرع بالطعام والمؤسسات الخيرية التي تحتاج
                        إليه. ليست هناك تقنيات محددة للجمع أو التوزيع.</p>
                </div>
            </div>
            <h2 id="accordion-collapse-heading-3">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span class="font-madani">هل يمكن للأفراد المشاركة في جمع الطعام؟</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 bg-sahem_pr-50 border-gray-200  ">
                    <p class="mb-2 text-gray-500  ">
                        في الوقت الحالي، المنصة موجهة للمطاعم والمتاجر والمؤسسات الخيرية. ومع ذلك، يمكن للأفراد دعم المبادرة
                        عبر المشاركة في نشر الوعي حولها ودعم الأماكن التي تشارك في التبرع.</p>

                </div>
            </div>
            <h2 id="accordion-collapse-heading-4">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span class="font-madani">هل هناك متطلبات معينة للمطاعم أو المتاجر للتبرع؟</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 bg-sahem_pr-50 border-gray-200  ">
                    <p class="mb-2 text-gray-500  ">
                        يمكن لأي مطعم أو متجر يمتلك طعامًا فائضًا أن يتبرع. الأمور الأساسية تشمل وصف الطعام وكميته وتوفير
                        تفاصيل الاتصال.</p>

                </div>
            </div>
            <h2 id="accordion-collapse-heading-5">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span class="font-madani">كيف تتم عملية التحقق من جودة الطعام المتبرع؟</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 bg-sahem_pr-50 border-gray-200  ">
                    <p class="mb-2 text-gray-500  ">
                        نحن نشجع المتبرعين على تقديم طعام ذي جودة عالية ويتم عادةً التحقق من الجودة من خلال التواصل المباشر
                        والمعاينة عند استلام الطعام.</p>

                </div>
            </div>

            <h2 id="accordion-collapse-heading-6">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-6" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span class="font-madani">هل تحصل المنصة على عمولة من عمليات التبرع أو التوزيع؟</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 bg-sahem_pr-50 border-gray-200  ">
                    <p class="mb-2 text-gray-500  ">لا، نحن منصة غير ربحية ولا نأخذ عمولات من عمليات
                        التبرع أو التوزيع.

                    </p>

                </div>
            </div>
            <h2 id="accordion-collapse-heading-7">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-7" aria-expanded="false"
                    aria-controls="accordion-collapse-body-3">
                    <span class="font-madani">هل يمكن للمؤسسات الخيرية تحديد مواعيد لاستلام الطعام؟</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-7" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 bg-sahem_pr-50 border-gray-200  ">
                    <p class="mb-2 text-gray-500  ">
                        نعم، يمكن للمؤسسات الخيرية التفاوض مع المتبرعين بشأن مواعيد استلام الطعام وترتيب ذلك وفقًا
                        لاحتياجاتهم وجدولهم.
                    </p>

                </div>
            </div>
            <h2 id="accordion-collapse-heading-8">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-8" aria-expanded="false"
                    aria-controls="accordion-collapse-body-8">
                    <span class="font-madani">هل يتم توثيق عمليات التبرع والتوزيع؟</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-8" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 bg-sahem_pr-50 border-gray-200  ">
                    <p class="mb-2 text-gray-500  ">
                        نعم، يتم توثيق التبرعات والتوزيعات من خلال سجلات مفصلة لضمان شفافية ودقة في عمليات الإعطاء
                        والاستلام.
                    </p>

                </div>
            </div>
            <h2 id="accordion-collapse-heading-9">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200       hover:bg-gray-100   gap-3"
                    data-accordion-target="#accordion-collapse-body-9" aria-expanded="false"
                    aria-controls="accordion-collapse-body-9">
                    <span class="font-madani">كيف يمكن الاتصال بفريق منصة "ساهم" للمزيد من المعلومات؟</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-9" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 bg-sahem_pr-50 border-gray-200  ">
                    <p class="mb-2 text-gray-500  ">
                        يمكنكم التواصل معنا عبر البريد الإلكتروني [البريد الإلكتروني] أو من خلال صفحتنا على الشبكات
                        الاجتماعية للحصول على أي استفسارات أو معلومات إضافية.
                    </p>

                </div>
            </div>
        </div>

    </div>
@endsection
