@extends('admin.template.app')
@section('content')
<main class="p-5 container">
    <a href="{{ route('add.destination') }}" class="btn btn-warning mb-2">+ Add Destination</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Location</th>
            <th scope="col">Price(Rp)</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($datas as $key => $data)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->description }}</td>
                <td>{{ $data->location }}</td>
                <td>{{ $data->price }}</td>
                <td><img class="img-xs"
                    src="{{ !empty($data->image) ? url('upload/destinations/' . $data->image) : url('upload/no_image.jpg') }}"
                    alt="" width="150px"></td>
                <td><a class="btn btn-warning" href="{{ route('edit.destination', $data->id) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('delete.destination', $data->id) }}">Delete</a></td>


            </tr>
        @endforeach
        </tbody>
      </table>
</main>
@endsection
