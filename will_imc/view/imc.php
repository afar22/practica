<?php 
    require_once 'comun/settings.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'comun/head.php'?>
<body>    
    <div class="wrapper">
    <?php include 'comun/aside.php'?>        
        <div class="main">
            <?php include 'comun/header.php'?>                 
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                  <li class="breadcrumb-item"><a href="#">IMC</a></li>
                </ol>
            </nav>              
            <div class="container">
                <h1>Nuevo IMC</h1>
                <!--Inicio Contenido -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="form_nuevo_imc" action="?url=usuario&accion=guardarIMC" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id?>" id="id">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="inputAltura">Altura:</label>
                                                <input id="inputAltura" name="altura" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="inputPeso">Peso:</label>
                                                <input id="inputPeso" name="peso" type="text" class="form-control">
                                            </div>
                                        </div>                                                                                                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-success btn-md" onclick="sendForm()">Enviar</button>
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
            
            var altura = $('#inputAltura').val();
            var peso = $('#inputPeso').val();
            var id = $('#inputID').val();
            var formulario = $('#form_nuevo_imc');

            if(altura=="" || peso=="" || id==""){
                Swal.fire({
                    title: "Error",
                    text: "Todos los campos son requeridos",
                    icon: "error"
                });
                return false;
            }

            formulario.submit();
            
        }
    </script>
</body>
</html>