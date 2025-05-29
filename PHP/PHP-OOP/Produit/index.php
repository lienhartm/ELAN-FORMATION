<?php
    require "Article.php";
    //
    $produit1 = new Produit ("Article1", 1, 1);
    $produit2 = new Produit ("Article2", 2, 2);
    $produit3 = new Produit ("Article3", 3, 3);
    $produit4 = new Produit ("Article4", 4, 4);
    //

    echo $produit1;
    echo "<br>";
    echo $produit1->ajoutArticle(100);
    echo "<br>";
    //echo $produit1->totalArticle();
    echo "<br>";
    echo $produit1;
    Produit::panier();
    Produit::id();
    
?>