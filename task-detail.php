<?php 

// leggo il json e lo salvo in stringa
$json_string = file_get_contents('todo-list.json');

// converto stringa in elemento php (true - stringa => array associativo)
$list = json_decode($json_string, true);

$task = $list[$_GET['index']];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- my style -->
    <link rel="stylesheet" href="style.css">

    <!-- Vue3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.5/axios.min.js" integrity="sha512-01Pe9P3mJM/4c80VuoYEGHlspKGbd9uWQe9HtdLsdTqV0CS1kz8ca44sinVEXEvlZNciMmsAjeEbm5ZxHC7yYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <title>ToBoList</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="wrapper">
                <h1>
                    <?php echo $task['taskName'] ?>
                </h1>
                
                <div class="description_box">
                    <p>
                        <?php echo $task['description'] ?>
                    </p>
                </div>

    
            </div>
        </div>
    </div>

    <script type="text/javascript" src="main.js"></script>
</body>
</html>