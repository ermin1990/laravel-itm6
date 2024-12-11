@extends('layout')

@section('content')

    <div class="flex justify-center items-center min-h-screen bg-gray-50">
        <form action="{{route('store-ocjenu')}}" method="post" class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
            @csrf
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Dodaj Ocjenu</h2>

            <!-- Predmet -->
            <div class="mb-4">
                <label for="predmet" class="block text-sm font-medium text-gray-600">Predmet</label>
                <input
                    required
                    type="text"
                    id="predmet"
                    name="predmet"
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="Unesite naziv predmeta"
                >
            </div>

            <!-- Ocjena -->
            <div class="mb-4">
                <label for="ocjena" class="block text-sm font-medium text-gray-600">Ocjena</label>
                <input
                    required
                    type="number"
                    id="ocjena"
                    min="1"
                    max="5"
                    name="ocjena"
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="Unesite ocjenu"
                >
            </div>

            <!-- Profesor -->
            <div class="mb-4">
                <label for="profesor" class="block text-sm font-medium text-gray-600">Profesor</label>
                <input
                    required
                    type="text"
                    id="profesor"

                    name="profesor"
                    class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="Unesite ime profesora"
                >
            </div>

            <!-- Submit Button -->
            <button
                type="submit"
                class="w-full bg-indigo-500 text-white font-medium py-2 rounded-lg hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-1"
            >
                Dodaj
            </button>
        </form>
    </div>

@endsection
