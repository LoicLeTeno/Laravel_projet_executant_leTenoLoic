@include('backOffice.partials.flash')

<form action="/back-office/photos" method="POST" enctype="multipart/form-data">
    @csrf
    <h3 class="my-5">Ajouter une Image</h3>

    <div class="flex mb-20">
        <div class="input-group flex justify-start">
            <input class="w-full" type="file" name="src" required class="form-control" id="inputGroupFile02">
        </div>

        <div class="input-group flex justify-middle">
            <p class="d-flex align-items-center mb-0">Choix catégorie: </p>
            <select name="category_id" class="mx-2" id="category_id" required>
                @foreach ($categorys as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary text-white">Save</button>
        </div>
    </div>
</form>