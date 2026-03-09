<x-layout :title="$title">
    <h2>{{ $post->title }}</h2>
    <h2>{{ $post->id }}</h2>
    <p>{{ $post->body }}</p>
        @foreach($post->comments as $comment)
        <h1>Comment</h1>
        
      <h2>{{ $comment->author }}</h2>
      <h2>{{ $comment->id }}</h2>
      <p>{{ $comment->content }}</p>
      
  @endforeach
  <form method="POST" action="/comments" class="max-w-4xl mx-auto py-16">
     @csrf
  <div class="space-y-12">

    <div class="border-b border-gray-200 pb-12">
      
      <h2 class="text-2xl font-bold text-gray-900">add comment</h2>
      <p class="mt-2 text-sm text-gray-500">
        This information will be displayed publicly, so be careful what you share.
      </p>

      <div class="mt-10 grid grid-cols-1 gap-x-8 gap-y-8 sm:grid-cols-6">

        <!-- id -->
        <input type="hidden" name="post_id" value="{{ $post->id }}" />
       
        <!-- Author -->
        <div class="sm:col-span-3">
          <label for="author" class="block text-sm font-medium text-gray-900">
            Author
          </label>
          <div class="mt-2">
            <input
              id="author"
            value="{{old('author',$post->author)  }}"
              name="author"
              type="text"
              class=" {{ $errors->has('author')?'border-red-500':'' }} block w-full rounded-md border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
            />
          </div>
          @error('author')
          <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <!-- content -->
        <div class="col-span-full">
          <label for="content" class="block text-sm font-medium text-gray-900">
            content
          </label>
          <div class="mt-2">
            <textarea
              id="content"
              name="content"
              rows="4"
              class="{{ $errors->has('content')?'border-red-500':'' }} block w-full rounded-md border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
            > {{old('content',$post->content)  }}</textarea>
          </div>
             @error('content')
          <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

       

      </div>

      <!-- Buttons -->
      <div class="mt-10 flex items-center justify-end gap-6">
        <button
          type="button"
          class="text-sm font-semibold text-gray-700 hover:text-gray-900"
        >
          Cancel
        </button>

        <button
          type="submit"
          class="rounded-md bg-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow hover:bg-indigo-500 transition"
        >
          Save Post
        </button>
      </div>

    </div>

  </div>

</form>

</x-layout>
