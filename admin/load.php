
<?php
$replied = $_POST["ind"];

$con = mysqli_connect("localhost", "root", "", "passport") or die("connection faild");
$sql = "SELECT * FROM feedback";
if ($replied !== ""){
    $sql = $sql." where replied=".$replied.";";
}
$output = '';
$result = $con->query($sql);
if ($result->num_rows > 0) {
$output = '<table class="table">
            <thead>
                <tr>
                    <th scope="col">Sr. No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Client ID</th>
                    <th scope="col">City</th>
                    <th scope="col">Feedback</th>
                    <th scope="col">Replay</th>
                </tr>
            </thead>
            <tbody>';

            while ($row = mysqli_fetch_array($result)) {
                $output = $output.'<tr><td>'.$row['id'].'</td>
                <td scope="col">'.$row["name"].'</td>
                <td scope="col">'.$row["phone_no"].'</td>
                <td scope="col">'.$row["clientid"].'</td>
                <td scope="col">'.$row["city"].'</td>
                <td scope="col">'.$row["feedback"].'</td>';
                if ($row["replied"]==1){
                    $output = $output.'<td scope="col"><a href="#"><button type="button" class="btn btn-success">Replied</button></a></td></tr>'; 

                }else{
                    $output = $output.'<td scope="col"><a href="modify.php?id='.$row["id"].'"><button type="button" class="btn btn-danger">Replay</button></a></td></tr>'; 
                }
            }
            $output.="</tbody></table>";
            mysqli_close($con);
            echo $output;
}else
{
 echo "<h1>No any data found</h1>";
}

?>