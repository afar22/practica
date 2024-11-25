<div class="wrapper">
    <div class="main">
        <nav aria-label="breadcrumb">
            <div class="row">
                <div class="col-md-10">
                    <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                        <li class="breadcrumb-item"><a href="#">Nuevo Usuario</a></li>
                    </ol>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-info btn-sm" onclick="ver_ajax('nuevo')">Nuevo</button>
                </div>                
            </div>

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
    </div>   
</div>
    

