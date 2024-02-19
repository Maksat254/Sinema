@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('booking.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="seat_id">ID места:</label>
            <input type="text" name="seat_id" id="seat_id" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="screen_id">ID зала:</label>
            <input type="text" name="screen_id" id="screen_id" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="user_id">ID пользователя:</label>
            <input type="text" name="user_id" id="user_id" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Забронировать</button>
    </form>
@endsection


