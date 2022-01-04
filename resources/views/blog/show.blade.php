@extends('layouts.app')

@section('content')
<ul class="flex p-4 items-center bg-gray-50 text-black">
    <li class="list-none mr-2">
        <a class="text-blue-500" href="/blog">Blog</a><span> / </span>
    </li>
    <li>{{ $post->title }}</li>
</ul>
    <div class="w-4/5 m-auto text-center">
       
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl mb-5">{{ $post->title }}</h1>
            <span class="text-gray-500 text-lg">
                By  <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Posted at {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>
           
        </div>
      
    </div>

 
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/'.$post->image_path) }}" alt="{{ $post->title }}">
        </div>
        <div class="text-gray-700 font-bold text-4xl pb-4">
            <p class="text-xl text-gray-700 pb-10 leading-8 font-light">
                {{ $post->article }}
            </p>
        </div>
    </div>
    
@endsection