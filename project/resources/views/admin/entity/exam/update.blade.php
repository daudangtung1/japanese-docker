<p class="text-center text-xl">PAGE EDIT</p>
<div class="flex space-x-3 mb-10 mt-10 text-sm font-medium">
    <p>Phan Lua Chon :</p>
    <div class="flex-auto flex space-x-3">
        <button wire:click="vocabulary()" class="w-1/4 flex items-center justify-center rounded-md border border-gray-300" type="button">Tu Vung</button>
        <button wire:click="listening()" class="w-1/4 flex items-center justify-center rounded-md border border-gray-300" type="button">Nghe</button>
        <button wire:click="read()" class="w-1/4 flex items-center justify-center rounded-md border border-gray-300" type="button">Doc Hieu</button>
        <button wire:click="full()" class="w-1/4 flex items-center justify-center rounded-md bg-black text-white" type="button">Tron de</button>
    </div>
</div>
<div class="flex space-x-3 mb-10 mt-10 text-sm font-medium">
    <p>Level :</p>
    <div class="flex-auto flex space-x-3">
        @if(is_object($exam_category))
            <select class="form-control" style="width: 100%" wire:model="meta_exam.module.exam_category">
                @foreach ($exam_category as $category)
                    <option value="{{ $category->id }}" wire:click="selectItems({{$category->id}})">
                        {{ $category->exam_categories }}
                    </option>
                @endforeach
            </select>
        @endif
    </div>
</div>
<div class="flex space-x-3 mb-10 mt-10 text-sm font-medium">
    <p>All Question : 180 cau</p>
</div>

@if($full_mode)
    @include('admin.entity.exam.mode.list-full-mode')
@else
    @if($listen_mode)
        @include('admin.entity.exam.mode.list-listen')
    @endif
    @if($vocabulary_mode)
        @include('admin.entity.exam.mode.list-vocabulary')
    @endif
    @if($read_mode)
        @include('admin.entity.exam.mode.list-read')
    @endif
    @if($full_mode)
        @include('admin.entity.exam.mode.list-full-mode')
    @endif
@endif
<button wire:click.prevent="update()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
<button wire:click.prevent="cancel()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cancel</button>
