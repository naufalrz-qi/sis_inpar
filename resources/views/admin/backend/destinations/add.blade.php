@extends('admin.template.app')
@section('content')
<main class="containr p-5">
    <div class="container mt-5">
        <h2 class="mb-4">Add Destination</h2>
        <form action="{{ route('store.destination') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" autocomplete="off" name="image" />
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" autocomplete="off" name="price" />
            </div>
            <div class="mb-3">
                <label for="image" class="form-label"></label>
                <img id="showImage" class="wd-200 rounded mb-4"
                    src="{{ url('upload/no_image.jpg') }}"
                    alt="photopost">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</main>
@endsection
