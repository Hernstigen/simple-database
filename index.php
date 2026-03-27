<!DOCTYPE html>
<?php
$host="localhost";
$user="root";
$password="";
$db="britta";
$conn=mysqli_connect($host,$user,$password,$db);


if(isset($POST['btn'])){
    $texten=$_POST['txt'];
    $sql="INSERT INTO lankar(url) VALUES ('$texten')";
    $result=mysqli_query($conn,$sql);

}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="txt" placeholder="Skriv in länk här">
        <input type="submit" name="btn" value="Lagra länk">
    </form>

    <?php
    $sql="SELECT * FROM lankar";
    $result=mysqli_query($conn,$sql);
    
    while($row=mysqli_fetch_assoc($result)): ?>
        echo "<h1>".$row['url']."</h1>"; ?>
    
    <?php endwhile; ?>

</body>
</html>