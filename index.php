<?php
//liste seus projetos neste array!
$projetos = ["projeto1","projeto2"];
//variável contendo informações do servidor
$info = isset($_GET['viewInfo']) ? $_GET['viewInfo'] : 0;
//diretório a procurar a pasta zroot; "./" padrão
$dir =  "./";
//verifica se foi passado algum parâmero do tipo get na uri com o valor 1
// Se sim redireciona para a página mostrando informações do servidor
if ($info == 1) :
	echo "<a 
	style='display:block;padding:9px;margin:.5em;color:#ff9;background-color:#abc;width:max-content;outline: none;text-decoration: none;' 
	href='./'>Voltar
	</a>";
	phpinfo();
else :
	include_once $dir."zroot/html/base.php";
endif;
