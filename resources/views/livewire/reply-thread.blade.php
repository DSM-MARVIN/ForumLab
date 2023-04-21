<div>
    {{-- The whole world belongs to you. --}}
    <input type="file" value="no_file" name="image" id="image" wire:model="image" class="w-full bg-gray-200 border-none shadow-inner focus:ring-blue-400">
    <!-- <div class=""  wire:click="save">conf</div> -->
    <input value="{{$imageUrl}}" type="text" name="image_url" id="image_url" class="hidden">
    
    <div class="grid mt-4">
                        {{-- Button --}}
<div onclick="clickme()" class="justify-self-end inline-flex items-center px-4 py-2 bg-gray-300 border-b-4 border-gray-400 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 active:bg-blue-600 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" wire:click="save">Post</div>

                        <!-- <x-buttons.primary class="justify-self-end" onclick="clickme()" wire:click="save">
                            {{ __('Post') }}
                        </x-buttons.primary> -->
                        </div>
    </div>
