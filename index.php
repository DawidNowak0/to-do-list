<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
    <?php
        require 'script.php';
    ?>
</head>
<body>
    <header>
        <h1>To Do List</h1>
        <div class="newToDo">
            <button onclick="newToDo()">Create new to do</button>
        </div>
    </header>
    <main>
        <?php
            showTask("to_do");

            showTask("in_progress");
            
            showTask("done");
        ?>
    </main>
</body>
</html>
