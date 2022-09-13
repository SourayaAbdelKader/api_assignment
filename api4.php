<?<php>
//API4: Implement a GET API that displays how many days are left for Christmas.
$day = $_GET['date'];
$christmas = "25-12-2018";
$days_left = abs(round((strtotime($day) - strtotime($chritmas))/86400));
 abs(round($days_left / 86400));

 $results = [
    "days left" => $days_left ,
]; 

echo json_encode($results);

</php>