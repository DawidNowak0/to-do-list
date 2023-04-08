<?php
    function showTask($table){
        $conn = mysqli_connect("localhost", "root", "", "to_do_list");
        $SQL = $conn->query("SELECT title, details, id FROM $table");

        switch ($table){
            case 'to_do':
                $h2 = 'To Do';
                $btn = ['in_progress', 'done'];
                $btnName = ['In progres', 'Done'];
                break;
            case 'in_progress':
                $h2 = 'In progress';
                $btn = ['to_do', 'done'];
                $btnName = ['To Do', 'Done'];
                break;
            case 'done':
                $h2 = 'Done';
                $btn = ['to_do', 'in_progress'];
                $btnName = ['To Do', 'In progres'];
                break;
        };

        echo "<div class='scroll'>";
        echo "<h2>$h2</h2>";

        while($row = mysqli_fetch_row($SQL)){
            echo "<form method='post'>
                    <section>
                        <div class='toDo'>
                            <h2>$row[0]</h2>
                        </div>
                        <div class='details'>
                            <p>$row[1]</p>
                        </div>
                        <h3>Move to</h3>
                        <button type='submit' class='moveBtn' name='move' value='$btn[0] $table $row[2]'>$btnName[0]</button>
                        <button type='submit' class='moveBtn' name='move' value='$btn[1] $table $row[2]'>$btnName[1]</button>
                        <button type='submit' class='delete' name='delete' value='DELETE FROM `$table` WHERE `id` = $row[2]'>Delete</button>
                    </section>
                </form>";
        };
        
        echo "</div>";
        $conn -> close();
    };

    function addTask($table){
        $title = $_POST['content'];
        $content = $_POST['title'];

        $conn = mysqli_connect("localhost", "root", "", "to_do_list");
        $SQL = $conn->query("INSERT INTO `$table`(`title`, `details`) VALUES ('$content','$title')");

        if($SQL === TRUE){
            header("refresh: 1; url=index.php");
        }
        else{
            echo "Error". $SQL . "<br>". $conn->error;
        };

        $conn -> close();
    };

    function deleteTask(){
        $SQL = $_POST['delete'];

        $conn = mysqli_connect("localhost", "root", "", "to_do_list");
        $del = $conn->query("$SQL");

        $conn -> close();
    };

    function moveTask(){
        $SQL = $_POST['move'];
        $SQL = explode(" ", $SQL);

        $conn = mysqli_connect("localhost", "root", "", "to_do_list");
        $move = $conn->query("INSERT INTO `$SQL[0]`(`title`, `details`) SELECT `title`, `details` FROM `$SQL[1]` WHERE `id` = $SQL[2]");
        $del = $conn->Query("DELETE FROM `$SQL[1]` WHERE `id` = $SQL[2]");

        $conn -> close();
    };

    if(isset($_POST['send'])){
        if(isset($_POST['select'])){
            $select = $_POST['select'];
            switch ($select){
                case 'to_do':
                    $table = 'to_do';
                    break;
                case 'in_progress':
                    $table = 'in_progress';
                    break;
                case 'done':
                    $table = 'done';
                    break;
            };
            addTask($table);
        };
    };

    if(isset($_POST['delete'])){
        deleteTask();
    };

    if(isset($_POST['move'])){
        moveTask();
    };
?>