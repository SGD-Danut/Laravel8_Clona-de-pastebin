@extends('template.masterPage')

@section('pageTitle')
    <title>Pagină text curent</title>
@endsection

@section('navigation')
    @include('components.navigation')
@endsection

@section('tableWithTexts')
    <div class="card mb-3">
        <div class="card-body">
        <h5 class="card-title">{{ $text['title'] }}</h5>
        <p class="card-text">{{ $text['content'] }}</p>
        <p class="card-text"><small class="text-muted">Adaugat la: {{ $text['created_at'] }}</small></p>
        </div>
    </div>
@endsection