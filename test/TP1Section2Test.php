<?php

use \PHPUnit\Framework\TestCase;
use TP1\TP1Section2;

/**
 * @testdox Les tableaux
 */
class TP1Section2Test extends TestCase {

    /**
     * @test
     * @testdox insertion classique dans un tableau
     */
    function insertion_de_base() {
        $tp1_2 = new TP1Section2();

        $tab = $tp1_2->addElementInTab(1, 2, 3, 4);
        $this->assertEmpty(array_diff([1, 2, 3, 4], $tab));
        print_r(array_diff([1, 2, 3, 4], $tab));
        $this->assertEmpty(array_diff($tab, [1, 2, 3, 4]));
        print_r(array_diff($tab, [1, 2, 3, 4]));
    }

    /**
     * @test
     * @testdox insertion en tête dans un tableau
     */
    function insertion_en_tete() {
        $tp1_2 = new TP1Section2();

        $tab = $tp1_2->addElementEnTeteTab(1, 2, 3, 4);
        $this->assertEquals(4, count($tab));
        $this->assertEmpty(array_diff_uassoc([4, 3, 2, 1], $tab,
            function (mixed $a, mixed $b): int {
                if ($a === $b) {
                    return 0;
                }
                return ($a > $b) ? 1 : -1;
            }));
        $this->assertEmpty(array_diff_assoc($tab, [4, 3, 2, 1]));
    }

    /**
     * @test
     * @testdox tri par valeur d'un tableau
     */
    function test_stockTriValeurTableau() {
        $tp1_2 = new TP1Section2();
        $tab = $tp1_2->stockTriTableau('quatre', 'un', 'trois', 'deux');
        $this->assertEmpty(array_diff_assoc(['deux', 'quatre', 'trois', 'un'], $tab));
    }

    /**
     * @test
     * @testdox exception dans stockTriValeurTableauAsso, nombre paramètres invalide
     *
     */
    function test_exception_stockTriValeurTableauAsso() {
        $this->expectException(Exception::class);
        $tp1_2 = new TP1Section2();
        $tp1_2->stockTriValeurTableauAsso('quatre', 4, 'trois', 3, 'deux', 2, 'un');
    }


    /**
     * @test
     * @testdox tri par valeur d'un tableau associatif
     */
    function test_stockTriValeurTableauAsso() {
        $tp1_2 = new TP1Section2();
        $tab = $tp1_2->stockTriValeurTableauAsso('quatre', 4, 'un', 1, 'trois', 3, 'deux', 2);
        $this->assertEmpty(array_diff_assoc(['un', 'deux', 'trois', 'quatre'], array_keys($tab)));

    }

    /**
     * @test
     * @testdox exception dans stockTriCleTableauAsso, nombre paramètres invalide
     *
     */
    function test_exception_stockTriCleTableauAsso() {
        $this->expectException(Exception::class);
        $tp1_2 = new TP1Section2();
        $tp1_2->stockTriCleTableauAsso('quatre', 4, 'trois', 3, 'deux', 2, 'un');
    }

    /**
     * @test
     * @testdox tri par cle d'un tableau associatif
     */
    function test_stockTriCleTableauAsso() {
        $tp1_2 = new TP1Section2();
        $tab = $tp1_2->stockTriCleTableauAsso('quatre', 4, 'un', 1, 'trois', 3, 'deux', 2);
        $this->assertEmpty(array_diff_assoc(['deux', 'quatre', 'trois', 'un'], array_keys($tab)));
    }

    /**
     * @test
     * @testdox crible d'Ératosthène
     */
    function test_cribleEratosthene() {
        $tp1_2 = new TP1Section2();
        $tab = $tp1_2->cribleEratosthene(97);
        $this->assertEmpty(array_diff(array(
            0 => 2,
            1 => 3,
            2 => 5,
            3 => 7,
            4 => 11,
            5 => 13,
            6 => 17,
            7 => 19,
            8 => 23,
            9 => 29,
            10 => 31,
            11 => 37,
            12 => 41,
            13 => 43,
            14 => 47,
            15 => 53,
            16 => 59,
            17 => 61,
            18 => 67,
            19 => 71,
            20 => 73,
            21 => 79,
            22 => 83,
            23 => 89,
            24 => 97,
        ), $tab));
    }

    /**
     * @test
     * @testdox création d'un tableau à deux dimensions
     */
    function test_tableMultiplication() {
        $tp1_2 = new TP1Section2();
        $tab = $tp1_2->tableDeMultiplication(5);
        $this->assertCount(5, $tab);
        $this->assertCount(5, $tab[0]);
        $this->assertCount(5, $tab[0]);
        $this->assertEquals(25, $tab[4][4]);
        $this->assertEquals(9, $tab[2][2]);
        $this->assertEquals(1, $tab[0][0]);
    }

    /**
     * @test
     * @testdox affichage d'un tableau à deux dimensions avec formatage
     */
    function test_afficherTableMultiplication() {
        $tp1_2 = new TP1Section2();
        $tab = $tp1_2->tableDeMultiplication(10);
        $str = <<< label
  1   2   3   4   5   6   7   8   9  10 
  2   4   6   8  10  12  14  16  18  20 
  3   6   9  12  15  18  21  24  27  30 
  4   8  12  16  20  24  28  32  36  40 
  5  10  15  20  25  30  35  40  45  50 
  6  12  18  24  30  36  42  48  54  60 
  7  14  21  28  35  42  49  56  63  70 
  8  16  24  32  40  48  56  64  72  80 
  9  18  27  36  45  54  63  72  81  90 
 10  20  30  40  50  60  70  80  90 100 

label;

        $this->expectOutputString($str);
        $tp1_2->afficherTableDeMultiplication($tab);
    }


}