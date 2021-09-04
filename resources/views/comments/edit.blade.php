<x-layout>
    <x-section>
        <x-form method="PATCH" action="/comments/{{ $comment->id }}" class="">  
            <div class="mb-6">
                <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Body
                </label>
                <textarea class="border border-gray-400 p-2 w-full" name="body" id="body" required>
                    {{ $comment->body }}
                </textarea>
                @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded p-2 hover:bg-blue-500">Submit</button>
            </div>
        </x-form>

        <x-form-button method="DELETE" action="/comments/{{ $comment->id }}"  class="bg-blue-400 text-white rounded p-2 hover:bg-blue-500">
            Delete
        </x-form-button>

    </x-section>
</x-layout>