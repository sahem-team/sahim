@extends('layouts.master')
@section('content')
    <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-3  gap-12 py-24 px-8 mx-auto max-w-screen-xl ">
        @foreach ($donations as $donation)
            <div class="bg-white  shadow-xl hover:shadow-md rounded-xl dark:bg-gray-800  ">
                <a href={{route('donations.show', ['donation' => $donation->id])}} class=""><img src={{ asset('storage/' . $donation->image_url) }} alt=""
                        class="object-cover w-full h-64 rounded-t-lg "></a>
                <div class="p-5">
                    <a href={{route('donations.show', ['donation' => $donation->id])}} class="">
                        <h2 class="mb-2 text-xl font-bold tracking-tight text-gray-700 dark:text-gray-400">
                            {{ $donation->donation_name }}</h2>
                    </a>
                    <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">{!! $donation->description !!}</div>
                    <a href={{route('donations.show', ['donation' => $donation->id])}} class=" ">

                        <button
                            class="bg-sahem_pr-500 hover:bg-sahem_pr-600 font-semibold py-3 px-5 rounded-full w-full text-light_1 ">قدم
                            طلب</button>

                    </a>

                </div>
            </div>
        @endforeach
        {{-- <div class="bg-black">
            {{ $donations->links() }}
        </div> --}}
    </div>
@endsection
