<?php
	
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
				
				<li><a href="index.php" title="Home" alt="Página Inicial">Home</a></li>
				<li><a href="#" title="Blog" alt="Artigos">Blog</a></li>
				<li><a href="#" title="Quem Somos" alt="Suporte">Conheça a Dona Rita</a></li>
				<li><a href="#" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Venha para a casa da Dona Rita, e escolha a sua marmita!!!.</h1>
                    </header>
                    <p>Impossível resistir essa delícia...</p>
                    <p><a href="#" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>
		
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				
				<h1><a name="tutorial">Nosso Cardápio de Marmitex</h1></a>
				<p>Desfrute dos sabores inesquecíveis dos pratos da Dona Rita!</p>
			</header>
			<?php
			//validar se array existe e se não está vazio
			if(is_array($tutoriais) && !empty($tutoriais)){
				foreach($tutoriais as $key => $value){
			?>
			<article>
				<!-- passar o titulo da noticia para ser impresso no title da página -->
				<a href="pagina2.php?id=<?=$value['id'];?>">
				
				<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>"></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=$value['preco'];?></p>
				<p><?=substr($value['descricao'], 0, 25);?>...</p>
				

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
    </main>

<!-------------------------------------Rodape------------------------------------------------------>


	<section class="flex-container">

		<div class="flex-item rodape coluna0">
			<h2>Quer Saber Mais?</h2>
		</div>

		<div class="group">
			<div class="flex-item rodape coluna1">
				<h2>Nossas Páginas</h2>
				<p><a href="index.php">Home</a></p>
				<p><a href="#">Blog</a></p>
				<p><a href="#">Conheça a Dona Rita</a></p>
				<p><a href="#">Contato</a></p>
			</div>
			<div class="flex-item rodape coluna2">
				<h2>Links Úteis</h2>
				<p><a href="#">Política de Privacidade</a></p>
				<p><a href="#">Aviso Legal</a></p>
				<p><a href="#">Termo de Uso</a></p>		
			</div>

			<div class="flex-item rodape coluna3">
				<h2>Sobre o Projeto</h2>
				<p><a href="#">Projeto de Divulgação das marmitas da Dona Rita</a></p>
			</div>
	</div>
		
	</section>


	<footer>
		<br>&copy Desenvolvido por Welson Alinor de Barros
	</footer>
</body>
</html>