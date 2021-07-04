<?php

$age = 18 ; // une = asigne

if ($age <= 12) //  != == < > >=  2 = teste l'égalité
{
    echo 'Salut gamin !';
}

elseif($age==14)
{
    echo 'Tu as 14 ans !' ;
}

else
{
    echo 'Bonjour cher adulte !';
}

echo '<br/>' ;
echo '<br/>' ;

$adulte = true;

if ($adulte) //!$adulte pour dire si adulte est faux
{
    echo 'Tu es un adulte';
}

else{
    echo 'Tu es un enfant';
}

echo '<br/>' ;
echo '<br/>' ;

$nom = 'Bernard';

if($adulte AND $nom=='Bernard') // OR(||) , AND(&&)
{
    echo 'Tu es un adulte Bernard';
}

echo '<br/>' ;
echo '<br/>' ;

if ($adulte) 
{
?>

<p>Tu est adulte</p><br/>

<?php
}

echo '<br/>' ;
echo '<br/>' ;

switch($age)
{
    case 4:
        echo 'Tu as 4 ans';
        break;
    case 16:
        echo 'Tu es un peu plus âgé, tu as 16 ans';
        break;
}

$note = 16;

if ($note == 0)
{
    echo "Tu es vraiment un gros nul !!!";
}

elseif ($note == 5)
{
    echo "Tu es très mauvais";
}

elseif ($note == 7)
{
    echo "Tu es mauvais";
}

elseif ($note == 10)
{
    echo "Tu as pile poil la moyenne, c'est un peu juste…";
}

elseif ($note == 12)
{
    echo "Tu es assez bon";
}

elseif ($note == 16)
{
    echo "Tu te débrouilles très bien !";
}

elseif ($note == 20)
{
    echo "Excellent travail, c'est parfait !";
}

else
{
    echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>
