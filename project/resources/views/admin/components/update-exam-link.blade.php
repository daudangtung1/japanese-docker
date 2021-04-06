    <div>
        <div class="mb-10 mt-10 ">
        <a href="#listen" class="no-underline hover:underline bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Listen Total : <?echo $total__listen;
            ?></a>

        @for($i=1; $i <= +$total__listen; $i++)
            <a href="#listen<?php echo $i;?>" class="ml-auto text-white bg-blue-600 underline py-2 px-4 rounded">{{$i}}</a>
        @endfor
        </div>

        <div class="mb-10 mt-10">
            <a href="#read" class="no-underline hover:underline bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Read Total : <?echo $total__read; ?></a>

            @for($i=1; $i <= +$total__read; $i++)
                <a href="#read<?php echo $i;?>" class="ml-auto text-white bg-blue-600 underline py-2 px-4 rounded">{{$i}}</a>
            @endfor
        </div>

        <div class="mb-10 mt-10">
            <a href="#vocabulary" class="no-underline hover:underline bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Vocabulary Total : <? echo $total__vocabulary;
                ?></a>

            @for($i=1; $i <= $total__vocabulary; $i++)
                <a href="#vocabulary<?php echo $i;?>" class="ml-auto text-white bg-blue-600 underline py-2 px-4 rounded">{{$i}}</a>
            @endfor
        </div>
    </div>




