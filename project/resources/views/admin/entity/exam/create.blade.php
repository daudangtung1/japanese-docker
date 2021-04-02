<p class="text-center text-xl">Ban dang lam phan nghe cua de thi n2</p>
<form>
    <div class="flex space-x-3 mb-10 mt-10 text-sm font-medium">
        <p>Phan Lua Chon Page:</p>
        <div class="flex-auto flex space-x-3">
                <select class="form-control" style="width: 100%" wire:model="status_exam" wire:change="$emit('examSelected','status_exam')">
                    <option value="0" selected="selected">Phan Nghe</option>
                    <option value="1">Tu Vung</option>
                    <option value="2">Doc Hieu</option>
                </select>
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

    @if(isset($listen_mode) && !empty($listen_mode))
            @include('admin.entity.exam.mode.list-listen')
    @endif
    @if(isset($vocabulary_mode) && !empty($vocabulary_mode))
            @include('admin.entity.exam.mode.list-vocabulary')
    @endif
    @if(isset($read_mode) && !empty($read_mode))
            @include('admin.entity.exam.mode.list-read')
    @endif

    <button wire:click.prevent="store()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
</form>
