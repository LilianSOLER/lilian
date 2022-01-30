#include <iostream>
#include <string>
#include <vector>
#include "tableau.h"

using namespace std;

void staticTable()
{
  int n = 0;
  cout << "Combien avez vous de score ?" << endl;
  cin >> n;

  int const nombreScore = n;

  int meilleurScore[nombreScore];

  for(int i = 0; i < nombreScore; i++)
  {
    cout << "Quel est le " << i + 1  << "ième meilleur score ?" << endl;
    cin >> meilleurScore[i];
  }

  for(int i = 0; i < nombreScore; i++)
  {
    cout << i + 1 << " - " << meilleurScore[i] << endl;
  }

  cout << "Moyenne : " << moyenneTable(meilleurScore, nombreScore) << endl;
}

double moyenneTable(int tab[], int sizeTab)
{
  double moy = 0;
  for(int i = 0; i < sizeTab; i++)
  {
    moy += tab[i];
  }
  return moy / sizeTab;
}

void dynamicTable()
{
  vector<int> notes;
  int newNotes = 0;

  while(true)
  {
    cout << "Ajoutez vôtre nouvelle note (ou -1 pour arreter)" << endl;
    cin >> newNotes;
    if(newNotes == -1){break;}
    notes.push_back(newNotes);
  }

  for(int i = 0; i < notes.size(); i++)
  {
    cout << i + 1 << " - " << notes[i] << endl;
  }

  cout << "Moyenne : " << moyenneDynamicTable(notes) << endl;
}

double moyenneDynamicTable(vector<int> notes)
{
  double moy = 0;
  int tabSize = notes.size();
  for(int i = 0; i < tabSize ; i ++)
  {
    moy += notes[i];
  }
  return moy / tabSize;
}

void matrice()
{
  int A[2][2];
  int B[2][2];

  for(int i = 0; i < 2; i++)
  {
    for(int j = 0; j < 2; j++)
    {
      cout << "Coeff " << i + 1 << "ième ligne, " << j + 1 << "ième colonnes de A" << endl;
      cin >> A[i][j];
      cout << "Coeff " << i + 1 << "ième ligne, " << j + 1 << "ième colonnes de B" << endl;
      cin >> B[i][j];
    }
  }

  cout << "A :" << endl;
  afficheMatrice(A,2,2);
  cout << "B :" << endl;
  afficheMatrice(B,2,2);
  /*
  int C[2][2];
  multMatrice(A,B,&C);
  cout << "C : A.B" << endl;
  afficheMatrice(C,2,2);
  */
}

void afficheMatrice(int mat[][2],int ligne, int colonne)
{
  for(int i = 0; i < ligne; i++)
  {
    for(int j = 0; j < colonne; j++)
    {
      cout << mat[i][j] << " ";
    }
    cout << endl;
  }
}

/*
void multMatrice(int matA[][2], int matB[][2], int &matRes[][2])
{
  for(int i = 0; i < ligne; i++)
  {
    for(int j = 0; j < colonne; j++)
    {
      matRes[i][j] = 0;
      for(k = 0; k < colonne; k++)
      {
        matRes += &matA[i][k] * &matB[k][j];
      }
    }
  }
}
*/

void testTableau()
{
  //staticTable();
  //dynamicTable();
  matrice();
}
