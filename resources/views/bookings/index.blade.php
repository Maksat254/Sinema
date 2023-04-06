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

    <button type="submit">Бронировать</button>

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
