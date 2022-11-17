<?php require 'connect.php'; $id = null; if ( !empty($_GET['id'])) { $id = $_REQUEST['id']; } if ( null==$id ) { header("Location: list.php"); } if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) { 
             
    $sql = "UPDATE Livre SET nom = ?,synopsis = ?,auteur = ?,genre = ? WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($nom,$synopsis, $auteur, $genre,$id));
    Database::disconnect();
    header("Location: list.php");
}else {

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM livre where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    $nom = $data['nom'];
    $synopsis = $data['synopsis'];
    $auteur = $data['auteur'];
    $genre = $data['genre'];
    Database::disconnect();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
    <title>CRUD</title>
</head>
<body>

    <br />
    <div class="container">

        <br />
        <div class="row">

            <br />
            <h3>Modifier un Livre</h3>

        </div>

        <br />
        <form method="post" action="update.php?id=<?php echo $id ;?>">

            <br />
            <div class="control-group <?php echo!empty($nomError) ? 'error' : ''; ?>">
                <label class="control-label">Nom</label>

                <br />
                <div class="controls">

                    <input name="nom" type="text"  placeholder="Nom" value="<?php echo!empty($nom) ? $nom : ''; ?>">

                    <?php if (!empty($nomError)): ?>
                        <span class="help-inline"><?php echo $nomError; ?></span>
                    <?php endif; ?>

                </div>

    
            </div>

            <br />
    
            <div class="control-group<?php echo!empty($synopsisError) ? 'error' : ''; ?>">
                
                <label class="control-label">Synopsis</label>

    
                <br />
    
                <div class="controls">
                        
                    <input type="text" name="synopsis" value="<?php echo!empty($synopsis) ? $synopsis : ''; ?>">
                            
                    <?php if (!empty($synopsisError)): ?>      
                        <span class="help-inline"><?php echo $synopsisError; ?></span> 
                    <?php endif; ?>
                </div>

            </div>

            <br />
            <div class="control-group<?php echo!empty($auteurError) ? 'error' : ''; ?>">
                        
                <label class="control-label">Auteur</label>

                <br />
                <div class="controls">
                            
                    <input type="text" name="auteur" value="<?php echo!empty($auteur) ? $auteur : ''; ?>">

                    <?php if (!empty($auteurError)): ?>
                        <span class="help-inline"><?php echo $auteurError; ?></span>
                    <?php endif; ?>
                </div>

            </div>

            <br />
            <div class="control-group <?php echo!empty($genreError) ? 'error' : ''; ?>">
                            
                <label class="control-label">Genre</label>

            <br />
            <div class="controls">
                <input name="genre" type="text" placeholder="Genre" value="<?php echo!empty($genre) ? $genre : ''; ?>">
                <?php if (!empty($genreError)): ?>
                    <span class="help-inline"><?php echo $genreError; ?></span>
                <?php endif; ?>

            </div>

            <div class="form-actions">

                <input type="submit" class="btn btn-success" name="submit" value="submit">
                <a class="btn" href="index.php">Retour</a>

            </div>

        </form>

    </div>

</body>
</html>