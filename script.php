<?php
    function showTask($table){
        $conn = mysqli_connect("localhost", "root", "", "to_do_list");
        $SQL = $conn->query("SELECT title, details FROM $table");


        echo "<div class='scroll'>";

        while($row = mysqli_fetch_row($SQL)){
            echo "<section>
                    <div class='toDo'>
                        <h2>$row[0]</h2>
                    </div>
                    <div class='content'>
                        <p>$row[1]</p>
                    </div>
                    <button>Move</button>
                    <button>Delete</button>
                </section>";
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
            echo "Dodana do listy";

        }
        else{
            echo "Error". $SQL . "<br>". $conn->error;

        };

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
?>