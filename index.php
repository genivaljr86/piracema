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
                  <p style="font-size:20px" align="center"  >EM BREVE!</p>
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
            	<div id="tweet"></div>
                  <div id="face">
                  	<div id="fbook"><script type="text/javascript" src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php/en_US"></script>
					<script type="text/javascript">FB.init("");</script>
                    <fb:fan profile_id="115137055223201" stream="0" connections="10" width="250px" height="220px" header="0" logobar="0"   css="http://testelw.engenharia.ws/stylesheets/fb_ck.css?20"></fb:fan>   
                   </div>         
            </div>
	   </div>
    </div>
    
    <div id="footer">
    	<?php include("footer.php"); ?>
    </div>
  </body>
</html>

