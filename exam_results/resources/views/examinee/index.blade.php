@extends('layout')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-4">Összes vizsgázó</h2>

        <ul class="divide-y divide-gray-200">
            @foreach ($allExaminee as $Examinee)
                <li class="py-4 flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <h3 class="text-lg font-medium">{{ $Examinee->id }} {{ $Examinee->name }}</h3>
                    </div>
                    <div class="space-x-2">
                        <a href="{{ route('examinee.show', $Examinee->id) }}"
                            class="text-blue-500 hover:underline">Részletek</a>
                        <a href="{{ route('examinee.edit', $Examinee->id) }}"
                            class="text-blue-500 hover:underline">Módosítás</a>
                        <form action="{{ route('examinee.destroy', $Examinee->id) }}" method="post" class="inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-500 hover:underline">Törlés</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
