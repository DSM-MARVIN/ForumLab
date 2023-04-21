<div>

                                    {{-- Title --}}
                                <div>
                                    <x-form.label for="title" value="{{ __('Title') }}" />
                                    <x-form.input id="title" wire:model="title" class="block w-full mt-1 mb-5" type="text" name="title" :value="old('title')" autofocus />
                                    <x-form.error for="title" />
                                </div>

                                {{-- Category --}}
                                <div>
                                    <x-form.label for="category" value="{{ __('Category') }}" />
                                    <select name="category" wire:model="category" id="category" class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 mb-5">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id() }}">{{ $category->name() }}</option>
                                        @endforeach
                                    </select>
                                    <x-form.error for="category" />
                                </div>

                                {{-- Image --}}
<x-form.label for="image" value="{{ __('Image') }}" />
    <input value="null" name="image" class="mb-5" type="file" wire:model="image" >

    {{-- Body --}}
    <div>
        <x-form.label id="dis" for="body" value="{{ __('Description') }}" />
        <x-form.input id="demo1"  class="block w-full mt-1" type="text" wire:model="body" name="body" autofocus value="333"/>
        <!-- <x-trix name="body" styling="shadow-inner bg-gray-100 h-56" /> -->
        <x-form.error for="body" /> 
    </div><br>
    {{-- Button --}}
    <x-buttons.primary wire:click="upload">
                                    {{ __('Create') }}
    </x-buttons.primary>
</div>


