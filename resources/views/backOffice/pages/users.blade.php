<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <main class="container">
        <div class="py-12">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="row row-cols-3">
                            @foreach ($users as $user)
                                <div>
                                    <div class="flex justify-end">
                                        <form action="/back-office/avatars/{{ $user->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger text-white" type="submit">X</button>
                                        </form>
                                    </div>

                                    <div>
                                        <div class="card border-0 text-center" style="width: 18rem;">
                                            <img src="{{ asset('storage/img/avatars/' .$user->avatars->src) }}" class="card-img-top img-fluid" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $user->nickName }} {{ $user->name }} | {{ $user->year }}y</h5>
                                                <p class="card-text mb-0">Email: {{ $user->email }}</p>
                                                <p class="card-text">Role: <span class="text-success font-bold">{{ $user->roles->name }}</span></p>

                                                <hr>

                                                <a href="#" class="btn btn-info">Modifier</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
