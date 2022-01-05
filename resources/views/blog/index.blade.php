@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">Blog Posts</h1>
        </div>
    </div>

    @if(Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a href="/blog/create" class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Create a Post</a>
        </div>
    @endif

    @if(session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-1/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4 px-4">{{ session()->get('message') }}</p>
        </div>
    @endif
    @foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('images/'.$post->image_path) }}" alt="{{ $post->title }}">
        </div>
        <div class="text-gray-700 font-bold text-4xl pb-4">
            <h2>{{ $post->title }}</h2>
            @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <div class="flex items-center">
                    <span>
                        <a href="/blog/{{ $post->slug }}/edit" class="text-sm text-blue-500 italic hover:text-gray-700 p-2 border-b-2">Edit</a>
                    </span>
                    <span>
                        <form action="/blog/{{ $post->slug }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-500 text-sm italic hover:text-gray-900 p-2 border-b-2">Delete</button>
                        </form>
                    </span>
                </div>
            @endif
            <span class="text-gray-500 text-sm">
                By  <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Posted at {{ date('jS M Y', strtotime($post->updated_at)) }} | 

                <span class="text-sm"><i class="fa fa-comment-o"></i> {{count($post->comments)}}</span>
            </span>
           
            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ substr($post->article, 0, 100) }} ...
            </p>
            <a href="/blog/{{ $post->slug }}" class="uppercase font-extrabold py-4 text-gray-100 text-lg py-4 px-8 rounded-3xl bg-blue-500">Keep Reading</a>
        </div>
    </div>
    @endforeach
    
@endsection