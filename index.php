<html>
    <body>
        <div>
            <h4>All Emps</h4>
            <a href="create.php">create</a>
            <?php 
                require_once("config.php");
                $qury = "select * from employees";
                $result = $conn->query($qury);
                if(!empty($result->fetch_assoc())){
                    ?>
                    <table>
                        <tr>
                            <thead>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>sal</th>
                                <th>action</th>
                            </thead>
                        <tr>
                        <?php
                         foreach($result as $val){ 
                             ?>
                            <tr>
                            <tbody>
                                <td><?php echo $val["id"]?></td>
                                <td><?php echo $val["name"]?></td>
                                <td><?php echo $val["address"]?></td>
                                <td><?php echo $val["salary"]?></td>
                                <td>
                                    <a href="view.php?id=<?php echo $val['id']?>">view</a>
                                    <a href="create.php?id=<?php echo $val['id']?>">edit</a>
                                    <a href="delete.php?id=<?php echo $val['id']?>">delete</a>
                                </td>
                            </tbody>
                        <tr>
                        <?php }
                        ?>
                        
                    </table>
              <?php } else {
                  echo "No records found";
              }
            ?>
            
            
        </div>
    </body>
</html>