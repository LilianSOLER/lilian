// Modify the code here
// ======================

const calculateAverageRating = (ratings) => {

    if(ratings.length === 0) {
      return 0;
    }
    
    let sum = 0;
    for (let rating of ratings) {
      sum += rating;
    }
    
    return sum / ratings.length;
  
  }
  
  // ======================
  
  const tauRatings = [5, 4, 5, 5, 1, 2];
  const colinRatings = [5, 5, 5, 4, 5];
  
  const tauAverage = calculateAverageRating(tauRatings);
  const colinAverage = calculateAverageRating(colinRatings);
  
  if (tauAverage && colinAverage) {
    document.querySelector('#tau-score').innerText = tauAverage.toFixed(1) + ' stars';
    document.querySelector('#colin-score').innerText = colinAverage.toFixed(1) + ' stars';
    document.querySelector('#clara-score').innerText = `${calculateAverageRating([]) === 0 ? 'No ratings' : calculateAverageRating([]) + ' stars'}`
  }