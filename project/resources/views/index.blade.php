@extends('layouts.master')
@section('title', 'Homepage')
@section('main')
    <div class="banner">
        <h1 style="font-size: 32px">KHO ĐỀ THI TIẾNG NHẬT </h1>
        <div class="flex flex-row">
            <div class="data-item">
                <span>3930</span> "+" <i>Thành viên</i>
            </div>
            <div class="data-item">
                <span>999</span> "+" <i>Đề thi</i>
            </div>
        </div>
    </div>
    <div class="main-content-homepage bg-gray-100">
        <div class="grid grid-cols-2 gap-4">
            <div class="main-content--exam">
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white rounded-md py-2 px-4">
                        <h3>
                            <a href=""> Đề thi trình độ N3 - Chủ Nhật #8204</a>
                        </h3>
                        <div class="status-exam"></div>
                        <div class="member"></div>
                    </div>
                    <div class="bg-red-200">block2</div>
                    <div class="bg-red-200">block3</div>
                    <div class="bg-red-200">block4</div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="bg-blue-800">One of three columns</div>
            </div>
        </div>
    </div>
@endsection
