// Create a class here
// =====================================

class Episode {
    constructor(title, duration, hasBeenWatched) {
      this.title = title;
      this.duration = duration;
      this.hasBeenWatched = hasBeenWatched;
    }
  }
  
  let firstEpisode = new Episode('Dark Beginnings', 45, true);
  let secondEpisode = new Episode('The Mystery Continues', 45, false);
  let thirdEpisode = new Episode('The Unexpected Climax', 60, false);
  
  // =====================================
  
  document.querySelector('#first-episode-info').innerText = `Episode: ${firstEpisode.title}
  Duration: ${firstEpisode.duration} min
  ${firstEpisode.hasBeenWatched ? 'Already watched' : 'Not yet watched'}`;
  
  document.querySelector('#second-episode-info').innerText = `Episode: ${secondEpisode.title}
  Duration: ${secondEpisode.duration} min
  ${secondEpisode.hasBeenWatched ? 'Already watched' : 'Not yet watched'}`;
  
  document.querySelector('#third-episode-info').innerText = `Episode: ${thirdEpisode.title}
  Duration: ${thirdEpisode.duration} min
  ${thirdEpisode.hasBeenWatched ? 'Already watched' : 'Not yet watched'}`;