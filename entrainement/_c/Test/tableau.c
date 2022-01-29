#include <stdio.h>
#include <stdlib.h>
#include "smallFunction.h"
#include "tableau.h"


void afficheTableauUtil(int *tableau, int tailleTableau)
{
  int i;
  for (i = 0; i < tailleTableau; i++)
  {
    printf("%d\n", tableau[i]);
  }
}
void initialiseTableau()
{
  createSpace(2);
  int tableau[4], i = 0;

  // Initialisation du tableau
  for (i = 0; i < 4; i++)
  {
    tableau[i] = 0;
  }
  // Affichage de ses valeurs pour vérifier
  afficheTableauUtil(tableau, 4);
}
void initialiseTableauV2()
{
  createSpace(2);
  int tableau[4] = {10, 23}, i = 0; // Valeurs insérées : 10, 23, 0, 0
  afficheTableauUtil(tableau, 4);
}

int sommeTableau(int *tableau, int tailleTableau)
{
  int somme = 0;
  for (int i = 0; i < tailleTableau; i++)
  {
    somme += tableau[i];
  }
  return somme;
}


double moyenneTableau(int *tableau, int tailleTableau)
{
  int somme = sommeTableau(tableau, tailleTableau);
  int moyenne = somme / tailleTableau;
  return moyenne;
}


void copieTableau(int *tableau1, int *tableau2, int tailleTableau)
{
  for (int i = 0; i < tailleTableau; i++)
  {
    tableau2[i] = tableau1[i];
  }
}

int indexMax(int *tableau, int tailleTableau)
{
  int index = 0;
  int max = tableau[0];
  for (int i = 1; i < tailleTableau; i++)
  {
    if (tableau[i] > max)
    {
      max = tableau[i];
      index = i;
    }
  }
  return index;
}

int maxTableau(int *tableau, int tailleTableau)
{
  int max = tableau[0];
  for (int i = 1; i < tailleTableau; i++)
  {
    if (tableau[i] > max)
    {
      max = tableau[i];
    }
  }
  return max;
}

void triTableau(int *tableau, int tailleTableau)
{
  int temp;
  for (int i = 0; i < tailleTableau; i++)
  {
    for (int j = i + 1; j < tailleTableau; j++)
    {
      if (tableau[i] > tableau[j])
      {
        temp = tableau[i];
        tableau[i] = tableau[j];
        tableau[j] = temp;
      }
    }
  }
}

void testAllTableauFunctions()
{
  createSpace(2);
  int tableau[4] = {10, 23, 0, 0}; // Valeurs insérées : 10, 23, 0, 0
  printf("Taille du tableau : %ld\n", sizeof(tableau));
  printf("\n");
  printf("Affichage du tableau :\n");
  afficheTableauUtil(tableau, 4);
  printf("\n");
  printf("Somme des éléments du tableau : %d\n", sommeTableau(tableau, 4));
  printf("\n");
  printf("Moyenne des éléments du tableau : %f\n", moyenneTableau(tableau, 4));
  printf("\n");
  printf("Index de l'élément le plus grand : %d\n", indexMax(tableau, 4));
  printf("\n");
  printf("Maximum du tableau : %d\n", maxTableau(tableau, 4));
  printf("\n");
  printf("Trier le tableau\n");
  triTableau(tableau, 4);
  printf("\n");
  printf("Affichage du tableau trié :\n");
  afficheTableauUtil(tableau, 4);
  printf("\n");
  printf("Copie du tableau :\n");
  copieTableau(tableau, tableau, 4);
  printf("\n");
  printf("Affichage du tableau copié :\n");
  afficheTableauUtil(tableau, 4);
  printf("\n");
  printf("Initialisation du tableau :\n");
  initialiseTableau();
  printf("\n");
  printf("Initialisation du tableau v2 :\n");
  initialiseTableauV2();
  printf("\n");
}