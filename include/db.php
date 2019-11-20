<?php

$conn = mysqli_connect('localhost', 'root', '', 'csm');

if ($conn) {
    echo "bien";
} else {
    echo "mal";
}
