async function getNumber1() {
    return 10;
  }
   
  /*Fonction asynchrone qui contient une valeur de 4*/
  async function getNumber2() {
    return 4;
  }
   
  /* Fonction compute() qui récupère les 2 fonction asynchrone getNumber1/2 avec await et qui renvoi la somme des 2 valeurs */
  async function compute() {
    const value1 = await getNumber1();
    const value2 = await getNumber2();
    return value1 + value2;
  }
   
  var promiseRes =
  compute().then(function(data) { // 'data' contient la valeur de retour de ta fonction 'compute'
     console.log(data);
     const result = document.getElementById('result');
     result.textContent = data;
  });
   
  /*On recupere l'emplacement ou afficher le resultat */
  const result = document.getElementById('result');
   
  /*On affiche la promise en HTML dans l'id result*/
  result.textContent = promiseRes;