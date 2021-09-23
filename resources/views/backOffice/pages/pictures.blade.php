<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Images') }}
        </h2>
    </x-slot>

    <main class="w-3/5 mx-auto">
        <div class="py-12">
            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="row row-cols-4">
                            @foreach ($photos as $photo)
                                <div>
                                    <div class="flex justify-end">
                                        <form action="/back-office/photos/{{ $photo->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger text-white" type="submit">X</button>
                                        </form>
                                    </div>

                                    <div class="m-2">
                                        <img alt="gallery" class="img-fluid"
                                        src="{{ asset('storage/img/photos/' . $photo->src) }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('backOffice.partials.pictures.create')
    </main>
</x-app-layout>
