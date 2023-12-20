@extends('layouts.master')
@section('content')
    <div class="px-4 mx-auto max-w-screen-xl my-12">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white text-center sm:text-start"> تصفح مقالات "ساهم"</h2>
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
            <article class="max-w-xs">
                <a href="/article">
                    <img src="/assets/blogImages/a.jpg" class="mb-5 rounded-lg" alt="Image 1">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="/article">"تحول الأزمة إلى فرصة: مساهمة الشباب في مشروع 'ساهم'"</a>
                </h2>
                <p class="mb-4 text-gray-500 dark:text-gray-400 text-justify">
                    قصص شبابية تلهم حول كيفية تحويل التحديات إلى فرص، حيث يتم استعراض دور الشباب في إدارة وتنمية منصة "ساهم"
                    وتأثيرهم الإيجابي في المجتمع.</p>
                <a href="/article"
                    class="inline-flex items-center font-medium underline underline-offset-4  text-sahem_pr-500  hover:no-underline">
                    اقرأ المقال كاملا </a>
            </article>
            <article class="max-w-xs">
                <a href="#">
                    <img src="/assets/blogImages/d.jpg" class="mb-5 rounded-lg" alt="Image 2">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">قصص الإيجابية: تحول الحياة بواسطة الطعام</a>
                </h2>
                <p class="mb-4  text-gray-500 dark:text-gray-400 text-justify">
                    استكشاف لقصص ملهمة حول الأفراد الذين تغيرت حياتهم بفضل المساهمات الغذائية وكيف تأثرت حياتهم بالطعام الذي
                    تم توزيعه من خلال منصة "ساهم".</p>
                <a href="#"
                    class="inline-flex items-center font-medium underline underline-offset-4  text-sahem_pr-500   hover:no-underline">
                    اقرأ المقال كاملا </a>
            </article>
            <article class="max-w-xs">
                <a href="#">
                    <img src="/assets/blogImages/h.jpg" class="mb-5 rounded-lg" alt="Image 3">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">"استدامة الطعام: دور المبادرات الغذائية في حماية البيئة"</a>
                </h2>
                <p class="mb-4  text-gray-500 dark:text-gray-400 text-justify">
                    تسليط الضوء على أهمية استدامة الطعام وكيف تلعب منصة "ساهم" دورًا رئيسيًا في الحد من هدر الطعام وتحفيز
                    المبادرات المحلية للحفاظ على البيئة.</p>
                <a href="#"
                    class="inline-flex items-center font-medium underline underline-offset-4  text-sahem_pr-500   hover:no-underline">
                    اقرأ المقال كاملا </a>
            </article>
            <article class="max-w-xs">
                <a href="#">
                    <img src="/assets/blogImages/c.jpg" class="mb-5 rounded-lg" alt="Image 4">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">"قوة التعاون: المطاعم والمتاجر في خدمة المجتمع"</a>
                </h2>
                <p class="mb-4  text-gray-500 dark:text-gray-400 text-justify">
                    تحليل عن تأثير التعاون بين المطاعم والمتاجر والمؤسسات الخيرية في تقديم المساعدة للمحتاجين، مع تسليط
                    الضوء على النتائج الإيجابية لهذه الجهود المشتركة.</p>
                <a href="#"
                    class="inline-flex items-center font-medium underline underline-offset-4  text-sahem_pr-500   hover:no-underline">
                    اقرأ المقال كاملا </a>
            </article>
            <article class="max-w-xs">
                <a href="#">
                    <img src="/assets/blogImages/e.jpg" class="mb-5 rounded-lg" alt="Image 4">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">"فرصة للإنسانية: التأثير الاجتماعي لتقديم الطعام"</a>
                </h2>
                <p class="mb-4  text-gray-500 dark:text-gray-400 text-justify">
                    تحليل للمساهمة الاجتماعية لتقديم الطعام عبر منصة "ساهم" وكيف تمكّن هذه الفرصة من تعزيز الروابط المجتمعية
                    ومساعدة الأفراد في الحاجة.</p>
                <a href="#"
                    class="inline-flex items-center font-medium underline underline-offset-4  text-sahem_pr-500   hover:no-underline">
                    اقرأ المقال كاملا </a>
            </article>
            <article class="max-w-xs">
                <a href="#">
                    <img src="/assets/blogImages/g.jpg" class="mb-5 rounded-lg" alt="Image 4">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">"تكنولوجيا الأمل: دور التقنية في مكافحة الجوع"</a>
                </h2>
                <p class="mb-4  text-gray-500 dark:text-gray-400 text-justify">
                    نظرة عامة على كيفية استخدام التكنولوجيا، من خلال منصة "ساهم"، في مواجهة التحديات الغذائية وتوفير الدعم
                    للمجتمعات المحتاجة.</p>
                <a href="#"
                    class="inline-flex items-center font-medium underline underline-offset-4  text-sahem_pr-500   hover:no-underline">
                    اقرأ المقال كاملا </a>
            </article>
            <article class="max-w-xs">
                <a href="#">
                    <img src="/assets/blogImages/f.jpg" class="mb-5 rounded-lg" alt="Image 4">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">تحقيق الأمن الغذائي: استراتيجيات مبتكرة لتحسين التوزيع</a>
                </h2>
                <p class="mb-4  text-gray-500 dark:text-gray-400 text-justify">
                    استعراض للأساليب الإبداعية التي تستخدمها منصة "ساهم" لضمان تحقيق الأمن الغذائي من خلال تحسين وتسهيل
                    عمليات توزيع الطعام للمحتاجين.</p>
                <a href="#"
                    class="inline-flex items-center font-medium underline underline-offset-4  text-sahem_pr-500   hover:no-underline">
                    اقرأ المقال كاملا </a>
            </article>
            <article class="max-w-xs">
                <a href="#">
                    <img src="/assets/blogImages/b.jpg" class="mb-5 rounded-lg" alt="Image 4">
                </a>
                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="#">تعزيز الروابط الاجتماعية: التبرع بالطعام كوسيلة للتواصل</a>
                </h2>
                <p class="mb-4  text-gray-500 dark:text-gray-400 text-justify">
                    تحليل للأثر الاجتماعي والنفسي لعمليات التبرع بالطعام، مُستعرضًا كيف يعمل التبرع عبر "ساهم" على تعزيز
                    التواصل وبناء الروابط الإنسانية في المجتمع.</p>
                <a href="#"
                    class="inline-flex items-center font-medium underline underline-offset-4  text-sahem_pr-500   hover:no-underline">
                    اقرأ المقال كاملا </a>
            </article>
        </div>
    </div>
    </aside>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md sm:text-center">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl dark:text-white text-center">إشترك للتوصل بأحدث مقالاتنا</h2>
                <p class="mx-auto mb-8 max-w-2xl  text-gray-500 md:mb-12 sm:text-xl dark:text-gray-400 text-center">قم بتسجيل بريدك الإلكتروني للتوصل بأحدث مقالاتنا بشكل أسبوعي بالإضافة إلى آخر تطورات المنصة
                </p>
                <form action="#">
                    <div class=" flex flex-row-reverse  max-w-screen-sm  mx-auto mb-2  ">
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path
                                        d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                    <path
                                        d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                </svg>
                            </div>
                            <input
                                class="block p-3 pl-9 w-full text-sm text-gray-900 bg-white  border border-gray-300 rounded-none rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="البريد الإلكتروني" type="email" id="email" required="">
                        </div>
                        <div>
                            <button type="submit"
                                class="py-3 px-5 w-full text-sm font-medium text-center text-white  border cursor-pointer bg-sahem_pr-500 border-primary-600 rounded-none rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">إشترك</button>
                        </div>
                    </div>
                    <div
                        class="mx-auto max-w-screen-sm text-sm sm:text-right text-center text-gray-500 newsletter-form-footer dark:text-gray-300">
                       نحن نهتم بحماية بيانات زوارنا. </div>
                </form>
            </div>
        </div>
    </section>
@endsection
