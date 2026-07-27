@extends('layouts.app')

@section('title', __('Forgot Password'))

@section('content')
<section class="py-20">
    <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-xl shadow-md p-8">
            <h1 class="font-display text-3xl font-bold text-maisara-navy mb-6 text-center">{{ __('Forgot Password') }}</h1>

            <form method="POST" action="{{ route('client.password.email', ['locale' => app()->getLocale()]) }}">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">{{ __('Email') }}</label>
                    <input type="email" name="email" id="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-maisara-ember">
                </div>

                <button type="submit" class="btn-primary w-full">{{ __('Send Reset Link') }}</button>
            </form>
        </div>
    </div>
</section>
@endsection
