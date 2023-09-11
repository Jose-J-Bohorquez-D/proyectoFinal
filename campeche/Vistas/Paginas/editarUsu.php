<div class="container">
	<div class="row">
		<h1 class="text-center">Formulario Para Actualizacion De Datos</h1>
		<div class="col">
			<?php 
				$editUsu=new UsuariosCtlr;
				$editUsu->actualizar_usuario_ctlr();
			?>
			<form method="post">

    
    

    <label for="rol">Rol:</label>
    <select value="rol" name="rol_up" required>
        <option value="admin">Admin</option>
        <option value="consumidor">Consumidor</option>
    </select><br>

    <input type="submit" value="Enviar">
</form>
		</div>
	</div>
</div>