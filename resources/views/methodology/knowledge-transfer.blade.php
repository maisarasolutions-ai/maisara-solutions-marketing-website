@extends('layouts.app')

@section('title', __('Methodology Knowledge Transfer'))

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{ __('Methodology Knowledge Transfer') }</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: content/methodology/knowledge-transfer.md -->
                { __('Description and details for knowledge transfer.') }
            </p>
        </div>
        <div class="prose max-w-3xl mx-auto">
            <!-- PLACEHOLDER: content/methodology/knowledge-transfer.md -->
        </div>
    </div>
</section>
@endsection
