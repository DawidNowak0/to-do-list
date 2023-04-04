function newToDo(){
    const main = document.querySelector('main');
    const btn = document.querySelector('.newToDo');

    const creating = '<form action="index.php" method="post"><textarea type="text" name="title" class="title">To Do Title</textarea><select ><option value="toDo" name="toDo">To Do</option><option value="inProgress" name="inProgress">In progress</option><option value="Done" name="done">Done</option></select><textarea type="text" name="content" class="content">To Do Details</textarea><button class="send">Send</button></form>';

    main.innerHTML = creating;
    btn.innerHTML = "";

};

