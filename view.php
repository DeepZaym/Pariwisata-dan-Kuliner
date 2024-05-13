<style>

.table1 {
    font-family: sans-serif;
    color: #232323;
    border-collapse: collapse;
}
 
.table1, th, td {
    border: 1px solid #999;
    padding: 8px 20px;
}
</style>


<table border= "1px solid black">

<tr>
    <th>id</td>
    <th>username</td>
    <th>password</td>
    <th>role</td>
</tr>



<?php

require "../service/koneksi database.php";

$no= 1;
$input = mysqli_query($db, "SELECT * FROM user");
if ($input) {

    while ($data = mysqli_fetch_assoc($input)) {

        $id = $data['id'];
        $username = $data['username'];
        $password = $data['password'];
        $role= $data['role'];


        echo "
        
    <tr>
    <td>$id</td>
    <td>$username</td>
    <td>$password</td>
    <td>$role</td>
<td><a href   </tr>
        
        ";
    }


}


?>

</table>