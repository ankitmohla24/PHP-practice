<?php
require "classes/Database.php";

$database = new Database;

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if($post['submit']){
    $title = $post['title'];
    $body = $post['body'];
    
    //echo $title;
    //echo $body;
    
    $database->query('insert into posts (title,body) values (:title, :body)');
    $database->bind(':title', $title);
    $database->bind(':body', $body);
    $database->execute();
    if($database->lastInsertId()){
        echo '<p>Post Added</p>';
    }
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
    
    
    </div>
<?php endforeach; ?>
</div>
