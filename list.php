<?php require 'connect.php'; if($_SERVER["REQUEST_METHOD"]== "POST" && !empty($_POST)){
    $sql = "INSERT INTO user (name,firstname,age,tel, email, pays,comment, metier,url) values(?, ?, ?, ? , ? , ? , ? , ?, ?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($name,$firstname, $age, $tel, $email,$pays,$comment, $metier, $url));
    Database::disconnect();
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
    <title>CRUD</title>
</head>
<body>

    
    <div class="container">

    <div class="row">

    <h2>CRUD</h2>

    <br />
    <div class="row">
                    
        <a href="add.php" class="btn btn-success">Ajouter un user</a>
                    

        <br />
        <div class="table-responsive">

        <br />
            <table class="table table-hover table-bordered">

            <br />
            <thead>

            <th>Name</th>
            <p>

            <th>Firstname</th>
            <p>

            <th>Age</th>
            <p>

            <th>Tel</th>
            <p>

            <th>Pays</th>
            <p>

            <th>Email</th>
            <p>

            <th>Comment</th>
            <p>

            <th>metier</th>
            <p>

            <th>Url</th>
            <p>

            <th>Edition</th>
            <p>

            </thead>
            <p>

            <br />
                <tbody>
                    <?php include 'connect.php';
                        
                        echo '<br /> <tr>';

                            echo'<td>' . $row['name'] . '</td>';
                        
                            echo'<td>' . $row['firstname'] . '</td>';
                        
                            echo'<td>' . $row['age'] . '</td>';
                                                
                            echo'<td>' . $row['tel'] . '</td>';
                                                
                            echo'<td>' . $row['email'] . '</td>';
                                                
                            echo'<td>' . $row['pays'] . '</td>';
                                                
                            echo'<td>' . $row['comment'] . '</td>';
                                                
                            echo'<td>' . $row['metier'] . '</td>';
                                                
                            echo'<td>' . $row['url'] . '</td>';
                            
                            
                            echo '<td>';
                            
                                echo '<a class="btn btn-success" href="update.php?id=' . $row['id'] . '">Update</a>';
                                                
                            echo '</td>';
                                        
                            echo'<td>';
                                                
                                echo '<a class="btn btn-danger" href="delete.php?id=' . $row['id'] . ' ">Delete</a>';
                                                
                            echo '</td>';
                                            
                        echo '</tr>';
                                        
                        Database::disconnect();
                    ?>    
                </tbody>
                <p>

            </table>

        </div>

    </div>

</body>
</html>