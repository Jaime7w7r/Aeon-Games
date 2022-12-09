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

function eliminar(id){
    var indice = parseInt(id);
    console.log(array[indice]);
    producto = array[indice];
    var xmlhttp = new XMLHttpRequest();
   xmlhttp.open("GET", "eliminarcarrito.php?e=" + producto, true);
   xmlhttp.send();
}

