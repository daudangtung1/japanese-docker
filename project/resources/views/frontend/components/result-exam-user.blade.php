<div class="container mx-auto">
    <div class="mt-4 mb-12 px-4 pt-4 pb-12 justify-between bg-white dark:bg-gray-600 shadow-sm rounded-lg">
        <div class="justify-center">
            <p>Thong Tin De Thi</p>
            <p>Level : N2</p>
            <p>Tên Thí Sinh :{{ $user_id }} IMAGE Phùng Trung Hiếu</p>
            <p>Phần Thi : {{ $current_exam_type }}</p>
            <p>Tổng số câu: 45/15</p>
            <p>Kết Quả : {{ $result }} diem </p>
            <p>ICON : PASS </p>
        </div>
    </div>
    <div>
        <div>
            <a @click="openTab = 1" :class="{ 'active': openTab === 1 }" class="effect-button"> animation <span class="effect-button"></span>
                <span class="effect-button"></span>
                <span class="effect-button"></span>
                <span class="effect-button"></span>
            </a>
        </div>
    </div>
</div>
