<?<php>
//API4: Implement a GET API that displays how many days are left for Christmas.
$day = $_GET['date'];
$christmas = "25-12-2018";
$days_left = strtotime($day) - strtotime($chritmas);
echo abs(round($days_left / 86400));
</php>