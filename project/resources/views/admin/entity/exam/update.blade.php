<p class="text-center text-xl">Ban dang lam phan nghe cua de thi n2</p>
<livewire:admin.components.return-button-admin />
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
            @if($exam_categories)
                <select class="form-control" style="width: 100%" wire:model="exam_category_id">
                    @foreach ($exam_categories as $category)
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
    <livewire:admin.components.update-exam-link />

    @if(isset($listen_mode) || isset($vocabulary_mode) || isset($read_mode))
        @include('admin.entity.exam.mode.update.list-listen', array('exam_id' => $exam_id))
        @include('admin.entity.exam.mode.update.list-vocabulary', array('exam_id' => $exam_id))
        @include('admin.entity.exam.mode.update.list-read', array('exam_id' => $exam_id))
    @endif

</form>

<button wire:click.prevent="update()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
<button wire:click.prevent="cancel()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cancel</button>
