@extends('base')
@section('cuerpo')
    <div class="row m-0 bg-white">
        <div class="col-md-6 offset-md-3">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row m-0">

                    <div class="col-12 p-0 mt-md-5 mt-3 pl-md-0 pb-4 mb-4 border-bottom">
                        <h2>Inicia Sesión </h2>

                        <h6> ¿No tienes cuenta aún? <a href="{{ route('register')}}">Registrate</a></h6>
                    </div>

                    <div class="col-12 p-0">
                        @error('email')
                            <div class="alert alert-danger" role="alert">
                                Email o contraseña no validos
                            </div>
                        @enderror
                        @error('password')
                            <div class="alert alert-danger" role="alert">
                                Email o contraseña no validos
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-12 p-0 mb-3">
                        <input type="email" name="email" id="" placeholder="Email" class="form-control ">
                    </div>
                    <div class="col-md-12  p-0 mb-3">
                        <input type="password" name="password" id="" placeholder="Contraseña" class="form-control ">
                    </div>
                    <div class="col-md-12 p-0 text-right">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                    </div>

                    <div class="col-12 mt-5 text-center">
                        <img src="/img/login.png" alt="" class="w-100 ">
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection