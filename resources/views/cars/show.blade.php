@extends('layouts.main')

@section('main-content')
    <div class="container my-5 py-2">
        <div class="row">
            <div class="card text-center">
                <div class="card-header">
                    DETAILS OF CAR
                </div>
                <div class="card-body">
                    <h1 class="card-title">Brand: {{ $car->brand }}</h1>
                    <h5 class="card-title">Modello: {{ $car->model }}</h5>
                    <p class="card-text">Colore: {{ $car->color }}</p>
                    <h6>Kilometers: {{ $car->mileage }}km</h6>
                </div>
                <div class="form-group p-3 d-flex justify-content-center">
                    <a href="{{ route('cars.edit',$car->id) }}" class="btn btn-sm btn-success mx-1">
                        Edit car
                    </a>
                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="form-car-delete" data-car-name="{{ $car->title }}">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-sm btn-danger mx-1">
                            Delete car
                        </button>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    License plate: {{ $car->license_plate }}
                </div>
            </div>
        </div>
    </div>
@endsection