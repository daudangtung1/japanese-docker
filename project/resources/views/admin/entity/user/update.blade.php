<p class="text-center text-xl">Update User</p>
<form>
<label class="block">
            <span class="text-gray-700">Name :</span>
            <input class="form-input mt-1 w-full border-2" placeholder="Jane Doe" wire:model="name">
        </label></br>
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        <div class="form-group">
            <label class="block">
                <span class="text-gray-700">Role :</span>
                <input class="form-input mt-1 w-full border-2" placeholder="Jane Doe">
            </label></br>
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
        <label class="block">
            <span class="text-gray-700">Email: </span>
                <input type="email" class="form-input mt-1 block w-full" placeholder="john@example.com">
        </label></br>
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label class="block">
                <span class="text-gray-700">Password :</span>
                <input class="form-input mt-1 w-full border-2" placeholder="Jane Doe">
            </label></br>
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
    <button wire:click.prevent="update()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
    <button wire:click.prevent="cancel()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cancel</button>
</form>