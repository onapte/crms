<?php

include('db_connect.php');

if (isset($_POST['dltc'])) {
    $Cno = $_POST['cno'];

    // database insert SQL code
    $sql = "DELETE FROM `police` WHERE `Poname` = '$Cno'";

    $rs = mysqli_query($conn, $sql);

    if (!$rs) {
        echo mysqli_error($conn);
    } else {
        header('Location: Police.php');
    }
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('header.html'); ?>
<?php include('AddPolice.html'); ?>
<div class="form">
    <form method="POST" action="DeletePolice.php">
        <div class="contain">
            <span id="title">
                <h1>Delete Police</h1>
                <p>Please fill the details of police to be deleted</p>
            </span>
            <hr>

            <label for="Name"><b>Police Name: </b></label>
            <input type="text" placeholder="Enter Police Name" name="cno" id="Name" required>
            <br>

            <a class=" button-1 btn btn-success btn-lg" href="Police.php" role="button">Go Back</a>
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            <button class=" button-1 btn btn-danger btn-lg" value="Save" name="dltc">Delete</button>
        </div>
    </form>
</div>
</body>

</html>