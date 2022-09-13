<?<php>
//API3: Implement a POST API that takes a password a returns if the password is strong or not.
/*
At least 12 characters long but 14 or more is better.

A combination of uppercase letters, lowercase letters, numbers, and symbols.

Not a word that can be found in a dictionary or the name of a person, character, product, or organization.

Significantly different from your previous passwords.*/

    $password = $_POST['password'];
    $strong_password = false; 
    $symbols = '[@_!#$%^&*()<>?/|}{~:]';

    if (strlen(password) >= 12){
        $strong_password = true; 
    };

    foreach ($password as $value) {
        if (ctype_upper($value))  {
            $strong_password = true;
        };
        if (ctype_lower($value)) {
            $strong_password = true;
        };
        if (is_numeric($value)){
            $strong_password = true;
        };
        if (preg_match(($symbols), $value)){
            $strong_password = true;
        }
    }
    echo $strong_password;

</php>