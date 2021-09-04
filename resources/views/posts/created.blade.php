<x-layout>
    <x-section>
        <div class="max-w-sm mx-auto">
            <h1 class="text-lg font-bold mb-6">Create a Post</h1>

            <x-form method="POST" 
                    action="/posts/create" 
                    x-data="" 
                    @submit.prevent="$dispatch('recaptcha')"
            >
                <div class="mb-6">
                    <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">Title</label>
                    <input type="text" name="title" id="title" class="border border-gray-400 p-2 w-full" required>
                    @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">Body</label>
                    <textarea type="text" name="body" id="body" class="border border-gray-400 p-2 w-full"
                        required></textarea>
                    @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <x-recaptcha />

                <div class="mb-6">
                    <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
                </div>
                <ul>
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    @endif
                </ul>
            </x-form>
        </div>
    </x-section>
</x-layout>