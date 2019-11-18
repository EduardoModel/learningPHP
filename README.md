# Learning PHP

Files with different commentaries related to the PHP language for further consulting.

## Subtopics

## Session Variables
```php
<?php
    //It is recommended to do this code before any HTML text!
    session_start();

    //To attribute a session variable
    $_SESSION['username'] = "name...";

    //Even if the variable was declared sometime, the browser will have access to the variable,
    //if the user don't close the browser.
    //With this technique, you can control if the user is already logged in
    echo $_SESSION['username'];
?>
```

To switch between pages, use the command ```header("Location: file.php");```. And with the session variable, the user can transit between different pages and still be logged in.

## Cookies
The purpose of Cookies is to keep the user logged in after he closes the browser and within a time limit. It is basically a persistent session variable.

```php
<?php
    //The expiring time could be achived with the time() function
    //with the construction + seconds * minutes * hours * days
    setcookie("cookieName/ID", "cookieValue", time() + "expiringTime");

    //To fetch the cookie there are the function $_COOKIE["cookieName/ID]
    $_COOKIE["cookieName/ID"];

    //To alter the cookie value
    $_COOKIE["cookieName/ID"] = "newValue";

    //To unset a cookie you set the cookie with no value and a time in the past
    setcookie("cookieName/ID", "", time() - 60 * 60);
    //Little observation, the cookie will be unset ont the next load of the page!
    //Because we just alterate the time the cookie expires
?>
```
## Passwords
To store the passwords in a secure way, it's normally used the MD5 hash. MD5 is a one way encryption. But normally together with the hash method, are added a "Salt" with the string, to enhance the security of the encrypted password. To do better, you can use also some attribute of the user as a salt, but this attribute need to be static pro user!

```php
<?php
    //Just a random string with characteres
    $salt = "sadSAD54&%6!ox?prRLLs";
    //applying the salt with the user password 
    md5($salt.$userPassword);
    //Better encryption method (Lvl 4 encryption)
    md5(md5($attr1).$userPassword);
?>
```

## jQuery
It is a Javascript Framework. And the main purpose of this framework is to make this that are a little bit complicated in Javascript a lot easier. It gives a lot more power with less code.

Popular plugins:
* jQueryUI
* RubberBand
* Tooltipster
* Magnific Popup
* Unslider
* typeahead.js

## Bootstrap
It is a HTML, CSS and Javascript framework to develop responsive and mobile projects on the web. Bootstrap depends on jQuery.

## MySQL
SQL stands for Server Query Language. MySQL is open-source and utilized world wide. There is a database interaction tool called "phpMyAdmin" that is very useful to see differents aspects of the database.

SQL works with tables that are similars more or less an excel spreadsheet with a bunch of rows and columns. The columns are the attributes that you're gone to store. Each attribute need to be specified about its type (string, int, float).

It is a good practice to give an ID to every table that you're gonna make and set it as the primary index.

### MySql commands
To connect with a database you use the command __mysqli_connect("serverName", "dataBaseUsername", "password", "dataBaseName")__ and give the return to a variable. When the connection was not successfully, you use the __die()__ command.

To fetch data from the data base you utilize the query commands.
For example, to fetch all data from the table "users" you use: __SELECT * FROM 'users'__. And to fetch the proper data you use the command __mysqli_query("returnFromConnect", "queryString")__ and this function returns the result of the query. The __*__ stands for all the columns in the row.
The usage is normally __if($result = mysqli_query($link, $query)){ do the stuff}__.

To select one column, you inform it where the __*__ is. (__SELECT 'email' FROM 'users'__)

To access the data is utilized the function __mysqli_fetch_array($result)__. This function returns the array containing one row of the table, each position of the array is one attribute of the row and you can access via the string index(__$array["email"]__) or the index number. To return more data, you can utilize a while loop to fetch all rows.

To fetch more specific data, there are modifiers to refine the query. For example, to fetch all emails from gmail, the query string is: __SELECT * FROM 'table' WHERE 'email' LIKE '%gmail.com'__. It fetchs all email with the end "gmail.com". To search for a element that contains the letter "s" you can use "__%s%__" for example.

Aritmetic operators are also allowed, for example: __>=__, __<=__, etc ( example: __SELECT * FROM 'table' WHERE 'id' >= 1'__). To add more fetching options you use the reserved word __AND__ (example: __SELECT 'email' FROM 'users' WHERE 'id' >= 2 AND 'email' LIKE '%T'__).

To check the number of rows returned: __mysqli_num_rows($link, $query)__.

To prevent nasty characters inside the query string, you shall use the function '"__mysqli_real_escape_string($link, $string)__"'. That helps to avoid the SQL injections as well.

To insert data the query command is __INSERT INTO 'table' ('attribute1', 'attribute2', ...) VALUES('attr1_value', 'attr2_value', ...)__ and to insert the data is equal to fetch data(__mysqli_query("returnFromConnect", "queryString")__).

To update data the query command is __UPDATE 'table' SET attr1='value1' WHERE attr2='value2' LIMIT 1__ (LIMIT limits the number of rows to update).