function newToDo(){
    const main = document.querySelector('main');
    const btn = document.querySelector('.newToDo');

    const creating = '<form method="post" class="form"><textarea type="text" name="title" class="title">To Do Title</textarea><select name="select"><option value="to_do">To Do</option><option value="in_progress">In progress</option><option value="done">Done</option></select><textarea type="text" name="content" class="content">To Do Details</textarea><button class="send" name="send">Send</button></form>';

    main.innerHTML = creating;
    btn.innerHTML = "";

};
