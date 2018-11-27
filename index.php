<?php
    include_once 'app/Conexion.inc.php';
    include_once 'app/RepositorioUsuario.inc.php'; 
    $titulo = 'Asociacion Japones de Corrientes';
    include_once 'plantillas/inicio.inc.php';
    include_once 'plantillas/barra-navegacion.inc.php';
?>
<!DOCTYPE html>

       
        <div class="container">
            <div class="jumbotron">
                <h1> Asociacion Japonesa Corrientes</h1>
                <p> コリエンテス日本人協会 </p>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"> </span>  Busqueda
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="search" class="form-control" placeholder="Que buscas?">

                                    </div>
                                    <button class="form-control"> Buscar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class ="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-filter" aria-hidden="true"> </span> Filtro
                                </div>
                                <div class="panel-body">

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class ="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"> </span> Archivo
                                </div>
                                <div class="panel-body">

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"> </span>  Ultimas entradas
                        </div>
                        <div class="panel-body">

                            <p>  todavia no hay entradas para mostrar</p>

                        </div>
                    </div>
                </div>

            </div>

<?php
    include_once 'plantillas/cierre.inc.php';
?>