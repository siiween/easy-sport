@extends('base')

@section('cuerpo')
    <div class="row m-0">
        @foreach ($facilities as $facility)
            <div class="col-md-4 p-3">
                <div class="card grid-item bg-light p-3 text-center" >
                    <h5 class="card-title">
                        {{$facility->sport}}
                    </h5>
                    <div class="card-body">
                        {{$facility->description}}
                    </div>
                </div>
            </div>
            
        @endforeach
    </div>

@endsection
