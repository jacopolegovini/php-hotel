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

// Valuta se l'utente ha interagito col radio button
if (isset($_GET["parking"])) {
    $parkingHotels = [];
    foreach ($hotels as $hotel) {
        if ($hotel['parking'] === true) {
            array_push($parkingHotels, $hotel);
        }
    }
    $hotels = $parkingHotels;
} elseif (isset($_GET["noParking"])) {
    $hotels;
} else {
    $hotels;
}

if (isset($_GET["vote1"])) {
    $voteHotels = [];
    foreach ($hotels as $hotel) {
        if ($hotel['vote'] >= 1) {
            array_push($voteHotels, $hotel);
        }
    }
    $hotels = $voteHotels;
} elseif (isset($_GET["vote2"])) {
    $voteHotels = [];
    foreach ($hotels as $hotel) {
        if ($hotel['vote'] >= 2) {
            array_push($voteHotels, $hotel);
        }
    }
    $hotels = $voteHotels;
} elseif (isset($_GET["vote3"])) {
    $voteHotels = [];
    foreach ($hotels as $hotel) {
        if ($hotel['vote'] >= 3) {
            array_push($voteHotels, $hotel);
        }
    }
    $hotels = $voteHotels;
} elseif (isset($_GET["vote4"])) {
    $voteHotels = [];
    foreach ($hotels as $hotel) {
        if ($hotel['vote'] >= 4) {
            array_push($voteHotels, $hotel);
        }
    }
    $hotels = $voteHotels;
} elseif (isset($_GET["vote5"])) {
    $voteHotels = [];
    foreach ($hotels as $hotel) {
        if ($hotel['vote'] >= 5) {
            array_push($voteHotels, $hotel);
        }
    }
    $hotels = $voteHotels;
} else {
    $hotels;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Style -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <main>
        <h1>Scegli il tuo hotel per le vacanze</h1>
        <form action="" method="GET">
            <label for="parking" class="form-check-label">Ti serve anche il parcheggio?</label>
            <input type="radio" name="noParking" id="noParking" class="form-check-input">
            <label for="noParking" checked="checked">NO</label>
            <input type="radio" name="parking" id="parking" class="form-check-input">
            <label for="parking">SI</label><br>

            <label for="vote">Che valutazione stai cercando?</label>
            <input type="radio" name="vote1">
            <label for="vote1">1</label>
            <input type="radio" name="vote2">
            <label for="vote2">2</label>
            <input type="radio" name="vote3">
            <label for="vote3">3</label>
            <input type="radio" name="vote4">
            <label for="vote4">4</label>
            <input type="radio" name="vote5">
            <label for="vote5">5</label>
            <br>
            <button class="btn btn-secondary">Filtra</button>
        </form>

        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to center</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($hotels); $i++) { ?>
                    <tr>
                        <?php foreach ($hotels[$i] as $hotelData) { ?>
                            <td>
                                <?= $hotelData ?>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>

</html>