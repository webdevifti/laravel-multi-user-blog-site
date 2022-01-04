@extends('layouts.app')

@section('content')
<ul class="flex p-4 items-center bg-gray-50 text-black">
    <li class="list-none mr-2">
        <a class="text-blue-500" href="/blog">Blog</a><span> / </span>
    </li>
    <li>{{ $post->title }}</li>
</ul>
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">Edit Posts</h1>
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
    {{-- enctype="multipart/form-data" --}}
    <form action="/blog/{{ $post->slug }}" method="POST">

        @csrf
        @method('PUT')

        <input class="bg-gray-0 block border-b-2 w-full h-20 text-2xl outline-none mb-10 p-5" type="text" name="title" value={{ $post->title }}>
        <textarea name="article" class="bg-gray-0 block border-b-2 w-full h-50 text-2xl outline-none px-5 py-5"  cols="30" rows="10">{{ $post->article }}</textarea>
        {{-- <div class="bg-gray-ligther pt-15">
            <label class="w-44 flex items-center flex-col px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">Select a file</span>
                <input type="file" name="image" class="hidden">
            </label>
        </div> --}}

        <button class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extarbold py-4 px-8 rounded-3xl" type="submit">Edit</button>
    </form>
</div>
@endsection