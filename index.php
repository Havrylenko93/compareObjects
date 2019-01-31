<?php

declare(strinct_types=1);

$input = file_get_contents('php://input');

$initialObject = (object)$input;
$clonedObject = clone $initialObject;
$thirdObject = $initialObject;


if ($initialObject == $clonedObject) {
    echo 'initial object == clonedObject' . nl2br(PHP_EOL);
}

if ($initialObject === $thirdObject) { //it is the same object
    echo 'initial object === thirdObject' . nl2br(PHP_EOL);
}

echo "<pre>";
var_dump($initialObject, $clonedObject, $thirdObject);
echo "</pre>";

/**
 *
 * /var/www/html/stuff/compare_objects/index.php:17:
 * object(stdClass)[1]
 * public 'scalar' => string '{
 * "user": {
 * "id" : 1,
 * "name" : "Sergey",
 * "link" : "https://www.youtube.com/watch?v=CqIxJpVOzTE"
 * }
 * }' (length=107)
 * /var/www/html/stuff/compare_objects/index.php:17:
 * object(stdClass)[2]
 * public 'scalar' => string '{
 * "user": {
 * "id" : 1,
 * "name" : "Sergey",
 * "link" : "https://www.youtube.com/watch?v=CqIxJpVOzTE"
 * }
 * }' (length=107)
 * /var/www/html/stuff/compare_objects/index.php:17:
 * object(stdClass)[1]
 * public 'scalar' => string '{
 * "user": {
 * "id" : 1,
 * "name" : "Sergey",
 * "link" : "https://www.youtube.com/watch?v=CqIxJpVOzTE"
 * }
 * }' (length=107)
 */