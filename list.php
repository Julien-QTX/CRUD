<?php 
require 'connect.php'; if($_SERVER["REQUEST_METHOD"]== "POST" && !empty($_POST)){
    $sql = "INSERT INTO Livre (nom,synopsis,auteur,genre) values(?, ?, ?, ?)";
    $q = prepare($sql);
    $q->execute(array($nom,$synopsis, $auteur, $genre));
    Database::disconnect();
    header("Location: list.php");
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
                            
                <a href="create.php" class="btn btn-success">Ajouter un Livre</a>
                            
                <br />
                <div class="table-responsive">

                    <br />
                    <table class="table table-hover table-bordered">

                        <br />
                        <thead>

                            <th>Nom</th>

                            <th>Synopsis</th>

                            <th>Auteur</th>

                            <th>Genre</th>
                        
                        </thead>

                        <br />
                        <tbody>
                            <?php include 'connect.php';
                                
                                echo '<br /> <tr>';

                                    echo'<td>' . $row['nom'] . '</td>';
                                
                                    echo'<td>' . $row['synopsis'] . '</td>';
                                
                                    echo'<td>' . $row['auteur'] . '</td>';
                                                        
                                    echo'<td>' . $row['genre'] . '</td>';
                                    
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
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>