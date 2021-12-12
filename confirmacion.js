function confirmacion(e){
    if(confirm("¿Esta seguro que decea Eliminar este registro?")){
        return true;
    } else {
         e.preventDefault();
    }
}
let clic = document.querySelectorAll(".eliminar");
for( var i=0; i<clic.length; i++){
    clic[i].addEventListener('click', confirmacion);
}