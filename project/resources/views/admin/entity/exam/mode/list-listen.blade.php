<p class="text-center text-xl" id ='listen'>EXAM LISTEN </p>
<p class="text-center text-xl">All Question : <?php echo constant("App\Http\Livewire\Admin\Exam\ListExam::EXAMLISTEN"); ?>  </p>
@for($i=1; $i <= App\Http\Livewire\Admin\Exam\ListExam::EXAMLISTEN; $i++)
    <div class="bg-gray-200 mb-10 mt-10 rounded-md hover:bg-gray-300" id = "vocabulary" >
        <p class="font-semibold text-center text-blue-700" id="vocabulary{{$index}}"><?php
            ?>Cau so {{ $index }}</p>
        <div class="form-group ">
            <label class="block">
                <span class="text-gray-900 ">Question :</span>
                <tr>
                    <td><input class="rounded-md h-8 shadow appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="meta_exam.exam_items.vocabulary.{{ $i }}.questions.question" id="meta_exam.{{ $i }}.questions.question" wire:model="vocabulary_question_exam.{{$i}}" class="form-control form-control-sm"></td>
                </tr>
            </label></br>
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
            <label class="block">
                <span class="text-gray-900">Answer :</span>
                <input class="rounded-md  h-8 shadow appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="meta_exam.exam_items.vocabulary.{{ $i }}.answers.0" id="meta_exam.exam_items.vocabulary.{{ $i }}.answers.0" wire:model="vocabulary_answers_exam.{{ $i }}.0" type="text" placeholder="1">
            </label></br>
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
            <label class="block">
                <span class="text-gray-900">Answer :</span>
                <input class="rounded-md  h-8 shadow appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="meta_exam.{{ $i }}.answers.1" type="text" placeholder="2" wire:model="vocabulary_answers_exam.{{ $i }}.1">
            </label></br>
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
            <label class="block">
                <span class="text-gray-900">Answer :</span>
                <input class="rounded-md  h-8 shadow appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="meta_exam.{{ $i }}.answers.2" type="text" placeholder="3" wire:model="vocabulary_answers_exam.{{ $i }}.2">
            </label></br>
            @error('title') <span class ="text-danger">{{ $message }}</span>@enderror
            <label class="block">
                <span class="text-gray-900">Answer :</span>
                <input class="rounded-md h-8 shadow appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="meta_exam.{{ $i }}.answers.3" type="text" placeholder="4" wire:model="vocabulary_answers_exam.{{ $i }}.3">
            </label></br>
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
            <label class="block">
                <span class="text-gray-700">Dap An Dung</span>
                <select class="rounded-md form-multiselect block w-full mt-1" wire:model="vocabulary.correct_answer.{{ $i }}">
                    <option selected="selected" disabled>Hay Chon Dap An Dung</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </label>
        </div>
    </div>
@endfor
