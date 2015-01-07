<?php

/** @var \Doctrine\ORM\EntityManager $em */
$em = require __DIR__.'/bootstrap.php';



$article = $em->find('Unitato\Init\Article', 1);

// Ancien article
var_dump($article);

// Mise à jour
