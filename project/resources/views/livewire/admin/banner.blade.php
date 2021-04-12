<div>
    <div>
        @foreach($banners as $b)
            <img src="{{asset('/storage/'.$b->image)}}" alt="{{$b->title}}">
        @endforeach
    </div>
    <form enctype="multipart/form-data">
        <div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <input type="file" placeholder="image..." wire:model="image">
        @error('file') <span class="text-danger">{{ $message }}</span> @enderror

        <input type="text" placeholder="alt..." wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span> @enderror

        <input type="text" placeholder="caption" wire:model="caption">
        @error('caption') <span class="text-danger">{{ $message }}</span> @enderror

        <button wire:click.prevent="store()" id="idOfButton">Submit</button>
    </form>

</div>
