<?php include("header.php");
$guia[1]="current";
 ?>
    <title>Restaurante Piracema</title>
  </head>
  <body>
    <div id="header">
    	<?php include("topo.php"); ?>
    </div>
    <div id="slider_area">
    	<div id="slider" class="centraliza">
        	<img src="<?php servidor();?>images/slider_home/1.jpg" alt="">
            <img src="<?php servidor();?>images/slider_home/2.jpg" alt="">
        </div>
    </div>
    <div id="content">
    	<div id="home" class="centraliza">
        	<div id="coluna1">
            	<div id="comentario">
                                
                </div>
		        <div id="conheca-santarem">
		        	<a href=""><img src="<?php servidor(); ?>images/home/conheca-santarem.jpg" alt=""></a>
	         	</div>       
            </div>
            
            <div id="coluna2">
            	<div id="cardapio-do-chefe">
            		<a href=""><img src="<?php servidor(); ?>images/home/cardapio-do-chefe.jpg" alt=""></a>            
                </div>
                <div id="saiba-mais">
                	<a href=""><img src="<?php servidor(); ?>images/home/saiba-mais.jpg" alt=""></a>
                </div>
            </div>
            <div id="coluna3">
            	<div id="twitter"></div>
                <div id="face"></div>
            
            </div>
	   </div>
    </div>
    
    <div id="footer">
    	<?php include("footer.php"); ?>
    </div>
  </body>
</html>

