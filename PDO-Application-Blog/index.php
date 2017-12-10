<?php
require "classes/Database.php";

$database = new Database;

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if(isset($_POST['delete'])){
    //echo $_POST['delete_id'];
    $delete_id = $_POST['delete_id'];
    $database->query('delete from posts where id = :id');
    $database->bind(':id', $delete_id);
    $database->execute();
}

/*if(isset($_POST['update'])){
    //echo $_POST['delete_id'];
    $update_id = $_POST['update_id'];
    $database->query('delete from posts where id = :id');       update logic
    $database->bind(':id', $delete_id);
    $database->execute();
}*/

if(isset($post['submit'])){
    $title = $post['title'];
    $body = $post['body'];
    
    //echo $title;
    //echo $body;
    
    $database->query('insert into posts (title,body) values (:title, :body)');
    $database->bind(':title', $title);
    $database->bind(':body', $body);
    $database->execute();

}

$database->query("select * from posts");      // where id = :id");
//$database->bind(":id", 3);
$rows = $database->resultset();
//print_r($rows);

?>
<h1>Add Post</h1>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <label>Post title</label><br>
    <input type="text" name="title" placeholder="Add a title.."><br><br>
    <label>Post</label><br>
    <textarea name="body"></textarea><br><br>
    <input type = "submit" name="submit" value="Submit">
</form>

<h1>Posts</h1>
<div>
<?php foreach($rows as $row) : ?>
    <div>
    <h3><?php echo $row["title"];   ?></h3>
    <p><?php echo $row["body"];   ?></p>
        <!--<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="update_id" value="<?php echo $row["id"];   ?>">
            <input type = "submit" name="update" value="Update">
        </form>-->
        
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="delete_id" value="<?php echo $row["id"];   ?>">
            <input type = "submit" name="delete" value="Delete">
        </form>
        
    
    </div>
<?php endforeach; ?>
</div>
