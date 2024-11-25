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
                  <li class="breadcrumb-item"><a href="#">Lista Usuarios</a></li>
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
                            <div class="col-md-12">
                                <?php 
                                    if(count($lista)!=0){
                                ?>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Genero</th>
                                            <th scope="col">Nacimiento</th>
                                            <th scope="col">Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $cont = 0;
                                            foreach($lista as $item){
                                                $cont++;
                                        ?>
                                        <tr>
                                            <td scope="row"><?php echo $cont?></td>
                                            <td scope="col"><?php echo ucwords($item['cNombre'])?></td>
                                            <td scope="col"><?php echo $item['cCelular']?></td>
                                            <td scope="col"><?php echo $item['dFecha']?></td>
                                            <td scope="col"><?php echo $item['eGenero']?></td>                                        
                                            <td>
                                                    <a href="index.php?url=usuario&accion=imc&id=<?php echo $item['nUserID']?>">medicion</a>
                                                    <a href="index.php?url=historial">historial</a>
                                            </td>
                                        </tr>
                                        <?php }?> 
                                    </tbody>
                                </table>
                                <?php
                                    }else{
                                        echo "<h2>No hay usuarios registrados!!!</h2>";
                                    }
                                
                                ?>
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