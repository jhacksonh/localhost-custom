<?php
$projetos = [
	'ProjetoPessoaExemplo',
	'ProjetoWeb_NGTI',
	'napnePHP',
	'ProjetoWeb_NGTI-qfv10',
	'sorteio',
	'Vercoes_Contatos'
];
$viewInfo = isset($_GET['viewInfo']) ? $_GET['viewInfo'] : 0;
$dir =  "./";
if ($viewInfo == 1) :
	echo "<a 
	style='display:block;padding:9px;margin:.5em;color:#ff9;background-color:#abc;width:max-content;outline: none;text-decoration: none;' 
	href='./'>Voltar
	</a>";
	phpinfo();
else :
	include_once './zroot/html/base.php';
endif;
