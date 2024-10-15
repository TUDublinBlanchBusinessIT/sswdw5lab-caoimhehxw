<?php

include("dbcon.php");




$sql = "SELECT * from member";

$result = mysqli_query($conn,$sql);




echo "<SELECT from 'from member ID'>";




while ($row =mysqli_fetch_assoc($result)) {

    $id=$row['id'];

    $fn=$row['firstname'];

    $sn=$row['surname'];

    echo "<option value = '$id' > $fn $sn</option>";




}

echo "</SELECT>";




mysqli_close($conn);

?>

