<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PDF</title>
    <style>
        @font-face{
            font-family: ipag;
            font-style: normal;
            font-weight: normal;
            src:url('{{ storage_path('fonts/ipag.ttf')}}');
        }
        body {
            font-family: ipag;
        }
    </style>
</head>
<body>
<p>Mã đề : {{ $exam_question_answers->exam_code }}</p>
<p>Level N{{ $exam_question_answers->exam_category_id }}</p>
<h1>Listen</h1>
<p>
    Tổng số Câu : {{count($answers_listen)}}
</p>
<div>
    @foreach($question_listen as $index => $question_item)
        <p>Question: {{ $question_item }}</p>
        @foreach($answers_listen[$index] as $key=>$answers_item)
            <p>Answers: {{ $answers_item }}</p>
        @endforeach
    @endforeach
</div>
<h1>Read</h1>
<p>
    Tổng số Câu : {{count($answers_read)}}
</p>
<div>
    @foreach($question_read as $index => $question_item)
        <p>Question: </p>{{ $question_item }}

        @foreach($answers_read[$index] as $key=>$answers_item)
            <p>Answers: {{ $answers_item }}</p>
        @endforeach
    @endforeach
</div>
<h1>Vocabulary</h1>
<p>
    Tổng số Câu : {{count($answers_vocabulary)}}
</p>
<div>
    @foreach($question_vocabulary as $index => $question_item)
        <p>Question: {{ $question_item }}</p>
        @foreach($answers_vocabulary[$index] as $key=>$answers_item)
            <p>Answers: {{ $answers_item }}</p>
        @endforeach
    @endforeach
</div>
</body>
</html>
