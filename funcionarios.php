<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba SSMO</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="scripts/funcionarios.js"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-title"><h4>Registrar Funcionario</h4></div>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="rut" class="form-label">Rut</label>
                    <input type="text" class="form-control" id="rut" placeholder="Ingrese rut del funcionario" required>
                </div>

                <div class="form-group">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" placeholder="Ingrese nombre del funcionario" required>
                </div>

                <div class="form-group">
                    <label for="address" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="address" placeholder="Ingrese dirección del funcionario" required>
                </div>

                <div class="form-group">
                    <label for="birthday" class="form-label">Fecha Nacimiento</label>
                    <input type="date" class="form-control" id="birthday" placeholder="Ingrese fecha de nacimiento del funcionario" required>
                </div>

                <div class="form-group">
                    <label for="state" class="form-label">Estado</label>
                    <select id="state" class="form-control">
                        <option value="" disabled selected>Seleccione estado del funcionario</option>
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
            </div>

            <div class="card-footer">
                <button type="button" class="btn btn-primary" onclick="register()">Registrar</button>
                <a href="../index.php" class="btn btn-danger">Volver</a>
            </div>
        </div>
    </div>
</body>
</html>