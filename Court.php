<?php

include('db_connect.php');

$sql = 'SELECT * FROM court ORDER BY costate';

$result = mysqli_query($conn, $sql);

$courts = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.html'); ?>

<?php include('CourtHeader.php'); ?>

<div id="main-div-2">

    <?php foreach ($courts as $court) { ?>
        <div class="div-2">
            <p><b>Court ID: </b><?php echo htmlspecialchars($court['Courtno']); ?></p>
            <p><b>Court Name: </b><?php echo htmlspecialchars($court['Courname']); ?></p>
            <p><b>Type: </b><?php echo htmlspecialchars($court['Cotype']); ?></p>
            <p><b>City: </b><?php echo htmlspecialchars($court['Cocty']); ?></p>
            <p><b>State: </b><?php echo htmlspecialchars($court['Costate']); ?></p>
            <p><b>Country: </b><?php echo htmlspecialchars($court['Cocoun']); ?></p>
        </div>
    <?php } ?>

</div>


</body>

</html>