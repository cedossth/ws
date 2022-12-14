<?php
    require_once('identifier.php');
    require_once("../api/db_connect.php");

    $requete="select * from lieu,commune where idCommune=idCommuneF";

    $resultatC=mysqli_query($conn,$requete);
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>

    <title> Nouveau lieu </title>
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/monstyle.css">

</head>
    <body>
        <?php include("menu.php"); ?>
        <div class="panel margetop60">
            <div class="col-md-4 offset-5 text-center">
                <a href="lieu.php" class="btn btn-primary btn-sm">NOUVEAU LIEU</a>
            </div>
        </div>
        <div class="container">
            <div class="panel panel-success margetop60">
                <div class="panel-heading">Liste des lieu</div>
            </div>
            <div class="panel panel-info">
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>LIEU</th>
                                <th>COMMUNE</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php while($lieu=mysqli_fetch_array($resultatC, MYSQLI_ASSOC)){ ?>
                                <tr>
                                    <td><?php echo $lieu['idLieu'] ?> </td>
                                    <td><?php echo $lieu['nomL'] ?> </td>
                                    <td><?php echo $lieu['nomC'] ?> </td>
                                </tr>
                            <?PHP } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
