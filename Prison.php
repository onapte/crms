<?php

include('db_connect.php');

$sql = 'SELECT * FROM prison ORDER BY Pst';

$result = mysqli_query($conn, $sql);

$prisons = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.html'); ?>

<?php include('PrisonHeader.php'); ?>

<div id="main-div-2">

    <?php foreach ($prisons as $prison) { ?>
        <div class="div-2">
            <p><b>Prison ID: </b><?php echo htmlspecialchars($prison['Pid']); ?></p>
            <p><b>Prison Name: </b><?php echo htmlspecialchars($prison['Pname']); ?></p>
            <p><b>Type: </b><?php echo htmlspecialchars($prison['Pty']); ?></p>
            <p><b>Capacity: </b><?php echo htmlspecialchars($prison['Pcp']); ?></p>
            <p><b>City: </b><?php echo htmlspecialchars($prison['Pcty']); ?></p>
            <p><b>State: </b><?php echo htmlspecialchars($prison['Pst']); ?></p>
            <p><b>Country: </b><?php echo htmlspecialchars($prison['Pcoun']); ?></p>
        </div>
    <?php } ?>

</div>


</body>

</html>