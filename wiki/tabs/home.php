<?php  
class Home extends TabClass
{
	
	function __construct()
	{
		# code...
	}

	public function sendDiv()
	{
		ob_start();?>
		<div class="tabContent">
			<h1>Sobre a página</h1>
			<p>A página -nomeada wiki no primeiro momento- foi criada com o intuito de anotar os estudos do criador, ao mesmo tempo que aprende php, html, css e java script (php, html e css foram as primeiras ferramentas usadas na criação dosite), anota o relatório  de seus estudos para futuros alunos.</p>
			<p>O código fonte do site pode ser encontrado no <a href="https://github.com/Robsutar/">repositório público do author</a>, o código fonte das demais ferramentas apresentadas nesse site serão exibidas na sua respectiva aba.</p>
			<h1>Como usar a página</h1>
			<p>Os tópicos de cada página estão à esquerda, que levam à uma parte do conteúdo da página.</p>
			<h1>Sobre a página</h1>
			<p>A página -nomeada wiki no primeiro momento- foi criada com o intuito de anotar os estudos do criador, ao mesmo tempo que aprende php, html, css e java script (php, html e css foram as primeiras ferramentas usadas na criação dosite), anota o relatório  de seus estudos para futuros alunos.</p>
			<p>O código fonte do site pode ser encontrado no <a href="https://github.com/Robsutar/">repositório público do author</a>, o código fonte das demais ferramentas apresentadas nesse site serão exibidas na sua respectiva aba.</p>
			<h1>Como usar a página</h1>
			<p>Os tópicos de cada página estão à esquerda, que levam à uma parte do conteúdo da página.</p>
			<h1>Sobre a página</h1>
			<p>A página -nomeada wiki no primeiro momento- foi criada com o intuito de anotar os estudos do criador, ao mesmo tempo que aprende php, html, css e java script (php, html e css foram as primeiras ferramentas usadas na criação dosite), anota o relatório  de seus estudos para futuros alunos.</p>
			<p>O código fonte do site pode ser encontrado no <a href="https://github.com/Robsutar/">repositório público do author</a>, o código fonte das demais ferramentas apresentadas nesse site serão exibidas na sua respectiva aba.</p>
			<h1>Como usar a página</h1>
			<p>Os tópicos de cada página estão à esquerda, que levam à uma parte do conteúdo da página.</p>
		</div>
		<?php
	}
}
?>