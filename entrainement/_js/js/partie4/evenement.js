let eltParent = document.getElementById('parent');
let eltChild = document.getElementById('child');
 
let parentScore = 0;
let childScore = 0;
 
eltParent.addEventListener('click', function(event){
  parentScore+=1;
  document.getElementById('parent-count').innerHTML = parentScore;
});
eltChild.addEventListener('click', function(event){
  event.preventDefault();
  event.stopPropagation();
  childScore+=1;
  document.getElementById('child-count').innerHTML = childScore;
});