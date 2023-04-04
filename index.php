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
    </header>
    <div class="newToDo">
        <button onclick="newToDo()">Create new to do</button>
    </div>
    <main>
        <div class="scroll" name="toDo">
            <?php
                showTask("to_do")
            ?>
        </div>

        <div class="scroll" name="inProgress">
            <?php
                showTask("in_progress")
            ?>
        </div>

        <div class="scroll" name="Done">
            <?php
                showTask("done")
            ?>
        </div>
    </main>
</body>
</html>