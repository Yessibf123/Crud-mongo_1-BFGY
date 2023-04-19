<?php include "./header.php" ?>


<div class="container">
    <div class="row">
        <div class="col">
        <div class="card mt-4">
        <div class="card-body">

        <a href="./index.php" class="btn btn-outline-info" >
        <i class="fa-solid fa-angles-left"></i> Regresar
        </a>
             <h2>Agregar Nuevo Registro</h2>
            
            <form action="" method="post">
                <label for="paterno">Apellido Paterno</label>
                <input type="text" class="form-control" id="paterno" name="paterno" >
                <label for="materno">Apellido Materno</label>
                <input type="text" class="form-control" id="materno" name="materno" >
                <label for="nombre">Nombres</label>
                <input type="text" class="form-control" id="nombre" name="nombre" >
                <label for="fechaNacimiento">Fecha nacimiento</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" >
                <button class="btn btn-primary mt-3" >
                <i class="fa-solid fa-floppy-disk"></i> Agregar
                </button>
            </form>
        </div>
    </div>
  </div>
  </div>
</div>


<?php include "./scripts.php" ?>