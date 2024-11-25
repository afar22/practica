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
                <div id="panel"></div>
                <div id="load" style="display: none;">Cargando...</div>
                <!--Fin Contenido -->
            </div>                        
            <?php include 'comun/footer.php'?>     
        </div>   
    </div>
    <?php include 'comun/js.php'?>
    <script>
        function ver_ajax(accion){
            $.ajax({
                url:'index.php?url=ajax&accion='+accion,
                    beforeSend: function() {
                        $('#panel').html('');
                        $('#load').css('display','block');
                    },					
                    success: function(data){ 
                        $('#panel').html(data);	
                        $('#load').css('display','none');
                    } 		
            });
        } 
/*
        var formData = new FormData(document.getElementById("form-file"));
        formData.append("dato", "valor");
        $.ajax({
            url:'ajax/file.php',        
            type: "post",
            dataType: "html",
            data: formData,
            beforeSend: function(){
                $('#spinner').css('display','block');
            },        
            cache: false,
            contentType: false,
            processData: false
        }).done(function(data){
            $('#spinner').css('display','none');
            //
            $('#panel').html(data);	
            //alert(data);            
        });  */

        $(document).ready(function() {
            ver_ajax('lista'); 
         });
    </script>
</body>
</html>