@extends('layouts.main')

@section('main-content')
    
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('cars.update', $car->id) }}" method="post">
                        @csrf
                        @method('put')
                        @include('cars.includes.form')
         
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection