@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                SMS Sending Result
            </h4>

            <strong><p>{{ $response }}</p></strong>
            <a href="{{ route('send-sms-form') }}">Send another SMS</a>
        </div>
    </div>
</div>
@endsection