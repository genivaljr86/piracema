<?php include("header.php");
$guia[3]="current";
$p=1;
$p = $_GET["p"];

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
                   	 <div id="titulo_cardapio">
                        <p>
                            Páginas: 
                            <a href="<?php servidor(); ?>cardapio/1">Frente</a>
                            &nbsp;
                            <a href="<?php servidor(); ?>cardapio/2">Verso</a>
                        </p>
                    </div>
                    	
                        
                        
	                   <div id="menu_cardapio">
		                    <div class="zoom" style="height:510;">
                            <?php if($p==2){ ?>
                                <img src="<?php servidor(); ?>images/cardapio/cardapio2.jpg" alt="" style="height:510px; width:auto;"/>
                            <?php }else{ ?>
                                <img src="<?php servidor(); ?>images/cardapio/cardapio1.jpg" alt="" style="height:510px; width:auto;"/>
                            <?php } ?>
                            </div>

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