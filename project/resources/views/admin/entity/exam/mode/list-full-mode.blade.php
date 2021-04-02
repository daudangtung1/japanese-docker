<p class="text-center text-xl">FULL PAGE </p>
<p class="text-center text-xl">All Question : <?php echo constant("App\Http\Livewire\Admin\Exam\ListExam::EXAMFULL"); ?>  </p>
@for($i=0; $i <= App\Http\Livewire\Admin\Exam\ListExam::EXAMFULL; $i++)
    <div class="border-2 border-red-500 mb-10 mt-10">
        <p class="text-center text-xl">Cau so {{ 1+$i }}</p>
        <div class="form-group">
            <label class="block">
                <span class="text-gray-900">Question :</span>
                <tr>
                    <td><input class="shadow appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="meta_exam.exam_items.listen.{{ $i }}.questions.question" id="meta_exam.{{ $i }}.questions.question" wire:model="meta_exam.exam_items.0.{{ $i }}.questions.question" class="form-control form-control-sm"></td>
                </tr>
            </label></br>
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
            <label class="block">
                <span class="text-gray-900">Answer :</span>
                <input class="shadow appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="meta_exam.exam_items.listen.{{ $i }}.answers.0" id="meta_exam.exam_items.listen.{{ $i }}.answers.0" wire:model="meta_exam.exam_items.0.{{ $i }}.answers.0" type="text" placeholder="1">
            </label></br>
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
            <label class="block">
                <span class="text-gray-900">Answer :</span>
                <input class="shadow appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="meta_exam.{{ $i }}.answers.1" type="text" placeholder="2" wire:model="meta_exam.exam_items.0.{{ $i }}.answers.1">
            </label></br>
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
            <label class="block">
                <span class="text-gray-900">Answer :</span>
                <input class="shadow appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="meta_exam.{{ $i }}.answers.2" type="text" placeholder="3" wire:model="meta_exam.exam_items.0.{{ $i }}.answers.2">
            </label></br>
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
            <label class="block">
                <span class="text-gray-900">Answer :</span>
                <input class="shadow appearance-none w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="meta_exam.{{ $i }}.answers.3" type="text" placeholder="4" wire:model="meta_exam.exam_items.0.{{ $i }}.answers.3">
            </label></br>
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
            <label class="block">
                <span class="text-gray-700">Dap An Dung</span>
                <select class="form-multiselect block w-full mt-1" wire:model="meta_exam.exam_items.listen.{{ $i }}.correct_answer">
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

