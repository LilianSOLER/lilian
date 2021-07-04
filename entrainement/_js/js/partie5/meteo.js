function askWeather(){
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
    if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
       var response = JSON.parse(this.responseText);
       const res_weather = document.querySelector('#weather-result');
       const res_temperature = document.querySelector('#temperature-result');
       res_weather.textContent = `${response.current_condition.condition}`
       res_temperature.innerHTML = `Température : ${response.current_condition.tmp} °C`;
       }
    };
    request.open("GET", "https://www.prevision-meteo.ch/services/json/antibes");
    request.send();
    };
    
    let bouton = document.querySelector('#ask-weather');
    bouton.addEventListener('click', function(event){
      askWeather();
    });