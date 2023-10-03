<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variable Types</title>
</head>
<body>
  <?php
  $int_var = 12345;
  $another_int = -12345 + 12345;

  echo "integers = $int_var";
  echo "<br>";
  echo "another integers = $another_int<br>";

  //DOUBLES
  $many = 2.2888800;
  $many_2 = 2.2111200;
  $few = $many + $many_2;
  print("<br>Doubles = $many + $many_2 = $few<br>");
  print("<br>");

  //BOOLEAN
  print("Boolean =");
  if (TRUE)
 print("This will always print<br>");
    else
 print("This will never print<br>");
print("<br>");

  //NULL
  $my_var = null;
  print("This is a null variable = $my_var<br>");
  print("<br>");

  //STRINGS
  print("Strings<br>");
  $string_1 = "This is a string in double quotes";
  $string_2 = "This is a somewhat longer, singly quoted string";
  $string_39 = "This string has thirty-nine characters";
  $string_0 = ""; // a string with zero characters
  print("$string_1<br>");
  print("$string_2<br>");
  print("$string_39<br>");
  print("$string_0<br>");

  $variable = "name";
  $literally = 'My $variable will not print!\\n';
  print("$literally<br>");
  $literally = "My $variable will print!\\n";
  print($literally);
  print("<br>");
  print("<br>");

  print("HERE DOCUMENT<br>");
  $channel = <<<_XML_
  <channel>
  <title>What's For Dinner</title>
  <link>http://menu.example.com/</link>
  <description>Choose what to eat tonight.</description>
  </channel>
  _XML_;
  echo <<<END
  This uses the "here document" syntax to output
  multiple lines with variable interpolation. Note
  that the here document terminator must appear on a
  line with just a semicolon. no extra whitespace!
  <br />
  END;  // Make sure there's no whitespace before END
  print $channel;
  print("<br>");
  print("<br>");
  //Local Variables
  print("Local Variables<br>");
  $x = 4;
function assignx () {
  $x = 0;
print "\$x inside function is $x.
";
}
assignx();
print "\$x outside of function is $x.
";
print("<br>");
print("<br>");

  // multiply a value by 10 and return it to the caller
  print("Function Paramters<br>");
function multiply ($value) {
  $value = $value * 10;
  return $value;
 }
 $retval = multiply (10);
 Print "Return value is $retval\n";
 print("<br>");
 print("<br>");
 print("Global Variables<br>");
 $somevar = 15;
function addit() {
GLOBAL $somevar;
$somevar++;
print "Somevar is $somevar";
}
addit();
print("<br>");
print("<br>");
print("Static Variables<br>");
function keep_track() {
  STATIC $count = 0;
  $count++;
  print $count;
  print "<br>";
 }
 keep_track();
 keep_track();
 keep_track();

  ?>
  
</body>
</html>