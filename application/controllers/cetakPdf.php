<?php
  require_once('assets/fpdf/fpdf.php');
  class cetakpf {

    private $judul;
    private $data;
    private $headers;
    private $width_col;
    private $hight_col;

    public function setHeader($headers){
      $this->headers=$headers;
    }
    public function setJudul($judul){
      $this->judul=$judul;
    }
    public function setData($data){
      $this->data=$data;
    }
    public function setOptionCol($width_col,$hight_col){
      $this->width_col=$width_col;
      $this->hight_col=$hight_col;
    }
    public function makePdf(){
      $pdf = new FPDF();
      $pdf->AddPage();

      #tampilan judul laporan
      $pdf->SetFont('Arial','B','16');
      $pdf->Cell(0,20, $this->judul, '0', 1, 'L');

      #header tabel
      $pdf->SetFont('Arial','','9');
      $pdf->SetFillColor(139,69,19);
      $pdf->SetTextColor(255);
      $pdf->SetDrawColor(222,184,135);
      $i=0;
      foreach ($this->headers as $kolom) {
        //$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
          $pdf->Cell($this->width_col[$i], $this->hight_col[$i], $kolom['label'], 1, '0', $kolom['align'], true);
        $i++;
      }
      $pdf->Ln();

      #data tabel
      $pdf->SetFillColor(245,222,179);
      $pdf->SetTextColor(0);
      $pdf->SetFont('');
      $fill=false;
      foreach ($this->data as $baris) {
      	$i = 0;
      	foreach ($baris as $cell) {
          //$pdf->Cell($this->headers[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);

            $pdf->Cell($this->width_col[$i], $this->hight_col[$i], $cell, 1, '0', $kolom['align'], $fill);


      		$i++;
      	}
      	$fill = !$fill;
      	$pdf->Ln();
      }

      #output
      $pdf->Output();
    }
  }
?>
