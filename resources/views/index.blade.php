@extends('layout')

@section('content')

    @if(isset($ocjene) && count($ocjene) > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
            @foreach($ocjene as $ocjena)
                <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">{{$ocjena->predmet}}</h3>
                    <p class="text-sm text-gray-500 mb-1"><strong>Ocjena:</strong> {{$ocjena->ocjena}}</p>
                    <p class="text-sm text-gray-500"><strong>Profesor:</strong> {{$ocjena->profesor}}</p>

                    <p class="text-sm text-gray-500"><strong>User ID:</strong> {{$ocjena->user_id}}</p>
                </div>
            @endforeach
        </div>
    @else
        <div class="p-4 text-center">
            <p class="text-gray-500">Nema podataka</p>
        </div>
    @endif
@endsection




