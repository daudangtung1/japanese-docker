<div>
    <p class="text-3xl">Exam Code : {{ $exam_question->exam_code }}</p>
    <p class="text-3xl">Category : {{ $exam_question->category->exam_categories}}</p>

    <div class="block">
        @foreach($exam_question->listen_question_exam as $index => $listen_question)
            <p class="text-3xl">{{ $listen_question }}</p>
            <div class="mt-2">
                @foreach($answers_listen[$index] as $key => $listen_answer)
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-indigo-600" name="radio-colors" value="1" checked>
                                    <span class="ml-2 text-2xl" >{{ $listen_answer  }}</span>
                                </label>
                            </div>
                    @endforeach
            </div>
        @endforeach
    </div>
    <div class="block">
        @foreach($exam_question->vocabulary_question_exam as $index => $read_question)
            <p class="text-3xl">{{ $read_question }}</p>
        <div class="mt-2">
            @foreach($answers_vocabulary[$index] as $key => $vocabulary_answer)
                <div>
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio text-indigo-600" name="radio-colors" value="1" checked>
                        <span class="ml-2 text-2xl" >{{ $vocabulary_answer  }}</span>
                    </label>
                </div>
            @endforeach
        </div>
        @endforeach
    </div>
    <div class="block">
        @foreach($exam_question->read_question_exam as $index => $read_question)
            <p class="text-3xl">{{ $read_question }}</p>
            <div class="mt-2">
                @foreach($answers_read[$index] as $key => $read_answer)
                    <div>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio text-indigo-600" name="radio-colors" value="1" checked>
                            <span class="ml-2 text-2xl" >{{ $read_answer  }}</span>
                        </label>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    <button class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button"
    >
        <i class="fas fa-heart"></i> Submit
    </button>
</div>
