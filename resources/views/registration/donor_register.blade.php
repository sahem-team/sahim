@extends('layouts.master')
@section('content')
    <section class="py-16 bg-gray-100 dark:bg-gray-800">
        <div class="max-w-4xl px-4 mx-auto ">
            <div class="p-6 bg-white rounded-md shadow dark:border-gray-800 dark:bg-gray-900">
                <div class="flex flex-col justify-center items-center mb-6">
                    <img src="/assets/graphics/donor_account.png" alt="" class="w-24" />
                    <h2 class=" text-center text-xl font-medium leading-6 text-gray-900 dark:text-gray-300"> إنشاء حساب متبرع
                    </h2>

                </div>
                <form action="/donor-register" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="grid grid-cols-2 gap-x-4 gap-y-4">
                        <div class="flex flex-col gap-2">
                            <label for="name" class="font-medium ms-2 ">إسم المستخدم</label>
                            <input type="text" name="name" placeholder="محمد حكيم" value="{{old('name')}}"
                                class="rounded-md focus:ring-2 focus:ring-sahem_pr-500 focus:border-sahem_pr-500 ">
                                @error('name')
                                <div class="text-red-500">{{$message}}</div>
                                @enderror
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="font-medium ms-2 ">البريد الإلكتروني </label>
                            <input name="email" type="email" placeholder="donor@email.com" autocomplete="false" value="{{old('email')}}"
                                class="rounded-md focus:ring-2 focus:ring-sahem_pr-500 focus:border-sahem_pr-500 ">
                                @error('email')
                                <div class="text-red-500">{{$message}}</div>
                                @enderror
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="font-medium ms-2 ">كلمة السر </label>
                            <input id="password" name="password" type="password" placeholder="xxxxxxxx"
                                class="rounded-md focus:ring-2 focus:ring-sahem_pr-500 focus:border-sahem_pr-500 ">
                                 @error('password')
                                <div class="text-red-500">{{$message}}</div>
                                @enderror
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="font-medium ms-2 "> تأكيد كلمة السر </label>
                            <input id="password" type="password" name="password_confirmation" required
                                placeholder="xxxxxxxx"
                                class="rounded-md focus:ring-2 focus:ring-sahem_pr-500 focus:border-sahem_pr-500 ">
                                 @error('password')
                                <div class="text-red-500">{{$message}}</div>
                                @enderror
                        </div>
                    </div>

                    <hr class="my-6 h-[2px] bg-sahem_pr-500 ">

                    <div class="grid grid-cols-2 gap-x-4 gap-y-4">
                        <div class="flex flex-col gap-2">
                            <label class="font-medium ms-2 ">إسم المؤسسة</label>
                            <input name="user_name" type="text" placeholder="مثال: مطعم الشباب  " value="{{old('user_name')}}"
                                class="rounded-md focus:ring-2 focus:ring-sahem_pr-500 focus:border-sahem_pr-500 ">
                                @error('user_name')
                                <div class="text-red-500">{{$message}}</div>
                                @enderror
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="font-medium ms-2 ">نوع المتبرع </label>
                            <select name="type" id=""
                                class="rounded-md focus:ring-2 focus:ring-sahem_pr-500 focus:border-sahem_pr-500 ">
                                <option value="restaurant">مطعم</option>
                                <option value="store">متجر</option>
                            </select>

                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="font-medium ms-2">الشعار</label>
                            <label name="" for="image"
                                class="bg-dark_2 text-center font-madani py-2 rounded-lg text-light_2 hover:cursor-pointer hover:bg-dark_1">
                                تحميل الصورة
                            </label>
                            <input name="image" type="file" id="image" placeholder="مثال: مطعم الشباب"
                                class="hidden" onchange="displayFileName()">
                                @error('image')
                                <div class="text-red-500">{{$message}}</div>
                                @enderror
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="font-medium ms-2 ">الموقع </label>
                            <input name="location" type="text" placeholder="مثال: مدينة الرياض   " value="{{old('location')}}"
                                class="rounded-md focus:ring-2 focus:ring-sahem_pr-500 focus:border-sahem_pr-500 ">
                                @error('location')
                                <div class="text-red-500">{{$message}}</div>
                                @enderror
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="font-medium ms-2 ">رقم الهاتف للتواصل </label>
                            <input name="contact_phone" type="text" placeholder="0123456789" value="{{old('contact_phone')}}"
                                class="rounded-md focus:ring-2 focus:ring-sahem_pr-500 focus:border-sahem_pr-500 ">
                                @error('contact_phone')
                                <div class="text-red-500">{{$message}}</div>
                                @enderror
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="font-medium ms-2 ">البريد الإلكتروني للتواصل </label>
                            <input name="contact_email" type="text" placeholder="donor@emial.com" value="{{old('contact_email')}}"
                                class="rounded-md focus:ring-2 focus:ring-sahem_pr-500 focus:border-sahem_pr-500 ">
                                @error('contact_email')
                                <div class="text-red-500">{{$message}}</div>
                                @enderror
                        </div>

                    </div>
                    <button type="submit"
                        class=" w-full my-8 bg-sahem_pr-500 text-center font-madani py-2 rounded-lg text-light_2 hover:cursor-pointer hover:bg-sahem_pr-600 ">تسجيل</button>

                </form>
            </div>
        </div>
        </div>
        <script>
            function displayFileName() {
                const input = document.getElementById('image');
                const label = document.querySelector('.bg-dark_2');

                if (input.files && input.files[0]) {
                    label.textContent = input.files[0].name;
                } else {
                    label.textContent = 'تحميل الصورة';
                }
            }
        </script>
    </section>
@endsection

