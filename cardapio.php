<?php include("header.php");
$guia[3]="current";	 
 ?>
    <title>Restaurante Piracema</title>

  </head>  
  
  <body>
    <div id="header">
    	<?php include("topo.php"); ?>
    </div>
    
    	<div id="title">
        	<div class="centraliza">
            <img src="<?php servidor(); ?>images/cardapio/title_cardapio.png" alt="" id="img_title">
			<img src="<?php servidor(); ?>images/cardapio/title_local.png" alt="" id="img_local">
            </div>
	        
        </div>
        
    	<div id="content" class="centraliza">        
        	
            <div id="cardapio" class="centraliza">
	            
	            <div class="separator"></div>
	            
			    	<div id="principal">
                   	 <div id="titulo_cardapio"><img src="<?php servidor(); ?>images/cardapio/titulo_cardapio.png" alt=""></div>
                    	
                        
                        
	                   <div id="menu_cardapio"> 
		                    <ul>
			                    <li><a href=""><img src="<?php servidor(); ?>images/cardapio/menu/entradas_e_petiscos_off.png" alt="" class="botao"></a></li>
			                    <li><a href=""><img src="<?php servidor(); ?>images/cardapio/menu/saladas_off.png" alt="" class="botao"></a></li>
			                    <li><a href=""><img src="<?php servidor(); ?>images/cardapio/menu/reios_e_mar_off.png" alt="" class="botao"></a></li>
			                    <li><a href=""><img src="<?php servidor(); ?>images/cardapio/menu/carnes_off.png" alt="" class="botao"></a></li>
			                    <li><a href=""><img src="<?php servidor(); ?>images/cardapio/menu/bebidas_off.png" alt="" class="botao"></a></li>
			                    <li><a href=""><img src="<?php servidor(); ?>images/cardapio/menu/sobremesas_off.png" alt="" class="botao"></a></li>
			                </ul>
	                  </div>    
			        </div>  
                </div>                  
                   
            <div class="separator"></div>
	    </div>
    </div>
    
    <div id="footer">
    	<?php include("footer.php"); ?>
    </div>
  </body>
</html>