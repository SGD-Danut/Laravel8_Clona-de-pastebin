@extends('template.masterPage')

@section('pageTitle')
    <title>Adăugare text</title>
@endsection

@section('navigation')
    @include('components.navigation')
@endsection

@section('addTextForm')
    <form action="{{ route('texts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="InputText" class="form-label textTitle">Titlu text</label>
            <input type="text" class="form-control" aria-describedby="textTitleHelp" value="{{ old('title') }}" name="title">
            <div id="textTitleHelp" class="form-text">Numele textului dumneavoastra.</div>
        </div>
        @error('title')
            <div class="alert alert-danger" role="alert">
                @if ($message == "The title field is required.")
                    Trebuie să completați titlul textului!
                @elseif ($message == "The title has already been taken.")
                    Titlul textului există deja în listă! Trebuie să alegi alt titlu.
                @endif
            </div> 
        @enderror
        <div class="form-floating textContent">
            <textarea class="form-control" id="textareaSize" placeholder="Continut tex" id="floatingTextarea" value="{{ old('content') }}" name="content"></textarea>
            <label for="floatingTextarea">Continut tex</label>
        </div>
        @error('content')
            <div class="alert alert-danger" role="alert">
                @if ($message == "The content field is required.")
                    Trebuie să completați conținutul textului!!
                @elseif ($message == "The content has already been taken.")
                    Conținutul textului există deja în listă! Trebuie să alegi alt conținut.
                @endif
            </div> 
        @enderror
        <br>
        <button type="submit" class="btn btn-primary">Adaugă text</button>
    </form>
@endsection
