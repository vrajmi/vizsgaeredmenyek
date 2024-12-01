@extends('layout')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4">Részletek: {{ $oneExaminee->name }}</h2>

        <dl class="mt-4">
            <div class="flex flex-col md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-6">
                <dt class="text-gray-500">Azonosító:</dt>
                <dd class="mt-1 text-gray-900">{{ $oneExaminee->id }}</dd>

                <dt class="text-gray-500">Név:</dt>
                <dd class="mt-1 text-gray-900">{{ $oneExaminee->name }}</dd>

                <dt class="text-gray-500">Vizsgaremek:</dt>
                <dd class="mt-1 text-gray-900">{{ $oneExaminee->exam_project }}</dd>

                <dt class="text-gray-500">Konzol alkalmazás:</dt>
                <dd class="mt-1 text-gray-900">{{ $oneExaminee->console_application }}</dd>

                <dt class="text-gray-500">Létrehozás dátuma:</dt>
                <dd class="mt-1 text-gray-900">{{ $oneExaminee->created_at }}</dd>

                <dt class="text-gray-500">Utolsó módosítás dátuma:</dt>
                <dd class="mt-1 text-gray-900">{{ $oneExaminee->updated_at }}</dd>
            </div>
        </dl>
    </div>
@endsection
