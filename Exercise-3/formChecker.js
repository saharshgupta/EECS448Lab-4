function formCheck(){
    let user = document.getElementsByName("user")[0].value;
    let pass = document.getElementsByName("pass")[0].value;
    let qi1 = document.getElementsByName("QI1")[0].value;
    let qi2 = document.getElementsByName("QI2")[0].value;
    let qi3 = document.getElementsByName("QI3")[0].value;
    let so = document.getElementsByName("shipopt");
    let se = document.getElementById("serror");
    let fe = document.getElementById("ferror");
    se.innerHTML = "";
    fe.innerHTML = "";
    if(qi1=="" || qi2 =="" || qi3=="" || user == "" || pass == ""){
        fe.innerHTML = "Error: Fields can not be left blank. Quantity must be >= 0";
        event.preventDefault();
    }
    if(!so[0].checked && !so[1].checked && !so[2].checked){
        se.innerHTML = "Error: Must pick a shipping option";
        event.preventDefault();
    }
    //alert(qi1+qi2+qi3);
}