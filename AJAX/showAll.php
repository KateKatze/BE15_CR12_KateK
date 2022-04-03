<?php
include("../components/head.php");
?>

<body>
    <div class="container mt-5 mb-5">
    <h1>Printed with AJAX</h1>
    <button class="btn btn-success mt-3 mb-3" id="button">Show All</button>
    <div id="printajax"></div>
    <script>
     
       document.getElementById("button").addEventListener("click", getOffers, false); //create an eventlistener to call getUsers() function when button clicked

       function getOffers() {
           const request = new XMLHttpRequest(); //create new request
           request.open("GET", "offers.php", true); //set request as a GET method connecting to users.php
           request.onload = function () {
               if (this.status == 200) {
                   let showAll = JSON.parse(this.responseText); //data received are turned to objects
                   console.log(showAll) //see the array of objects in your console
                   let output = ''; //create container variable
                   // users.forEach(user => {
                   for (let i in showAll) {
                       output += `
                       <ul>
                       <li>Location name: ${showAll[i].locname} </li>
                       <li>Image link: ${showAll[i].img} </li>
                       <li>Price: ${showAll[i].price} </li>
                       <li>Description: ${showAll[i].description} </li>
                       <li>Longitude: ${showAll[i].longitude} </li>
                       <li>Latitude: ${showAll[i].latitude} </li>
                       </ul>
                       `; //loop through each object and display their properties
                   }
                   document.getElementById('printajax').innerHTML = output; //output results in div#users
                   // });
               }
           }
           request.send(); //send request
       }
   </script>
    </div>
</body>
</html>