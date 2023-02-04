<h1 class="nombre-pagina"> Recuperar Contraseña</h1>
<p class="descripcion-pagina"> Coloca tu nueva contraseña a continuación</p>

<?php 
    include_once __DIR__."/../templates/alertas.php"
?>

<?php if($error) return null;?>

<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Contraseña</label>
        <input 
            type="password"
            id="password"
            placeholder="Tu nueva contraseña"
            name="password"            
        />

    </div>

    <input type="submit" class="boton" value="Guardar Nueva Contraseña">
    
</form>

<div class="acciones">
    <a href='/'>Iniciar Sesión</a> 
    <a href='/crear-cuenta'>¿Aún no tienes una cuenta?</a>

</div>