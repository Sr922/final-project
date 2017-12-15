put a page with in a form to edit a task and have a delete button in another form to delete

<h6><a href="index.php?page=accounts&action=logout">Logout</a></h6>
<form action="index.php?page=tasks&action=delete&id=<?php $data['id'] ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>
<h6><a href="index.php?page=tasks&action=all">Back</a></h6>

