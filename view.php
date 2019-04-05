<html>
    <body>
        <div>
            <h4>View Record</h4>
            <?php 
                require_once("config.php");
                $id = $_GET['id'];
                $qury = "select * from employees where id=".$id;
                $result = $conn->query($qury)->fetch_assoc();
            ?>
                 <p>Name : <?php echo $result["id"]?></p>  
                 <p>Add : <?php echo $result["address"]?></p>    
                 <p>sal : <?php echo $result["salary"]?></p>            
        </div>
    </body>
</html>