<?php
// (A) CONNECT TO DATABASE
// ! CHANGE SETTINGS TO YOUR OWN !



<?php

session_start();

$link = mysqli_connect("localhost", "root", "", "registration");



if(isset($_POST['submit']))
{
	$name =$_POST['name'];
	echo $name;
	
	$comment=$_POST['comment'];
	
	
	if($name=='')
	{
		echo "<script>alert('Please enter the name')</script>";
		exit();
	}
	if($comment=='')
	{
		echo "<script>alert('Please enter comment')</script>";
		exit();
	}
	
	
	else{
	$q ="insert into comment (name,comment) values ('$name','$comment')";
	
	$r= mysqli_query($link,$q);
	
	
	if($r)
	{
	
		header('location:post.php');
	}
	
	
	
	
}
}
	

$conn = mysqli_connect("localhost", "root", "", "blog");
echo "connected" ;

 
if (isset($_POST["Post_Comment"]))
{
    $name = mysqli_real_escape_string($conn, $_POST["cname"]);
	echo $name;
   
    $comment = mysqli_real_escape_string($conn, $_POST["cmsg"]);
    $post_id = mysqli_real_escape_string($conn, $_POST["pid"]);
    
 
    mysqli_query($conn, "INSERT INTO comments (name,  post_id, message ) VALUES ('" . $name . "',  '" . $post_id . "', '" . $comment . "')");
    echo "<p>Comment has been posted.</p>";
}
 

 

else
{
	echo "Ajaira";
}











try {
  $pdo = new PDO(
    "mysql:host=$dbhost;dbname=$dbname;charset=$dbchar",
    $dbuser, $dbpass, 
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (Exception $ex) {
  die($ex->getMessage());
}








echo "prema";
echo $_POST['cname'];
echo $post['name'];
echo $post['post_id'];

    try {
      $stmt = $pdo->prepare("SELECT `name`, `timestamp`, `message` FROM `comments` WHERE `post_id`=? ORDER BY `timestamp` ASC");
     $stmt->execute([$_POST['post_id']]);
    } catch (Exception $ex) {
      die($ex->getMessage());
    }

    // (B2) LOOP & GENERATE HTML
    while ($r = $stmt->fetch(PDO::FETCH_NAMED)) { ?>
    <div class="crow">
      <div class="chead">
        <div class="cname"><?=$r['name']?></div>
        <div class="ctime">[<?=$r['timestamp']?>]</div>
      </div>
			<div class="cmsg"><?=$r['message']?></div>
    </div>
    <?php }
   echo $post['name']; 
    if (!isset($_POST['pid']) || !isset($_POST['name']) || !isset($_POST['msg'])) {
      die("Please provide the Post ID, name, and message");
    }

    // (C2) INSERT
    try {
      $stmt = $pdo->prepare("INSERT INTO `comments` (`post_id`, `name`, `message`) VALUES (?,?,?)");
      $stmt->execute([$_POST['pid'], htmlentities($_POST['name']), htmlentities($_POST['msg'])]);
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
    echo "OK";
 

// (D) CLOSE DATABASE CONNECTION
$stmt = null;
$pdo = null;
?>