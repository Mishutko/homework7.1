<?php
require 'category.php';

$obj = new category();

foreach ($obj->find() as $item) {

    echo '<br>' . $item['title'];
}