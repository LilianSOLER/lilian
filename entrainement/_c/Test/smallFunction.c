#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include "smallFunction.h"

void createSpace(int space)
{
  int i;
  for (i = 0; i < space; i++)
  {
    printf("\n");
  }
}


void sayHello()
{
  createSpace(2);
  printf("Hello World\n");
}

void disNiveau()
{
  createSpace(2);
  int nombreDeVies = 5; // Au départ, le joueur a 5 vies
  printf("Vous avez %d vies\n", nombreDeVies);
  printf("**** B A M ****\n"); // Là il se prend un grand coup sur la tête
  nombreDeVies = 4;            // Il vient de perdre une vie !
  printf("Ah desole, il ne vous reste plus que %d vies maintenant !\n", nombreDeVies);
  int niveau = 1;
  printf("Vous avez %d vies et vous etes au niveau n° %d", nombreDeVies, niveau);
}

void disAge()
{
  createSpace(2);
  int age = 0;
  printf("Quel age avez-vous ? ");
  scanf("%d", &age);
  printf("ah ! Vous avez donc %d ans!", age);
}

void addTwoNumbers()
{
  createSpace(2);
  int a = 0;
  int b = 0;
  printf("Entrez un nombre : ");
  scanf("%d", &a);
  printf("Entrez un autre nombre : ");
  scanf("%d", &b);
  int sum = a + b;
  printf("La somme des deux nombres est : %d\n", sum);
}

void divideTwoNumbers()
{
  createSpace(2);
  int a = 0;
  int b = 0;
  printf("Entrez un nombre : ");
  scanf("%d", &a);
  printf("Entrez un autre nombre : ");
  scanf("%d", &b);
  int quotient = a / b;
  int remainder = a % b;
  printf("La division euclidienne des deux nombres est : %d et le reste est %d\n", quotient, remainder);
}

void afficheNombre(int nombre)
{
  printf("%d\n", nombre);
}

void incrementation()
{
  createSpace(2);
  int nombre = 2;
  afficheNombre(nombre);
  nombre += 4; // nombre vaut 6...
  afficheNombre(nombre);
  nombre -= 3; // ... nombre vaut maintenant 3
  afficheNombre(nombre);
  nombre *= 5; // ... nombre vaut 15
  afficheNombre(nombre);
  nombre /= 3; // ... nombre vaut 5
  afficheNombre(nombre);
  nombre %= 3; // ... nombre vaut 2 (car 5 = 1 * 3 + 2)
  afficheNombre(nombre);
}

//ask a number and display his absolute value
void absoluteValue()
{
  createSpace(2);
  int nombre = 0;
  printf("Entrez un nombre : ");
  scanf("%d", &nombre);
  int absoluteValue = abs(nombre);
  printf("La valeur absolue de ce nombre est : %d\n", absoluteValue);
}

void verifierAge()
{
  createSpace(2);
  int age = 0;
  printf("Quel âge avez vous ? ");
  scanf("%d", &age);
  if (age >= 18)
  {
    printf("Vous êtes majeur !");
  }
  else if (age > 10)
  {
    printf("(\"Bon t'es pas trop jeune quand meme...");
  }
  else
  {
    printf("Aga gaa aga gaaa"); // Langage bébé, vous pouvez pas comprendre
  }
}

void verifierBanque()
{
  createSpace(2);
  int age = 0, argent = 1000;
  printf("Quel âge avez vous ? ");
  scanf("%d", &age);
  printf("Quel somme d'argent possédez vous ? ");
  scanf("%d", &argent);
  if (age > 30 || argent > 100000)
  {
    printf("Bienvenue chez PicsouBanque !");
  }
  else
  {
    printf("Hors de ma vue, miserable !");
  }
}

//ask the age of a person and verify if it is a child or not
void verifierAgePersonne()
{
  createSpace(2);
  int age = 0;
  printf("Quel âge avez vous ? ");
  scanf("%d", &age);
  if (age >= 18)
  {
    printf("Vous êtes majeur !");
  }
  else if (age > 10)
  {
    printf("(\"Bon t'es pas trop jeune quand meme...");
  }
  else
  {
    printf("Aga gaa aga gaaa"); // Langage bébé, vous pouvez pas comprendre
  }
}

void verifierSwitch()
{
  createSpace(2);
  int age = 0;
  printf("Quel âge avez vous ? ");
  scanf("%d", &age);
  switch (age)
  {
  case 2:
    printf("Salut bebe !");
    break;
  case 6:
    printf("Salut gamin !");
    break;
  case 12:
    printf("Salut jeune !");
    break;
  case 16:
    printf("Salut ado !");
    break;
  case 18:
    printf("Salut adulte !");
    break;
  case 68:
    printf("Salut papy !");
    break;
  default:
    printf("Je n'ai aucune phrase de prete pour ton age  ");
    break;
  }
}

void menu()
{
  createSpace(2);
  int choixMenu;

  printf("=== Menu ===\n\n");
  printf("1. Royal Cheese\n");
  printf("2. Mc Deluxe\n");
  printf("3. Mc Bacon\n");
  printf("4. Big Mac\n");
  printf("\nVotre choix ? ");
  scanf("%d", &choixMenu);

  printf("\n");

  switch (choixMenu)
  {
  case 1:
    printf("Vous avez choisi le Royal Cheese. Bon choix !");
    break;
  case 2:
    printf("Vous avez choisi le Mc Deluxe. Berk, trop de sauce...");
    break;
  case 3:
    printf("Vous avez choisi le Mc Bacon. Bon, ca passe encore ca ;o)");
    break;
  case 4:
    printf("Vous avez choisi le Big Mac. Vous devez avoir tres faim !");
    break;
  default:
    printf("Vous n'avez pas rentre un nombre correct. Vous ne mangerez rien du tout !");
    break;
  }
}

void conditionTernaire()
{
  createSpace(2);
  int age = 0, autorisation = 0;
  printf("Quel âge avez vous ? ");
  scanf("%d", &age);
  autorisation = (age >= 18) ? 1 : 0;
  printf("Autorisation vaut : %d\n", autorisation);
}

void testWhile()
{
  createSpace(2);
  int nombreEntre = 0;
  while (nombreEntre != 47)
  {
    printf("Tapez le nombre 47 ! ");
    scanf("%d", &nombreEntre);
  }
}

//repeat a string n times
void repeatString()
{
  createSpace(2);
  int nombreRepetitions = 0;
  printf("Tapez le nombre de repetitions : ");
  scanf("%d", &nombreRepetitions);
  printf("\n");
  char chaine[10];
  printf("Tapez la chaine : ");
  scanf("%s", chaine);
  for (int i = 0; i < nombreRepetitions; i++)
  {
    printf("%s", chaine);
  }
}

void testDoWhile()
{
  createSpace(2);
  int compteur = 0, repetition = 0;
  printf("Combien voulez vous répetez de fois ? ");
  scanf("%d", &repetition);
  do
  {
    printf("Salut les Zeros !\n");
    compteur++;
  } while (compteur < repetition);
}

void testFor()
{
  createSpace(2);
  int compteur;
  for (compteur = 0; compteur < 10; compteur++)
  {
    printf("Salut les Zeros !\n");
  }
}

void decoupeMinutes(int *pointeurHeures, int *pointeurMinutes)
{
  /* Attention à ne pas oublier de mettre une étoile devant le nom
    des pointeurs ! Comme ça, vous pouvez modifier la valeur des variables,
    et non leur adresse ! Vous ne voudriez pas diviser des adresses,
    n'est-ce pas ? ;o) */
  *pointeurHeures = *pointeurMinutes / 60;
  *pointeurMinutes = *pointeurMinutes % 60;
}

void afficheDecoupageMinutes()
{
  createSpace(2);
  int heures = 0, minutes = 0;
  printf("Combien de minutes voulez vous découpez ? ");
  scanf("%d", &minutes);

  // On envoie l'adresse de heures et minutes
  decoupeMinutes(&heures, &minutes);

  // Cette fois, les valeurs ont été modifiées !
  printf("%d heures et %d minutes", heures, minutes);
}

void testAllSmallFunction()
{
  createSpace(2);
  sayHello();
  disNiveau();
  disAge();
  addTwoNumbers();
  absoluteValue();
  divideTwoNumbers();
  incrementation();
  verifierAge();
  verifierBanque();
  verifierAgePersonne();
  verifierSwitch();
  menu();
  conditionTernaire();
  testWhile();
  repeatString();
  testDoWhile();
  testFor();
  afficheDecoupageMinutes();
}