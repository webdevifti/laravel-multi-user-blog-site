@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">Create a New Posts</h1>
    </div>
</div>

@if($errors->any())
<div class="w-4/5 m-auto">
    <ul>
        @foreach ($errors->all() as $error)
            <li class="w-1/5 mb-4 text-gray-50 bg-red-700 round-2x py-4 px-3">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form action="/blog" method="POST" enctype="multipart/form-data">
        @csrf

        <input class="bg-gray-0 block border-b-2 w-full h-20 text-2xl outline-none mb-10 p-5" type="text" name="title" placeholder="Title...">
        <textarea name="article" class="bg-gray-0 block border-b-2 w-full h-50 text-2xl outline-none px-5 py-5"  cols="30" rows="10" placeholder="Write content..."></textarea>
        <div class="bg-gray-ligther pt-15">
            <label class="w-44 flex items-center flex-col px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">Select a file</span>
                <input type="file" name="image" class="hidden">
            </label>
        </div>

        <button class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extarbold py-4 px-8 rounded-3xl" type="submit">Publish</button>
    </form>
</div>
@endsection