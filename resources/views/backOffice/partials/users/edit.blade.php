<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    
    <main class="container justify-center">
        @include('backOffice.partials.flash')
        <form action="/back-office/users/{{ $edit->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="py-12">
                <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="flex justify-center">
                                <div class="card border-0" style="width: 25rem;">
                                    <img src="{{ asset('storage/img/avatars/' . $edit->avatars->src) }}"
                                        class="card-img-top img-fluid" alt="...">
                                    <select name="avatar_id" id="avatar_id" required>
                                        @foreach ($avatars as $avatar)
                                            <option @if ($avatar->id == $edit->avatar_id) selected @endif value="{{ $avatar->id }}">
                                                {{ $avatar->src }}</option>
                                        @endforeach
                                    </select>
                                    <div class="card-body flex flex-col">
                                        <div class="card-title">
                                            <div class="my-1">
                                                <label for="name" id="name">Nom:</label>
                                                <input type="text" name="name" value="{{ $edit->name }}" required>
                                            </div>

                                            <div class="my-1">
                                                <label for="nickName" id="nickName">Prénom:</label>
                                                <input type="text" name="nickName" value="{{ $edit->nickName }}"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="card-text">
                                            <div class="my-1">
                                                <label for="year" id="year">Year:</label>
                                                <input class="w-1/3" type="number" name="year"
                                                    value="{{ $edit->year }}" required>
                                            </div>

                                            <p class="card-text my-5">Role:
                                                <span class="text-success font-bold">{{ $edit->roles->name }}</span>
                                            </p>
                                        </div>

                                        <hr>

                                        {{-- <button class="btn btn-warning text-white text-center"
                                            type="submit">Valider</button> --}}
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-warning text-white">Modifer</button>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
</x-app-layout>
