var array=[];

function agregar(id){
    var indice = parseInt(id);
    console.log(array[indice]);
    subir(array[indice]);

}

function subir(producto){
     var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "addcarrito.php?q=" + producto, true);
    xmlhttp.send();
}