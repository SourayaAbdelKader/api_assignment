<?<php>
//API2: Implement a POST API that takes 3 inputs (a, b and c) and the API should return the result of this expression: a^3 + b*c - a/b.
function calculate (){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    return $a**$b + b*c - a/b;
}
$results = [
    "result" => calculate(),
]; 
echo json_encode($results);

</php>