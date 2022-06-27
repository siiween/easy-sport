@extends('base')


@section('cuerpo')
    <div class="row m-0 bg-white">
        <div class="col-md-6 offset-md-3">
            <form method="POST" action="{{ route('register') }}" id="registration">
                @csrf
                <div class="row m-0">

                    <div class="col-12 p-0 mt-md-5 mt-3 pl-md-0 pb-4 mb-4 border-bottom">
                        <h2 class="m-0">Crea una cuenta</h2>
                        <h6> ¿Ya tienes una cuenta? <a href="{{ route('login')}}">Login</a></h6>
                    </div>

                    <div class="col-12 p-0">
                        @error('email')
                            <div class="alert alert-danger" role="alert">
                                Email no valido
                            </div>
                        @enderror
                        @error('password')
                            <div class="alert alert-danger" role="alert">
                                Contraseña no valida
                            </div>
                        @enderror

                        @error('password')
                            <div class="alert alert-danger" role="alert">
                                Nombre no valido
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-12 p-0 mb-3">
                        <input type="text" name="name" id="" placeholder="Nombre" class="form-control ">
                    </div>

                    <div class="col-md-12 p-0 mb-3">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control "
                            >
                        <small id="errorEmail" class="text-danger"></small>
                    </div>
                    <div class="col-md-12  p-0 mb-3">
                        <input type="password" name="password" id="password"
                            placeholder="Contraseña" class="form-control ">
                        <small id="errorPassword" class="text-danger"></small>
                    </div>
                    <div class="col-md-12  p-0 mb-3">
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Confirmación"  class="form-control ">
                        <small id="errorConfirmacion" class="text-danger"></small>
                    </div>
                    <div class="col-md-12 p-0 text-right">
                        <button type="submit" class="btn btn-primary">
                            Singup
                        </button>
                    </div>

                    <div class="col-12 mt-5 text-center">
                        <img src="/img/sign.png" alt="" class="w-100 ">
                    </div>

                </div>
            </form>
        </div>
    </div>

@endsection
