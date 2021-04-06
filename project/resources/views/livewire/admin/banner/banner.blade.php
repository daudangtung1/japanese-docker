<x-admin-layout>
    <form wire:submit.prevent="save">
        <input type="file" wire:model="images">

        @error('images') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Save Photo</button>
    </form>

    <div>
{{--        @foreach($data as $d)--}}
{{--            {{$d->image}}--}}
{{--        @endforeach--}}
        {{dd($data)}}
    </div>
</x-admin-layout>
