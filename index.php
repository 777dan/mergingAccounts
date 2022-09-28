<?php
$users1 = ["John" => "qwerty", "Nicole" => "asdf", "Mark" => "ww"];
$users2 = ["Joan" => "1234", "Mark" => "poiu", "Nicole" => "ggg"];
$users = array_merge_recursive($users1, $users2);
$keys = array_intersect_key($users1, $users2);
$additional = array_intersect_key($users, $keys);
$result = (array_diff_key($users, $additional));
// print_r($result);
// print_r($users);
// print_r($keys);
print_r($additional);