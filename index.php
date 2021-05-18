<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

	<!-- SNACK1 -->
	<section id="snack1">
	<!-- 
		PHP Snack 1:
		Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
		Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
		Stampiamo a schermo tutte le partite con questo schema:
		Olimpia Milano - Cantù | 55-60 
	-->

		<?php
		$matches = [
			[
				'squadra_casa' => 'Torino',
				'squadra_ospite' => 'Juventus',
				'punti_casa' => 0,
				'punti_ospite' => 3,
			],
			[
				'squadra_casa' => 'Milan',
				'squadra_ospite' => 'Inter',
				'punti_casa' => 1,
				'punti_ospite' => 1,
			],
			[
				'squadra_casa' => 'Sampdoria',
				'squadra_ospite' => 'Parma',
				'punti_casa' => 1,
				'punti_ospite' => 2,
			],
		];
		?>

		<h1>SANCK 1 - ELENCO PARTITE</h1>
		<ul>
			<?php for ($i = 0; $i < count($matches); $i++) { ?>
				<li>
					<h3>Partita <?php echo $i+1 ?></h3>
					<div>
						<span><?php echo $matches[$i]['squadra_casa']; ?></span>
						<span>:</span>
						<span><?php echo $matches[$i]['squadra_ospite']; ?></span>
						<span>|</span>
						<span><?php echo $matches[$i]['punti_casa']; ?></span>
						<span>:</span>
						<span><?php echo $matches[$i]['punti_ospite']; ?></span>
					</div>				
				</li>
			<?php } ?>
		</ul>
	</section>

<hr>

	<!-- SNACK2k -->
	<section id="snasck2">
	<!-- 
		Passare come parametri GET (query string) name, mail e age verificare (cercando i metodi che non conosciamo nella documentazione) che:
		1. name sia più lungo di 3 caratteri
		2. che mail contenga un punto e una chiocciola
		3. che age sia un numero.
		Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
	-->

		<?php
		$name = $_GET['name'];
		$email = $_GET['mail'];
		$age = $_GET['age'];

		if ( empty($name) || empty($email) || empty($age) )	{
			echo "Errore, nessun parametro indicato";
		}
		else if ( strpos($name, '@') === false || strpos($name, '.' ) === false ) {
			echo "Accesso negato ";
		}
		else {
			echo "Accesso eseguito";
		}
		?>



	</section>
</body>
</html>