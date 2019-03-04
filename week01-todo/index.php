<?php
    $items = [
        [
            "description" => "clean appartment",
            "duration" => 7,
            "category" => "house"
        ],
        [
            "description" => "groceries",
            "duration" => 2,
            "category" => "house"
        ],
        [
            "description" => "pick up laundry",
            "duration" => 1,
            "category" => "house"
        ],
        [
            "description" => "feed cat",
            "duration" => 0.10,
            "category" => "house"
        ],
        [
            "description" => "wash car",
            "duration" => 7,
            "category" => "house"
        ],
    ];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>To Do</title>
</head>

<body>
    <div class="tdl-holder">
        <h2>TO DO LIST</h2>
        <div class="tdl-content">
            <ul>
                <?php foreach ($items as $item): ?>
                <li>
                    <?php
                        if ($item['duration'] >= 5) {
                            echo '<label style="background-color:red">';
                        }
                        elseif ($item['duration'] <= 5 && $item['duration'] > 1) {
                            echo '<label style="background-color:orange">';
                        } elseif ($item['duration'] <= 1 && $item['duration'] >= 0) {
                            echo '<label style="background-color:green">';
                        }
                    ?>
                    <label>
                        <?php echo $item['description']; ?> =>
                        <?php echo $item['duration'];?> hours
                    </label>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
        <input type="text" class="tdl-new" placeholder="Write new item and hit 'Enter'...">
    </div>
</body>

</html>