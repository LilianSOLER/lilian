typedef struct Element Element;
struct Element
{
    int number;
    Element *next;
};

typedef struct List List;
struct List
{
    Element *first;
    int size;
};

Element *createElement(int number);
Element *createElementComplete(int number, Element *next);
List *initialisationList();
void insertionElement(List *list, int new_number);
void suppressionElement(List *list);
void afficherList(List *list);
int sizeList(List *list);
// void insertionIndexList(List *list, Element *elmt, int new_number);
// void suppressionIndexList(List *list, Element *elmt);
void suppressionList(List *list);
void testList();
