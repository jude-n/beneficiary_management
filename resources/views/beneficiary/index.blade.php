@extends('layouts.app') {{-- This includes your <head>, @vite, dark mode, etc. --}}

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white shadow-xl rounded-lg p-8 max-w-lg w-full text-center">
            <img src="{{ asset('images/fao-logo.png') }}" alt="FAO Logo" class="mx-auto w-32 mb-6" />
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Beneficiary Performance Testing</h1>

            <div class="flex justify-center gap-3 flex-wrap mb-6">
                <button onclick="fetchData('with-cache')" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition shadow">
                    Fetch with Cache
                </button>
                <button onclick="fetchData('without-cache')" class="bg-yellow-600 hover:bg-yellow-700 text-white font-semibold py-2 px-4 rounded transition shadow">
                    Fetch without Cache
                </button>
                <button onclick="clearCache()" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded transition shadow">
                    Clear Cache
                </button>
            </div>

            <div id="results" class="text-sm text-gray-700">
                Run a test to see results.
            </div>
        </div>
    </div>
@endsection
