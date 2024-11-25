<div class="main">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
            <li class="breadcrumb-item"><a href="#">Lista Usuarios</a></li>
        </ol>
    </nav>              
    <div class="container">
        <h1>Nuevo Usuario</h1>
        <!--Inicio Contenido -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form id="form_nuevo_user" action="?url=ajax&accion=guardar" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inputNombre">Nombre:</label>
                                        <input id="inputNombre" name="nombre" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inputCelular">Celular:</label>
                                        <input id="inputCelular" name="celular" type="text" class="form-control">
                                    </div>
                                </div>                                        
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inputNacimiento">Nacimiento:</label>
                                        <input id="inputNacimiento" name="nacimiento" type="date" class="form-control">
                                    </div>
                                </div>                                        
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="inputGenero">Genero:</label>
                                        <select name="genero" class="form-control" id="inputGenero">
                                            <option value="">Seleccione</option>
                                            <option value="F">Femenino</option>
                                            <option value="M">Masculino</option>
                                        </select>
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
</div>   