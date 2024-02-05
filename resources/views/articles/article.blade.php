@extends('layouts.master')
@section('content')
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            {!!$article->body!!}
        </div>
    </main>
@endsection
