<?<php>
//API3: Implement a POST API that takes a password a returns if the password is strong or not.
/*
At least 12 characters long but 14 or more is better.

A combination of uppercase letters, lowercase letters, numbers, and symbols.

Not a word that can be found in a dictionary or the name of a person, character, product, or organization.

Significantly different from your previous passwords.*/

    $password = $_POST['password'];
    $symbols = '[@_!#$%^&*()<>?/|}{~:]';

    function strongPassword () {
        if (strlen(password) < 12){
            return false 
        };
        foreach ($password as $value) {
            if (ctype_upper($value))  {
                $capital_letter = true;
            };
            if (ctype_lower($value)) {
                $lower_letter = true;
            };
            if (is_numeric($value)){
                $number = true;
            };
            if (preg_match(($symbols), $value)){
                $symbol = true;
            }
        }
        if ($capital_letter and $lower_letter and $number and $symbol) {
            return true
        } 
        return false
    }
    
    $results = [
        "strong" => strongPassword(),
    ]; 

    echo json_encode($results);
</php>