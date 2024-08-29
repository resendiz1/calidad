@extends('plantilla')
@section('contenido')
@section('title', 'Inicio de Sesión')



    <div class="container p-5 mt-5">
        <div class="row mt-5 justify-content-center">
            <div class="col-sm-12 col-md-9 col-lg-5 mt-5 bg-white p-5 border border-5 sombra">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="img/user.png" class="img-fluid w-25" alt="">
                        <h3 class="mt-2">Inicio de sesión</h3>
                        <span class="text-danger">{{$errors->first()}}</span> 
                    </div>
                </div>


<form action="{{route('login.intro')}}" method="POST">
    @csrf

                <div class="row justify-content-center mt-3">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <div class="input-group">
                            <div class="input-group-icon">
                                <span class="input-group-text"> <i class="fa fa-user p-1"></i> </span>
                            </div>
                            <input type="email" name="email" class="form-control login" value="{{old('email')}}" aria-describedby="input-group-icon" placeholder="Usuario" autofocus >
                        </div>
                    </div>
                </div>
                
                <div class="row justify-content-center mt-3">
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock p-1"></i> </span>
                            </div>
                            <input type="password" name="password" class="form-control form-control-sm login" value="{{old('password')}}"  placeholder="Contraseña" >
                        </div>
                    </div>
                </div>



                <div class="row mt-4 justify-content-center">
                     <div class="col-9 text-center">
                        <input type="checkbox" class="form-check-input" value="admin" name="admin" id="administrador">
                        <label for="administrador" class="text-secondary fw-bold">Ingresar como administrador</label>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9 mt-3">
                        <button  class="btn btn-secondary w-100 mt-2">
                            Entrar
                        </button>
                    </div>
                </div>
</form>



            </div>
        </div>
    </div>






 <br>
 <br>
 <br>
 <br>
 <br>
 <br>   
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>   
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>   
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>   

@endsection

     




