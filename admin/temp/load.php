
<?php
$industry = $_POST["ind"];

$con = mysqli_connect("localhost", "root", "", "recruitedb") or die("connection faild");
$sql = "SELECT * FROM company";
if ($industry !== ""){
    $sql = $sql." where industry='".$industry."';";
}
$output = '';
$result = $con->query($sql);
if ($result->num_rows > 0) {
$output = '<table class="table">
            <thead>
                <tr>
                    <th scope="col">Sr. No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Website</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                    <th scope="col">Country</th>
                    <th scope="col">Industry</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>';

            while ($row = mysqli_fetch_array($result)) {
                $output = $output.'<tr><td>'.$row['id'].'</td>
                <td scope="col">'.$row["cname"].'</td>
                <td scope="col">'.$row["website"].'</td>
                <td scope="col">'.$row["phone_no"].'</td>
                <td scope="col">'.$row["address"].'</td>
                <td scope="col">'.$row["city"].'</td>
                <td scope="col">'.$row["state"].'</td>
                <td scope="col">'.$row["country"].'</td>
                <td scope="col">'.$row["industry"].'</td>
                <td scope="col"><a href="modify.php?id='.$row["id"].'"><button type="button" class="btn btn-primary">Edit</button></a></td>
                <td scope="col"><button type="button" data-eid="'.$row["id"].'" class="btn btn-danger dbdelete">Delete</button></td></tr>'; 
            }
            $output.="</tbody></table>";
            mysqli_close($con);
            echo $output;
}else
{
 echo "<h1>No any data found</h1>";
}

?>