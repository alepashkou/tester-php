const hide = (id) =>{
    if(id <= 4){
        document.getElementById(id).style.display = "none";
        document.getElementById(id + 1).style.display = "inline-block";
    }else {
        document.getElementById(id).style.display = "none";
        document.getElementById("Submit").style.display = "inline-block";
    }


}