<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catégories') }}
        </h2>
    </x-slot>

    <main class="container">
        @include('backOffice.partials.flash')
        <div class="py-12">
            <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Images</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorys as $category)
                                    <tr>
                                        <th scope="row">{{ $category->id }}</th>
                                        <td>{{ $category->name }}</td>
                                        <td>nb photos</td>
                                        <td> 
                                            {{-- <a href="/back-office/categories/{{ $category->id }}">
                                                <button class="btn btn-success text-white" type="submit">Show</button>
                                            </a> --}}
                                        </td>
                                        <td>
                                            <a href="/back-office/categories/{{ $category->id }}/edit">
                                                <button class="btn btn-primary text-white" type="submit">Edit</button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="/back-office/categories/{{ $category->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger text-white" type="submit">X</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('backOffice.partials.categories.create')
    </main>
</x-app-layout>
