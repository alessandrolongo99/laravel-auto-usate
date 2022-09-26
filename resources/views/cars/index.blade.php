@extends('layouts.main')

@section('main-content')
    <div class="p-5">
        <h2 class="p-3 text-center">Tutti i cars</h2>
            @if (session('delete'))
                <div class="alert alert-danger">
                    {{ session('delete') }}
                </div>
            @endif
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th>Brand</th>
                    <th>Modello</th>
                    <th>Colore</th>
                    <th>Targa</th>
                    <th>Km</th>
                    <th>Optional</th>
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
                            <span class="badge badge-pill">
                                @if (isset($car->optionals))
                                    @foreach ($car->optionals as $optional)
                                        {{ $optional->name }} -
                                    @endforeach
                                @else
                                    No optionals selected for this cars
                                @endif
                            </span>
                        </td>

                        <td>
                            <div class="d-flex">
                                <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning me-2">Edit</a>
                                <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="delete-car-form">
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
