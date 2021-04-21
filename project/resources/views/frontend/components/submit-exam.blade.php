<div class="mx-auto px-4">
    <div class="border-2 border-indigo-600">
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2">4</div>
        </div>
    </div>
{{--        <div>--}}
{{--            <p>Thời Gian : 45p</p>--}}
{{--            <p>Đếm Thời Gian: 39:00</p>--}}
{{--            <article class="clock" id="model3">--}}
{{--                <h3></h3>--}}
{{--                <div class="count">--}}
{{--                    <div id="timer">--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </article>--}}
{{--        </div>--}}
    <div class="mb-6 shadow-xl rounded-lg gap-4 ">
            <div class="grid lg:grid-cols-3 gap-4">
                <div class="mr-8 bg-white shadow-xl rounded-lg col-span-2 ">
                    <form wire:submit.prevent="submit">
                            <div class="text-3xl text-center text-gray-600 py-8">
                                <p>Exam Code : {{ $exam_questions->exam_code }}</p>
                                <p>Category : {{ $exam_questions->category->exam_categories}}</p>
                            </div>
                        @switch($status)
                                @case(1)
                                    <div class="relative mb-8 bg-gray-300">
                                            <div class="text-3xl text-center text-gray-600 py-8" style="background: linear-gradient(145deg, #4da7db, #5bc6ff);">
                                                <p>言語知識（文字・漢字・文法）</p>
                                            </div>
                                        @foreach($exam_questions->listen_question_exam as $index => $listen_question)
                                    <div class="relative bg-white mb-2 border-l-4 border-gray-600 py-8">
                                                    <p class="text-2xl sm:ml-6 sm:ml-6">問題:{{ $index }} {{ $listen_question }}</p>
                                                <div class="mt-2 ml-8 ml-8">
                                                    <?php
                                                    $test = 1;
                                                    ?>
                                                    @foreach($answers_listens[$index] as $key => $listen_answer)
                                                        <div>
                                                            <label class="inline-flex items-center">
                                                                <input type="radio" class="form-radio text-indigo-600" name="answers_listen[{{$index}}]" wire:model ="answers_listen.{{$index}}" value="{{$test}}">
                                                                <span class="ml-2 text-2xl sm:ml-6" >{{ $listen_answer  }}</span>
                                                            </label>
                                                        </div>
                                                        <?php
                                                        ++$test;
                                                        ?>
                                                    @endforeach
                                                    <div class="absolute bottom-1 right-3">
                                                        <span style="font-size: 22px; ">
                                                            <i class="fas fa-bell"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                    </div>
                                        @endforeach
                                            <div class="text-3xl text-center text-gray-600 py-8" style="background: #4CAF50">
                                                <p>言語知識（文字・漢字・文法）</p>
                                            </div>
                                        @foreach($exam_questions->vocabulary_question_exam as $index => $read_question)
                                        <div class="relative bg-white mb-2 border-l-4 border-gray-600 py-8">
                                            <p class="text-2xl sm:ml-6">問題:{{ $index }} {{ $read_question }}</p>
                                            <div class="mt-2 ml-8 ml-8">
                                                <?php
                                                $test = 1;
                                                ?>
                                                @foreach($answers_vocabularys[$index] as $key => $vocabulary_answer)
                                                    <div>
                                                        <label class="inline-flex items-center">
                                                            <input type="radio" class="form-radio text-indigo-600" name="answers_vocabulary[{{$index}}]" wire:model ="answers_vocabulary.{{$index}}" value="{{$test}}">
                                                            <span class="ml-2 text-2xl sm:ml-6" >{{ $vocabulary_answer  }}</span>
                                                        </label>
                                                    </div>
                                                    <?php
                                                    ++$test;
                                                    ?>
                                                @endforeach
                                                    <div class="absolute bottom-1 right-3">
                                                        <span style="font-size: 22px;">
                                                            <i class="fas fa-bell"></i>
                                                        </span>
                                                    </div>
                                            </div>
                                        </div>
                                        @endforeach
                                            <div class="text-3xl text-center text-gray-600 py-8">
                                                <p>言語知識（文字・漢字・文法）</p>
                                            </div>
                                        @foreach($exam_questions->read_question_exam as $index => $read_question)
                                            <div class="relative bg-white mt-2 border-l-4 border-gray-600 py-8">
                                                <p class="text-2xl sm:ml-6">問題:{{ $index }} {{ $read_question }}</p>
                                                <div class="mt-2 ml-8">
                                                    <?php
                                                    $test = 1;
                                                    ?>
                                                    @foreach($answers_reads[$index] as $key => $read_answer)
                                                        <div>
                                                            <label class="inline-flex items-center">
                                                                <input type="radio" class="form-radio text-indigo-600" name="answers_read[{{$index}}]" wire:model ="answers_read.{{$index}}" value="{{$test}}">
                                                                <span class="ml-2 text-2xl sm:ml-6" >{{ $read_answer  }}</span>
                                                            </label>
                                                        </div>
                                                        <?php
                                                        ++$test;
                                                        ?>
                                                    @endforeach
                                                        <div class="absolute bottom-1 right-3">
                                                            <span style="font-size: 22px; ">
                                                                <i class="fas fa-bell"></i>
                                                            </span>
                                                        </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @break
                                </div>

                                @case(2)
                                    <div class="relative mb-8 bg-gray-300">
                                        @foreach($exam_questions->listen_question_exam as $index => $listen_question)
                                            <p class="text-2xl sm:ml-6">問題:{{ $index }} {{ $listen_question }}</p>
                                            <div class="mt-2 ml-8">
                                                <?php
                                                $test = 1;
                                                ?>
                                                @foreach($answers_listens[$index] as $key => $listen_answer)
                                                    <div>
                                                        <label class="inline-flex items-center">
                                                            <input type="radio" class="form-radio text-indigo-600" name="answers_listen[{{$index}}]" wire:model ="answers_listen.{{$index}}" value="{{$test}}">
                                                            <span class="ml-2 text-2xl sm:ml-6" >{{ $listen_answer  }}</span>
                                                        </label>
                                                    </div>
                                                    <?php
                                                    ++$test;
                                                    ?>
                                                @endforeach
                                                    <div class="absolute bottom-1 right-3">
                                                        <span style="font-size: 22px; ">
                                                            <i class="fas fa-bell"></i>
                                                        </span>
                                                    </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @break

                                @case(3)
                                    <div class="relative mb-8 bg-gray-300">

                                @foreach($exam_questions->read_question_exam as $index => $read_question)
                                    <p class="text-2xl sm:ml-6">問題:{{ $index }} {{ $read_question }}</p>
                                    <div class="mt-2 ml-8">
                                        <?php
                                        $test = 1;
                                        ?>
                                        @foreach($answers_reads[$index] as $key => $read_answer)
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio text-indigo-600" name="answers_read[{{$index}}]" wire:model ="answers_read.{{$index}}" value="{{$test}}">
                                                    <span class="ml-2 text-2xl sm:ml-6" >{{ $read_answer  }}</span>
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
                                    <div class="relative mb-8 bg-gray-300">
                                        @foreach($exam_questions->vocabulary_question_exam as $index => $read_question)
                                            <p class="text-2xl sm:ml-6">問題:{{ $index }} {{ $read_question }}</p>
                                            <div class="mt-2 ml-8">
                                                <?php
                                                $test = 1;
                                                ?>
                                                @foreach($answers_vocabularys[$index] as $key => $vocabulary_answer)
                                                    <div>
                                                        <label class="inline-flex items-center">
                                                            <input type="radio" class="form-radio text-indigo-600" name="answers_vocabulary[{{$index}}]" wire:model ="answers_vocabulary.{{$index}}" value="{{$test}}">
                                                            <span class="ml-2 text-2xl sm:ml-6" >{{ $vocabulary_answer  }}</span>
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
                    </form>
                </div>
                            <button class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-600 font-bold uppercase text-sm px-6 py-3  rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                </svg> Submit
                            </button>
        </div>
                <div x-data="{ openTab: 1 }">
                    <div x-show.transition.in.duration.500.origin.top="openTab === 1">
                        <div class="bg-white shadow-xl rounded-lg">
                            <livewire:frontend.components.clock-count-exam />
                        </div>
                    </div>
                    <div x-show.transition.in.duration.500.origin.top="openTab === 2">
                        <div class="bg-white shadow-xl rounded-lg">
                            <livewire:frontend.components.result-exam-user
                                :ids="$ids"
                                :status="$status"
                                :exam_category="$exam_category"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var h3 = document.getElementsByTagName("h3");
    h3[0].innerHTML = "Countdown Timer With JS";

    var sec         = 60,
        countDiv    = document.getElementById("timer"),
        secpass,
        countDown   = setInterval(function () {
            'use strict';

            secpass();
        }, 1000);

    function secpass() {
        'use strict';

        var min     = Math.floor(sec / 60),
            remSec  = sec % 60;

        if (remSec < 10) {

            remSec = '0' + remSec;

        }
        if (min < 10) {

            min = '0' + min;

        }
        countDiv.innerHTML = min + ":" + remSec;

        if (sec > 0) {

            sec = sec - 1;

        } else {

            clearInterval(countDown);

            countDiv.innerHTML = 'countdown done';

        }
    }
</script>

