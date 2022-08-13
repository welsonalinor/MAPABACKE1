<?php
	include("dados.php");
	//var_dump($tutoriais);//utilizei para testar o conteúdo recebido
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
<style>

.main_tutorial img{
    width: 30%;
}

.main_tutorial p{
    margin: 10px 0;
	font-size: 1.2em;
	text-align: justify;
}

.main_tutorial h3{
    font-size: 0.9em;
}

.main_tutorial article{
    flex-basis: 100%;
    margin-bottom: 10px;
}

</style>
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
		<section class="main_tutorial">
			<?php
				if(isset($_GET['id']) && !empty($_GET['id'])){
					//echo "ID = ". $_GET['id'];
					$id = $_GET['id'];//validar o recebimento do id
					foreach($tutoriais as $key => $value){
						if($value['id'] == $id){
							//alterei aqui
							$data = new DateTime($value['data']);
					?>
						<header class="main_tutorial_header">
							<h1><?=$value['titulo'];?></h1>
							<!--alterei aqui-->
							<h2>Autor: <?=$value['autor'];?></h2>
							<h3>Publicado em: <?=$data->format('d/m/Y');?></h3>
						</header>
						<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>">
						<p><?=$value['preco'];?></p>
						<p><?=$value['descricao'];?></p>
									
						<?php
						}
					}
				}else{
					echo "Esta Página Não existe, Tente um dos nossos tutoriais logo abaixo.........";
				}
			?>
		</section>
        <section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Ver Mais Tutoriais</h1>
			</header>
			<?php
			$id = 0;
				foreach($tutoriais as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><a href="pagina2.php?id=<?=$value['id'];?>"><?=$value['titulo'];?></a></h2>
	    	</article>
			<?php
                    }
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
                <form>
                    <input type="text" placeholder="Seu Nome">
                    <input type="email" placeholder="Seu E-mail">
                    <button>Enviar</button>
                </form>
            </div>
        </article>
        <!--3ª dobra-->
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