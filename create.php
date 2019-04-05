<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['id'] == ""){
        $name = $_POST['name'];
        $add = $_POST['add'];
        $sal = $_POST['sal'];
        require_once("config.php");
        $qury = "insert into employees (name, address, salary) values('$name','$add', '$sal')";
        $result = $conn->query($qury);
        if($result){
            header("Location: index.php");
        } else {
            echo "fail";
        }
    } elseif(isset($_GET['id']) && !empty($_GET['id'])){
        require_once("config.php");
        $id = $_GET['id'];
        $qury = "select * from employees where id=".$id;
        $result = $conn->query($qury)->fetch_assoc();
        $id= $result["id"];
        $name= $result["name"];
        $address= $result["address"];
        $salary= $result["salary"];   
    } elseif (isset($_POST['id']) && $_POST['id'] != "") {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $add = $_POST['add'];
        $sal = $_POST['sal'];
        require_once("config.php");
        $qury = "update employees set name='$name', salary='$sal', address='$add' where id =".$id;
        $result = $conn->query($qury);
        if($result){
            header("Location: index.php");
        } else {
            echo "update fail";
        }
    } else {
        $id= "";
        $name= "";
        $address= "";
        $salary= "";   
    } 
?>
<html>
    <body>
        <div>
            <h4>Create</h4>
            <form action="create.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                <div>Name<input type="text" name="name" value="<?php echo $name?>" /></div>
                <div>add<input type="text" name="add" value="<?php echo $address ?>" /></div>
                <div>sal<input type="text" name="sal" value="<?php echo $salary?>" /></div>
                <input type="submit" value="submit"/>
            </form>   
        </div>
    </body>
</html>
