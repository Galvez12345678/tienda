<?php


class ControladorClientes{

    public function ctrlGuardarCliente(){
        if(isset($_POST["cedula"]) && isset($_POST["nombre"]) && isset($_POST["apellido"]) &&
        isset($_POST["direccion"]) && isset($_POST["telefono"]) && isset($_POST["email"])){

            $tabla="cliente";
            $data=array(
                'cedula'=>$_POST['cedula'],
                'nombre'=>$_POST['nombre'],
                'apellidos'=>$_POST['apellido'],
                'direccion'=>$_POST['direccion'],
                'telefono'=>$_POST['telefono'],
                'email'=>$_POST['email']
            );

            $res=ModeloCliente::mdlGuardarCliente($tabla,$data);
            if($res){
                echo "
                <script>
                    Swal.fire(
                    'Datos guardados con exito!',
                    'Dar clic el el boton para continuar!',
                    'Excelente!'
                  )
                </script>

                  ";
                  
                
            }else{
                echo "
                <script>
                    Swal.fire(
                    'Error al guardar!',
                    'Dar clic el el boton para continuar!',
                    'Error!'
                  )
                </script>

                  ";
                







            }
        }
    }



}