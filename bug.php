function myFunction() {
  // Declare a variable without specifying a type
  $myVar = 10;

  // Perform an operation that could result in an unexpected type
  $myVar = $myVar + "10";

  // Access a property of the variable that may not exist
  echo $myVar->someProperty;
}