<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add forum</title>
</head>

<body>
    <form method='POST'>
        <input type="text" name='post_name'>
        <input type="text" name='post_content'>
        <input type="text" name='post_language'>
        <input type="submit" name='add'>
    </form>
</body>

</html>

<?php
$host = "localhost";
$database = "DBlog";
$user = "mysql";
$password = "mysql";
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

$user_id = $_SESSION['id'];
$name = $_POST['post_name'];
$content = $_POST['post_content'];
$language = $_POST['post_language'];

$query_name = "INSERT INTO `forum`(`name`, `text`, `user_id`, `language`) VALUES ('$name', '$content', '$user_id', '$language')";

if (isset($_POST['add'])) {
    mysqli_query($link, $query_name) or die("Ошибка " . mysqli_error($link));
}
?>