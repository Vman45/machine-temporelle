<?php
require ('functions.php');
require ('templates/header.php');
require ('datas/datas.php')

?>

<div class='resultat'> 
<!-- recupération de la date -->
    <h1>  votre date est : 
        <?php echo $_GET['date']; ?> 
    </h1>
<br>
<!-- recupération des infos liées à l'époque -->
    <div class='period'>
        <?php
        epoque();
        ?>
    </div>
    <hr>
    <div class='evenement'>
    <?php
        evenement()
    ?>
    </div>

</div>

<?php require ('templates/footer.php'); ?>