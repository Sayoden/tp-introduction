<?php

namespace TP1;


/**
 * Déclarez ici la constante PI
 */

class TP1Section1 {

    /**
     * Ecrire la fonction estMajeur qui renvoie vrai si l'age donné en paramètre est supérieur ou égal à 18
     * et faux sinon
     * @param $age
     * @return bool
     */
    function estMajeur($age): bool {
        return $age >= 18;
    }


    /**
     * Ecrire la fonction sommeMultipleDeTrois qui renvoie la somme des entiers multiple de trois jusqu'à la limite donnée en paramètre
     * @param $limite
     * @return int
     */
    function sommeMultipleDeTrois(int $limite): int {
        $value = 0;

        for ($i = 0; $i <= $limite; $i++) {
            if ($i % 3 == 0) {
                $value += $i;
            }
        }

        return $value;
    }

    /**
     * Ecrire la fonction stockChocolat avec un paramètre stockDepart qui repond à la question
     * @param float $stockDepart
     * @return float|int
     * Josette reçoit chaque jour, en début de journée, un kilo de chocolat supérieur.
     * Josette peut travailler au maximum $max kilos de chocolat par jour.
     * En un jour, avec la quantité de chocolat en stock, Josette fabrique 2 fois la quantité de chocolat en stock.
     * À la fin de la journée la quantité de chocolat en stock correspond à la quantité de chocolat reçue qui vient s'ajouter à la quantité produite.
     * Calculez la quantité de chocolat produite après 10 jours en fonction du stock de chocolat au départ.
     */
    function stockChocolat(float $stockDepart): int| float {
        return 0;
    }

    /**
     * Sachant que f1 = 1, f2 = 1 et fi+2 = fi = fi+1
     * Ecrire un algorithme qui calcule le ième terme de la suite
     */
    function fibonacci($pas): int {
        return 0;
    }

    /**
     * Renvoie la valeur de PI avec une certaine précision indiquée par la valeur du paramètre epsilon
     * @param $epsilon
     * @return float
     */
    function decimalDePi($epsilon): float {
        return 0.0;
    }

    /**
     * Ecrire la fonction evolution qui renvoie le nombre d'années pour que la population des lemmings de la Toundra
     * soit supérieure à la population des lemmings de Laponie
     * @param $toundra
     * @param $laponie
     * @return int
     */
    function evolution($toundra, $laponie): int {
        return 0;
    }

    /**
     * La fonction typeParametre renvoie une chaîne de caractères qui indique le type du paramètre
     * @param $var
     * @return string
     */
    function typeParametre($var): string {
        return "";
    }


    /**
     * Renvoie Vrai ou Faux en fonction de la valeur du paramètre
     * @param $var
     * @return string
     */
    function valbool($var): string {
        return "";
    }

    /**
     * Ecrire les fonctions qui calculent le périmètre, la surface du disque, la surface de la sphère
     * et le volume de la sphère avec un rayon donné en paramètre
     * @param $rayon
     * @return float
     */
    function perimetre($rayon): float {
        return 0.0;
    }

    function surfaceDisque($rayon): float {
        return 0.0;
    }

    function surfaceSphere($rayon): float {
        return 0.0;
    }

    function volumeSphere($rayon): float {
        return 0.0;
    }
}