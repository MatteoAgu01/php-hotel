<?php

/*
Descrizione
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus:
1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.*/

$hotels = [

	[
		'name' => 'Hotel Belvedere',
		'description' => 'Hotel Belvedere Descrizione',
		'parking' => true,
		'vote' => 4,
		'distance_to_center' => 10.4
	],
	[
		'name' => 'Hotel Futuro',
		'description' => 'Hotel Futuro Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 2
	],
	[
		'name' => 'Hotel Rivamare',
		'description' => 'Hotel Rivamare Descrizione',
		'parking' => false,
		'vote' => 1,
		'distance_to_center' => 1
	],
	[
		'name' => 'Hotel Bellavista',
		'description' => 'Hotel Bellavista Descrizione',
		'parking' => false,
		'vote' => 5,
		'distance_to_center' => 5.5
	],
	[
		'name' => 'Hotel Milano',
		'description' => 'Hotel Milano Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 50
	],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<title>php-hotel</title>
</head>

<body class="m-auto w-75 my-5">
	<main class="d-flex justify-content-center align-items-center py-5">
		<table class=" w-100 p-1 border">
			<thead>
				<td class="border">
					<h4 class="text-capitalize">
						name
					</h4>
				</td>
				<td class="border">
					<h4 class="text-capitalize">
						description
					</h4>
				</td>
				<td class="border">
					<h4 class="text-capitalize">
						parking
					</h4>
				</td>
				<td class="border">
					<h4 class="text-capitalize">
						vote
					</h4>
				</td>
				<td class="border">
					<h4 class="text-capitalize">
						distance of center
					</h4>
				</td>

			</thead>
			<tbody>
				<?php foreach ($hotels as $hotel) { ?>
					<tr class="border">
						<td class="p-3 m-1 border">
							<p>
								<?php echo $hotel['name'] ?>
							</p>
						</td>
						<td class="p-3 m-1 border">
							<p>
								<?php echo $hotel['description'] ?>
							</p>
						</td>
							<td>
								<?php if ($hotel['parking'] == true) : ?>
									<p>yes</p>
								<?php elseif($hotel['parking'] == false): ?>
									<p>no</p>
								<?php endif; ?>
							</td>
						<td class="p-3 m-1 border">
							<p>
								<?php echo $hotel['vote'] ?>
							</p>
						</td>
						<td class="p-3 m-1 border">
							<p>
								<?php echo $hotel['distance_to_center'] . ' ' . 'km' ?>
							</p>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</main>
</body>

</html>