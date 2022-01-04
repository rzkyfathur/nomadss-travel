@extends('layouts.success')

@section('title')
    Success
@endsection

@section('content')
<main>
    <div class="section-succses d-flex align-items-center">
        <div class="col text-center">
        <img src="{{ url('frontend/images/ic_email.png')}}" alt="">
            <h1>Yay! Success</h1>
            <p>
                we've sent you email for trip instruction<br>
                please read as well
            </p>
        <a href="{{ route('home')}}" class="btn btn-home-page mt-3 px-5">
                Home Page
            </a>
        </div>
    </div>
</main>

@endsection
