@extends('layouts.master')
@section('content')
    <div class="flex justify-around mx-auto max-w-screen-xl py-12 my-12 rounded-2xl shadow-xl bg-gray-100  ">
        <div class="w-2/5 flex flex-col gap-4">
            <h1 class="font-madani font-medium text-3xl ">{{ $donation->donation_name }}</h1>
            <div>
                {!! $donation->description !!}
            </div>
            <div class="flex justify-start gap-16">
                <p> الكمية: {{ $donation->quantity . ' ' . $donation->quantity_type }}</p>
                <p> تاريخ إنتهاء الصلاحية: {{ $donation->expiration_date }}</p>
            </div>
            <div class="bg-white p-2 rounded-lg shadow-md">
                <p class="font-bold ">المتبرع</p>
                <div class="flex justify-start items-center gap-4 mt-2">
                    <img class="w-[40px] rounded-full " src={{ asset('storage/' . $donation->donor->image) }} alt="">
                    <p>{{ $donation->donor->type == 'store' ? 'متجر' : 'مطعم' }}</p>
                    <p>{{ $donation->donor->name }}</p>
                    <button data-popover-target="popover-company-profile" type="button"
                        class="bg-sahem_pr-400 text-white p-2 rounded-lg ">معلومات المتبرع</button>

                    <div data-popover id="popover-company-profile" role="tooltip"
                        class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-80 dark:text-gray-400 dark:bg-gray-800 dark:border-gray-600">
                        <div class="p-3">
                            <div class="flex">
                                <div class="me-3 shrink-0">
                                    <a href="#" class="block p-2 bg-gray-100 rounded-lg dark:bg-gray-700">
                                        <img class="w-8 h-8 rounded-full"
                                            src={{ asset('storage/' . $donation->donor->image) }} alt=" logo">
                                    </a>
                                </div>
                                <div>
                                    <p class="mb-1 text-base font-semibold leading-none text-gray-900 dark:text-white">
                                        <a href="#" class="hover:underline">{{ $donation->donor->name }}</a>
                                    </p>
                                    <p class="mb-3 text-sm font-normal">
                                        {{ $donation->donor->type == 'store' ? 'متجر' : 'مطعم' }}
                                    </p>

                                    <ul class="text-sm">
                                        <li class="flex items-center mb-2">
                                            <span class="me-2 font-semibold text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12"
                                                    viewBox="0 0 384 512">
                                                    <path fill="#e46858"
                                                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                                </svg>
                                            </span>
                                            <span >{{ $donation->donor->location }}</span>
                                        </li>
                                        <li class="flex items-start mb-2">
                                            <span class="me-2 font-semibold text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                    viewBox="0 0 512 512">
                                                    <path fill="#e46858"
                                                        d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                                                </svg>

                                            </span>
                                            <span class="-mt-1">{{ $donation->donor->contact_email }}</span>
                                        </li>
                                        <li class="flex items-start mb-2">
                                            <span class="me-2 font-semibold text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                                    viewBox="0 0 512 512">
                                                    <path fill="#e46858"
                                                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                                                </svg>
                                            </span>
                                            <span class="-mt-1">{{ $donation->donor->contact_phone }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div data-popper-arrow></div>
                    </div>

                </div>

            </div>
            <div>
                <form action={{route('donation_requests.store')}} class="flex flex-col w-full" method="POST">
                    @csrf
                    <label class="">أكتب رسالة للمتبرع</label>
                    <textarea class="w-full my-2 bg-gray-50 rounded-xl focus:ring-sahem_pr-500 focus:border-sahem_pr-500" name="message"
                        id="" cols="30" rows="2"></textarea>
                        <input type="hidden" name="donation_id" value={{$donation->id}}>
                    <button
                        class="bg-sahem_pr-500 hover:bg-sahem_pr-600 font-semibold py-3 px-5 rounded-full w-full text-light_1 ">إرسال
                        الطلب</button>
                </form>
            </div>

        </div>
        <img class="w-2/5 border border-sahem-500 rounded-xl object-cover"
            src={{ asset('storage/' . $donation->image_url) }} alt="">
    </div>
@endsection
