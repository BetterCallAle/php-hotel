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
        <section id="hotel-data">
            <div class="container">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th scope="col">Nome Hotel</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Ha il parcheggio?</th>
                            <th scope="col">Voto</th>
                            <th scope="col">Distanza dal Centro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($hotels as $hotel){ ?>
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
                </table>
            </div>
        </section>
    </main>
    
</body>
</html>