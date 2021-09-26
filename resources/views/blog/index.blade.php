@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">Blog Posts</h1>
        </div>
    </div>
 @if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2 text-center">
        <p class="w-3/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
 @endif

    @foreach ($posts as $post )
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
            <div>
                <img src="{{ asset('image/'.$post->image_path)}}" alt="" width="700" class="m-auto">  
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4">{{ $post->title }}</h2>
                By: <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>
               created on {{ date('jS M Y',strtotime($post->created_at)) }}
                

                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">{{ $post->description }}</p>

                <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">Keep reading</a>

                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                    <span class="float-right">
                        <a href="/blog/{{ $post->slug }}/edit" class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">edit</a>
                    </span>
                    <span class="float-right">
                        <form action="/blog/{{ $post->slug }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="text-red-500 pr-3" type="submit">Delete</button>
                        </form>
                    </span>
                @endif
            </div>
        </div>
    @endforeach
   
    
@endsection