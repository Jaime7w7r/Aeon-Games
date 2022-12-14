<?php
	require "./code128.php";
	$servidor='localhost';
$cuenta='root';
$password='';
$bd='tienda_prueba';
$conexion = new mysqli($servidor,$cuenta,$password,$bd);
	session_start();
	date_default_timezone_set('America/Mexico_City');
	$pdf = new PDF_Code128('P','mm','Letter');
	$pdf->SetMargins(17,17,17);
	$pdf->AddPage();

	# Logo de la empresa formato png #
	$pdf->Image('imagenes/logoI.png',165,12,35,35,'PNG');

	# Encabezado y datos de la empresa #
	$pdf->SetFont('Arial','B',16);
	$pdf->SetTextColor(32,100,210);
	$pdf->Cell(150,10,utf8_decode(strtoupper("Aeon Games")),0,0,'L');

	$pdf->Ln(9);

	$pdf->SetFont('Arial','',10);
	$pdf->SetTextColor(39,39,51);
	$pdf->Cell(150,9,utf8_decode("RFC: AEGA221211I97"),0,0,'L');

	$pdf->Ln(5);

	$pdf->Cell(150,9,utf8_decode("Avenida Universidad 940, Ciudad Universitaria,"),0,0,'L');
	$pdf->Ln(4);
	$pdf->Cell(150,9,utf8_decode("Universidad Autónoma de Aguascalientes, 20100 Aguascalientes, Ags."),0,0,'L');

	$pdf->Ln(5);

	$pdf->Cell(150,9,utf8_decode("Teléfono: 012456789"),0,0,'L');

	$pdf->Ln(5);

	$pdf->Cell(150,9,utf8_decode("Email: aeongames@gmail.com"),0,0,'L');

	$pdf->Ln(10);
	$fecha=date("d/m/y");
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(30,7,utf8_decode("Fecha de emisión:"),0,0);
	$pdf->SetTextColor(97,97,97);
	$pdf->Cell(116,7,utf8_decode(date("d/m/y", strtotime($fecha))." ".date('h:i:s')),0,0,'L');
	$pdf->SetFont('Arial','B',10);
	$pdf->SetTextColor(39,39,51);
	$pdf->Cell(35,7,utf8_decode(strtoupper("Factura Nro.")),0,0,'C');

	$pdf->Ln(7);

	

	$pdf->Ln(10);

	$pdf->SetFont('Arial','',10);
	$pdf->SetTextColor(39,39,51);
	$pdf->Cell(13,7,utf8_decode("Cliente:"),0,0);
	$pdf->SetTextColor(97,97,97);
	$sql = 'SELECT * from users';
    $user = $conexion -> query($sql);
    
    while( $fila = $user ->  fetch_assoc()){
        $nombre = $fila['Name'];
        $apellido = $fila['LastName'];
        $id = $fila['Id'];
      
        if($id == $_SESSION['User']->Id ){
        	$nom=$nombre;
        	$apell=$apellido;
        }
    }
	$pdf->Cell(60,7,utf8_decode($nombre." ".$apell),0,0,'L');
	$pdf->SetTextColor(39,39,51);
	$pdf->Cell(8,7,utf8_decode("RFC: "),0,0,'L');
	$pdf->SetTextColor(97,97,97);
	$pdf->Cell(60,7,utf8_decode(rand(0000000000000, 9999999999999)),0,0,'L');
	$pdf->SetTextColor(39,39,51);
	$pdf->Cell(7,7,utf8_decode("Tel:"),0,0,'L');
	$pdf->SetTextColor(97,97,97);
	$pdf->Cell(35,7,utf8_decode(rand(00000000, 99999999)),0,0);
	$pdf->SetTextColor(39,39,51);

	$pdf->Ln(7);

	$pdf->SetTextColor(39,39,51);
	$pdf->Cell(6,7,utf8_decode("Dir:"),0,0);
	$pdf->SetTextColor(97,97,97);
	$pdf->Cell(109,7,utf8_decode("Aguascalientes"),0,0);

	$pdf->Ln(9);

	# Tabla de productos #
	$pdf->SetFont('Arial','',8);
	$pdf->SetFillColor(23,83,201);
	$pdf->SetDrawColor(23,83,201);
	$pdf->SetTextColor(255,255,255);
	$pdf->Cell(90,8,utf8_decode("Descripción"),1,0,'C',true);
	$pdf->Cell(15,8,utf8_decode("Cant."),1,0,'C',true);
	$pdf->Cell(25,8,utf8_decode("Precio"),1,0,'C',true);
	$pdf->Cell(19,8,utf8_decode("Desc."),1,0,'C',true);
	$pdf->Cell(32,8,utf8_decode("Subtotal"),1,0,'C',true);

	$pdf->Ln(8);

	
	$pdf->SetTextColor(39,39,51);



	/*----------  Detalles de la tabla  ----------*/
    $sql = 'SELECT * from productos';
    $prod = $conexion -> query($sql);
    $numPro = 0;
    $total=0;
    
    while( $fila = $prod ->  fetch_assoc()){
        $nombre = $fila['Nombre'];
        $precio = $fila['Precio'];
        $categoria = $fila['Categoria'];
        $descripcion = $fila['Descripcion'];
        $existencia = $fila['Existencia'];
        $imagen = $fila['Imagen'];
        $sql = 'SELECT * from carrito';
        $car = $conexion -> query($sql);
        while( $fila = $car ->  fetch_assoc()){
            $nombre_carrito = $fila['Nombre_Producto'];
            $cantidad = $fila['Cantidad'];
            $id = $fila['Id_Usuario'];
            if($nombre_carrito == $nombre && $id == $_SESSION['User']->Id ){
                $tot=round($precio, 2);
                $total+=$tot*$cantidad;
                $pdf->Cell(90,7,utf8_decode($nombre_carrito),'L',0,'C');
                $pdf->Cell(15,7,utf8_decode($cantidad),'L',0,'C');
	$pdf->Cell(25,7,utf8_decode("$".round($precio/1, 2)),'L',0,'C');
	$pdf->Cell(19,7,utf8_decode("$0.00 MXN"),'L',0,'C');
	$pdf->Cell(32,7,utf8_decode("$".$cantidad*round($precio, 2)),'LR',0,'C');
	$pdf->Ln(7);
           } // fin de del if
            
        }//fin while carrito
    
        }//fin while productos
	/*----------  Fin Detalles de la tabla  ----------*/


	
	$pdf->SetFont('Arial','B',9);
	
	# Impuestos & totales #
	$pdf->Cell(100,7,utf8_decode(''),'T',0,'C');
	$pdf->Cell(15,7,utf8_decode(''),'T',0,'C');
	$pdf->Cell(32,7,utf8_decode("SUBTOTAL"),'T',0,'C');
	$pdf->Cell(34,7,utf8_decode("$".$total),'T',0,'C');

	$pdf->Ln(7);

	$pdf->Cell(100,7,utf8_decode(''),'',0,'C');
	$pdf->Cell(15,7,utf8_decode(''),'',0,'C');
	$pdf->Cell(32,7,utf8_decode("IVA (16%)"),'',0,'C');
	$pdf->Cell(34,7,utf8_decode("$".round($total*0.16)),'',0,'C');

	$pdf->Ln(7);

	$pdf->Cell(100,7,utf8_decode(''),'',0,'C');
	$pdf->Cell(15,7,utf8_decode(''),'',0,'C');


	$pdf->Cell(32,7,utf8_decode("TOTAL"),'T',0,'C');
	$pdf->Cell(34,7,utf8_decode("$".round(($total*0.16)+$total)),'T',0,'C');
	$pdf->Ln(12);

	$pdf->SetFont('Arial','',9);

	$pdf->SetTextColor(39,39,51);
	$pdf->MultiCell(0,9,utf8_decode("*** Precios de productos incluyen impuestos. Para poder realizar un reclamo o devolución debe de presentar esta factura ***"),0,'C',false);

	$pdf->Ln(9);

	# Codigo de barras #
	$pdf->SetFillColor(39,39,51);
	$pdf->SetDrawColor(23,83,201);
	$pdf->Code128(72,$pdf->GetY(),"COD000001V0001",70,20);
	$pdf->SetXY(12,$pdf->GetY()+21);
	$pdf->SetFont('Arial','',12);
	$pdf->MultiCell(0,5,utf8_decode("COD000001V0001"),0,'C',false);

	# Nombre del archivo PDF #
	$pdf->Output("I","Factura_".Date("Y-m-d")."_".date('h:i:s').".pdf",true); 
		mail("jaimeadolfov07@gmail.com", "a","a");