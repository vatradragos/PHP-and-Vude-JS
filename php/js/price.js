var btn_1 = document.getElementById("price-col-1");
var btn_2 = document.getElementById("price-col-2");
var btn_3 = document.getElementById("price-col-3");
var message = document.getElementById("message");

btn_1.onclick = function() {
    btn_1.innerHTML = "Thank You";
    btn_1.style.transform = "scale(1.05)";
    btn_1.style.color = "rgb(86, 44, 184)";
    btn_1.style.backgroundColor = "transparent";
    btn_2.innerHTML = "8 Euro for 4 Mounths";
    btn_2.style.transform = "scale(1)";
    btn_2.style.color = "#000000";
    btn_2.style.backgroundColor = "rgb(86, 44, 184)";
    btn_3.innerHTML = "12 Euro for 6 Mounths";
    btn_3.style.transform = "scale(1)";
    btn_3.style.color = "#000000";
    btn_3.style.backgroundColor = "rgb(86, 44, 184)";
    message.style.display = "inline";
};

btn_2.onclick = function() {
    btn_2.innerHTML = "Thank You";
    btn_2.style.transform = "scale(1.05)";
    btn_2.style.color = "rgb(86, 44, 184)";
    btn_2.style.backgroundColor = "transparent";
    btn_1.innerHTML = "5 Euro for 2 Mounths";
    btn_1.style.transform = "scale(1)";
    btn_1.style.color = "#000000";
    btn_1.style.backgroundColor = "rgb(86, 44, 184)";
    btn_3.innerHTML = "12 Euro for 6 Mounths";
    btn_3.style.transform = "scale(1)";
    btn_3.style.color = "#000000";
    btn_3.style.backgroundColor = "rgb(86, 44, 184)";
    message.style.display = "inline";
};

btn_3.onclick = function() {
    btn_3.innerHTML = "Thank You";
    btn_3.style.transform = "scale(1.05)";
    btn_3.style.color = "rgb(86, 44, 184)";
    btn_3.style.backgroundColor = "transparent";
    btn_1.innerHTML = "5 Euro for 2 Mounths";
    btn_1.style.transform = "scale(1)";
    btn_1.style.color = "#000000";
    btn_1.style.backgroundColor = "rgb(86, 44, 184)";
    btn_2.innerHTML = "8 Euro for 4 Mounths";
    btn_2.style.transform = "scale(1)";
    btn_2.style.color = "#000000";
    btn_2.style.backgroundColor = "rgb(86, 44, 184)";
    message.style.display = "inline";
};