<?php 
require './config.php';
require "./common.php";

if (isset($_POST['submit'])) {
    if (!hash_equals($_SESSION['csrf'], $_POST['csrf'])) die();
}

if(isset($_POST['submit'])) {

    try {

        $connection = new PDO($dsn, $username, $password, $options);

        $new_user = array(
            "username" => $_POST['username'],
            "nickname"  => $_POST['nickname'],
            "pwd"     => $_POST['pwd']
        );

        $sql = sprintf("INSERT INTO %s (%s) VALUES (%s)",
            "users",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user)));

        $statement = $connection->prepare($sql);
        $statement->execute($new_user);
    }
    catch(PDOException $error) {
        echo $sql . "<br/>" . $error->getMessage();
    }
}
?>

<?php include "templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) { ?>
  <?php echo escape($_POST['username']); ?> successfully added.
<?php } ?>

<form method="post">
    <input name="csrf" type="hidden" value="<?php echo escape($_SESSION['csrf']); ?>">
    
    <label for="username">Username</label>
    <input type="text" name="username" id="username" />
    <label for="nickname">Nickname</label>
    <input type="text" name="nickname" id="nickname">
    <label for="pwd">Password</label>
    <input type="text" name="pwd" id="pwd">
    <input type="submit" name="submit" value="Submit">
</form>

<a href="index.php">Back to home</a>

<?php include "templates/footer.php"; ?>