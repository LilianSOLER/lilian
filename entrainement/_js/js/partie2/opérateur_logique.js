class Episode {
    constructor(title, duration, minutesWatched) {
      this.title = title;
      this.duration = duration;
      // Add logic here
      // ======================
      
      if (minutesWatched === 0) {
        this.watchedText = 'Not yet watched';
        this.continueWatching = false;
      } else if (minutesWatched > 0 && minutesWatched < duration) {
        this.watchedText = 'Watching';
        this.continueWatching = true;
      } else if (minutesWatched === duration) {
        this.watchedText = 'Watched';
        this.continueWatching = false;
      }
      
      // ======================
    }
  }
  
  let firstEpisode = new Episode('Dark Beginnings', 45, 45);
  let secondEpisode = new Episode('The Mystery Continues', 45, 10);
  let thirdEpisode = new Episode('An Unexpected Climax', 60, 0);
  
  let episodes = [firstEpisode, secondEpisode, thirdEpisode];
  
  const body = document.querySelector('body');
  
  for(let i = 0; i < 12; i++) {
    let newDiv = document.createElement('div');
    newDiv.classList.add('series-frame');
    let newTitle = document.createElement('h2');
    newTitle.innerText = 'The Story of Tau';
    let newParagraph = document.createElement('p');
    newParagraph.innerText = `${episodes[i].title}
  ${episodes[i].duration} minutes
  ${episodes[i].watchedText}
  `;
    newDiv.append(newTitle);
    newDiv.append(newParagraph);
    if (episodes[i].continueWatching) {
      let newButton = document.createElement('button');
      newButton.innerText = 'Continue watching';
      newParagraph.append(newButton);
    }
    body.append(newDiv);
  }