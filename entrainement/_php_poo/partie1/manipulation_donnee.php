<!doctype html>
<html lang="fr">

<head>
  <meta charset='utf-8'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manipulation de données stockées</title>
  <link rel="stylesheet" type="text/css" href="css/_index.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <?php include("../../../php/script.php"); ?>
</head>

<body>
  <div class='tout'>
    <?php include("../../../php/newHeader.php"); ?>
    <div class="html">
      <h1>Manipulation de données stockées</h1>

      <?php
      class Personnage
      {
        private $_id;
        private $_nom;
        private $_forcePerso;
        private $_degats;
        private $_niveau;
        private $_experience;

        public function __construct(array $donnees)
        {
          $this->hydrate($donnees);
        }

        // Un tableau de données doit être passé à la fonction (d'où le préfixe « array »).
        public function hydrate(array $donnees)
        {
          foreach ($donnees as $key => $value) {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set' . ucfirst($key);

            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
              // On appelle le setter.
              $this->$method($value);
            }
          }
        }

        public function id()
        {
          return $this->_id;
        }
        public function nom()
        {
          return $this->_nom;
        }
        public function forcePerso()
        {
          return $this->_forcePerso;
        }
        public function degats()
        {
          return $this->_degats;
        }
        public function niveau()
        {
          return $this->_niveau;
        }
        public function experience()
        {
          return $this->_experience;
        }

        public function setId($id)
        {
          // L'identifiant du personnage sera, quoi qu'il arrive, un nombre entier.
          $this->_id = (int) $id;
        }

        public function setNom($nom)
        {
          // On vérifie qu'il s'agit bien d'une chaîne de caractères.
          // Dont la longueur est inférieure à 30 caractères.
          if (is_string($nom) && strlen($nom) <= 30) {
            $this->_nom = $nom;
          }
        }

        public function setForcePerso($forcePerso)
        {
          $forcePerso = (int) $forcePerso;

          // On vérifie que la force passée est comprise entre 0 et 100.
          if ($forcePerso >= 0 && $forcePerso <= 100) {
            $this->_forcePerso = $forcePerso;
          }
        }

        public function setDegats($degats)
        {
          $degats = (int) $degats;

          // On vérifie que les dégâts passés sont compris entre 0 et 100.
          if ($degats >= 0 && $degats <= 100) {
            $this->_degats = $degats;
          }
        }

        public function setNiveau($niveau)
        {
          $niveau = (int) $niveau;

          // On vérifie que le niveau n'est pas négatif.
          if ($niveau >= 0) {
            $this->_niveau = $niveau;
          }
        }

        public function setExperience($exp)
        {
          $exp = (int) $exp;

          // On vérifie que l'expérience est comprise entre 0 et 100.
          if ($exp >= 0 && $exp <= 100) {
            $this->_experience = $exp;
          }
        }
      }

      class PersonnagesManager
      {
        private $_db; // Instance de PDO

        public function __construct($db)
        {
          $this->setDb($db);
        }

        public function add(Personnage $perso)
        {
          $q = $this->_db->prepare('INSERT INTO personnages(nom, forcePerso, degats, niveau, experience) VALUES(:nom, :forcePerso, :degats, :niveau, :experience)');

          $q->bindValue(':nom', $perso->nom());
          $q->bindValue(':forcePerso', $perso->forcePerso(), PDO::PARAM_INT);
          $q->bindValue(':degats', $perso->degats(), PDO::PARAM_INT);
          $q->bindValue(':niveau', $perso->niveau(), PDO::PARAM_INT);
          $q->bindValue(':experience', $perso->experience(), PDO::PARAM_INT);

          $q->execute();
          echo 'Le manager a ajouté un nouveau personnage nommée' . $perso['nom'], ' qui a ', $perso['forcePerso'], ' de force, ', $perso['degats'], ' de dégâts, ', $perso['experience'], ' d\'expérience et qui est au niveau ', $perso['niveau'];
        }

        public function delete(Personnage $perso)
        {
          $this->_db->exec('DELETE FROM personnages WHERE id = ' . $perso->id());
        }

        public function get($id)
        {
          $id = (int) $id;

          $q = $this->_db->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages WHERE id = ' . $id);
          $donnees = $q->fetch(PDO::FETCH_ASSOC);

          return new Personnage($donnees);
        }

        public function getList()
        {
          $persos = [];

          $q = $this->_db->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages ORDER BY nom');

          while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $persos[] = new Personnage($donnees);
          }

          return $persos;
        }

        public function update(Personnage $perso)
        {
          $q = $this->_db->prepare('UPDATE personnages SET forcePerso = :forcePerso, degats = :degats, niveau = :niveau, experience = :experience WHERE id = :id');

          $q->bindValue(':forcePerso', $perso->forcePerso(), PDO::PARAM_INT);
          $q->bindValue(':degats', $perso->degats(), PDO::PARAM_INT);
          $q->bindValue(':niveau', $perso->niveau(), PDO::PARAM_INT);
          $q->bindValue(':experience', $perso->experience(), PDO::PARAM_INT);
          $q->bindValue(':id', $perso->id(), PDO::PARAM_INT);

          $q->execute();
        }

        public function setDb(PDO $db)
        {
          $this->_db = $db;
        }
      }
      ?>

      <?php
      $perso = new Personnage([
        'nom' => 'Victor',
        'forcePerso' => 5,
        'degats' => 0,
        'niveau' => 1,
        'experience' => 0
      ]);

      $db = new PDO('mysql:host=localhost;dbname=didelofr_test;charset=utf8', 'didelofr_admin', '#qDUu!CYX}t]');
      $manager = new PersonnagesManager($db);

      $manager->delete($perso);
      ?>

    </div>
  </div>


  <?php include("../../../php/newSocial.php"); ?>
  <!-- 728x90_btf  Leader board-->
  <ins data-zone="234867" class="byadthink"></ins>
  <script type="text/javascript" async src="//ad.adxcore.com/adjs_r.php?async&what=zone:234867&inf=no"></script>

  </div>
</body>

</html>