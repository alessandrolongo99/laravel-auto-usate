@extends('layouts.main')

@section('main-content')

<div class="p-5">
    <h2 class="p-3 text-center">Tutti i cars</h2>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th>Brand</th>
            <th>Modello</th>
            <th>Colore</th>
            <th>Targa</th>
            <th>Km</th>
            <th>Modifica</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td><a href='{{ route('cars.show', $car->id) }}'>{{ $car->brand }}</a></td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->color }}</td>
                    <td>{{ $car->license_plate }}</td>
                    <td>{{ $car->mileage }}</td>
                    <td>
                      <div class="d-flex">
                        <a href="#" class="btn btn-warning me-2">Edit</a>
                        <form action="#" method="POST" class="delete-car-form">
                          @csrf
                          @method('DELETE')

                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
   
@endsection
