#include <stdio.h>
#include <stdlib.h>
#include "list.h"

Element *createElement(int number)
{
  Element *elmt = malloc(sizeof(Element));
  if(elmt == NULL){exit(1);}
  elmt->number = number;
}

Element *createElementComplete(int number, Element *next)
{
  Element *elmt = malloc(sizeof(Element));
  if(elmt == NULL){exit(1);}
  elmt->number = number;
  elmt->next = next; 
}

List *initialisationList()
{
  List *list = malloc(sizeof(List));
  Element *element = createElementComplete(0, NULL);

  if(list == NULL){exit(1);}

  list->first = element;
  list->size = 0;

  return list;
}

void insertionElement(List *list, int new_number)
{  
  if(list == NULL){exit(1);}
  Element *new_element = createElementComplete(new_number, list->first);
  list->first = new_element;
  list->size++;
}

void suppressionElement(List *list){

  if(list == NULL){exit(1);}

  if(list->first == NULL){return;}

  Element *new_first = list->first->next;
  free(list->first);
  list->first = new_first;
  list->size--;
}

void afficherList(List *list)
{
  if(list == NULL){printf("NULL\n");return;}

  Element *elmt = list->first;

  while(elmt != NULL)
  {
    printf("%d -> ",elmt->number);
    elmt = elmt->next;
  }

  printf("NULL\n");
}

int sizeList(List *list)
{
  return list->size;
}

// void insertionIndexList(List *list, Element *elmt, int new_number)
// {
//   if(list == NULL){exit(1);}

//   Element *currElmt = list->first;
//   Element *prevElmt = NULL;

//   while(currElmt != NULL)
//   {
//     if(currElmt == elmt){break;}
//     prevElmt = currElmt;
//     currElmt = currElmt->next;
//   }

//   if(prevElmt == NULL)
//   {
//     insertionElement(list, new_number);
//   }

//   if(currElmt == NULL)
//   {
//     exit(1);
//   }
//   else
//   {
//     Element *new_elmt = createElementComplete(new_number, currElmt);
//     prevElmt->next = new_elmt;
//     list->size++;
//   }
// }

void suppressionList(List *list){
  int size = sizeList(list);
  Element *elmt_array[size];

  Element *elmt = list->first;
  
  int i = 0;
  while(elmt != NULL)
  {
    elmt_array[i] = elmt;
    elmt = elmt->next;
    i++;
  }

  for(int i = 0; i < size; i++)
  {
    free(elmt_array[i]);
  }
  free(list);
}

void testList()
{
   List *list = initialisationList();

  insertionElement(list, 4);
  afficherList(list);
  printf("Size of List : %d\n", sizeList(list));
  insertionElement(list, 8);
  afficherList(list);
  printf("Size of List : %d\n", sizeList(list));
  insertionElement(list, 15);
  afficherList(list);
  printf("Size of List : %d\n", sizeList(list));
  suppressionElement(list);
  afficherList(list);
  printf("Size of List : %d\n", sizeList(list));
  suppressionList(list);
  afficherList(list);
}


