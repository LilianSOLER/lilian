typedef struct Pile Pile;
struct Pile
{
    Element *first;
};

Pile *initialiserPile();
void empiler(Pile *pile, int new_number);
int depiler(Pile *pile);//return the number at the top of the pile
void afficherPile(Pile *pile);
void testPile();