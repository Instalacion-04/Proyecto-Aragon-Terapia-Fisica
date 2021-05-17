<!-- Content Header (Page header) encabezado-->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Gestión de servicios de la Clínica</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">

                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content contenedor principal-->
<section class="content">


    <!--llamada a las ventanas modales------------------->
    <?php include 'modal-editar.php';?>
    <?php include 'modal-guardar.php';?>
    <!--llamada a las ventanas modales------------------->


    <div class="container-fluid">
        <!-- Main content subcontenedor -->

        <!-- Small boxes (Stat box)  tarjetas-->
        <div class="row">

            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Editar,ingresar o actualizar servicios</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <!--Boton que llama al modal de editar-->
                        <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#modal-guardar"><i class="fa fa-plus"></i>
                        </button>

                        <table id="tabladedatos" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Identificador de servicio</th>
                                    <th>Nombre</th>
                                    <th>Costo</th>
                                    <th>Duración</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                  
                                </tr>
                            </thead>

                            <tbody>

                                <?php
                                include '../../BD/servicios_clinica.php';
                                foreach($listaEmpleados as $mostrar) 
                                {                                     
                                ?>
                                <tr>
                                   <!--<input type="hidden" class="serdelete" value="aquiva el ie">-->

                                    <td><?php echo $mostrar['ISER']; ?></td>
                                    <td><?php echo $mostrar['nombre']; ?></td>
                                    <td><?php echo $mostrar['costo']; ?></td>
                                    <td><?php echo $mostrar['duracion']; ?></td>
                                    <td><?php echo $mostrar['descripcion'];?></td>
                                   

                                    <td>
                                        <!--Boton que llama al modal de editar-->
                                        <button type="button" class="btn btn-primary editbtn" data-toggle="modal"
                                            data-target="#modal-editar"><i class="fa fa-edit"></i>
                                        </button>


                                        <!-- <button type="button" class="btn btn-danger servideletebtn"><i
                                                class="fa fa-trash-alt"></i>-->
                                        </button>



                                    </td>
                                </tr>

                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </div><!-- /.container-fluid -->

</section>
<!-- /.content -->

<!--Script AJX que obtiene datos del datatables y los manda a la ventana modal-->
<!--los #ie,#nombre y demas  campos llaman al id de cada campo que tiene el modal para insertar los datos-->

<script>
$('.editbtn').on('click', function() {
    $tr = $(this).closest('tr');
    var datos = $tr.children("td").map(function() {
        return $(this).text();

    });

    $('#ISER').val(datos[0]);
    $('#nombre').val(datos[1]);
    $('#costo').val(datos[2]);
    $('#duracion').val(datos[3]);
    $('#descripcion').val(datos[4]);
  
});
</script>
<!--Script AJX que obtiene datos del datatables y los manda a la ventana modal-->

