<?php
    function showTask($table){
        $conn = mysqli_connect("localhost", "root", "", "to_do_list");
        $SQL = $conn->query("SELECT title, details, id FROM $table");

        echo "<div class='scroll'>";

        while($row = mysqli_fetch_row($SQL)){
            echo "<form method='post'>
                    <section>
                        <div>
                            <h2>$row[0]</h2>
                        </div>
                        <div class='content'>
                            <p>$row[1]</p>
                        </div>
                        <button type='submit' name='move'>Move</button>
                        <button type='submit' name='delete' value='DELETE FROM `$table` WHERE `id` = $row[2]'>Delete</button>
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
        $SQL = $conn->query("INSERT INTO `$table`(`title`, `details`) VALUES ('$title','$content')");

        if($SQL === TRUE){
            header("refresh: 1; url=index.php");
        }
        else{
            echo "Error". $SQL . "<br>". $conn->error;
        };

        $conn -> close();
    };

    function deleteTask(){
        $id = $_POST['delete'];

        $conn = mysqli_connect("localhost", "root", "", "to_do_list");
        $SQL = $conn->query("$id");
    };

    function moveTask(){
        header("refresh: 1; url=index.php");

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
