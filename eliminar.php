<?php include "./header.php" ?>


<div class="container">
    <div class="row">
        <div class="col">
        <div class="card mt-4 fondoDelete" >
        <div class="card-body">

        <a href="./index.php" class="btn btn-outline-info" >
        <i class="fa-solid fa-angles-left"></i> Regresar
        </a>
             <h2>Eliminar Registro</h2>
            
             <table class="table table-bordered">
                <thead>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>

                </thead>
                <tbody>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tbody>
             </table>
             <hr>

             <div class="alert alert-danger" role="alert">
            <p>¿Estas seguro de eliminar este Registro?</p>
            <p>Una vez eliminado no podra ser recuperado </p>
            </div>

             <form action="" method="post">
                <button class="btn btn-danger" > 
                <i class="fa-solid fa-user-xmark"></i> Eliminar
                </button>
             </form>

        </div>
    </div>
  </div>
  </div>
</div>


<?php include "./scripts.php" ?>