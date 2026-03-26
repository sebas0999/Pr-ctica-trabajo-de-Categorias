<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir producto</title>
    <link rel="stylesheet" href="../CSS/formulario.css">
</head>
<body>

<div class="container">
    <div class="form-card">
        <h1>Añadir Nuevo Producto</h1>
        <p class="form-description">
            Completa la información del producto que deseas publicar.
        </p>

        <form action="" class="product-form" id="formulario">

            <div class="form-row">
                <div class="form-group">
                    <label for="categoria">Categoría</label>
                    <select id="categoria" required>
                        <option value="">Seleccionar</option>
                        <option>Computación</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tipo">Tipo de producto</label>
                    <select id="tipo" required>
                        <option value="">Seleccionar</option>
                        <option>Monitor</option>
                        <option>Mouse</option>
                        <option>Teclado</option>
                        <option>Tarjeta gráfica</option>
                        <option>Fuente de poder</option>
                    </select>
                </div>
            </div>

            <!-- Nombre del producto -->

            <div class="form-group">
                <label for="nombre">Nombre del producto</label>
                <input type="text" id="nombre" placeholder="Ej: RTX 4060" required>
            </div>

            <div class="form-group">
                <label for="foto">Imagen del producto</label>
                <input type="file" id="foto" name="foto" accept="image/*">
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" id="marca" placeholder="Ej: NVIDIA" required>
                </div>

                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" id="precio" placeholder="Ej: 1500000" required>
                </div>
            </div>

            <h2>Características del producto</h2>

            <div class="form-group">
                <label for="especificaciones">Especificaciones</label>
                <input type="text" id="especificaciones" placeholder="Ej: 24 pulgadas / 750W / 8GB / 16000 DPI">
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción del producto</label>
                <textarea id="descripcion" rows="5" placeholder="Describe el producto como su estado o el tiempo de uso"></textarea>
            </div>

            <div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="btn-submit">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
            <button type="submit" class="btn-submit-cancel">
                <a href="../index.php">Cancelar</a>
            </button>

        </form>
    </div>
</div>

</body>
</html>
