<x-layout :title="$title">

<form method="POST" action="/blog" class="max-w-4xl mx-auto py-16">
     @csrf
  <div class="space-y-12">

    <div class="border-b border-gray-200 pb-12">
      
      <h2 class="text-2xl font-bold text-gray-900">Create New Post</h2>
      <p class="mt-2 text-sm text-gray-500">
        This information will be displayed publicly, so be careful what you share.
      </p>

      <div class="mt-10 grid grid-cols-1 gap-x-8 gap-y-8 sm:grid-cols-6">

        <!-- Title -->
        <div class="sm:col-span-3">
          <label for="title" class="block text-sm font-medium text-gray-900">
            Title
          </label>
          <div class="mt-2">
            <input
              id="title"
              name="title"
              value="{{ old('title') }}"
              type="text"
              class="{{ $errors->has('title')?'border-red-500':'' }} block w-full rounded-md border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
            />
          </div>
          @error('title')
          <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>
        <!-- Author -->
        <div class="sm:col-span-3">
          <label for="author" class="block text-sm font-medium text-gray-900">
            Author
          </label>
          <div class="mt-2">
            <input
              id="author"
            value="{{ old('author') }}"
              name="author"
              type="text"
              class=" {{ $errors->has('author')?'border-red-500':'' }} block w-full rounded-md border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
            />
          </div>
          @error('author')
          <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <!-- Body -->
        <div class="col-span-full">
          <label for="body" class="block text-sm font-medium text-gray-900">
            Body
          </label>
          <div class="mt-2">
            <textarea
              id="body"
              name="body"
              rows="4"
              class="{{ $errors->has('body')?'border-red-500':'' }} block w-full rounded-md border border-gray-300 px-3 py-2 text-sm shadow-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
            >{{ old('body') }}</textarea>
          </div>
             @error('body')
          <span class="text-red-500 text-sm">{{ $message }}</span>
          @enderror
        </div>

        <!-- Published Checkbox -->
        <div class="col-span-full">
          <div class="flex items-center gap-3">
            <input
              id="published"
              name="published"
              type="checkbox"
              value="1"
              class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
            />
            <label for="published" class="text-sm font-medium text-gray-700">
              Published
            </label>
          </div>
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