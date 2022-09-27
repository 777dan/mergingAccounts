<?php
$users1 = ["John" => "qwerty", "Nicole" => "asdf", "Mark" => "ww"];
$users2 = ["Joan" => "1234", "Mark" => "poiu", "Nicole" => "ggg"];
$intersect1 = array_intersect_key($users1, $users2);
$intersect2 = array_intersect_key($users2, $users1);
print_r(array_merge_recursive($intersect1, $intersect2));
$diff1 = (array_diff_key($users1, $users2));
$diff2 = (array_diff_key($users2, $users1));
// print_r(array_merge_recursive($diff1, $diff2));
$users1 = $diff1;
$users2 = $diff2;
// print_r($users1);
// print_r($users2);