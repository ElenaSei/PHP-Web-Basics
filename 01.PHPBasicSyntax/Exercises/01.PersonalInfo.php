<?php
    $firstName = fgets(STDIN);
    $lastName = fgets(STDIN);
    $age = fgets(STDIN);
    $fullName = $firstName . ' ' . $lastName;

    echo "My name is $fullName and I am $age years old.";