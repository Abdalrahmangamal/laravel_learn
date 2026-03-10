<x-layout-simple :title="$pagetitle">
<div class="min-h-screen w-full flex items-center justify-center bg-gradient-to-br from-slate-900 to-slate-700">

    <div class="bg-white w-[420px] p-8 rounded-2xl shadow-2xl">

        <h2 class="text-2xl font-semibold text-center mb-6 text-gray-800">
            Login to Your Account
        </h2>

        <form action="/login" method="post" class="space-y-4">
            @csrf

           

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Email address
                </label>
                <input 
                    type="email" 
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Enter your email"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                >
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Password
                </label>
                <input 
                    type="password" 
                    name="password"
                    
                    placeholder="Enter your password"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                >
            </div>
           
@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>
        <p class="text-red-500 text-sm">
            {{ $error }}
        </p>
    </div>
@endforeach
@endif


            <!-- Button -->
            <button 
                type="submit"
                class="w-full bg-blue-600 text-white py-2.5 rounded-lg font-medium hover:bg-blue-700 transition duration-200"
            >
                Log In
            </button>

        </form>

    </div>

</div>


</x-layout-simple>