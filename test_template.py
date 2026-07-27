import os

BASE_DIR = r'C:\Users\maisa\Desktop\final\maisara_solutions_marketing_website\marketing_website\development\codebase'
VIEWS_DIR = os.path.join(BASE_DIR, 'resources', 'views')

view_file = os.path.join(VIEWS_DIR, 'methodology', 'index.blade.php')

title = 'Methodology Index'
module_md = 'methodology/index'
module_name = 'methodology'

content = f"""@extends('layouts.app')

@section('title', __('{title}'))

@section('content')
<!-- PLACEHOLDER: Hero section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('{title}') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: content/{module_md}/index.md -->
                {{ __('{module_name.capitalize()} overview and introduction.') }}
            </p>
        </div>
        @include('components.shared.segment-selector')
    </div>
</section>
@endsection
"""

with open(view_file, 'w', encoding='utf-8') as f:
    f.write(content)

print("Written. First 15 lines:")
with open(view_file, 'r') as f:
    for i, line in enumerate(f.readlines()[:15], 1):
        print(f"{i}: {line.rstrip()}")
