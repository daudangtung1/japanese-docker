<p class="text-center text-xl">Ban dang lam phan nghe cua de thi n2</p>
<form>
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
            <button class="w-1/5 flex items-center justify-center rounded-md border border-gray-300" type="submit">N1</button>
            <button class="w-1/5 flex items-center justify-center rounded-md border border-gray-300" type="button">N2</button>
            <button class="w-1/5 flex items-center justify-center rounded-md bg-black text-white" type="submit">N3</button>
            <button class="w-1/5 flex items-center justify-center rounded-md border border-gray-300" type="submit">N4</button>
            <button class="w-1/5 flex items-center justify-center rounded-md border border-gray-300" type="submit">N5</button>
        </div>
    </div>
    <div class="flex space-x-3 mb-10 mt-10 text-sm font-medium">
        <p>All Question : 180 cau</p>
    </div>

    @switch($full_mode)
        @case($listen_mode)
            @include('admin.entity.exam.mode.list-listen')
        @break

            @case($vocabulary_mode)
            @include('admin.entity.exam.mode.list-vocabulary')
        @break

        @case($read_mode)
            @include('admin.entity.exam.mode.list-read')
        @break

        @default
        @include('admin.entity.exam.mode.list-full-mode')
    @endswitch

    <button wire:click.prevent="store()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save</button>
</form>
