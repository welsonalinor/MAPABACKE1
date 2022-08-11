<?php
	//alterei aqui
	//include("dados.php");
	require("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<!-- //alterei aqui -->
				<li><a href="index.php" title="Home" alt="Página Inicial">Home</a></li>
				<li><a href="#" title="Blog" alt="Artigos">Blog</a></li>
				<li><a href="#" title="Quem Somos" alt="Suporte">Conheça a Dona Olivia</a></li>
				<li><a href="#" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Venha para a casa da Dona Olivia, e escolha a sua marmita!!!.</h1>
                    </header>
                    <p> Impossível esquecer essa delícia...</p>
                    <p><a href="#" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>
		
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<!-- //alterei aqui -->
				<h1><a name="tutorial">Nosso Cardápio</h1></a>
				<p>Desfrute dos sabores inesquecíveis dos pratos da Dona Olivia!</p>
			</header>
			<?php
			//validar se array existe e se não está vazio
			if(is_array($tutoriais) && !empty($tutoriais)){
				foreach($tutoriais as $key => $value){
			?>
			<article>
				<!-- passar o titulo da noticia para ser impresso no title da página -->
				<a href="pagina2.php?id=<?=$value['id'];?>">
				<!-- //alterei aqui -->
				<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>"></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 150);?>...</p>
			</article>
			<?php
			}
		}else{
			echo "Sem Tutoriais no momento!!!";
		}
			?>
			
		</section>
		<!--suport -->
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
                    <h1>Quer receber nosso cardápio em seu e-mail?</h1>
                    <p>Informe o nome e o e-mail no campo ao lado e clique em Enviar!</p>
                </header>
                <form action="pagina1.php" method="POST">
                    <input type="text" name = "nome" placeholder="Seu Nome">
                    <input type="email" name = "email" placeholder="Seu E-mail">
                    <button>Enviar</button>
                </form>
            </div>
        </article>
        <!--3ª dobra-->
	</main>



	<section class="table">
		<table border="0" width="100%"
		cellpadding="10">
			<tr>
				
				<td width="30%" valign="top">
					<h3>Nossas Páginas</h3></br>
					<p><a href="index.php">Home</a></br>
					<a href="#">Blog</a><br>
					<a href="#">Conheça a Dona Olivia</a></br>
					<a href="#">Contato</a></br>		
					</p>        
				
				</td>

					<td width="30%" valign="top">
							<h3>Links Úteis</h3><br>
							<p><a href="#">Politica de Privacidade</a></br>
							<a href="#">Aviso Legal</a></br>
							<a href="#">Termo de Uso</a></br>
							</p>        
					</td>

				<td width="40%" valign="top">
						<h3>Sobre o Projeto</h3></br>
						<p><a href="#">Projeto de Divulgaçao das Marmitas da Dona Olivia</a></br>
						</p>        
				</tr>
		</table>
	</section>

	<footer>
	<br>&copy Desenvolvido por Welson Alinor de Barros
	</footer>
</body>
</html>