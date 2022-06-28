@extends('base')

@section('cuerpo')
    <!-- Modal to create your facility -->
    <div class="modal fade" id="nuevoFacility" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-md-5 p-4">
                <form method="POST" action="{{ route('crearFacility') }}">
                    @csrf
                    <div class="row m-0">
                        <div class="col-12 p-0 pl-md-0 pb-4 mb-4 border-bottom">
                            <h2 class="m-0">Nueva Instalacion </h2>
                        </div>


                        <div class="col-12  mb-3 p-0">
                            <input type="text" name="descripcion" id="" placeholder="Descripcion de la instalación "
                                class="form-control ">
                        </div>
                        <div class="col-12  mb-3 p-0">
                            <input type="text" name="tamano" id="" placeholder="Tamaño" class="form-control ">
                        </div>
                        <div class="col-12 mb-3 p-0">
                            <input type="text" name="capacidad" id="" placeholder="Capacidad" class="form-control ">
                        </div>
                        <div class="col-12  mb-3 p-0">
                            <input type="time" name="abre" id="" placeholder="Abre" class="form-control ">
                        </div>
                        <div class="col-12  mb-3 p-0">
                            <input type="time" name="cierra" id="" placeholder="Cierra" class="form-control ">
                        </div>
                        <div class="col-12 mb-3 p-0">
                            <input type="text" name="deporte" id="" placeholder="Deporte" class="form-control ">
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
    <!-- end Modal -->

    <div class="row m-0">

        <div class="col-12 text-center mb-5">
            <button class="btn btn-primary" data-toggle="modal" data-target="#nuevoFacility">
                Nueva Instalación
            </button>
        </div>


        @foreach ($facilities as $facility)
            <div class="col-md-4 p-3">

                <div class="card bg-light p-3 text-center">
                    <h5 class="card-title">
                        {{ $facility->sport }}
                    </h5>
                    <div class="card-body">
                        {{ $facility->description }}
                    </div>
                    <a href="{{ route('facility', $facility->id) }}" type="button" class="btn btn-primary mb-2">Ver</a>
                    <a href="{{ route('eliminarFacility', $facility->id) }}" class="btn btn-danger">
                        Eliminar
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
