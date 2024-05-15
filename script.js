function hilang(){
    let tampilanHilang = document.querySelectorAll(".none");
    for (let i = 0; i < tampilanHilang.length; i++){
        tampilanHilang[i].style.display = "none";
    }
}