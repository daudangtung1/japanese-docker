<livewire:admin.components.return-button-admin />
<form>
    <p class="text-center text-xl">CategoryExam </p>
    <div class="mb-10 mt-10">
        <p class="text-center text-xl">De thi la De thi IT</p>
        <div class="form-group">
            <label class="block">
                <span class="text-gray-900">Loai de thi :</span>
                <input class="shadow appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="de thi n1" wire:model="exam_categories">
            </label></br>
            @error('exam_categories') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    </div>
    <button wire:click.prevent="store()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
</form>
