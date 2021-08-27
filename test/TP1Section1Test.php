<?php

use \PHPUnit\Framework\TestCase;
use TP1\TP1Section1;

/**
 * @testdox Variable, type, structures de contrôle
 */
class TP1Section1Test extends TestCase {

    /** @test
     *  @testdox Utilisation de la structure de contrôle if
     */
    function le_if() {
        $tp1 = new TP1Section1();
        $this->assertTrue($tp1->estMajeur(18));
        $this->assertTrue($tp1->estMajeur(48));
        $this->assertFalse($tp1->estMajeur(17));
        $this->assertFalse($tp1->estMajeur(5));
        $this->assertFalse($tp1->estMajeur(0));
    }

    /** @test
     * @testdox Somme des multiples de trois
     */
    function somme_des_multiples_de_trois() {
        $tp1 = new TP1Section1();
        $this->assertEquals(0, $tp1->sommeMultipleDeTrois(0));
        $this->assertEquals(3, $tp1->sommeMultipleDeTrois(3));
        $this->assertEquals(18, $tp1->sommeMultipleDeTrois(10));
        $this->assertEquals(1683, $tp1->sommeMultipleDeTrois(100));
    }

    /** @test
     *  @testdox Stock de chocolat
     */
    function la_boucle_for() {
        $tp1 = new TP1Section1();
        $this->assertEquals(11263, $tp1->stockChocolat(10));
        $this->assertEquals(1023, $tp1->stockChocolat(0));
    }


    /** @test
     *  @testdox suite de fibonacci
     */
    function suite_de_fibonacci() {
        $tp1 = new TP1Section1();
        $this->assertEquals(55, $tp1->fibonacci(10));
        $this->assertEquals(1, $tp1->fibonacci(1));
        $this->assertEquals(1, $tp1->fibonacci(2));
    }



    /** @test
     *  @testdox Utilisation de la structure de contrôle while
     */
    function decimal_de_pi() {
        $tp1 = new TP1Section1();
        $this->assertEqualsWithDelta( 3.1415926535898,1e-1, $tp1->decimalDePi(1e-1));
        $this->assertEqualsWithDelta( 3.1415926535898,1e-5, $tp1->decimalDePi(1e-5));
        $this->assertEqualsWithDelta( 3.1415926535898,1e-12, $tp1->decimalDePi(1e-12));
    }

    /** @test
     *  @testdox evolution de la population de lemmings
     */
    function evolution_lemmings() {
        $tp1 = new TP1Section1();
        $this->assertEquals(2, $tp1->evolution(1200, 1500));
        $this->assertEquals(0, $tp1->evolution(1500, 1200));
        $this->assertEquals(29, $tp1->evolution(15, 1500));
    }



    /** @test
     * @testdox Vérification du type d'une variable
     */
    function Utilisation_des_types() {
        $tp1 = new TP1Section1();
        $this-> assertEquals('String', $tp1->typeParametre('Bonjour'));
        $this-> assertEquals('Entier', $tp1->typeParametre(18));
        $this-> assertEquals('Réel', $tp1->typeParametre(-18.5));
        $this-> assertEquals('Tableau', $tp1->typeParametre([]));
        $this-> assertEquals('Booléen', $tp1->typeParametre(true));
    }

    /** @test
     *  @testdox Valeur booléenne d'une variable
     */
    function valeur_booleenne_d_une_variable() {
        $tp1 = new TP1Section1();
        $this-> assertEquals('Vrai', $tp1->valbool('Bonjour'));
        $this-> assertEquals('Faux', $tp1->valbool([]));
        $this-> assertEquals('Faux', $tp1->valbool(0));
        $this-> assertEquals('Faux', $tp1->valbool(''));
        $this-> assertEquals('Vrai', $tp1->valbool(18));
        $this-> assertEquals('Vrai', $tp1->valbool([1,2]));
    }

    /**
     * @test
     * @testdox Périmètre d'un cercle
     */
    function perimetre() {
        $tp1 = new TP1Section1();
        $this->assertEqualsWithDelta( 15.707963265, 1e-4, $tp1->perimetre(2.5));
        $this->assertEquals( 0, $tp1->perimetre(0));
    }

    /**
     * @test
     * @testdox Surface d'un disque
     */
    function surfaceDisque() {
        $tp1 = new TP1Section1();
        $this->assertEqualsWithDelta( 19.634954085, 1e-4, $tp1->surfaceDisque(2.5));
        $this->assertEquals( 0, $tp1->surfaceDisque(0));
    }

    /**
     * @test
     * @testdox Surface d'une sphère
     */
    function surfaceSphere() {
        $tp1 = new TP1Section1();
        $this->assertEqualsWithDelta( 78.539816325, 1e-4, $tp1->surfaceSphere(2.5));
        $this->assertEquals( 0, $tp1->surfaceSphere(0));
    }

    /**
     * @test
     * @testdox Volume d'une sphère
     */
    function volumeSphere() {
        $tp1 = new TP1Section1();
        $this->assertEqualsWithDelta( 65.4498469375, 1e-4, $tp1->volumeSphere(2.5));
        $this->assertEquals( 0, $tp1->volumeSphere(0));
    }

}