@extends('base')

@section('cuerpo')
    <div class="row m-0">
        @foreach ($classes as $class)
            <div class="col-md-4 p-3">

                <div class="card bg-light p-3 text-center">
                    <h5 class="card-title">
                        {{ $class->name }}
                    </h5>
                    <div class="card-body">
                        {{ $class->description }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
