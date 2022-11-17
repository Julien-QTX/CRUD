<?php require('connect.php');
    $sql = "SELECT * FROM user where id =?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-wp-preserve="%3Cscript%20src%3D%22js%2Fbootstrap.min.js%22%3E%3C%2Fscript%3E" data-mce-resize="false" data-mce-placeholder="1" class="mce-object" width="20" height="20" alt="<script>" title="<script>" />
    <title>CRUD</title>
</head>
<body>
    
    <div class="container">

        <br />
        <div class="span10 offset1">

            <br />
            <div class="row">

                <br />
                <h3>Edition</h3>

                </div>

                    <br />
                    <div class="form-horizontal" >

                        <br />
                        <div class="control-group">
                            <label class="control-label">Name</label>

                            <br />
                            <div class="controls">
                                <label class="checkbox">
                                    <?php echo $data['name']; ?>
                                </label>
                            </div>

                        </div>


                        <br />
                        <div class="control-group">
                            <label class="control-label">Firstname</label>

                            <br />
                            <div class="controls">
                                <label class="checkbox">
                                    <?php echo $data['firstname']; ?>
                                </label>
                            </div>
                        </div>

                        <br />
                        <div class="control-group">
                            <label class="control-label">Email Address</label>

                            <br />
                            <div class="controls">
                                <label class="checkbox">
                                    <?php echo $data['email']; ?>
                                </label>
                            </div>


                        </div>



                        <br />
                        <div class="control-group">
                            <label class="control-label">Phone</label>

                            <br />
                            <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['tel']; ?>
                            </label>
                        </div>

                    </div>

                    <br />

                    <div class="control-group">
                        <label class="control-label">Pays</label>


                        <br />

                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['pays']; ?>
                            </label>

                        </div>

                    </div>

                    <br />
                    <div class="control-group">
                        <label class="control-label">Metier</label>


                        <br/>

                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['metier']; ?>
                            </label>

                        </div>


                    </div>

                    <br/>

                    <div class="control-group">
                        <label class="control-label">Url</label>
                        <br/>

                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['url']; ?>
                            </label>
                        </div>

                    </div>

                    <br />

                    <div class="control-group">
                        <label class="control-label">Comment</label>

                        <br />
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['comment']; ?>
                            </label>

                        </div>

                    </div>
                    <br/>

                    <div class="form-actions">
                        <a class="btn" href="index.php">Back</a>
                    </div>

                </div>

            </div>

        </div>
    </div>
</body>
</html>