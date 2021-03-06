<?php $titulo = "Neomix - Subir Productos" ?>
<link rel="stylesheet" type="text/css" href="<?php assets::asset("css/Admin/subirProductos/cuerpo.css"); ?>">

<?php ob_start() ?>

	<form action="<?php assets::form("alta/producto"); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

		<div class="campos">
			<label>Nombre del Producto:</label>
			<input type="text" name="nombre">
		</div>

		<div class="campos">
			<label>Descripción:</label>
			<textarea name="descripcion"></textarea>
		</div>

		<div class="campos">
			<label>Precio Unitario(sin iva ni impuestos):</label>
			<input type="number" name="precio" step="any" value="">
		</div>

		<div class="campos">
			<label>Imagen(opcional):</label>
			<input type="file" name="file">
		</div>

		<div class="campos">
			<label>Categoría:</label>
			<select name="categoria">
				<?php foreach($categorias as $categoria){ ?>
				<option value="<?php echo $categoria->getId();?>"><?php echo $categoria->getNombre()?></option>
				<?php } ?>
			</select>
		</div>

		<div class="campos">
			<input type="submit" name="Enviar">
                </div>

	</form>

<?php $contenido = ob_get_clean() ?>

<?php include PLANTILLAS."admin.php";