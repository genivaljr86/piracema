<?php include("header.php");
$guia[1]="current";
$pg = $_GET["pg"];
 if($pg ==""){
	 $pg="historico";
	 }

 ?>
    <title>Restaurante Piracema</title>

  </head>  
  
  <body>
    <div id="header">
    	<?php include("topo.php"); ?>
    </div>
    
    	<div id="title">
        	<div class="centraliza">
            <img src="<?php servidor(); ?>images/conheca_santarem/conheca_santarem.png" alt="" id="img_title">
			<img src="<?php servidor(); ?>images/conheca_santarem/local.png" alt="" id="img_local">
            </div>
	        
        </div>
        
    	<div id="content" class="centraliza">        
        	
            <div id="conheca_santarem" class="centraliza">
	            
	            <div class="separator"></div>
	            
			    	<div id="coluna_texto"> 
                    <?php if($pg == "historico"){ ?>
		              <p class="texto_titulo"><img src="<?php servidor(); ?>images/conheca_santarem/texto_titulo.png" alt=""> </p> 
                      <br>
                      <p>Santarém é um município brasileiro do estado do Pará. É o segundo município mais importante do Pará e o principal centro financeiro e econômico do oeste do estado. É sede da Região Metropolitana de Santarém. Pertence à mesorregião do Baixo Amazonas e a microrregião de Santarém. Situa-se na confluência dos rios Tapajós e Amazonas. Localizada a cerca de 800 km das metrópoles da Amazônia (Manaus e Belém), ficou conhecida poeticamente como "Pérola do Tapajós".</p>

<p>Em 2012 sua população foi estimada pelo Instituto Brasileiro de Geografia e Estatística (IBGE) em 299 419 habitantes, sendo então o terceiro município mais populoso do estado do Pará (atrás apenas das cidades conurbadas de Belém e Ananindeua), o sétimo mais populoso do norte do Brasil e o 83º de todo o país.[4] Ocupa uma área de 22 887,080 km², sendo que 77 km² estão em perímetro urbano.[7]</p>	             	
					<?php } ?> 
                    
                    <?php if($pg == "geografia"){?>                    
               		     <p class="texto_titulo"><img src="<?php servidor(); ?>images/conheca_santarem/" alt=""> </p> 
                      <br>
                     <p> TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA TESTE_GEOGRAFIA  </p>                    
                    <?php } ?>  
                    
                    <?php if($pg == "origem-do-nome"){?>
                    <p class="texto_titulo"><img src="<?php servidor(); ?>images/conheca_santarem/" alt=""> </p> 
                      <br>
                    <p>TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME TESTE_ORIGEM_DO_NOME </p>
                    
                    <?php } ?>  
                    
                    <?php if($pg == "cultura") {?>
                    <p class="texto_titulo"><img src="<?php servidor(); ?>images/conheca_santarem/" alt=""> </p> 
                      <br>
                    <p>TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA TESTE_CULTURA </p>
                    <?php } ?>  
                    
                    <?php if($pg == "turismo"){?>
                    <p class="texto_titulo"><img src="<?php servidor(); ?>images/conheca_santarem/" alt=""> </p> 
                      <br>
                    <p>TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO TESTE_TURISMO </p>
                    <?php } ?>	                    
                      
			        </div>
                    
                    <div id="coluna_menu"> 
                    	<ul>
			                <li><a href="<?php servidor(); ?>conheca_santarem/pg/historico"><img src="<?php servidor(); ?>images/conheca_santarem/menu/historico_off.png" alt="" class="botao"></a></li>
                            
                    		<li><a href="<?php servidor(); ?>conheca_santarem/pg/geografia"><img src="<?php servidor(); ?>images/conheca_santarem/menu/geografia_off.png" alt="" class="botao"></a></li>
                            
                    		<li><a href="<?php servidor(); ?>conheca_santarem/pg/origem-do-nome"><img src="<?php servidor(); ?>images/conheca_santarem/menu/origem_do_nome_off.png" alt="" class="botao"></a></li>
                            
                    		<li><a href="<?php servidor(); ?>conheca_santarem/pg/cultura"><img src="<?php servidor(); ?>images/conheca_santarem/menu/cultura_off.png" alt="" class="botao"></a></li>
                            
                    		<li><a href="<?php servidor(); ?>conheca_santarem/pg/turismo"><img src="<?php servidor(); ?>images/conheca_santarem/menu/turismo_off.png" alt="" class="botao"></a></li>
                            
                    		<li><a href="<?php servidor(); ?>"><img src="<?php servidor(); ?>images/conheca_santarem/menu/galeria_de_fotos_off.png" alt=""  class="botao"></a></li>
                    	</ul>
                    
                    
                    </div>
            <div class="separator"></div>
	    </div>
    </div>
    
    <div id="footer">
    	<?php include("footer.php"); ?>
    </div>
  </body>
</html>