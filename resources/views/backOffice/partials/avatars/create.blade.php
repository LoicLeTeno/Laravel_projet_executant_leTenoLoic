@include('backOffice.partials.flash')

<form action="/back-office/avatars" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="flex mb-20">
        <div class="input-group flex justify-end">
            <input class="w-1/2" type="file" name="src" required class="form-control" id="inputGroupFile02">
        </div>
    
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary text-white">Save</button>
        </div>
    </div>
</form>