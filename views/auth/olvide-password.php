<h1 class="nombre-pagina">Recuperar Contraseña</h1>
<p class="descripcion-pagina">Llenar el siguiente formulario para recuperar tu contraseña</p>

<?php 
    include_once __DIR__."/../templates/alertas.php"
?>

<form class="formulario" method="POST" action="/olvide">
    <div class="campo">
        <label for="email">E-mail </label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu E-mail"
        />
    </div>
    <input type="submit" class="boton" value="Enviar instrucciones">
    
</form>
<div class="acciones">
    <a href='/'>iniciar sesion</a> 
    <a href='/crear-cuenta'>Crear cuenta nueva</a>

</div>
