@extends('layouts.app')

@section('content')
@if($post)
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
                By  <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Posted at {{ date('jS M Y', strtotime($post->updated_at)) }} | 
                <span><i class="fa fa-comment-o"></i>{{ count($post->comments) }}</span>
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

    <div class="p-10 w-4/5 m-auto" id="comments">
        <h2 class="text-3xl pb-5">Leave a Comment</h2>
        @if(session()->has('message'))
        <div class="w-4/5 mt-10 pl-2">
            <p class="w-5/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4 px-4">{{ session()->get('message') }}</p>
        </div>
    @endif
        <hr>
        <form action="/blog/{{ $post->slug }}" method="POST" class="mt-10">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <input class="bg-gray-0 block border-b-2 w-full h-20 text-2xl outline-none mb-10 p-5" name="commentator_name" type="text" placeholder="Your Name.." autocomplete="off" required>
            <input class="bg-gray-0 block border-b-2 w-full h-20 text-2xl outline-none mb-10 p-5" name="commentator_email" type="email" placeholder="Your Email.." autocomplete="off" required>
            <textarea class="bg-gray-0 block border-b-2 w-full h-20 text-2xl outline-none mb-10 p-5" name="comment" placeholder="Write Comment..." required></textarea>
            <button class="uppercase mt-5 bg-blue-500 text-gray-100 text-lg font-extarbold py-4 px-8 rounded-3xl" type="submit">Comment</button>
        </form>
    </div>
    
    {{-- @if($post->id == $comments[0]['post_id']) --}}
    <div class="w-4/5 m-auto mt-10 mb-4 p-10">
        <h4 class="text-2xl mb-4">{{count($post->comments)}} People's commented on this post</h4>
        @foreach ($post->comments as $comment)
            
        <div class="bg-white block border-b-2 w-full mb-5 p-5">
            <div class="flex items-center">
                <h3 class="text-2xl text-extrabold text-blue-500 mb-2">{{ ucwords($comment->username) }}</h3>
                <span class="text-sm text-gray-500 ml-3 mt-3 block">{{ date('jS M Y', strtotime($comment->created_at)) }}</span>
            </div>
            <p class="text-extrabold text-justify leading-4 mt-5">{{ $comment->content }}</p>
        </div>
        @endforeach
    </div>
    {{-- @else
    <div class="w-4/5 m-auto mt-10 mb-4 p-10">
        <h4 class="text-2xl mb-4">This Post have no comments</h4>
    </div>
    @endif --}}
    @else
        <div class="w-4/5 m-auto  mt-20 ">
        <h4 class="text-center text-3xl text-blue-500 font-bold">No Post Found!</h4>
        </div>
    @endif    
@endsection