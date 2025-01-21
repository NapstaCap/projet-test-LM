<?php
class ConfigurationBaseDeDonnees
{

    static private array $configurationBaseDeDonnees = array(
        'nomHote' => 'webinfo.iutmontp.univ-montp2.fr',
        'nomBaseDeDonnees' => 'barnierd',
        'port' => '3316',
        'login' => 'barnierd',
        'motDePasse' => 'GauthierMyGoat'
    );

    static public function getLogin(): string
    {
        // L'attribut statique $configurationBaseDeDonnees
        // s'obtient avec la syntaxe ConfigurationBaseDeDonnees::$configurationBaseDeDonnees
        // au lieu de $this->configurationBaseDeDonnees pour un attribut non statique
        return ConfigurationBaseDeDonnees::$configurationBaseDeDonnees['login'];
    }

    static public function getNomHote(): string
    {
        return ConfigurationBaseDeDonnees::$configurationBaseDeDonnees['nomHote'];
    }

    static public function getNomBaseDeDonnees(): string
    {
        return ConfigurationBaseDeDonnees::$configurationBaseDeDonnees['nomBaseDeDonnees'];
    }

    static public function getPort(): string
    {
        return ConfigurationBaseDeDonnees::$configurationBaseDeDonnees['port'];
    }

    static public function getMotDePasse(): string
    {
        return ConfigurationBaseDeDonnees::$configurationBaseDeDonnees['motDePasse'];
    }
}

?>

