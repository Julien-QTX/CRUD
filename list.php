<?php 
require 'connect.php'; 
if($_SERVER["REQUEST_METHOD"]== "POST" && !empty($_POST)){
    $sql = "INSERT INTO Livre (nom,synopsis,auteur,genre) values(?, ?, ?, ?)";
    $q = prepare($sql);
    $q->exec(array($nom,$synopsis, $auteur, $genre));
    header("Location: list.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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

                            <th name="nom">Nom</th>

                            <th name="synopsis">Synopsis</th>

                            <th name="auteur">Auteur</th>

                            <th name="genre">Genre</th>

                            <th name="id">Edition</th>
                        
                        </thead>

                        <br />
                        <tbody>
                            <?php 
                                    
                              
                                $sth = $bdh->prepare("SELECT * FROM Livre");
                                $sth->execute();
                                
                                $result = $sth->fetchAll(PDO::FETCH_OBJ);
                                //$result contains an array of stdObjects
                        
                                echo '<pre>'; 
                                
                                foreach ($result as $row['']) { 
                                
                                echo '</pre>';

                                echo '<br /> <tr>';

                                echo'<td>' . $row['nom'] . '</td>';
                            
                                echo'<td>' . $row['synopsis'] . '</td>';
                            
                                echo'<td>' . $row['auteur'] . '</td>';
                                                    
                                echo'<td>' . $row['genre'] . '</td>';
                                
                                echo '<td>';
                                
                                echo '<a class="btn btn-success" href="update.php?id=' . $row['id'] . '">Modifier</a>';         

                                echo '<a class="btn btn-danger" href="delete.php?id=' . $row['id'] . ' ">Supprimer</a>';
                                                    
                                echo '</td>';
                                                    
                                echo '</tr>';

                            }
                                                
                            ?>    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>