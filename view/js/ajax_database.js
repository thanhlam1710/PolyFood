function loadDoc(url, id, str) {
    var xhttp;
    if (str == "") {
        document.getElementById("district_store").innerHTML = "";
        return;
    }
    xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById(id).innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", url+str, true);
    xhttp.send();
}
function showDistrict(str) {
    var xhttp;
    if (str == "") {
      document.getElementById("district_store").innerHTML = "";
      return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
      document.getElementById("district_store").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "http://localhost/project1/registerStore/loadDistrict/"+str, true);
    xhttp.send();
}
function showWard(str) {
    var xhttp;
    if (str == "") {
      document.getElementById("ward_store").innerHTML = "";
      return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ward_store").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "http://localhost/project1/registerStore/loadWard/"+str, true);
    xhttp.send();
}
function deleteCart() {
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("ordering-list").innerHTML = this.responseText;
    document.getElementById("list-orders").innerHTML = this.responseText;
    }
  };

  xhttp.open("GET", "http://localhost/project1/product/deleteCart", true);
  xhttp.send();
}