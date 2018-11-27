<?php
    include_once 'app/Conexion.inc.php';
    include_once 'app/RepositorioUsuario.inc.php';
    include_once 'app/ValidadorRegistro.inc.php';
    include_once 'app/Usuario.inc.php';
    if(isset($_POST['enviar'])){
        Conexion :: abrir_conexion();
        $validador = new ValidadorRegistro($_POST['nombre'], $_POST['email'], $_POST['clave'], $_POST['clave1'] );
    
        if ($validador -> registro_valido()){
            $usuario = new Usuario('', $validador -> obtener_nombre(), $validador -> obtener_email(), $validador -> obtener_clave(), '', '');
            $usuario_insertado = RepositorioUsuario :: insertar_usuario(Conexion :: obtener_conexion());
            
            if($usuario_insertado){
                //redirigimos al login si se logueo con exito
                
            }
        }
        Conexion:: cerrar_conexion();
    }
    
    
    $titulo = 'Registro';
    include_once 'plantillas/inicio.inc.php';
    include_once 'plantillas/barra-navegacion.inc.php';
?>

<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Formulario de Registro</h1>
    </div>
    
</div>
<div class="container">
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Instrucciones
                    </h3>
                </div>
                <div class="panel-body">
                    <br>
                    <p class="text-justify">
                        Para generar su usuario, debera de ingresar el nombre del
                        mismo, quedando este a eleccion suya. Tambien debe ingresar
                        un correo electronico y una contraseña.
                    </p>

                    <br>
                    <a href="#"> ¿Ya esta registrado?</a>
                    <br>
                    <br>
                    <a href="#"> ¿Olvidaste tu contraseña?</a>
                </div>

            </div>

        </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Introduzca sus Datos
                    </h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action= "<?php echo $_SERVER['PHP_SELF'];?>">
                        <?php
                             if(isset($_POST['enviar'])){
                                 include_once 'plantillas/registro_validado.inc.php';
                            }else{
                                include_once 'plantillas/registro_vacio.inc.php';
                                
                            }
                        ?>
                    </form> 

    
    
                </div>
            </div> 
        </div>
    </div>
</div>

<?php
    include_once 'plantillas/cierre.inc.php';
?>