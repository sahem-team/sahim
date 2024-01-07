@extends('layouts.master')
@section('content')
    <div class="flex flex-col max-w-screen-xl justify-end pt-12 mx-auto relative z-0 overflow-x-clip">
        <h1 class="text-5xl mb-4 font-almaria text-center">تواصل معنا </h1>
        <div class="flex sm:flex-row flex-col gap-6 sm:gap-0 justify-around my-12">
            <div class="flex flex-col items-center">
                <h3 class="font-madani text-xl mb-2 font-medium">مركزنا </h3>
                <p>{{$home->contact_us_location}}
                </p>
            </div>
            <div class="flex flex-col items-center">
                <h3 class="font-madani text-xl mb-2 font-medium">البريد الالكتروني
                </h3>
                <p>{{$home->contact_us_email}}
                </p>
            </div>
            <div class="flex flex-col items-center">
                <h3 class="font-madani text-xl mb-2 font-medium">الهاتف / واتساب
                </h3>
                <p dir="ltr">{{$home->contact_us_phone}}
                </p>
            </div>
        </div>
        <div class="flex sm:flex-row flex-col-reverse items-center justify-between">
            <img src="/assets/graphics/contact us.svg" class="sm:h-[500px] characters z-50 sm:-mb-[60px] -mb-12" alt="">
            <form action="{{route('contactUs.store')}}" method="POST"  class="sm:w-1/2">
                @csrf
                        <div class="mb-6">
                            <div class="mx-0 mb-1 sm:mb-4">
                                <div class="mx-0 mb-1 sm:mb-4">
                                    <label for="name" class="pb-1 text-xs uppercase tracking-wider"></label><input type="text" id="name"  placeholder="الاسم الكامل" class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md  sm:mb-0" name="name">
                                </div>
                                <div class="mx-0 mb-1 sm:mb-4">
                                    <label for="email" class="pb-1 text-xs uppercase tracking-wider"></label><input type="email" id="email"  placeholder="البريد الالكتروني  " class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md  sm:mb-0" name="email">
                                </div>
                            </div>
                            <div class="mx-0 mb-1 sm:mb-4">
                                <label for="textarea" class="pb-1 text-xs uppercase tracking-wider"></label><textarea id="textarea" name="message" cols="30" rows="5" placeholder="أكتب رسالتك هنا..." class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md  sm:mb-0"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="w-full bg-sahem_pr-500 hover:bg-sahem_pr-600 text-white px-6 py-3 font-xl rounded-md sm:mb-0">أرسل </button>
                        </div>
                    </form>

        </div>
    </div>
@endsection
