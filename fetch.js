const formulario = document.getElementById("formulario");
const resultadoTotal=document.getElementById("resultadoTotal");
const lista=document.getElementById("listaingreso");



 
const listaProducto=()=>{

    fetch('listaingreso.php',{
        method:'POST'
    })
    .then(res=>res.text())
    .then(res=>{
        
        lista.innerHTML=res;
    })
}



formulario.addEventListener("submit", (e)=>{
     e.preventDefault();
    console.log('me diste click')
   
    const datos= new FormData(formulario);
    console.log(datos)

    fetch('datosingreso.php',{
        method: 'POST',
        body: datos
    })
    .then( res=> res.json())
    .then(data=>{
        console.log(data)
        if(data==='error'){
            
            resultadoTotal.innerHTML=`
            <div class="alert alert-dange  " role="alert" >
             NO SE PUDO REGISTRAR 
            </div>
            
            `
        }
        if(data==='ok'){
            
            
                 resultadoTotal.innerHTML=`
            <div class="alert alert-primary  " role="alert" >
             EXITO EN EL REGISTRO
            </div>
            `
            
               
           
            
            formulario.reset();
            
           
            listaProducto();
              
           
           
        }
        
           
    })
})

listaProducto();

