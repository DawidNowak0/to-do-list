<?php
    function todo(){
        $conn = mysqli_connect("localhost", "root", "aaaa", "to_do_list");
        $SQL = $conn->query("SELECT title, details FROM to_do");

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
        $conn -> close();
    };

    function in_progress(){
        $conn = mysqli_connect("localhost", "root", "aaaa", "to_do_list");
        $SQL = $conn->query("SELECT title, details FROM in_progress");

        while($row = mysqli_fetch_row($SQL)){
            echo "<section>
                    <div class='inProgress'>
                        <h2>$row[0]</h2>
                    </div>
                    <div class='content'>
                        <p>$row[1]</p>
                    </div>
                    <button>Move</button>
                    <button>Delete</button>
                </section>";
        };
        $conn -> close();
    };

    function done(){
        $conn = mysqli_connect("localhost", "root", "aaaa", "to_do_list");
        $SQL = $conn->query("SELECT title, details FROM done");

        while($row = mysqli_fetch_row($SQL)){
            echo "<section>
                    <div class='done'>
                        <h2>$row[0]</h2>
                    </div>
                    <div class='content'>
                        <p>$row[1]</p>
                    </div>
                    <button>Move</button>
                    <button>Delete</button>
                </section>";
        };
        $conn -> close();
    };
?>