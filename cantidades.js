const d = document;


const cantTotal= () =>{
   
    if (cant.length === 0){
        cant.style.color="red";
    }
}
 const cant = d.querySelectorAll(".cantidad");
for(var i=0;i<cant.length;i++ ){
    cant[i].addEventListener("click",cantTotal)
}
      

