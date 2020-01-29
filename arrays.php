<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = ["rajma", "salad", "yogurt", "rice"];


/*


Print every array element in a new line.
*/

echo $food[0] . "<br>";
echo $food[1] . "<br>";
echo $food[2] . "<br>";
echo $food[3] . "<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";




/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul> == $0
  <li>Chicken</li>
  <li>Pizza</li>
  <li>Pasta</li>
  <li>Milk</li>
</ul>
*/
echo "<ul>";
echo "<li>rajma</li>";
echo "<li>salad</li>";
echo "<li>yogurt</li>";
echo "<li>rice</li>";
echo "</ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = [
  "rajma" => "main course",
  "salad" => "digestive_food",
  "yogurt" => "desert",
  "rice" => "light_food"



];



/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/
echo $food[0] . " | " . $food_assoc["rajma"] . "<br>" 
 . $food[1] . " | " . $food_assoc["salad"] . "<br>"
 . $food[2] . " | " . $food_assoc["yogurt"] . "<br>"
 . $food[3] . " | " . $food_assoc["rice"] . "<br>";




// task separator
echo "<hr style=\"margin 1rem 0\">";



/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$food_assoc = [
  "rajma"=> [
    "type" => "main course",
    "origin" => "punjab"
  ],
  "salad"=> [
    "type" => "digestive food", 
    "origin" => "India"
  ],
  "yogurt"=>[
    "type" => "degestive food", 
    "origin" => "Italy"
  ],
  "rice"=>[
    "type" => "light food", 
    "origin" => "India"
  ]
];
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
echo $food[0]
. " | "
 . $food_assoc["rajma"]["type"]
 . " | "
 . $food_assoc["rajma"]["origin"]
 . "<br>" . $food[1]
 . " | "
 . $food_assoc["salad"]["type"]
 . " | "
 . $food_assoc["salad"]["origin"]
 . "<br>" . $food[2]
 . " | "
 . $food_assoc["yogurt"]["type"]
 . " | "
 . $food_assoc["yogurt"]["origin"]
 . "<br>" . $food[3]
 . " | "
 . $food_assoc["rice"]["type"]
 . " | "
 . $food_assoc["rice"]["origin"]
;


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo
"<table>
  <tr>
    <th>".$food[0]."</th>
    <th>".$food_assoc["rajma"]["type"]."</th>
    <th>".$food_assoc["rajma"]["origin"]."</th>
  </tr>
  <tr>
    <th>".$food[1]."</th>
    <th>".$food_assoc["salad"]["type"]."</th>
    <th>".$food_assoc["salad"]["origin"]."</th>
  </tr>
  <tr>
    <th>".$food[2]."</th>
    <th>".$food_assoc["yogurt"]["type"]."</th>
    <th>".$food_assoc["yogurt"]["origin"]."</th>
  </tr>
  <tr>
    <th>".$food[3]."</th>
    <th>".$food_assoc["rice"]["type"]."</th>
    <th>".$food_assoc["rice"]["origin"]."</th>
  </tr>
</table>";

?>