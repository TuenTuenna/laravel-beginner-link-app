<x-layout>
  <x-section>
{{-- 자체 적으로 만든 form 콤포넌트를 사용 했다. --}}
      <x-form
          method="PATCH"
          action="/comments/{{ $comment->id }}"
      >
          <div class="mb-6">
              <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                  Body
              </label>
              <textarea name="body" id="body"
                        class="border border-gray-400 p-2 w-full"
                        required>
                {{ $comment->body }}
            </textarea>
              @error('body')
              <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
              @enderror
          </div>

          <div class="mb-6">
              <button type="submit"
                      class="bg-blue-400 text-white rounded p-2 hover:bg-blue-500">
                  Submit
              </button>
          </div>
      </x-form>


      <x-form-button
          method="DELETE"
          action="/comments/{{ $comment->id }}"
      >
          DELETE
      </x-form-button>


  </x-section>
</x-layout>
