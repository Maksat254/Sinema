@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('booking.store') }}" method="post">
                @csrf

            </form>
        </div>
    </div>
@endsection

