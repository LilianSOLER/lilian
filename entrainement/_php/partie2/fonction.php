<?php //Différentes Fonctions
            function age($annee,$mois,$jour)
            { 
                $age = date('Y')-$annee;
                if (date('m') < $mois)
                { 
                    return $age - 1; 
                }
                elseif(date('m') == $mois AND date('d') < $jour )
                {
                    return $age - 1; 
                } 
                else
                {
                    return $age; 
                }
            }
            function description($info)
            {
                return '<p class="description_ligne1">Bonjour '.$info['prenom'].' '.$info['nom'].'.</p><br/><p class="description_ligne2">Tu as '. age($info['annee_naissance'],$info['mois_naissance'],$info['jour_naissance']).' ans aujourd\'hui.</p><br/><p>'.$info['message'].'<br/></p>';
            }
        ?>