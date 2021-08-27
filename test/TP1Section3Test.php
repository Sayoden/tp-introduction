<?php
require(dirname(__FILE__) . "./../src/TP1Section3.php");
use \PHPUnit\Framework\TestCase;

/**
 * @testdox Les fonctions
 */
class TP1Section3Test extends TestCase {

    /**
     * @test
     * @testdox la fonction swap
     */
    function test_swap() {
        $a = 10;
        $b = 20;
        swap($a, $b);
        $this->assertEquals(10, $b);
        $this->assertEquals(20, $a);
    }



    /**
     * @test
     * @testdox ajouter un fruit
     */
    function test_ajout_fruit() {
        global $fruits;
        $this->assertTrue(true);

        ajouterFruit("Pomme", 0.3, 12.6, 0.3, 54);
        ajouterFruit("Banane", 1.2, 20.5, 0.3, 90);
        ajouterFruit("Orange", 1, 9, 0.2, 45);
        $this->assertEquals(3, count($fruits));
    }

    /**
     * @test
     * @testdox ajouter un fruit déjà présent
     */
    function test_ajout_fruit_deja_present() {
        global $fruits;
        $str = "Le fruit \"Pomme\" est déjà répertorié.\n";
        $this->expectOutputString($str);
        ajouterFruit("Pomme", 0.3, 12.6, 0.3, 54);
    }

    /**
     * @test
     * @testdox ajouter une recette
     */
    function ajout_recette() {
        global $fruits;
        global $recettes;
        ajouterRecette("Salade de fruits", ["Pomme", "Banane", "Orange" ]);
        $this->assertEquals(1, count($recettes));
    }

    /**
     * @test
     * @testdox ajouter une recette déjà présente
     */
    function ajout_recette_deja_la() {
        global $fruits;
        global $recettes;
        ajouterRecette("Salade de fruits", ["Pomme", "Banane", "Orange" ]);
        $this->assertEquals(1, count($recettes));
    }

    /**
     * @test
     * @testdox ajouter une recette avec un fruit non répertorié
     */
    function ajout_recette_avec_fruit_non_repertorie() {
        global $fruits;
        global $recettes;
        $str = "Le fruit \"Fraise\" n'est pas répertorié.\n";
        $this->expectOutputString($str);
        ajouterRecette("Variante salade de fruits", ["Pomme", "Fraise", "Orange" ]);
        $this->assertEquals(1, count($recettes));
    }

    /**
     * @test
     * @testdox affiche les valeurs nutritives de la recette
     */
    function affiche_val_nut_recette() {
        global $fruits;
        global $recettes;
        $str = "val nut de la recette \"Salade de fruits\" contient  2.500 protides,  0.800 lipides, 42.100 glucides, 189.000 calories.\n";
        $this->expectOutputString($str);
        valNutRecette("Salade de fruits");;
    }

    /**
     * @test
     * @testdox affiche  recette non répertotiée
     */
    function affiche_recette_non_repertoriee() {
        global $fruits;
        global $recettes;
        $str = "La recette \"Glace au citron\" n'est pas répertoriée.\n";
        $this->expectOutputString($str);
        valNutRecette("Glace au citron");;
    }

}