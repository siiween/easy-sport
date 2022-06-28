@extends('base')

@section('cuerpo')
    <div class="row m-0">
        <div class="col-md-6 pr-md-2 p-0 mb-3">
            <div class="p-3 w-100 bg-white shadow-sm border">
                <h4 class="border-bottom pb-2 mb-2">Datos</h4>
                <small class="text-secondary">Descripción</small>
                <p class="mb-3"> {{ $facility->description }}</p>
                <small class="text-secondary">Tamaño</small>
                <p class="mb-3"> {{ $facility->sq_meters }}</p>
                <small class="text-secondary">Capacidad</small>
                <p> {{ $facility->capacity }}</p>
                <small class="text-secondary">Abre</small>
                <p> {{ $facility->opens_at }}</p>
                <small class="text-secondary">Cierra</small>
                <p> {{ $facility->closes_at }}</p>
                <small class="text-secondary">Deporte</small>
                <p> {{ $facility->sport }}</p>
            </div>
        </div>
        <div class="col-md-6 pr-md-2 p-0 mb-3">
            <div class="p-3 w-100 bg-white shadow-sm border">
                <form method="POST" action="{{ route('crearFacility_Booking', $facility->id) }}">
                    @csrf
                    <div class="row m-0">
                        <div class="col-12 p-0 pl-md-0 pb-4 mb-4 border-bottom">
                            <h2 class="m-0">Nueva Reserva </h2>
                        </div>
                        <div class="col-12  mb-3 p-0">
                            <input type="time" name="hora" id="" placeholder="Hora " class="form-control ">
                        </div>
                        <div class="col-12  mb-3 p-0">
                            <input type="date" name="fecha" id="" placeholder="Fecha" class="form-control ">
                        </div>
                        <div class="col-12 p-0 text-right">
                            <button type="submit" class="btn btn-primary btn-block">
                                Crear Nuevo
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
