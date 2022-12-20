<?php

// ARRAY PRINCIPALE CON I DATI DELL'HOTEL
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
    <title>Php Hotel</title>

    <!-- Third party libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Custom css -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>

<body class="bg-dark text-white">
    <div class="container text-white">
        <h1>Hotel PHP</h1>

        <form method="GET" class="my-5 border p-3">
            <div class="row">
                <div class="col-6">
                    <div class="mb-5">
                        <!-- filtro in base alla disponibiltà del parcheggio -->
                        <label class="form-label">inserisci SI o No se desideri il parcheggio</label>
                        <input type="text" class="form-control" name="parking" value="<?php echo $_GET["parking"] ?? '' ?>">

                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <!-- filtro voto -->
                        <label class="form-label">Voto</label>
                        <input type="number" class="form-control" name="vote" value="<?php echo $_GET["vote"] ?? '' ?>">
                    </div>
                </div>
            </div>
            <!-- bottoni -->
            <!-- quando clicco annulla ricarico la pagina originale -->
            <a class="btn btn-secondary" href="index.php">Annulla</a>
            <button class="btn btn-primary">Cerca</button>
        </form>

        <!-- tabella -->
        <table class="table text-white">
            <thead>
                <!-- campi superiori tabella -->
                <tr>
                    <th>Nome</th>
                    <th>Descrizione Hotel</th>
                    <th>Disponibilità Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza Dal Centro</th>
                </tr>
            </thead>
            <!-- contenuto tabella -->
            <tbody>
                
                <?php
                foreach ($hotels as $hotel) {
                ?>
                    <tr>
                        <td><?php echo $hotel["name"] ?></td>
                        <td><?php echo $hotel["description"] ?></td>
                        <td><?php if ($hotel["parking"] === true) {
                                echo "disponibile";
                            } else {
                                echo "non disponibile";
                            }
                            ?></td>
                        <td><?php echo $hotel["vote"] . "&#9733" ?></td>
                        <td><?php echo $hotel["distance_to_center"] ?></td>

                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>

</body>

</html>