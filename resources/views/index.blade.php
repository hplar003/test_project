@extends('layouts.app')

@section('content')

  <div class="background-image grid grid-cols-1 m-auto ">
      <div class="flex text-gray-100 pt-10">
          <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text center ">
              <h1 class="sm:text white text-5xl uppercase font-bold text-shadow-md pb-14">Do yo want to become a developer?</h1>
              <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase rounded-md">Read more...</a>
          </div>
      </div>
  </div>

  <div class="sm:grid grid-cols-2 gap-20 w-25 mx-auto py-15 border-b border-gray-200 container" >
      <div>
          <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_1280.jpg" alt="" width="700"> 
      </div>

      <div class="m-auto sm:m-auto text-left w-4/5 block">
        <h2 class="text-4xl font-extrabold text-gray-600">Struggling to be a developer?</h2>
        <p class="py-8 text-gray-500 text-l">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, facere!</p>
        <p class="font-extrabold text-gray-600 text-s pb-9">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis nobis necessitatibus numquam quaerat quia rerum.</p>
        <a href="" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl hover:text-gray-200">Find out more</a>
      </div>
  </div>

  <div class="text-center p-15 bg-black text-white ">

        <h2 class="text-2xl pb-5 text-l">I'm expert in ...</h2>
        <span class="font-extrabold block text-4xl py-1">UX Design</span>
        <span class="font-extrabold block text-4xl py-1">Project Management</span>
        <span class="font-extrabold block text-4xl py-1">Digital Strategy</span>
        <span class="font-extrabold block text-4xl py-1">Backend Development</span>

  </div>

  <div class="text-center py-15">
      <span class="uppercase text-s text-gray-400">Blog</span>
      <h2 class="text-4xl font-bold py-10">Recent Post</h2>
      <p class="m-auto w-4/5 text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta sit eos repudiandae exercitationem debitis, quidem laudantium hic fuga impedit amet eaque dolorum in nostrum perspiciatis magnam animi veritatis nobis dolores?</p>
  </div>

  <div class="sm:grid grid-cols-2 w-4/5 m-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
            <span class="uppercase text-xs">PHP</span>
            <h3 class="text-xl font-bold py-10">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, est voluptatibus ipsum beatae libero corrupti ducimus reprehenderit eum deleniti, fugit totam voluptas nostrum sit asperiores eos quae a, vero ipsa quas delectus nobis? Veniam commodi unde maxime incidunt illum pariatur itaque vel molestiae officiis consequuntur libero, consequatur veritatis et adipisci!</h3>
            <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Find out more...</a>
        </div>
    </div>
        <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_1280.jpg" alt="" width="700" class="m-auto">  
  </div>
    
@endsection