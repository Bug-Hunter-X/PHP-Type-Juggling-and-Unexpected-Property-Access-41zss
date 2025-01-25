function myFunction() {
  // Declare the variable with a specific type (if possible)
  $myVar = 10;

  // Explicitly check the type before performing operations
  if (is_numeric($myVar)) {
    $myVar += 10; // Use the correct addition operator
  } else {
    // Handle the case where the type is not as expected
    echo "Error: unexpected type";
  }

  // Check if the property exists before accessing it
  if (is_object($myVar) && property_exists($myVar, 'someProperty')) {
    echo $myVar->someProperty;
  } else {
    // Handle the case where the property does not exist
    echo "Error: property does not exist";
  }
} 