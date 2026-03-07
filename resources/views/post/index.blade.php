<x-layout :title="$title">
   <a href="/blog/create"
             class=" bg-indigo-600 text-white px-4 py-2 rounded-md text-sm mb-[20px] font-semibold shadow hover:bg-indigo-500 transition">
            Create 
          </a>
@if(session('success'))
<div class="text-green-500  px-4 py-2 rounded-md text-sm mb-[20px] font-semibold shadow">
  {{ session('success') }}

</div>
@endif
          <div class="mt-[20px]">
            @foreach($posts as $post)
              <h2>{{ $post->title }}</h2>
              <h2>{{ $post->id }}</h2>
              <p>{{ $post->body }}</p>
          
            @endforeach

          </div>
{{$posts->links()}}
</x-layout>
