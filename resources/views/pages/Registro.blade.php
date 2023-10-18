@extends('layouts.auth.master')
 <section class="form-01-main">
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('assets2/images/play.webp');"></div>
        <div class="contents order-2 order-md-1">
    
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-7">
                <h3>Registrate<strong></strong></h3>
                <p class="mb-4">Registrate en nuestra pagina web</p>
                <form action="{{ route('validado') }}" method="POST">
                  @csrf
                  <div class="form-group first">
                    <label for="nombre">nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" required>
                  </div>
                  <div class="form-group first">
                    <label for="email">email</label>
                    <input type="email" class="form-control" placeholder="Correo@gmail.com" id="email" name="email" required>
                  </div>
                  <div class="form-group last mb-3">
                    <label for="password">password</label>
                    <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password" required>
                  </div>
                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">Recordar</span>
                      <input type="checkbox" checked="checked"/>
                      <div class="control__indicator"></div>
                    </label>
                    <span class="ml-auto"><a href="#" class="forgot-pass">Recuperar Contraseña</a></span> 
                  </div>
    
                  <button class="btn btn-primary" type="submit">Aceptar</button> 
    
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>   
  </section> 
{{-- @dump($errors -> all()) --}}