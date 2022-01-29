#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include "smallFunction.c"
#include "tableau.c"
#include "list.c"



int main(int argc, char *argv[])
{
  testAllSmallFunction();
  testAllTableauFunctions();
  return 0;
}