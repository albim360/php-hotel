<?php

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
var_dump($hotels);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <div>
        <h1>Hotel</h1>
        <ul>
            <?php foreach ($hotels as $hotel) { ?>
                <li>
                    <h2>
                        <?php echo $hotel['name']; ?>
                    </h2>
                    <p>
                        <?php echo $hotel['description']; ?>
                    </p>
                    <p>
                        <?php echo $hotel['parking'] ? 'Parcheggio disponibile' : 'Parcheggio non disponibile'; ?>
                    </p>
                    <p>Voto:
                        <?php echo $hotel['vote']; ?>
                    </p>
                    <p>Distanza dal centro:
                        <?php echo $hotel['distance_to_center']; ?>
                    </p>
                </li>
            <?php } ?>
        </ul>
    </div>
    <hr>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <?php foreach ($hotels as $hotel) { ?>
            <tr>
                <td>
                    <?php echo $hotel['name']; ?>
                </td>
                <td>
                    <?php echo $hotel['description']; ?>
                </td>
                <td>
                    <?php echo $hotel['parking'] ? 'Parcheggio disponibile' : 'Parcheggio non disponibile'; ?>
                </td>
                <td>
                    <?php echo $hotel['vote']; ?>
                </td>
                <td>
                    <?php echo $hotel['distance_to_center']; ?> km
                </td>
            </tr>
        <?php } ?>

    </table>

    <style>
        thead {
            background-color: #000;
            color: #fff;
        }
    </style>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>