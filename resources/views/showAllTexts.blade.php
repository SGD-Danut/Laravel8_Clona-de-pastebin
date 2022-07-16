@extends('template.masterPage')

@section('pageTitle')
    <title>Pagină toate textele</title>
@endsection

@section('navigation')
    @include('components.navigation')
@endsection

@section('tableWithTexts')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titlu text</th>
                <th scope="col">Previzualizare text</th>
                <th scope="col">Vezi text</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($texts as $text)
                @if (strlen($text['content']) > 40)
                    @php
                        $textContent = substr($text['content'], 0, 40) . "...";
                    @endphp
                    <tr>
                        <td>{{ $text['title'] }}</td>
                        <td>{{ $textContent }}</td>
                        <td>
                            <a href="{{ route('texts.show', ['text' => $text['id']]) }}">Vezi tot textul</a>
                        </td>
                    </tr>
                @else
                    <tr>
                        <td>{{ $text['title'] }}</td>
                        <td>{{ $text['content'] }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
@endsection
