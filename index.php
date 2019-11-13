<?php
//1 - Variables
/*
//echo "Hello World";
$name = "Rob";
//You can echo HTML too
echo "<p>Hello $name!</p>";
$string1 = "Part1 of the string";
$string2 = "part 2 of the string";
echo "<p>".$string1." ".$string2."</p>"; //to concatenate strings is with the dot!
$myNumber = 10946;
//PHP don't have types
$calculation = $myNumber / 6765;
echo "<p>The result of the calculation: $calculation</p>";
//PHP offer booleans variables too
$myBool = false;
echo "<p>Is this statement true? $myBool";
//You can store a variable inside a variable
$variableName = "name";
echo "<p>".$$variableName."</p>"; //the value displayed will be Rob
*/

//2 - Arrays
/*
$myArray = array("Rob", "Kirsten", "Tommy", "Ralph");
//to insert an element at the end of an array 
$myArray[] = "Paul";

//to print arrays you use "print_r"
//to better visualize you can look at the page source
print_r($myArray);
//print value at the second position
echo $myArray[1];
//you can set the values manualy and the indexes are associative
$anotherArray[0] = "Pizza";
$anotherArray[1] = "Yougurt";
//you can use to store data within an array
$anotherArray["test"] = "ok";
$anotherArray[5] = "Coffee";
print_r($anotherArray);
//to better visualize
$thirdArray = array(
    "France" => "French",
    "USA" => "English", 
    "Germany" => "German");
//to remove an item we use the comand unset with the array and the index
unset($thirdArray["France"]);

print_r($thirdArray);
//size of the array
echo sizeof($thirdArray);
*/

//3 - IF statements
/*
$user = "Rob";
// to compare you use the operators: ==, =>, =<, &&, ||
if($user == "Rob"){
    echo "Hello $user";
}
else{
    echo "You are not $user";
}
$age = 25;
if($age >= 18){
    echo "Everything in order";
}
else{
    echo "You shal not pass!!!";
}
*/

//4 - For, for each and while loops
/*
$family = array("Rob", "Kirsten", "Tommy", "Ralphie");
//for each loop. you work whit the key and the value
//altering the value inside the loop don't alterate the value inside the array
foreach($family as $key => $value){
    $value = $value." percival";
    echo "Array item ".$key.": ".$value."<br>";
}

//regular for loop
for($i = 0; $i < sizeof($family);$i++){
    echo $family[$i]."<br>";
    //do everything inside
}

//while loop
//there are the do while loop too!
$i = 1;
while($i<=10){
    echo ($i*5)."<br>";
    $i++;
}
*/

//5 - GET Variables
/*
//there are encoded in the URL
//example: /?name=rob&pass=asuidh3iuhaasdha
print_r($_GET);
echo "Hello ".$_GET["name"]."!";
//to pass these variables you can use a form or a link to 
//encode the values inside the URL
*/
//Challenge - Is it prime?
/*
$number = $_GET["value"];
$flag = true;
if($number < 0){
    echo "The number is negative!"."<br>";
}
else if($number == 1){
    echo "$number is not prime!"."<br>";
}
else{
    for($i = 2; $i <= $number/2; $i++){
        if($number % $i == 0){
            echo "$number is not prime!"."<br>";
            $flag = false;
            break;
        }
    }
    if($flag){
        echo "$number is prime!";
    }
}
*/
//echo $number


//6 - POST Variables
//POST variables are more elegant, secure and you 
//don't need to worry about the content of the variable
//print_r($_POST);
/*
$isKnown = false;
$usersArray = array("Rob", "Tom", "Claire");
foreach($usersArray as $value){
    if($_POST["name"] == $value){
        $isKnown = true;
        break;
    }
}
if($isKnown){
    echo "<p>The user ".$_POST["name"]." is cadastrated</p>"."<br>";
}
else{
    echo "<p>User ".$_POST["name"]." not found!</p>"."<br>";
}
*/

//7 - Sending an e-mail with PHP
//the simpliest way is with the mail function
//this e-mail would be cosidered as spawn!
$emailTo = "test@test.com";
$subject = "I hope this works!";
$body = "Yeah, it worked!!!";
$headers = "From: test@test.com";
if(mail($emailTo, $subject, $body, $headers)){
    echo "<p>The E-Mail was sended sucessfully!</p>";
}
else{
    echo "<p>The E-Mail could not be sent!</p>";
}
//a solution would be to use mandrill




?>

<!-- 
for GET variable
<p>What's your name?</p>
<form>
    <input name="value" type="number"> 
    <input type="submit" value="Go!">
</form> -->


<!-- for POST variable -->    
<!-- <p>What's your name?</p>
<form method="post">
    <input name="name" type="text"> 
    <input type="submit" value="Go!">
</form> -->