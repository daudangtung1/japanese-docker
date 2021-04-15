<p class="text-center text-xl">Ban dang lam phan nghe cua de thi n2</p>
<livewire:admin.components.return-button-admin/>
<form>
    <div class="flex space-x-3 mb-10 mt-10 text-sm font-medium">
        <p>Phan Lua Chon Page:</p>
        <div class="flex-auto flex space-x-3">
            <select class="form-select block w-full mt-1 w-full" wire:model="status_exam" wire:change="$emit('examSelected','status_exam')">
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
                <select class="form-select block w-full mt-1 w-full" wire:model="exam_category_id">
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

    <div class="mb-10 mt-10">
        <a href="#listen"
           class="no-underline hover:underline bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Listen</a>
    </div>

    <div class="mb-10 mt-10">
        <a href="#read"
           class="no-underline hover:underline bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Read</a>
    </div>

    <div class="mb-10 mt-10">
        <a href="#vocabulary"
           class="no-underline hover:underline bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Vocabulary</a>
    </div>

    @include('admin.entity.exam.mode.list-listen')
    @include('admin.entity.exam.mode.list-vocabulary')
    @include('admin.entity.exam.mode.list-read')

    <button wire:click.prevent="store()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Save
    </button>
</form>
