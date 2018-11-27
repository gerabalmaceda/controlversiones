<div class="form-group">
    <label> Nombre de Usuario</label> 
    <input type="text" class="form-control" name="nombre" placeholder="nombreusuario" <?php $validador -> mostrar_nombre()?>> 
     <?php
        $validador -> mostrar_error_nombre();
     ?>
</div>
<div class="form-group">
    <label> Email</label> 
    <input type="email" class="form-control" name="email"placeholder="usuario@email.com" <?php $validador -> mostrar_email()?>> 
    <?php
        $validador -> mostrar_error_email();
     ?>
</div>
<div class="form-group">
    <label> Contraseña</label> 
    <input type="password" class="form-control" name="clave"> 
    <?php
        $validador -> mostrar_error_clave();
     ?>
</div>
<div class="form-group">
    <label> Repita la Contraseña</label> 
    <input type="password" class="form-control " name="clave1">
    <?php
        $validador -> mostrar_error_clave1();
    ?>
</div>
<br>
<button type="reset" class="btn btn-default"> Limpiar Campos</button>
<br>
<br>
<button type="submit" class="btn btn-default" name="enviar"> Enviar Datos</button>

