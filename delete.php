<?php 
require 'connect.php'; 
$id=0; 
if(!empty($_GET['id'])){ 
    $id=$_REQUEST['id']; 
} 
if(!empty($_POST)){
    $id= $_POST['id']; 
    $sql = "DELETE FROM Livre  WHERE id = ?";
    $q = $bdh->prepare($sql);
    $q->execute(array($id));
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
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.min.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
    <title>CRUD DELETE</title>
</head>
<body>

    <br />
    <div class="container">
        
        <br />
        <div class="span10 offset1">

            <br />
            <div class="row">

                <br />
                <h3>Supprimer un Livre</h3>

            </div>
                            
            <br />
            <form class="form-horizontal" action="delete.php" method="post">

                <input type="hidden" name="id" value="<?php echo $id;?>"/>
                                    
                Etes-vous sur de vouloir le supprimer ?

                <br />
                <div class="form-actions">
                    <button type="submit" class="btn btn-danger">Oui</button>
                    <a class="btn" href="list.php">Non</a>
                </div>

            </form>
        </div>
    </div>
</body>
</html>