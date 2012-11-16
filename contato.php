<?php include("header.php");
$guia[6]="current";


 ?>
    <title>Restaurante Piracema</title>

  </head>  
  
  <body>
    <div id="header">
    	<?php include("topo.php"); ?>
    </div>
    
    	<div id="title">
        	<div class="centraliza">
            <img src="<?php servidor(); ?>images/contato/contato.png" alt="" id="img_title">
			<img src="<?php servidor(); ?>images/contato/endereco.png" alt="" id="img_local">
            </div>
	        
        </div>   
        	<div id="area_contato">             
            	<p>Entre em contato conosco. Teremos o prazer em atende-lo</p>       	            
		        <div class="separator"></div>                    	
             	<div id="formulario">  	
			          <form action="">
			           <label for=""><img src="<?php servidor(); ?>images/contato/nome.png" alt=""></label><br>
			           <input type="text" name="" id="nome"><br>
			                    
			           <label for=""><img src="<?php servidor(); ?>images/contato/telefone.png" alt=""></label><br>
			           <input type="text" name="" id="tel"><br>
			                    
			          <label for=""><img src="<?php servidor(); ?>images/contato/e-mail.png" alt=""></label><br>
			          <input type="text" name="" id="email"><br>
			                    
			          <label for=""><img src="<?php servidor(); ?>images/contato/mensagem.png" alt=""></label><br>
			          <textarea name="" id="mens" cols="30" rows="10"></textarea> <br>                   
			          <input type="image" src="<?php servidor(); ?>images/contato/enviar_off.png" alt="" class="botao" id="cont_bt">                    
			          </form>   
               </div>  
               
               <div id="endereco">
               <p>AV. Mendonca Furtado, 73,<br/>c Santarém, BR.</p>
               <p>(93) 3522 7461</p>
               </div>         
		    </div>                
            
                
            <div class="separator"></div>
            </div>
            
            
	    
    
    
    <div id="footer">
    	<?php include("footer.php"); ?>
    </div>
    <?php include ("contato_msg.php"); ?>
  </body>
</html>