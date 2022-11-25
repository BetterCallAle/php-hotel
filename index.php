<?php

    $user_choice = $_GET["park-select"] ?? "";
    var_dump($user_choice);

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

    //Create an empty array that will be the output
    $hotels_output = [];
    //Create the array for no parking choice
    $hotel_no_parking = [];
    //Create the array for parking choice
    $hotel_parking = [];

    //Cycle the Hotels array
    foreach($hotels as $hotel){
        //If parking is true
        if($hotel['parking']){
            //push the element in the parking array
            $hotel_parking[] = $hotel;
        } else {
            //Else push the element in the no parking array
            $hotel_no_parking[] = $hotel;
        }
    }

    //If GET === parking 
    if($user_choice === "parking"){
        //Show the parking array
        $hotels_output = $hotel_parking;
    //Else if GET === no parking
    } elseif($user_choice === "no-parking"){
        //Show the no parking array
        $hotels_output = $hotel_no_parking;
    } else {
        //Else show all the elements
        $hotels_output = $hotels;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <main>
        <section id="form-section" class="py-5">
            <div class="container">
                <form action="index.php" method="GET">
                    <select name="park-select" id="park-select">
                        <option value="both">Entrambi</option>
                        <option value="parking">Con Parcheggio</option>
                        <option value="no-parking">Senza Parcheggio</option>
                    </select>

                    <button type="submit">Invia</button>
                </form>
            </div>
        </section>

        <section id="hotel-data" class="py-5">
            <div class="container">
                <table class="table table-bordered text-center">
                    <!-- Table Head -->
                    <thead>
                        <tr>
                            <th scope="col">Nome Hotel</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Ha il parcheggio?</th>
                            <th scope="col">Voto</th>
                            <th scope="col">Distanza dal Centro</th>
                        </tr>
                    </thead>
                    <!-- /Table Head -->

                    <!-- /Table Body -->
                    <tbody>
                        <?php foreach($hotels_output as $hotel){ ?>
                            <tr>
                                <td>
                                    <?php echo $hotel['name']; ?>
                                </td>
                                <td>
                                    <?php echo $hotel['description']; ?>
                                </td>
                                <td>
                                    <?php 
                                        if($hotel['parking']){
                                            echo "Si";
                                        } else {
                                            echo "No";
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php echo $hotel['vote']; ?>
                                </td>
                                <td>
                                    <?php echo $hotel['distance_to_center']; ?>
                                    <span>km</span>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <!-- Table Body -->
                </table>
            </div>
        </section>
    </main>
    
</body>
</html>