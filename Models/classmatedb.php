<?php
include('../Models/db.php');
</select>
function getClassmates() {
    $con = getConnection();
    $sql = "SELECT * FROM registration";
    $res = mysqli_query($con, $sql);

    if ($res->num_rows > 0) {
        $classmates = [];
        while ($classmate = $res->fetch_assoc()) {
            echo "<option value='" . $classmate['Email'] . "'>" . $classmate['Name'] . "</option>";
            $classmates[] = [
                'Name' => $classmate['Name'],
                'Email' => $classmate['Email']
            ];
        }
        return $classmates;
    } else {
        return false;
    }
    </select>
}
?>
