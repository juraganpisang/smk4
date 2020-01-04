<?php
    session_start();
    include "koneksi.php";
    require('fpdf/fpdf.php');
	
    $query ="select * from tb_pemesanan ORDER BY id DESC LIMIT 1";
    $db_query = mysql_query($query) or die("Query gagal");
    //Variabel untuk iterasi
    $i = 0;
    //Mengambil nilai dari query database
	while($data=mysql_fetch_row($db_query))
    {
        $cell[$i][0] = $data[0];
        $cell[$i][1] = $data[1];
        $cell[$i][2] = $data[2];
        $cell[$i][3] = $data[3];
        $cell[$i][4] = $data[4];
        $cell[$i][5] = $data[5];
        $cell[$i][6] = $data[6];
        $cell[$i][7] = $data[7];
        $cell[$i][8] = $data[8];
        $cell[$i][9] = $data[9];
		$cell[$i][10] = $data[10];
		$i++;
    }
    //memulai pengaturan output PDF
    class PDF extends FPDF
    {
        //untuk pengaturan header halaman
        function Header()
        {
            //Pengaturan Font Header
            $this->SetFont('Times','B',14); //jenis font : Times New Romans, Bold, ukuran 14
            //untuk warna background Header
            $this->SetFillColor(255,255,255);
            //untuk warna text
            $this->SetTextColor(0,0,0);
            //Menampilkan tulisan di halaman
            $this->Cell(18,3,'Data Pemesanan','TBLR',0,'C',1); //TBLR (untuk garis)=> B = Bottom,
            // L = Left, R = Right
            //untuk garis, C = center
        }
    }
    //pengaturan ukuran kertas P = Portrait
    $pdf = new PDF('P','cm','A4');
    $pdf->Open();
    $pdf->AddPage();
    //Ln() = untuk pindah baris
	$j=0;
    $pdf->Ln();
    $pdf->SetFont('Times','B',15);$pdf->Ln();
    $pdf->Cell(6,1,'No','LRTB',0,'C');$pdf->Cell(12,1,$cell[$j][0],'LBTR',0,'C');$pdf->Ln();
    $pdf->Cell(6,3,'Nama','LRTB',0,'C');$pdf->Cell(12,3,$cell[$j][1],'LBTR',0,'C');$pdf->Ln();
    $pdf->Cell(6,1,'Telepon','LRTB',0,'C');$pdf->Cell(12,1,$cell[$j][2],'LBTR',0,'C');$pdf->Ln();
    $pdf->Cell(6,1,'Email','LRTB',0,'C');$pdf->Cell(12,1,$cell[$j][3],'LBTR',0,'C');$pdf->Ln();
    $pdf->Cell(6,3,'Hotel Yang Dipesan','LRTB',0,'C');$pdf->Cell(12,3,$cell[$j][4],'LBTR',0,'C');$pdf->Ln();
    $pdf->Cell(6,1,'Tanggal Check In','LRTB',0,'C');$pdf->Cell(12,1,$cell[$j][5],'LBTR',0,'C');$pdf->Ln();
    $pdf->Cell(6,1,'Tanggal Check Out','LRTB',0,'C');$pdf->Cell(12,1,$cell[$j][6],'LBTR',0,'C');$pdf->Ln();
    $pdf->Cell(6,1,'Jumlah Kamar','LRTB',0,'C');$pdf->Cell(12,1,$cell[$j][7],'LBTR',0,'C');$pdf->Ln();
    $pdf->Cell(6,3,'Permintaan Khusus','LRTB',0,'C');$pdf->Cell(12,3,$cell[$j][8],'LBTR',0,'C');$pdf->Ln();
    $pdf->Cell(6,1,'Nama Bank','LRTB',0,'C');$pdf->Cell(12,1,$cell[$j][9],'LBTR',0,'C');$pdf->Ln();
	$pdf->Cell(6,1,'No Rekening','LRTB',0,'C');$pdf->Cell(12,1,$cell[$j][10],'LBTR',0,'C');$pdf->Ln();
    $pdf->SetFont('Times',"",15);
    //menampilkan output berupa halaman PDF
    $pdf->Output('data pemesanan.pdf','D');
?>