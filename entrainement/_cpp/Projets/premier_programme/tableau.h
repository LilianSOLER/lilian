#ifndef TABLEAU_H_INCLUDED
#define TABLEAU_H_INCLUDED

#include <vector>

void staticTable();
double moyenneTable(int tab[], int sizeTab);

void dynamicTable();
double moyenneDynamicTable(std::vector<int> notes);

void matrice();
void afficheMatrice(int mat[][2],int ligne, int colonne);
//void multMatrice(int matA[][2], int matB[][2], int &matRes[][2],int ligne, int colonne);

void testTableau();

#endif // TABLEAU_H_INCLUDED
