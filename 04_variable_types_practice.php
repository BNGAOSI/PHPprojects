<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Types Practice</title>
</head>
<body>
    <?php 
    $space = "<br>";
    //Integers
    print("Integers<br>");
    $int_var = 12345;
    $another_var = -12345 + 12345;
    echo "$int_var<br>";
    echo "$another_var<br>";

    //Double
    $many = 2.2888800;
    $many_2 = 2.2111200;
    $few = $many + $many_2;
    print(".$many + $many_2 = $few<br>.");

    //Boolean
    if (TRUE)
        print("This will always print<br>");
    else 
        print("This will never print<br>");

        $true_num = 3 + 0.14159;
        $true_str = "Tried and true";
        $true_array[49] = "An array element";
        $false_array = array();
        $false_null = NULL;
        $false_num = 999 - 999;
        $false_str = "";
    echo $space;
    //Null
    $my_var = NULL;
    $my_var = null;

    //Strings
    $string_1 = "This is a string in double quotes";
    $string_2 = "This is a somewhat longer, singly quoted string";
    $string_39 = "This string has thirty-nine characters";
    $string_0 = ""; // It said in the module that this is a string with zero characters

    $variable = "name";
    $literally = 'My $variable will not print! \\n';
    print($literally);
    $literally = "My $variable will print!\\n";
    print($literally);

    ?>
</body>
</html>

