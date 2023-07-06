<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Administración de clientes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Home</a></li>
                        <li class="breadcrumb-item active">Administración de clientes</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Crear Clientes</button>


            </div>
            <div class="card-body">
                <form>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">





                                <div class="modal-header">
                                    <h4 class="modal-title">Crear Clientes</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                </div>



                                <div class="modal-body">




                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Cedula de Identidad"
                                            name="cedula" id="cedula">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                    </div>




                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Nombres completos"
                                            name="nombre" id="nombre">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>

                                        <input type="text" class="form-control" placeholder="Apellidos completos"
                                            name="apellido" id="apellido">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                    </div>





                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Direccion" name="direccion"
                                            id="direccion">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-route"></i>
                                            </span>
                                        </div>

                                        <input type="text" class="form-control" placeholder="numero de telefono"
                                            name="telefono" id="telefono">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" placeholder="Email"
                                            name="email" id="email">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Guardar</button>
                                     <?php
                                     $objusuario = new ControladorClientes(); 
                                     $objusuario->ctrlGuardarCliente();   
                                     ?>                
                                </div>
                            </div>

                        </div>

                    </div>
                </form>
            </div>
            <!-- /.card-body -->

            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->