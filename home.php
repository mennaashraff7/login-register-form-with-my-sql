<!DOCTYPE html>
<html>
<head>
<title>home</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
   <div class="content">
       <div class="center">
   <?php
    
    if(isset($_GET['name'])){
        $name = $_GET['name'];
        echo "<span><h1>welcome</h1></span> "."<h2>". $name ."</h2>";
        }

     include("database.php");
     ?>
     <table class="table">
     <thead>
     <tr>
         <th scope="col">name</td>
         <th scope="col">description</td>
     </tr>
    </thead>
    <tbody>
     <?php
         $query2 = "SELECT dname ,descr
                    FROM departement
                    WHERE 1;";
            $result2 = mysqli_query($conn, $query2);
        while($row2 = mysqli_fetch_assoc($result2)){
         echo"<tr><td>" . $row2['dname'] . "</td>
        <td>" .  $row2['descr'] . "</td>
    </tr>";
        }//End of while loop
        echo "</tbody></table>" ; 
?>
    <button type="button" class="btn2"><a href="index.html">Log Out</a></button>
    </div>
    </div>
</body>
</html>

