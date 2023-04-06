<?php
    function showTask($table){
        $conn = mysqli_connect("localhost", "root", "aaaa", "to_do_list");
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
?>