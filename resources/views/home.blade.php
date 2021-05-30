@extends('layouts.app')

@section('style')
.bg-contact {
    background-image: url('/images/andrey-haimin-q2Fyzn-KJOQ-unsplash.jpg');
    background-size: cover;
    background-attachment: fixed;
    min-height: 100vh;
}
@endsection

@section('content')
    <div class="bg-contact">
        <div class="container">
            <livewire:contact-form />
        </div>
    </div>
@endsection