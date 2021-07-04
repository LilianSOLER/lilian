function send() {
    var request = new XMLHttpRequest();
  
    request.onreadystatechange = function() {
      if(this.readyState == XMLHttpRequest.DONE && this.status == 200) {
        var response = JSON.parse(this.responseText);
        document.getElementById('result').innerHTML = "<p>"+response.postData.text+"</p>";
      }
    }
  
    request.open('POST', 'https://mockbin.com/request');
    request.setRequestHeader("Content-Type", "application/json");
    request.send(JSON.stringify(document.getElementById("value").value));
  }
  
  document.forms["form"].addEventListener('submit', function(e){
    send();
    e.preventDefault();
  });