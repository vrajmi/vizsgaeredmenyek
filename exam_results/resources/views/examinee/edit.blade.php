@extends('layout')

@section('content')
    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6">Szerkesztés: {{ $oneExaminee->name }}</h1>

        <form action="{{ route('examinee.update', $oneExaminee->id) }}" method="post" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="eName" class="block text-sm font-medium text-gray-700">Név:</label>
                <input value="{{ old('eName', $oneExaminee->name) }}" type="text" name="eName" id="eName"
                    class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @error('eName')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="eExamProject" class="block text-sm font-medium text-gray-700">Vizsgaremek:</label>
                <input value="{{ old('eExamProject', $oneExaminee->exam_project) }}" type="number" name="eExamProject"
                    id="eExamProject"
                    class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @error('eExamProject')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="eConsoleApplication" class="block text-sm font-medium text-gray-700">Konzol alkalmazás:</label>
                <input value="{{ old('eConsoleApplication', $oneExaminee->console_application) }}" type="number"
                    name="eConsoleApplication" id="eConsoleApplication"
                    class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @error('eConsoleApplication')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="eDesktopApplication" class="block text-sm font-medium text-gray-700">Grafikus asztali
                    alkalmazás:</label>
                <input value="{{ old('eDesktopApplication', $oneExaminee->desktop_application) }}" type="number"
                    name="eDesktopApplication" id="eDesktopApplication"
                    class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @error('eDesktopApplication')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="eWebsite" class="block text-sm font-medium text-gray-700">Reszponzív viselkedésű
                    weboldal:</label>
                <input value="{{ old('eWebsite', $oneExaminee->website) }}" type="number" name="eWebsite" id="eWebsite"
                    class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @error('eWebsite')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="eBackend" class="block text-sm font-medium text-gray-700">Backend programozás:</label>
                <input value="{{ old('eBackend', $oneExaminee->backend) }}" type="number" name="eBackend" id="eBackend"
                    class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @error('eBackend')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="eFrontend" class="block text-sm font-medium text-gray-700">Frontend programozás:</label>
                <input value="{{ old('eFrontend', $oneExaminee->frontend) }}" type="number" name="eFrontend"
                    id="eFrontend"
                    class="mt-1 block w-full bg-gray-100 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                @error('eFrontend')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Módosítás
                </button>
            </div>
        </form>
    </div>
@endsection
