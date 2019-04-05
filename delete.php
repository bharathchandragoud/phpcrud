<?php

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];  
} elseif (isset($_POST['id']) && $_POST['id'] != "") {
    $id = $_POST['id'];
    require_once("config.php");
    $qury = "delete from employees where id =".$id;
    $result = $conn->query($qury);
    if($result){
        header("Location: index.php");
    } else {
        echo "delete fail";
    }
}else {
    $id= "";  
} 
?>
<html>
    <body>
        <div>
            <h4>Delete</h4>
            <form action="delete.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id?>" />
                <p>Are sure</p>
                <input type="submit" value="yes"/>
                 <a href="index.php">No</a>      
            </form>
        </div>
    </body>
</html>