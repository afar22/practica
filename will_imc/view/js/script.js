const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});
function ver_ajax(){
  alert();
  /*$.ajax({
    url:'index.php?url=ajax',
        beforeSend: function() {
            $('#panel').html('');
            $('#load').css('display','block');
        },					
        success: function(data){ 
            $('#panel').html(data);	
            $('#load').css('display','none');
        } 		
  });*/
} 

