<!doctype html>
<html lang="fr">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'opérateur de résolution de portée</title>
    <link rel="stylesheet" type="text/css" href="css/_index.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <?php include("../../../php/script.php"); ?>
</head>

<body>
    <div class='tout'>
        <?php include("../../../php/newHeader.php"); ?>
        <div class="html">
            <h1>L'opérateur de résolution de portée</h1>
            <?php
            class Personnage
            {
                private $_force;
                private $_experience;
                private $_degats;

                const FORCE_PETITE = 20;
                const FORCE_MOYENNE = 50;
                const FORCE_GRANDE = 80;

                // Variable statique PRIVÉE.
                private static $_texteADire = 'Je vais tous vous tuer !';

                public function __construct($force, $degats)
                {
                    $this->setForce($force);
                    $this->setDegats($degats);
                    $this->_experience = 1;
                }

                public function gagnerExperience()
                {
                    $this->_experience++;
                }

                public function frapper(Personnage $persoAFrapper)
                {
                    $persoAFrapper->_degats += $this->_force;
                }

                public function degats()
                {
                    return $this->_degats;
                }
                public function experience()
                {
                    return $this->_experience;
                }
                public function force()
                {
                    return $this->_force;
                }

                public function setExperience($experience)
                {
                    if (!is_int($experience)) {
                        trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
                        return;
                    }

                    if ($experience > 100) {
                        trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
                        return;
                    }

                    $this->_experience = $experience;
                }

                public function setForce($force)
                {
                    // On vérifie qu'on nous donne bien soit un « FORCE_PETITE », soit une « FORCE_MOYENNE », soit une « FORCE_GRANDE ».
                    if (in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE])) {
                        $this->_force = $force;
                    }
                }

                public function setDegats($degats)
                {
                    if (!is_int($degats)) {
                        trigger_error('Les dégats d\'un personnage doit être un nombre entier', E_USER_WARNING);
                        return;
                    }
                    $this->degats = $degats;
                }

                public static function parler()
                {
                    echo self::$_texteADire; // On donne le texte à dire.
                }
            }

            Personnage::parler();
            $perso = new Personnage(Personnage::FORCE_GRANDE, 0);
            $perso->parler();
            ?>

            <p>
                class Personnage</br>
                {</br>
                private $_force;</br>
                private $_localisation;</br>
                private $_experience;</br>
                private $_degats;</br>
                </br>
                const FORCE_PETITE = 20;</br>
                const FORCE_MOYENNE = 50;</br>
                const FORCE_GRANDE = 80;</br>
                </br>
                // Variable statique PRIVÉE.</br>
                private static $_texteADire = 'Je vais tous vous tuer !';</br>
                </br>
                public function __construct($forceInitiale)</br>
                {</br>
                $this->setForce($forceInitiale);</br>
                }</br>
                </br>
                public function deplacer()
                </br> {</br>
                </br>
                }</br>
                </br>
                public function frapper()
                </br> {</br>
                </br>
                }</br>
                </br>
                public function gagnerExperience()
                </br>{</br>

                }</br>
                </br>
                public function setForce($force)
                </br>{</br>
                // On vérifie qu'on nous donne bien soit un « FORCE_PETITE », soit une « FORCE_MOYENNE », soit une « FORCE_GRANDE ».
                </br>if (in_array($force, [self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE]))
                {</br>
                $this->_force = $force;</br>
                }</br>
                }</br>
                </br>
                public static function parler()</br>
                {</br>
                echo self::$_texteADire; // On donne le texte à dire.
                </br>}</br>
                }</br>
                Personnage::parler();</br>
                $perso = new Personnage(Personnage::FORCE_GRANDE);</br>
                $perso->parler();</br>
            </p>

        </div>
    </div>


    <?php include("../../../php/newSocial.php"); ?>
    <!-- 728x90_btf  Leader board-->
    <ins data-zone="234867" class="byadthink"></ins>
    <script type="text/javascript" async src="//ad.adxcore.com/adjs_r.php?async&what=zone:234867&inf=no"></script>

    </div>
</body>

</html>