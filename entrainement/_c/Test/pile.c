#include <stdlib.h>
#include "pile.h"
#include "list.c"

Pile *initialiserPile()
{
  Pile *pile = malloc(sizeof(Pile));
  Element *element = createElementComplete(0, NULL);

  if(pile == NULL){exit(1);}

  pile->first = element;

  return pile;
}

void empiler(Pile *pile, int new_number)
{
  if(pile == NULL){exit(1);}
  Element *new_elmt = createElementComplete(new_number, pile->first);
}

int depiler(Pile *pile)
{
  if(pile == NULL || pile->first == NULL){return -1;}
  
  Element *elmt_depiler = pile->first;
  int res = elmt_depiler->number;

  pile->first = elmt_depiler->next;  
  free(elmt_depiler);

  return res;
}

void afficherPile(Pile *pile)
{
  if(pile == NULL){exit(1);}
  
  Element *curr_elmt = pile->first;
  while(curr_elmt != NULL)
  {
    printf("%d\n", curr_elmt->number);
    curr_elmt = curr_elmt->next;
  }
  printf("\n");
}

void testPile()
{
  Pile *maPile = initialiserPile();

  empiler(maPile, 4);
  empiler(maPile, 8);
  printf("\nEtat de la pile :\n");
  afficherPile(maPile);
  empiler(maPile, 15);
  empiler(maPile, 16);
  printf("\nEtat de la pile :\n");
  afficherPile(maPile);
  empiler(maPile, 23);
  empiler(maPile, 42);
  printf("\nEtat de la pile :\n");
  afficherPile(maPile);
  printf("Je depile %d\n", depiler(maPile));
  printf("Je depile %d\n", depiler(maPile));
  printf("\nEtat de la pile :\n");
  afficherPile(maPile);
}