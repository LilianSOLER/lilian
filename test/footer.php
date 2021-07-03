<footer>
        <div id="conteneur3">
            <div class="bloc_3">
                <p>SOLER Lilian</p>
            </div>
            <div class="bloc_3">
                <p>Polytech'Nice Sophia</p>
            </div>
            <div class="bloc_3">
                <p>Peip 2</p>
            </div>
            <div class="bloc_3">
                <a title="Page de Contact" href="https://didelo.fr/Test/contact_propre.php" target="_blank" >Contact</a>
            </div>
            <div class="bloc_3">
                <p><a title=" Page de contact pour la création de la page perso" href="https://didelo.fr/Tuto/espace_membre/inscription.php" target="_blank">Contact pour la création d'une page perso</a></p>
            </div>
            <div class="bloc_3">
                <?php
                $bdd = new PDO('mysql:host=localhost;dbname=didelofr_test', 'didelofr_liliansoler', 'JiORPQLGq.Nk');
                $temps_session = 5;
                $temps_actuel = date("U");
                $user_ip = $_SERVER['REMOTE_ADDR'];
                $req_ip_exist = $bdd->prepare('SELECT * FROM online WHERE user_ip = ?');
                $req_ip_exist->execute(array($user_ip));
                $ip_existe = $req_ip_exist->rowCount();
                if($ip_existe == 0) {
                   $add_ip = $bdd->prepare('INSERT INTO online(user_ip,time) VALUES(?,?)');
                   $add_ip->execute(array($user_ip,$temps_actuel));
                } else {
                   $update_ip = $bdd->prepare('UPDATE online SET time = ? WHERE user_ip = ?');
                   $update_ip->execute(array($temps_actuel,$user_ip));
                }
                $session_delete_time = $temps_actuel - $temps_session;
                $del_ip = $bdd->prepare('DELETE FROM online WHERE time < ?');
                $del_ip->execute(array($session_delete_time));
                $show_user_nbr = $bdd->query('SELECT * FROM online');
                $user_nbr = $show_user_nbr->rowCount();
                ?>
                <p><?php echo $user_nbr; ?> utilisateur<?php if($user_nbr != 1) { echo "s"; } ?> en ligne </p>
            </div>

            
        </div>
    </footer>

