<div>
    <p class="text-3xl">Exam Code : {{ $exam_total_items->exam_code }}</p>
    <p class="text-3xl">Category : {{ $exam_total_items->category->exam_categories}}</p>
    <form>
        <div class="block">
{{--                    @foreach($exam_total_items->read_question_exam as $index => $read_question)--}}
{{--                        <div class="block">--}}
{{--                        <p class="text-3xl">{{ $read_question }}</p>--}}
{{--                            <?php--}}
{{--                            $index = 1;--}}
{{--                            ?>--}}
{{--                            @foreach($answers_read[$index] as $key => $read_answer)--}}
{{--                            <div class="mt-2">--}}
{{--                                    <div>--}}
{{--                                        <h1>{{$index}}</h1>--}}
{{--                                        <label class="inline-flex items-center" for= "for-{{$index}}">--}}
{{--                                            <input class="rounded-md h-8 shadow appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" placeholder="4" wire:model="answers_read_id.{{$index}}">--}}
{{--                                            <input wire:model="answers_read_id.{{$index}}" id = "for-{{$index}}" type="radio" class="form-radio text-indigo-600" name="answers_read_id[{{$index}}]" value="{{ $index }}">--}}
{{--                                            <span class="ml-2 text-2xl" >{{ $read_answer  }}</span>--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                <?php--}}
{{--                                    ++$index;--}}
{{--                                    ?>--}}
{{--                            </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
        </div>
        <a href="/" class="text-red-500 bg-transparent border border-fsolid border-red-500 hover:bg-red-500 hover:text-white active:bg-red-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg></i> Trở Về
        </a>
        <button wire:click ="store()" class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg> Submit
        </button>
    </form>
</div>

