#include <iostream>
#include "smallFunction.h"

using namespace std;

void helloWorld()
{
  cout << "Hello world!" << endl; // Affiche un message
  int qiUtilisateur = 150;
  string nomUtilisateur = "Albert Einstein";
  cout << "Vous vous appelez " << nomUtilisateur << " et votre QI vaut " << qiUtilisateur << endl;
}

void reference()
{
  int ageUtilisateur = 18; //Une variable pour contenir l'âge de l'utilisateur

  int &maReference =ageUtilisateur; //Et une référence sur la variable 'ageUtilisateur'
  //On peut utiliser à partir d'ici
  //'ageUtilisateur' ou 'maReference' indistinctement
  //Puisque ce sont deux étiquettes de la même case en mémoire

  cout << "Vous avez " << ageUtilisateur << "  ans. (via variable)" << endl;
  //On affiche, de la manière habituelle

  cout << "Vous avez " << maReference << " ans. (via reference)" << endl;
  //Et on affiche en utilisant la référence
}

void askUser()
{
  cout << "Quel age avez vous ?" << endl;
  int ageUtilisateur2 = 0;
  cin >> ageUtilisateur2;
  cin.ignore();
  cout << "Vous avez " << ageUtilisateur2 << " ans !" << endl;
}

void getlineAndCinIgnore()
{
  cout << "Quel est votre nom ?" << endl;
  string nomUtilisateur2 = "Dans nom";
  getline(cin, nomUtilisateur2);

  double piUtilisateur = -1;
  cout << "Combien vaut Pi ?" << endl;
  cin >> piUtilisateur;
  cin.ignore();

  cout << "Vous vous apppelez " << nomUtilisateur2 << " et vous pensez que Pi vaut "
  << piUtilisateur << "." << endl;
}

void condition()
{
  int nbEnfants = 0;
  cout << "Combien avez vous d'enfants ?" << endl;
  cin >> nbEnfants;

  if(nbEnfants > 0)
  {
    cout << "Bravo, vous avez des enfants." << endl;
  }
  else
  {
    cout << "Rip, vous n'en avez pas encore." << endl;
  }
}

void condition2()
{
  int nbEnfants = 0;
  cout << "Combien avez vous d'enfants ?" << endl;
  cin >> nbEnfants;

  if(nbEnfants == 0)
  {
    cout << "Eh bien , vous n'avez toujours pas d'enfants ?" << endl;
  }
  else if(nbEnfants < 4)
  {
    cout << "Alors, c'est pour quand le " << ++nbEnfants << "ième" << endl;
  }
  else
  {
    cout << "Bon , il faudrais penser à s'arreter maintenant." << endl;
  }
}

void boolean()
{
    bool adult = true;
    int nbEnfants = 2;
    if(adult && nbEnfants >= 1)
    {
    cout << "Tu est un daron." << endl;
    }
}

void boucle()
{
  int nbEnfants = -1;

  while(nbEnfants < 0)
  {
    cout << "Combien d'enfants avez vous ?" << endl;
    cin >> nbEnfants;
  }

  cout << "Merci de m'avoir indiqué le vrai nombre d'enfant." << endl;

}

void forTest()
{
  for(int i = 0; i <= 20; i++)
  {
     cout << i << endl;
  }
}

int nombreDeSecondes(int h, int m, int s)
{
  int res = 0;
  res += h * 60 * 60;
  res += m * 60;
  res += s;
  return res;
}

void afficheSecondes()
{
  cout << "Combien d'heures voulez vous découpez en secondes ?" << endl;
  int h = 0, s = 0;
  cin >> h;
  s = nombreDeSecondes(h);
  cout << h << " h = " << s << " s" << endl;
}

void testSmallFunction()
{
  //helloWorld();
  //reference();
  //askUser();
  //getlineAndCinIgnore();
  //condition();
  //condition2();
  //boolean();
  //boucle();
  //forTest();
  afficheSecondes();
}
