@extends('templates.usuario')
@section('title', 'Home de usuario')

@section('content')
    <div class="album">
        <h3 class="titulo pt-3">Laboratorios</h3>
        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 g-3">
            <a href="#laboratorio">
                <div class="col">
                    <div class="form-lab text-white animate__animated animate__bounceInLeft">
                        <div class="fondolab"
                            style="background-image: url(https://www.labmanufactura.net/api-sceii/v1/public/ImagenesLaboratorios/manufactura.jpeg);">
                        </div>
                        <div class="contentlab">
                            <div class="nomlab">
                                Nombre de laboratorio
                            </div>
                            <div class="jefelab">
                                Jefe de laboratorio
                            </div>
                            <div class="icon-detalle">
                                <i class="fa-solid fa-flask-vial"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <button type="button" class="btn btn-success btn-circle" onclick=""><i
                class="fa-solid fa-plus"></i></button>
        <br>
    </div>
@endsection