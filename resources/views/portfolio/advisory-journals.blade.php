@extends('layouts.app')

@section('title', __('Portfolio Advisory Journals'))

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{ __('Portfolio Advisory Journals') }</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: content/portfolio/advisory-journals.md -->
                { __('Description and details for advisory journals.') }
            </p>
        </div>
        <div class="prose max-w-3xl mx-auto">
            <!-- PLACEHOLDER: content/portfolio/advisory-journals.md -->
        </div>
    </div>
</section>
@endsection
