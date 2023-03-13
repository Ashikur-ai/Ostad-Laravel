<?php  
// define variables to empty values  
$nameErr = $emailErr = $passwordErr = $pictureErr ="";  
$name = $email = $pasword = $picture = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    // for name 
    if (emptyempty($_POST["name"])) {  
         $nameErr = "Name is required";  
    } else {  
        $name = input_data($_POST["name"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    }

    // for email 
    if (emptyempty($_POST["email"])) {  
        $emailErr = "Email is required";  
   } else {  
       $email = input_data($_POST["email"]);  
           // check if name only contains letters and whitespace  
           if (!preg_match("/^[a-zA-Z ]*$/",$email)) {  
               $emailErr = "Only alphabets and white space are allowed";  
           }  
   }

    // for password 
    if (emptyempty($_POST["password"])) {  
        $passwordErr = "Password is required";  
   } else {  
       $password = input_data($_POST["password"]);  
   }

//    for picture 
    if (emptyempty($_POST["picture"])) {  
        $passwordErr = "Image is required";  
    } else {  
    $image = input_data($_POST["image"]);  
    }
   
} 

$rows = [
    ['name',  'email', 'password', 'picture'],
    [$name, $email, $password, $picture]
   
];
$path = 'Users.csv';
$fp = fopen($path, 'w'); // open in write only mode (write at the start of the file)
foreach ($rows as $row) {
    fputcsv($fp, $row);
}
fclose($fp);


$cookie_name = $name;
session_start();