@extends('template.masterPage')
@section('addButton')
    <a href="{{ route('texts.create') }}">
        <button type="button" class="btn btn-primary">Adaugă un nou text</button>	
    </a>
@endsection