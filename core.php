<?php
// ==================================== DADOS INICIAIS DO SITE ==================================== 

//Nome do Site
$core_nome     = "Restaurante Piracema";
//Descrição do Site
$core_desc     ="Restaurante de frutos do mar mais famoso da região norte do Brasil.";
//Palavras-Chaves sobre o site, use virgulas para separa-las
$core_keywords ="restarurante,piracema,peixaria,pará,norte,brasil"; 
//Pasta do projeto
$core_pasta    ="piracema";
//E-mail para recebimento das mensagens via site
$core_email    ="genivaljunior86@gmail.com"; 

// ========================================== FUNÇÕES ==============================================
if($core_nome == "" || $core_desc == "" || $core_keywords == "" || $core_pasta == "" || $core_email == ""){
	echo "Preencha todos os dados do arquivo CORE.";
	}

// Funcões que geram o endereço absoluto, independente se o servidor localhost.
//1 - Imprime direto
function servidor(){
	$core_servidor = $_SERVER['SERVER_NAME'];
	global $core_pasta;
	if($_SERVER['SERVER_NAME']=="localhost" || $_SERVER['SERVER_NAME']=="127.0.0.1"){
		echo "http://".$core_servidor."/".$core_pasta."/";
		}
	else{
		echo "http://".$core_servidor."/";
		}
	}
//2 - Retorna o endereço em variavel
function get_servidor(){
	$core_servidor = $_SERVER['SERVER_NAME'];
	global $core_pasta;
	if($_SERVER['SERVER_NAME']=="localhost" || $_SERVER['SERVER_NAME']=="127.0.0.1"){
		return "http://".$core_servidor."/".$core_pasta."/";
		}
	else{
		return "http://".$core_servidor."/";
		}
	}

// Classe de Objeto para Paginação
class Paginacao{
	var $por_pg;   //Posts por Página
	var $pg_atual; //Página Atual
	var $numposts; //Número Total de Posts
	
	//Setando Valores
	function set_porpg($pg){
		$this->por_pg=$pg;
		}
	function set_pg_atual($pgat){
		$this->pg_atual=$pgat;
		}
	function set_numposts($np){
		$this->numposts=$np;
		}
	//Retornando Valores
	function numpgs(){
		return ceil($this->numposts/$this->por_pg); //Numero de Paginas
		}
	function proxpg(){
		return $this->pg_atual+1; //Numero da Proxima Página
		}
	function antpg(){
		return $this->pg_atual-1; //Numero da Pagina Anterior
		}
	function has_anterior(){
		if($this->pg_atual-1 == 0){ //Se existe Pagina Anterior (Para criação do link)
			return false;
			}
			else return true;
		}
	function has_proximo(){
		$npgs = $this->numpgs();
		if($this->pg_atual == $npgs){ //Se existe Próxima Página (Para criação do link)
			return false;
			}
			else return true;
		}
	}

?>