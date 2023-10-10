<?php
// control structure or conditionals
    // if statements

$age = 17;

// if ($age >= 18) {
//     echo "You are old enough to vote.";
// }
// else {
//     echo " Sorry, you are not old enough to vote.";
// };

$t = date("H");

// echo $t;

// if ($t < 12) {
//     echo "Good Morning";
// }

// elseif ($t < 17) {
//     echo "Good afternoon";
// }

// else {
//     echo "Good Evening";
// }

$posts = ["First Posts"];

// if (!empty($posts)) {
//     echo $posts[0];
// }
// else {
//     echo "No posts";
// }

// echo !empty($posts) ? $posts[0] : "No Posts";

// $first_Post = !empty($posts) ? $posts[0] : "No Posts";
// $first_Post = !empty($posts) ? $posts[0] : null;

// Null Coalescing Operator
// $first_Post = $posts[0] ?? null;

// echo $first_Post;

// switch

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red";
        break;
     case 'blue':
        echo "Your favorite color is blue";
        break;
    case 'green':
        echo "Your favorite color is green";
        break;
    default:
    echo " Your favorite color is not red, green or blue";
}