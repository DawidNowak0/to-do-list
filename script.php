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

<!-- 
    
    <section>
        <div class="name">
            <h2>Title</h2>
        </div>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus non bibendum nisi. Donec enim nisi, commodo id semper quis, efficitur a arcu. Nulla pretium efficitur iaculis. Etiam eget cursus mi. Donec sed congue tortor, non vestibulum enim. Phasellus ultricies, nunc aliquam vulputate elementum, eros justo maximus purus, vitae hendrerit justo.</p>
        </div>
        <button>Move</button>
        <button>Delete</button>
    </section>

-->
