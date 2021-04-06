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
