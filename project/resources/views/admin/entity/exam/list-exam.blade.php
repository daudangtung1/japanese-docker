<div class="py-12">
    <div class="max-w mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                @if (session()->has('message'))
                    <div class="bg-blue-900 text-center py-4 lg:px-4">
                        <div class="p-2 bg-blue-700 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                            <span class="flex rounded-full bg-blue-500 uppercase px-2 py-1 text-xs font-bold mr-3">De thi vua tao</span>
                            <span class="font-semibold mr-4 text-left flex-auto">{{ session('message') }}</span>
                            <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                        </div>
                    </div>
                @endif
                @if($createMode)
                        @include('admin.entity.exam.create', array('exam_categories' => $exam_category))
                    @elseif($updateMode)
                            @include('admin.entity.exam.update', array('exam_categories' => $exam_category))
                    @else
                        <div class="-my-2 py-12 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                            <div class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12">
                                <div class="flex justify-between">
                                    <div class="inline-flex border rounded w-7/12 px-2 lg:px-6 h-12 bg-transparent">
                                        <div class="flex flex-wrap items-stretch w-full h-full mb-6 relative">
                                            <div class="flex">
                                                <span class="flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">
                                                    <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <input type="text" class="flex-shrink flex-grow flex-auto leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-3 relative focus:outline-none text-xxs lg:text-xs lg:text-base text-gray-500 font-thin" placeholder="Search">
                                        </div>
                                    </div>
                                    <div>
                                        <td class="px-6 pl-5 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                            <button wire:click="create()" class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Create Exam</button>
                                        </td>
                                        <td class="px-6 pl-5 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                            <a class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none" href="{{ route('admin.exam-category') }}">Create Category</a>
                                        </td>
                                    </div>
                                </div>
                            </div>
                            <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                                <table class="min-w-full">
                                    <thead>
                                        <tr>
                                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">Mã Đề</th>
                                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Role</th>
                                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Cấu Trúc</th>
                                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Level</th>
                                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Trạng Thái</th>
                                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Ngày Public</th>
                                            <th class="px-6 py-3 border-b-2 border-gray-300">Chức Năng</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        @foreach($exam_pagination as $exam_item)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                    <div class="flex items-center">
                                                        <div>
                                                            <div class="text-sm leading-5 text-gray-800">
                                                                {{ $exam_item->exam_code  }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                                    @if(isset($exam_item->meta_exam['module']))
                                                        <div class="text-sm leading-5 text-blue-900">{{ $exam_item->meta_exam['module']['author']  }}</div>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
{{--                                                <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">--}}
{{--                                                    <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>--}}
{{--                                                    <span class="relative text-xs">active</span>--}}
{{--                                                </span>--}}
{{--                                                    <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">--}}
{{--                                                    <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>--}}
{{--                                                    <span class="relative text-xs">active</span>--}}
{{--                                                </span>--}}
{{--                                                    <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">--}}
{{--                                                    <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>--}}
{{--                                                    <span class="relative text-xs">not active</span>--}}
{{--                                                </span>--}}
                                                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">
                                                    @if(isset($exam_item->meta_exam['module']))
                                                    {{ $exam_item->meta_exam['module']['exam_category'] }}
                                                        @endif
                                                </td>
{{--                                                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">--}}
{{--                                                    <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">--}}
{{--                                                    <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>--}}
{{--                                                    <span class="relative text-xs">active</span>--}}
{{--                                                </span>--}}
{{--                                                </td>--}}
                                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">September 12</td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                                    <a href="{{ route('admin.preview', $exam_item->exam_code)  }}" class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Preview</a>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                                    <button wire:click="edit({{ $exam_item->id }})"  class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Edit</button>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                                    <button wire:click="delete({{ $exam_item->exam_code }})" class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $exam_pagination->links() }}
                        </div>
                    @endif
            </div>
    </div>
</div>

