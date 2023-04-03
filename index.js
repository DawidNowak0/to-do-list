function newToDo(){
    const main = document.querySelector('main');

    const creating = '<form action="index.php" method="post"><textarea type="text" name="title" class="title">To Do Title</textarea><select name="" id=""></select><textarea type="text" name="content" class="content">To Do Details</textarea><button class="send"></button></form>';

    main.innerHTML = creating;

};

