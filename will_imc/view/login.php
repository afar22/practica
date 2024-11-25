<!DOCTYPE html>
<html lang="en">
<?php include 'comun/head.php'?>
<body>    
    <div class="wrapper">
        <div class="main">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                  <li class="breadcrumb-item"><a href="#">Login</a></li>
                </ol>
            </nav>              
            <div class="container">
                <h1>Formualario nueva login</h1>
                <!--Inicio Contenido -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="form_login" action="?url=login&accion=validar" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="inputNick">Nick:</label>
                                                <input id="inputNick" name="nick" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="inputPass">Password:</label>
                                                <input id="inputPass" name="pass" type="pass" class="form-control">
                                            </div>
                                        </div>                                                                                
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-success btn-md" onclick="sendForm()">Ingresar</button>
                                            <a href="?url=login&accion=register">Registrate si no tienes cuenta</a>
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
            
            var nick = $('#inputNick').val();
            var pass = $('#inputpass').val();

            var formulario = $('#form_login');

            if(nick=="" || pass==""){
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