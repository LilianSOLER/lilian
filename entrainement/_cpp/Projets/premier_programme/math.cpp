#include <iostream>
#include <cmath>
#include "math.h"

using namespace std;

int ajouterDeux(int &a)
{
  a+=2;
  return a;
}

void testAjouterDeux()
{
cout << "Quel nombre voulez vous incrémentez deux fois ?" << endl;

int a = 0, prevA = 0;
cin >> a;
prevA = a;
ajouterDeux(a);

cout << prevA << "++++ = " << a << endl;
}

void premierExo()
{
  cout << "Un premier exercice" << endl
  << "Bonjour" << endl;

  int a = 0, b = 0, resAdd = 0;
  double resSqrt = 0;

  cout << "Donner un premier nombre : " << endl;
  cin >> a;
  cout << "Donner un second nombre : " << endl;
  cin >> b;

  resAdd = a + b;
  resSqrt = sqrt(a);

  cout << a << " + " << b << " = " << resAdd << endl;
  cout << "sqrt(" << a << ") = " << resSqrt << endl;
}

void testMathFunction()
{
  testAjouterDeux();
  premierExo();
}
