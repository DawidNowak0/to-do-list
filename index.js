function newToDo(){
    const main = document.querySelector('main');
    const btn = document.querySelector('.newToDo');

    const creating = '<form action="index.php" method="post"><textarea type="text" name="title" class="title">To Do Title</textarea><select name="todo" value="To Do">To Do</select><select name="inProgress" value="Inprogress">In progress</select><select name="done" value="Done">Done</select><textarea type="text" name="content" class="content">To Do Details</textarea><button class="send"></button></form>';

    main.innerHTML = creating;
    btn.innerHTML = "";

};

