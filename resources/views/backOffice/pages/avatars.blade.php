<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Avatars') }}
        </h2>
    </x-slot>

    <main class="container">
        <div class="py-12">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="row row-cols-3">
                            @foreach ($avatars as $avatar)
                                <div>
                                    <div class="flex justify-end">
                                        <form action="/back-office/avatars/{{ $avatar->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger text-white" type="submit">X</button>
                                        </form>
                                    </div>

                                    <img alt="gallery" class="img-fluid"
                                        src="{{ asset('storage/img/avatars/' . $avatar->src) }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('backOffice.partials.avatars.create')
    </main>
</x-app-layout>
