<?php
if($_POST){
	$nom = ($_POST['nom']);
	$mail = ($_POST['mail']);
	$message = ($_POST['message']);	
}



if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		mail("michael.bourloo@gmail.com", "CONTACT - Bourloomichael.be", "$message", "$mail");
		$msg="Votre message a bien été envoyé !";
		// echo "oui";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
		// echo "non";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="./assets/style/index.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans, Parisienne" rel="stylesheet">		 
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dosis:200" rel="stylesheet">  
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<title>For you..</title>
	</head>
	<body>
		<section class="contener">
			<div class="headLeft">
				<p>
					<h1 id="hi">Hello</h1>
					<div class="onMe">J'ai 30ans et je suis web developer chez <a href="https://becode.org/">#becode</a></div>
				</p>
				<div class="quality">
					<p>
						<input disabled type="checkbox" checked="checked"  name="appliqué" id="qual1">
						<label for="qual1">Appliqué (un peu, beaucoup)</label>
						<input disabled type="checkbox" checked="checked" name="conscencieux" id="qual2">
						<label for="qual2">Conscencieux</label>
						<input disabled type="checkbox" checked="checked" name="serieux" id="qual3">
						<label for="qual3">Sérieux mais pas tout le temps</label>
						<input disabled type="checkbox" checked="checked" name="bienveillant" id="qual4">
						<label for="quel4">Bienveillant</label>					
					</p>
				</div>	
				<div class="informations">
					<div class="infoText">
						Je suis orienté Front-End (HTML5/CSS3), j'utilise Git/Git Kraken comme logiciel de gestion et je commence a me pencher sérieusement a l'utilisation du CMS WordPress.
					</div>
					<div class="infoText">
						J'ai acquis de bonnes bases dans ces 2 langages mais je m'intéresse aussi au JavaScript et en ce moment je me documente sur Vue.js/React.js.
					</div>
					<div class="infoText">
						Besoin : un peu de perfectionnement et une méthode de travail.
					</div>					
				</div>	
				<div class="informations">
					<div class="infoText">
						Je suis super motivé. 
					</div>
					<div class="infoText">
						Je suis ouvert a l’apprentissage d’autres langages et j'ai le réel désir d'apprendre ! 
					</div>
					<div class="infoText">
						A vos besoins : approfondir les langages que vous utilisez, pour me permettre de vous aider au mieux. 
					</div>					
				</div>
				<div class="informations">
					<div class="infoText">
						Je suis disponible début septembre octobre novembre (2018) quand vous le souhaitez en fait ! 
					</div>
				</div>	
				<div id="experience">
					<pre>{"myProperty":"0"}</pre>
				</div>							
			</div>					
			<div id="headRight">
				<p>
					<h1 id="spada">Moi c'est Michael</h1>
					<div class="stage">J'ai besoin d'un stage et j'ai pensé à vous !</div>
					<div class="why">Pourquoi vous ? Parce que ...</div>
				</p>
				<p>
					<div id="itemLeft">
						&laquo; J'aime la diversité dont vous avez fait preuve dans vos différents projets &raquo;
					</div>
				</p>
				<p>
					<div id="itemRight">
						&laquo; J'aime votre approche jeune et dynamique, le renouveau que vous souhaitez apporter a la création. &raquo;
					</div>
				</p>
				<p>
					<div id="itemLeft">
						&laquo; La manière dont vous avez menez vos projets (la vision, les valeurs) me donne l'envie d'apprendre a vos cotés. &raquo;
					</div>
				</p>
				<p>
					<div id="itemRight">
						&laquo; Je sais jouer au kicker, au ping pong, aux cartes (sait-on jamais) plus sérieusement si vous avez une quelconque question ? Un mot doux ? prenez contact avec moi, je vous lirai avec attention ! &raquo; 
					</div>
				</p>
				<div class="img">
					<img src="./assets/img/YOU.png" id="choco" alt="choco">
				</div>								
				<a href="#modal"><button id="btn5" data-hover="Merci !"><div>Contactez Moi !</div></button></a>			
			</div>				
		</section>
		<footer>
		<div class="formulaire">
			<div id="modal" class="formulaireContact">								
				<div class="icones">
					<a href="https://github.com/MichaelBourloo" id="ico1"><i class="fab fa-github-square fa-4x"></i></a>
					<a href="https://twitter.com/MichaelBourloo" id="ico2"><i class="fab fa-twitter-square fa-4x"></i></a>
					<a href="https://www.linkedin.com/feed/" id="ico3"><i class="fab fa-linkedin fa-4x"></i></a>					
				</div>	
				<div class="form">
					<form method="POST" action="">					
						<input type="text" name="nom" placeholder="Nom, Prénom" id="name" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" />
						<label for="name"></label>
						<input type="email" placeholder="Votre e-mail" name="mail" id="mail" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>">
						<textarea name="message" placeholder="Votre message" id="area" cols="77." rows="5"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
						<input type="submit" id="send" value="Send" name="mailform" />
						<a href="#" title="Haut de page" class="scrollup"><i class="fa fa-arrow-up fa-2x"></i></a>
					</form>	
				</div>
			</div>			
		</div>	
		</footer>	
		<script src="./assets/js/anime.min.js"></script>
		<script src="./assets/js/anim.js"></script>
		<script src="./assets/js/contact.js"></script>
		<?php
		if(isset($msg))
		{
			echo $msg;
		}
		?>
	</body>
</html>