
<?php include("template/cabecera.php");?>
<body class="bg-light">
    <div class="container mt-5">
        <h4 class="text-center">Iniciar Sesión</h4>
        <form action="php/login.php" method="post">
            <div class="form-group">
                <label for="num_empleado">Número de Empleado</label>
                <input type="text" name="num_empleado" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña</label>
                <input type="password" name="contraseña" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
        </form>
    </div>
</body>
</html>
<?php include("template/pie.php");?>