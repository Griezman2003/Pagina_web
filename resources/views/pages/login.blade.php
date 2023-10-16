@extends('layouts.auth.master')
<section class="form-01-main">

    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('assets2/images/play.webp');"></div>
        <div class="contents order-2 order-md-1">
    
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-7">
                <h3>Iniciar Sesion<strong></strong></h3>
                <p class="mb-4">Inicia sesion en la pagina web para seguir navegando</p>
                <form action="#" method="post">
                  <div class="form-group first">
                    <label for="username">Correo</label>
                    <input type="text" class="form-control" placeholder="Correo@gmail.com" id="username">
                  </div>
                  <div class="form-group last mb-3">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Contraseña" id="password">
                  </div>
                  
                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">Recordar</span>
                      <input type="checkbox" checked="checked"/>
                      <div class="control__indicator"></div>
                    </label>
                    <span class="ml-auto"><a href="#" class="forgot-pass">Recuperar Contraseña</a></span> 
                  </div>
    
                  <input type="submit" value="Iniciar Sesión" class="btn btn-block btn-primary">
    
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
        
  </section>