document.getElementById("day").addEventListener("click", function(){
    document.body.style.background = "#111";
    document.body.style.color = "#fff";
    document.body.style.transition = "all 2s";
    document.getElementById("day").style.display = "none";
    document.getElementById("night").style.display = "inline";
});

document.getElementById("night").addEventListener("click", function(){
    document.body.style.background = "#fff";
    document.body.style.color = "#111";
    document.body.style.transition = "all 2s";
    document.getElementById("night").style.display = "none";
    document.getElementById("day").style.display = "inline";
});