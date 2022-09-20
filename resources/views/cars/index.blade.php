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
                    <td><a href="#">{{ $car->brand }}</a></td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->color }}</td>
                    <td>{{ $car->licence_plate }}</td>
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

@section('delete-script')
  <script>

    // Prendiamo tutti gli elementi con questa classe,ovvero i bottoni delete
    const deleteFormElement = document.querySelectorAll('.delete-car-form');

    deleteFormElement.forEach(formButton=>{
      formButton.addEventListener('submit', function(event){
        event.preventDefault();
        const result = window.confirm('Sei sicuro di voler eliminare l\'elemento?');
        if(result) this.submit();
      })
    })
  </script>
@endsection
