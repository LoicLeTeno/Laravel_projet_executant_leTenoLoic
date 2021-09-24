@include('backOffice.partials.flash')

<form action="/back-office/categories" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="flex mb-20">
        <div class="input-group flex justify-end mx-3 align-middle">
            <label class="form-label flex align-items-center mr-3 my-0 mt-0 font-bold f-5" for="name" id="name">Ajouter une categroie : </label>
            <input type="text" name="name" class="form-input">
        </div>
    
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary text-white">Save</button>
        </div>
    </div>
</form>