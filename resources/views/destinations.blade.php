@extends('template.app')
@section('content')
    <div id="destinations" class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">Destinations</h2>

        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            @foreach ($datas as $data)
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-image: url('{{ asset('upload/destinations/'.$data->image) }}');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">{{ $data->name }}</h3>
                        <ul class="d-flex list-unstyled mt-auto justify-content-end">
                            <li class="d-flex align-items-center">
                                <a href="#" class="btn btn-warning">View</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach




        </div>
    </div>
@endsection
