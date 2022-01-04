@extends('layouts.app')

@section('content')

<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Do You want to become a Developer?
            </h1>
            <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">Explore Now</a>
        </div>
    </div>
</div>
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-20 border-b border-gray-200">
    <div>
        <img src="https://images.unsplash.com/photo-1554415707-6e8cfc93fe23?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" width="700">
    </div>
    <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-3xl font-extrabold text-gray-600">Struggling to be a better web developer?</h2>
        <p class="py-8 text-gray-500 text-s">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum accusantium dolorum quo nam porro dolore id, delectus fugit culpa cumque blanditiis eveniet dicta reprehenderit vel labore quisquam quae alias totam enim saepe corporis fugiat maiores veniam maxime. Expedita minima modi repudiandae quibusdam culpa error laboriosam optio, cumque alias. Doloribus, provident!</p>

        <p class="font-extrabold text-gray-600 text-s pb-9">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores officiis molestiae delectus corporis laudantium fugit!
        </p>
        <a href="/" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">Find Out More</a>
    </div>
</div>
<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl pb-5 text-l">I'm an expert in ....</h2>
    <span class="font-extrabold block text-4xl py-1">UX Design</span>
    <span class="font-extrabold block text-4xl py-1">Web Design</span>
    <span class="font-extrabold block text-4xl py-1">Web development</span>
    <span class="font-extrabold block text-4xl py-1">SEO Expert</span>
    <span class="font-extrabold block text-4xl py-1">Wordpress Expert</span>
</div>


<div class="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        Blog
    </span>
    <h2 class="text-4xl font-bold py-10">Recent Posts</h2>
    <p class="m-auto w-4/5 text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet, perferendis.</p>
</div>
<div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">PHP</span>
            <h3 class="text-xl font-bold py-10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, quas itaque. Rem deserunt cum culpa quibusdam laborum eligendi laudantium facilis dolorum. Iure quam rerum reiciendis? Mollitia quasi, iste eligendi modi inventore sapiente ipsa quo placeat maiores quibusdam soluta dolorum neque reprehenderit quas a, officia tenetur explicabo recusandae minus error. Iure.
            </h3>
            <a href="/" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Find Out More</a>
        </div>
        
    </div>
    <div>
        <img src="https://images.unsplash.com/photo-1516387938699-a93567ec168e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8bGFwdG9wfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" width="700">
    </div>
</div>
@endsection