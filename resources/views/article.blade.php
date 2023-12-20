@extends('layouts.master')
@section('content')
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">

                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        تحول الأزمة إلى فرصة: مساهمة الشباب في مشروع 'ساهم'</h1>
                </header>
                <p class="my-4">
                    أحد أبرز الأسئلة التي تطرح نفسها في عصر اليوم هو كيف يمكننا تحويل التحديات إلى فرص للتأثير الإيجابي في
                    مجتمعنا. في ظل الظروف الراهنة، يبرز دور الشباب بشكل استثنائي كمحرك رئيسي للتغيير الاجتماعي، وهذا ما
                    تجسده مبادرات مثل مشروع "ساهم".

                    مشروع "ساهم" يمثل نموذجًا مشرقًا لكيفية استثمار الشباب لتحويل الأزمات إلى فرص للتأثير الإيجابي. يجمع
                    المشروع بين الحماس والإبداع للمساهمة في حل إحدى أكبر المشكلات التي تواجه المجتمعات، وهي مشكلة الجوع
                    والحاجة إلى الطعام.</p>
                <figure><img class="rounded-lg" src="/assets/blogImages/articleImage1.jpg" alt="">
                </figure>
                <h2 class="text-xl font-madani font-medium my-6">دور الشباب في تحقيق التغيير
                </h2>
                <p>
                    تعتبر مشاركة الشباب في مثل هذه المبادرات خطوة أساسية نحو بناء مستقبل أفضل. إن إدارة وتنظيم مشروع "ساهم"
                    تعكس التزامًا بقيم العمل التطوعي والإيجابيَّة الاجتماعية. يعمل الشباب المتطوع بتفانٍ وحماس كبير لتحقيق
                    أقصى قدر من الفائدة للمحتاجين.</p>

                <h2 class="text-xl font-madani font-medium my-6">تأثير الشباب في بناء الحلول الإبداعية
                </h2>
                <p>
                    بفضل الروح الابتكارية والعقول الشابة، يسهم الشباب في تصميم حلول مبتكرة لمشكلة هدر الطعام وتوزيعها بطرق
                    فعّالة. يعكس ذلك روح المبادرة والإبداع التي يجلبها الشباب في تشكيل الحلول المستدامة لهذه المشكلة
                    الاجتماعية الملحة.</p>
                <h2 class="text-xl font-madani font-medium my-6">تحقيق الأمل والتغيير الإيجابي
                </h2>
                <figure><img class="rounded-lg mb-6" src="/assets/blogImages/articleImage2.jpg" alt="">
                    <p>
                        يُظهر مشروع "ساهم" كيف يمكن للشباب أن يكونوا القوة الدافعة وراء التحولات الإيجابية في المجتمع. إن
                        توجيه
                        الشباب نحو العمل التطوعي والمساهمة في مثل هذه المشاريع يحقق لهم فرصة لتحقيق التغيير الإيجابي وتقديم
                        الدعم الحقيقي لأولئك الذين في أمس الحاجة.

                    </p>
                    <p>
                        في النهاية، يعكس مشروع "ساهم" نموذجًا ملهمًا لمساهمة الشباب في بناء مجتمعات أكثر إنسانية وتضامنية،
                        حيث
                        يؤكد على أهمية دور الشباب في تحويل التحديات إلى فرص تجسيدًا للتغيير الإيجابي الفعّال.</p>


                    <section class="mt-8">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">التعليقات (20)</h2>
                        </div>
                        <form class="mb-6">
                            <div
                                class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                                <label for="comment" class="sr-only">Your comment</label>
                                <textarea id="comment" rows="6"
                                    class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                    placeholder="اكتب تعليقك..." required></textarea>
                            </div>
                            <button type="submit"
                                class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                Post comment
                            </button>
                        </form>
                        <article class="p-6 mb-6 text-base bg-white rounded-lg dark:bg-gray-900">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p
                                        class="inline-flex items-center mr-3 font-semibold text-sm text-gray-900 dark:text-white">
                                        <img class="mr-2 w-6 h-6 rounded-full"
                                            src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                            alt="Michael Gough">عبد الرزاق حمد الله
                                    </p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                                            title="February 8th, 2022">Feb. 8, 2022</time></p>
                                </div>
                                <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:text-gray-400 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    type="button">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 16 3">
                                        <path
                                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                    </svg>
                                    <span class="sr-only">Comment settings</span>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownComment1"
                                    class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">تعديل</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">حدف</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">تبليغ</a>
                                        </li>
                                    </ul>
                                </div>
                            </footer>
                            <p>
                                "مقال مُلهم حقًا! يعكس دور الشباب الإيجابي في بناء مجتمع أفضل. أشكركم على مشاركة
                                هذه القصص الملهمة."</p>
                            <div class="flex items-center mt-4 space-x-4">
                                <button type="button"
                                    class="flex items-center font-medium text-sm text-gray-500 hover:underline dark:text-gray-400 gap-2">
                                    <svg class="mr-1.5 w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 18">
                                        <path
                                            d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                                    </svg>
رد                                 </button>
                            </div>
                        </article>
                        <article class="p-6 mb-6 ml-6 lg:ml-12 text-base bg-white rounded-lg dark:bg-gray-900">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p
                                        class="inline-flex items-center mr-3 font-semibold text-sm text-gray-900 dark:text-white">
                                        <img class="mr-2 w-6 h-6 rounded-full"
                                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                            alt="Jese Leos">عبد الله المعيوف
                                    </p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-12"
                                            title="February 12th, 2022">Feb. 12, 2022</time></p>
                                </div>
                                <button id="dropdownComment2Button" data-dropdown-toggle="dropdownComment2"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:text-gray-400 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    type="button">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 16 3">
                                        <path
                                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                    </svg>
                                    <span class="sr-only">Comment settings</span>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownComment2"
                                    class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">تعديل</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">حدف</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">تبليغ</a>
                                        </li>
                                    </ul>
                                </div>
                            </footer>
                            <p> "الشباب يمتلكون القدرة على تغيير العالم وهذا المشروع دليل حي على ذلك. مبادرة مذهلة ومقال يحث
                                على العمل الإيجابي!"</p>
                            <div class="flex items-center mt-4 space-x-4">
                                <button type="button"
                                    class="flex items-center font-medium text-sm text-gray-500 hover:underline dark:text-gray-400 gap-2">
                                    <svg class="mr-1.5 w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 18">
                                        <path
                                            d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                                    </svg>
رد                                 </button>
                            </div>
                        </article>
                        <article
                            class="p-6 mb-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <footer class="flex justify-between items-center mb-2">
                                <div class="flex items-center">
                                    <p
                                        class="inline-flex items-center mr-3 font-semibold text-sm text-gray-900 dark:text-white">
                                        <img class="mr-2 w-6 h-6 rounded-full"
                                            src="https://flowbite.com/docs/images/people/profile-picture-3.jpg"
                                            alt="Bonnie Green">سلطان الفرحان
                                    </p>
                                    <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate
                                            datetime="2022-03-12" title="March 12th, 2022">Mar. 12, 2022</time></p>
                                </div>
                                <button id="dropdownComment3Button" data-dropdown-toggle="dropdownComment3"
                                    class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:text-gray-400 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                    type="button">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 16 3">
                                        <path
                                            d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                    </svg>
                                    <span class="sr-only">Comment settings</span>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownComment3"
                                    class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">تعديل</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">حدف</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">تبليغ</a>
                                        </li>
                                    </ul>
                                </div>
                            </footer>
                            <p>"أتفق تمامًا مع فكرة استثمار طاقات الشباب في مشاريع مثل 'ساهم'. نحن بحاجة إلى المزيد من
                                التحفيز والدعم لتمكين الشباب للمساهمة بشكل أكبر في خدمة المجتمع."</p>
                            <div class="flex items-center mt-4 space-x-4">
                                <button type="button"
                                    class="flex items-center font-medium text-sm text-gray-500 hover:underline dark:text-gray-400 gap-2">
                                    <svg class="mr-1.5 w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 18">
                                        <path
                                            d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                                    </svg>
رد                                 </button>
                            </div>
                        </article>

                    </section>
            </article>
        </div>
    </main>
@endsection
