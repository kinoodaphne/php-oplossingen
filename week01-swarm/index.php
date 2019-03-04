<?php 
    $checkins = [
        [
            "picture" => "bot2.png",
            "username" => "Jesse",
            "comment" => "Assembly 3.0",
            "location" => "San Francisco",
            "country" => "CA"
        ],
        [
            "picture" => "bot3.png",
            "username" => "Michal",
            "comment" => "Voxer",
            "location" => "San Francisco",
            "country" => "CA"
        ],
        [
            "picture" => "bot4.png",
            "username" => "Petr",
            "comment" => "ROXY/NoD",
            "location" => "Prague",
            "country" => "Czech Republic"
        ],
        [
            "picture" => "bot5.png",
            "username" => "Jaroslav",
            "comment" => "Brno hlavni nadrazi",
            "location" => "Brno",
            "country" => "Czech Republic"
        ],
        [
            "picture" => "bot2.png",
            "username" => "Jesse",
            "comment" => "The Mill",
            "location" => "San Francisco",
            "country" => "CA"
        ],
        [
            "picture" => "bot6.jpg",
            "username" => "Matej",
            "comment" => "MassVentures",
            "location" => "San Francisco",
            "country" => "CA"
        ]
    ];

    $users = [
            "username" => "JohnSmith",
            "firstname" => "John",
            "lastname" => "Smith",
            "location" => "Antwerp"
    ];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Test Jezelf 1</title>
</head>

<body>
    <div class="messenger">
        <?php include_once('nav.inc.php'); ?>
        <div class="messages-container">
            <?php foreach($checkins as $checkin): ?>
            
            <p class="post__comment">
                <div class="images">
                    <?php echo '<img src="img/' . $checkin['picture'] . '">';?>
                </div>
                <span class="username">
                    <?php echo $checkin['username'];?>
                </span>
                <br>
                <span class="comment">
                    <?php echo $checkin['comment'];?>
                </span>
                <br>
                <span class="location">
                    <?php echo $checkin['location'];?>, <?php echo $checkin['country'];?>
                </span>
                <hr>
            </p>
            <?php endforeach; ?>
        </div>
        <?php include_once('footer.inc.php'); ?>
    </div>
</body>

</html>