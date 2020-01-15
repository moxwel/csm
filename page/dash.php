<?php
session_start();
require "../include/db.php";
require "./tools/verify.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - TuCSM</title>

    <style>


                /* Remove margins and padding from the list */
                ul {
                    margin: 0;
                    padding: 0;
                }

                /* Style the list items */
                ul li {
                    cursor: pointer;
                    position: relative;
                    padding: 12px 8px 12px 40px;
                    list-style-type: none;
                    background: #eee;
                    font-size: 18px;
                    transition: 0.2s;

                    /* make the list items unselectable */
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                }
                /*scroll bar*/
                .my-custom-scrollbar {
                    position: relative;
                    height: 200px;
                    overflow: auto;
                    }
                    .table-wrapper-scroll-y {
                    display: block;
                    }
                /* Set all odd list items to a different color (zebra-stripes) */
                ul li:nth-child(odd) {
                    background: #ffffff;
                }

                /* Darker background-color on hover */
                ul li:hover {
                    background: #ffffff;
                }

                /* When clicked on, add a background color and strike out text */
                ul li.checked {
                    background: #888;
                    color: #ffffff;
                    text-decoration: line-through;
                }

                /* Add a "checked" mark when clicked on */
                ul li.checked::before {
                    content: '';
                    position: absolute;
                    border-color: #ffffff;
                    border-style: solid;
                    border-width: 0 2px 2px 0;
                    top: 10px;
                    left: 16px;
                    transform: rotate(45deg);
                    height: 15px;
                    width: 7px;
                }

                /* Style the close button */
                .close {
                    position: absolute;
                    right: 0;
                    top: 0;
                    padding: 12px 16px 12px 16px;
                }

                .close:hover {
                    background-color: #003cff;
                    color: #ffffff;
                }

                /* Style the header */
                .header {
                    background-color: #003cff;
                    padding: 30px 40px;
                    color: #ffffff;
                    text-align: center;
                }

                /* Clear floats after the header */
                .header:after {
                    content: "";
                    display: table;
                    clear: both;
                }

                /* Style the input */
                input {
                    margin: 0;
                    border: none;
                    border-radius: 0;
                    width: 75%;
                    padding: 10px;
                    float: left;
                    font-size: 16px;
                }

                .addBtn:hover {
                    background-color: #bbb;
                }
    </style>
    <!-- Bootstrap 4.4.1 CDN -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
    <!-- Material Design Icons CDN -->
    <link rel='stylesheet' href='https://cdn.materialdesignicons.com/4.5.95/css/materialdesignicons.min.css'>

</head>
<body>

<?php require "../include/navbar.php" ?>

<div class = "container">
    <div class="box">
    <div id="myDIV" class="header">
     <h2 style="margin:5px">Cosas que hacer</h2>
     <form class="form-inline" method="get">
      <input type="text" class="form-control mb-3" placeholder="Escribe aquí..." required>
      <button onclick="newElement()" class="btn btn-primary ml-4" ><span class="mdi mdi-arrow-down-bold-box-outline"></span> Agregar</button>
    </div>
     <div class="table-wrapper-scroll-y my-custom-scrollbar">
     <ul id="myUL">
     <li>Ser mejor persona</li>
     <li class="checked">Llegar a challenger en el paro</li>
     <li>Dejar de jugar un rato</li>
     <li>Hacer la cama</li>
     <li>Hacer algo productivo con mi vida</li>
     <li>Dormir 10 minutos</li>
     </ul>
    </div>
    </div>

</div>

<script>
    // Create a "close" button and append it to each list item
    var myNodelist = document.getElementsByTagName("LI");
    var i;
    for (i = 0; i < myNodelist.length; i++) {
    var span = document.createElement("SPAN");
    var txt = document.createTextNode("\u00D7");
    span.className = "close";
    span.appendChild(txt);
    myNodelist[i].appendChild(span);
    }

    // Click on a close button to hide the current list item
    var close = document.getElementsByClassName("close");
    var i;
    for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
        var div = this.parentElement;
        div.style.display = "none";
    }
    }

    // Add a "checked" symbol when clicking on a list item
    var list = document.querySelector('ul');
    list.addEventListener('click', function(ev) {
    if (ev.target.tagName === 'LI') {
        ev.target.classList.toggle('checked');
    }
    }, false);

    // Create a new list item when clicking on the "Add" button
    function newElement() {
    var li = document.createElement("li");
    var inputValue = document.getElementById("myInput").value;
    var t = document.createTextNode(inputValue);
    li.appendChild(t);
    if (inputValue === '') {
        alert("You must write something!");
    } else {
        document.getElementById("myUL").appendChild(li);
    }
    document.getElementById("myInput").value = "";

    var span = document.createElement("SPAN");
    var txt = document.createTextNode("\u00D7");
    span.className = "close";
    span.appendChild(txt);
    li.appendChild(span);

    for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
        var div = this.parentElement;
        div.style.display = "none";
        }
    }
    }
</script>

<!-- Bootstrap 4.4.1 Scripts -->
<script src='https://code.jquery.com/jquery-3.4.1.slim.min.js' integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>

</body>
</html>
