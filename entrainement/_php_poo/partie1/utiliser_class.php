<!doctype html>
<html lang="fr">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utiliser une class en Php</title>
    <link rel="stylesheet" type="text/css" href="css/_index.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <?php include("../../../php/script.php"); ?>
</head>

<body>
    <div class='tout'>
        <?php include("../../../php/newHeader.php"); ?>
        <div class="html">
            <h1>Utiliser une class en Php</h1>

            <?php
            class Personnage
            {
                private $_force;
                private $_experience;
                private $_degats;

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
                    if (!is_int($force)) {
                        trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
                        return;
                    }

                    if ($experience > 100) {
                        trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
                        return;
                    }

                    $this->_force = $force;
                }

                public function setDegats($degats)
                {
                    if (!is_int($degats)) {
                        trigger_error('Les dégats d\'un personnage doit être un nombre entier', E_USER_WARNING);
                        return;
                    }
                    $this->degats = $degats;
                }
            }
            ?>

            <?php
            $perso1 = new Personnage(60, 0); // Un premier personnage
            $perso2 = new Personnage(100, 10); // Un second personnage

            $perso1->setForce(10);
            $perso1->setExperience(2);

            $perso2->setForce(90);
            $perso2->setExperience(58);

            $perso1->frapper($perso2);  // $perso1 frappe $perso2
            $perso1->gagnerExperience(); // $perso1 gagne de l'expérience

            $perso2->frapper($perso1);  // $perso2 frappe $perso1
            $perso2->gagnerExperience(); // $perso2 gagne de l'expérience

            echo 'Le personnage 1 a ', $perso1->force(), ' de force, contrairement au personnage 2 qui a ', $perso2->force(), ' de force.<br />';
            echo 'Le personnage 1 a ', $perso1->experience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->experience(), ' d\'expérience.<br />';
            echo 'Le personnage 1 a ', $perso1->degats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->degats(), ' de dégâts.<br />';

            ?>

            <p>
                <br />class Personnage {
                <br />private $_force;
                <br />private $_experience;
                <br />private $_degats;
                <br />
                <br />public function __construct($force,$degats){
                <br />$this->setForce($force);
                <br />$this->setDegats($degats);
                <br /> $this->_experience = 1;<br />
                }<br />
                <br />
                <br />public function gagnerExperience(){
                <br />$this->_experience++;<br />
                }<br />
                <br />public function frapper(Personnage $persoAFrapper){
                <br />$persoAFrapper->_degats += $this->_force;
                <br />}
                <br />
                public function degats(){<br />
                <br />return $this->_degats;<br />
                }<br />
                public function experience(){<br />
                <br />return $this->_experience;<br />
                }<br />
                public function force(){<br />
                <br />return $this->_force;<br />
                }<br />
                <br />
                <br />public function setExperience($experience){
                <br />if(!is_int($experience)){
                <br />trigger_error('L\'expérience d\'un personnage doit être un nombre entier',E_USER_WARNING);
                <br />return;<br />
                }<br />
                <br />
                if($experience>100){<br />
                <br />trigger_error('L\'expérience d\'un personnage ne peut dépasser 100',E_USER_WARNING);
                <br />return;<br />
                }<br />
                <br />
                <br />$this->_experience = $experience;
                }<br />
                <br />
                public function setForce($force){<br />
                if(!is_int($force)){<br />
                trigger_error('La force d\'un personnage doit être un nombre entier',E_USER_WARNING);
                <br />return;<br />
                }<br />
                <br />
                if($experience>100){<br />
                trigger_error('La force d\'un personnage ne peut dépasser 100',E_USER_WARNING);<br />
                return;<br />
                }<br />
                <br />
                <br />$this->_force = $force;
                }<br />
                <br />
                public function setDegats($degats){<br />
                if(!is_int($degats)){<br />
                trigger_error('Les dégats d\'un personnage doit être un nombre entier',E_USER_WARNING);<br />
                return;<br />
                }<br />
                $this->degats = $degats;<br />
                }<br />
                <br />
                }<br />
                <br />
                <br />$perso1 = new Personnage(60,0); // Un premier personnage
                <br />$perso2 = new Personnage(100,10); // Un second personnage
                <br />
                $perso1->setForce(10);<br />
                <br />$perso1->setExperience(2);
                <br />
                $perso2->setForce(90);<br />
                $perso2->setExperience(58);<br />
                <br />
                $perso1->frapper($perso2); // $perso1 frappe $perso2<br />
                $perso1->gagnerExperience(); // $perso1 gagne de l'expérience<br />
                <br />
                $perso2->frapper($perso1); // $perso2 frappe $perso1<br />
                $perso2->gagnerExperience(); // $perso2 gagne de l'expérience<br />

                echo 'Le personnage 1 a ', $perso1->force(), ' de force, contrairement au personnage 2 qui a ', $perso2->force(), ' de force.<br />';
                echo 'Le personnage 1 a ', $perso1->experience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->experience(), ' d\'expérience.<br />';
                echo 'Le personnage 1 a ', $perso1->degats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->degats(), ' de dégâts.<br />';

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