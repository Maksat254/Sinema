<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')
@section('content')
    <div>
        <div>свободно</div>
        <div class="seat2"></div>
        <div>занято</div>
        <div class="seat23"></div>
        <div>ваша бронь</div>
        <div class="seat24"></div>
    </div>
    <div class="cinoteatr">
        <div id='count_'></div>
        @for($i=0;$i<10;$i++)
            <div class="seat-{{ $i }} seats"><input type="hidden" name="seats[]" value="0"></div>
        @endfor

        <a href="{{ route('create') }}" class="btn btn-primary">Бронировать</a>

    </div>

@endsection
@push('styles')
    <style>
        .seat2 {
            width: 50px;
            height: 50px;
            background-color: #ccc;
            display: inline-block;
            margin-right: 10px;
            cursor: pointer;
        }

        .seat23 {
            background-color: #2d3748;
            width: 50px;
            height: 50px;
            display: inline-block;
            margin-right: 10px;
            cursor: pointer;
        }

        .seat24 {
            background-color: #f00;
            width: 50px;
            height: 50px;
            display: inline-block;
            margin-right: 10px;
            cursor: pointer;
        }
        .seats {
            width: 50px;
            height: 50px;
            background-color: #ccc;
            display: inline-block;
            margin-right: 10px;
            cursor: pointer;
        }

        .seats:hover {
            background-color: #999;
        }

        .seats.selected {
            background-color: #f00;
        }
        .seats {
            width: 30px;
            height: 30px;
            margin: 5px;
            border-radius: 50%;
            background-color: #ccc;
            display: inline-block;
            text-align: center;
            line-height: 30px;
        }
    </style>
@endpush

@push('scripts')
    <script>
        const seats = document.querySelectorAll('.seats');

        seats.forEach(seat => {
            seat.addEventListener('click', () => {

                seat.classList.toggle('selected');
            });
        });
        $('.seats').click(function (){
            let input =  $(this).find("input");
            let value = parseInt(input.val());
            console.log(value);
            if(value===1){
                input.val(0);
            } else {
                input.val(1);
            }
        })
    </script>
@endpush

</body>
</html>
