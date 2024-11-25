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
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                </ol>
            </nav>              
            <div class="container">
                <h1>Home</h1>
                <!--Inicio Contenido -->
                <?php 
                $lista = $this->modelo->listar();            
                ?>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label>usuarios</label>
                                <?php echo count($lista)?>
                            </div>
                            <div class="col-md-6">
                                <label>medicion</label>
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
</body>
</html>