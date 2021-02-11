<?php

########################
###    EDITED FILE   ###
########################

// reading from "input.json" and returning as an array
$input_array = file_get_contents("data/input.json");
  print "Loading...\n";

// array conversion to match structure in "correct-output.json"
$output_array = json_encode(json_decode($input_array), JSON_PRETTY_PRINT);
  print "Converting...\n";  

// saving the array to a file named "my-output.json" 
file_put_contents("data/my-output.json", $output_array);
  print "Saving...\n";    





########################################################################
###  Note: Final "my-output.json" file should match structure of     ###
###  "correct-output.json" - but, whitespace does NOT have to match. ###
########################################################################

########################################################################
###  Tip - Look at these built-in PHP functions:                     ###
###  json_encode, json_decode, file_put_contents, file_get_contents  ###
########################################################################