<form wire:submit.prevent="submit">
    <p class="text-3xl">Exam Code : {{ $exam_questions->exam_code }}</p>
    <p class="text-3xl">Category : {{ $exam_questions->category->exam_categories}}</p>
    @switch($status)
        @case(1)
        <div class="block">
            @foreach($exam_questions->listen_question_exam as $index => $listen_question)
                <p class="text-3xl">{{ $listen_question }}</p>
                <div class="mt-2">
                    <?php
                    $test = 1;
                    ?>
                    @foreach($answers_listens[$index] as $key => $listen_answer)
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio text-indigo-600" name="answers_listen[{{$index}}]" wire:model ="answers_listen.{{$index}}" value="{{$test}}">
                                <span class="ml-2 text-2xl" >{{ $listen_answer  }}</span>
                            </label>
                        </div>
                        <?php
                        ++$test;
                        ?>
                    @endforeach
                </div>
            @endforeach
        </div>
        <div class="block">
            @foreach($exam_questions->vocabulary_question_exam as $index => $read_question)
                <p class="text-3xl">{{ $read_question }}</p>
                <div class="mt-2">
                    <?php
                    $test = 1;
                    ?>
                    @foreach($answers_vocabularys[$index] as $key => $vocabulary_answer)
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio text-indigo-600" name="answers_vocabulary[{{$index}}]" wire:model ="answers_vocabulary.{{$index}}" value="{{$test}}">
                                <span class="ml-2 text-2xl" >{{ $vocabulary_answer  }}</span>
                            </label>
                        </div>
                        <?php
                        ++$test;
                        ?>
                    @endforeach
                </div>
            @endforeach
        </div>
        <div class="block">
            @foreach($exam_questions->read_question_exam as $index => $read_question)
                <p class="text-3xl">{{ $read_question }}</p>
                <div class="mt-2">
                    <?php
                    $test = 1;
                    ?>
                    @foreach($answers_reads[$index] as $key => $read_answer)
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio text-indigo-600" name="answers_read[{{$index}}]" wire:model ="answers_read.{{$index}}" value="{{$test}}">
                                <span class="ml-2 text-2xl" >{{ $read_answer  }}</span>
                            </label>
                        </div>
                        <?php
                        ++$test;
                        ?>
                    @endforeach
                </div>
            @endforeach
        </div>
        @break

        @case(2)
        <div class="block">
            @foreach($exam_questions->listen_question_exam as $index => $listen_question)
                <p class="text-3xl">{{ $listen_question }}</p>
                <div class="mt-2">
                    <?php
                    $test = 1;
                    ?>
                    @foreach($answers_listens[$index] as $key => $listen_answer)
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio text-indigo-600" name="answers_listen[{{$index}}]" wire:model ="answers_listen.{{$index}}" value="{{$test}}">
                                <span class="ml-2 text-2xl" >{{ $listen_answer  }}</span>
                            </label>
                        </div>
                        <?php
                        ++$test;
                        ?>
                    @endforeach
                </div>
            @endforeach
        </div>
        @break

        @case(3)
        <div class="block">
            @foreach($exam_questions->read_question_exam as $index => $read_question)
                <p class="text-3xl">{{ $read_question }}</p>
                <div class="mt-2">
                    <?php
                    $test = 1;
                    ?>
                    @foreach($answers_reads[$index] as $key => $read_answer)
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio text-indigo-600" name="answers_read[{{$index}}]" wire:model ="answers_read.{{$index}}" value="{{$test}}">
                                <span class="ml-2 text-2xl" >{{ $read_answer  }}</span>
                            </label>
                        </div>
                        <?php
                        ++$test;
                        ?>
                    @endforeach
                </div>
            @endforeach
        </div>
        @break
        @case(4)
            <div class="block">
                @foreach($exam_questions->vocabulary_question_exam as $index => $read_question)
                    <p class="text-3xl">{{ $read_question }}</p>
                    <div class="mt-2">
                        <?php
                        $test = 1;
                        ?>
                        @foreach($answers_vocabularys[$index] as $key => $vocabulary_answer)
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio text-indigo-600" name="answers_vocabulary[{{$index}}]" wire:model ="answers_vocabulary.{{$index}}" value="{{$test}}">
                                    <span class="ml-2 text-2xl" >{{ $vocabulary_answer  }}</span>
                                </label>
                            </div>
                        <?php
                        ++$test;
                        ?>
                        @endforeach
                    </div>
                @endforeach
            </div>
        @break
    @endswitch
    <a href="/" class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-500 hover:text-white active:bg-red-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="submit"
    >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg></i> Trở Về
    </a>

    <button class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="submit"
    >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
        </svg> Submit
    </button>

</form>
