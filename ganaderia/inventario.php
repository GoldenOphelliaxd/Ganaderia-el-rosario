<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h4 class="text-center">Inventario de Ganadería El Rosario</h4>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Proveedor</th>
                    <th>Subtotal</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'php/mostrar_inventario.php'; ?>
            </tbody>
        </table>
        <button onclick="location.href='index.php'" class="btn btn-secondary mt-3">Regresar al Menú</button>
    </div>
</body>
</html>
