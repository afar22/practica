<!DOCTYPE html>
<html lang="en">
<?php include 'comun/head.php'?>
<body>    
    <div class="wrapper">
        <div class="main">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                  <li class="breadcrumb-item"><a href="#">Register</a></li>
                </ol>
            </nav>              
            <div class="container">
                <h1>Formualario crear login</h1>
                <!--Inicio Contenido -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="form_register" action="?url=login&accion=guardar" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="inputNick">Nick:</label>
                                                <input id="inputNick" name="nick" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="inputPass1">Password:</label>
                                                <input id="inputPass1" name="pass1" type="pass" class="form-control">
                                            </div>
                                        </div>                                                                                
                                    </div>
                                    <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="inputPass2">Repetir Password:</label>
                                                <input id="inputPass2" name="pass2" type="pass" class="form-control">
                                            </div>
                                        </div>                                                                                                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-success btn-md" onclick="sendForm()">Ingresar</button>
                                            <a href="?url=login&accion=inicio">Cancelar</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>                         
                    </div>
                </div>
                <!--Fin Contenido -->
            </div>                        
            <?php include 'comun/footer.php'?>     
        </div>   
    </div>
    <?php include 'comun/js.php'?>
    <script>
        function sendForm(){
            
            var nombre = $('#inputNombre').val();
            var pass1 = $('#inputpass1').val();
            var pass2 = $('#inputpass2').val();

            var formulario = $('#form_register');

            if(nombre=="" || pass1=="" || pass2==""){
                Swal.fire({
                    title: "Error",
                    text: "Todos los campos son requeridos",
                    icon: "error"
                });
                return false;
            }

            if(pass1!=pass2){
                Swal.fire({
                    title: "Error",
                    text: "las contraseñas no son iguales",
                    icon: "error"
                });
                return false;
            }

            formulario.submit();
            
        }
    </script>
</body>
</html>