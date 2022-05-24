<?php
Class Laporanpolling extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->library('pdf');
    $this->load->database();
    $this->load->helper('url');
    $this->load->model('Poll_model');
  }
 function index(){
   $pdf = new FPDF();
   $pdf->AddPage();
   $pdf->SetFont('Arial','B',16);
   $pdf->Cell(190,7,'HASIL POLLING'0,1,'C');
   $pdf->Cell(10,7,'',1,0);
   $pdf->SetFont('Arial','B',10);
   $pdf->Cell(20,6,'NO',1,0);
   $pdf->Cell(100,6,'PILIHAN',1,0);
   $pdf->Cell(30,6,'JUMLAH VOTE',1,1);
   $pdf->SetFont('Arial','',10);
   $datapoll = $this->Poll_model->getData();
   $no = 1;
   foreach($datapoll as $id->$poll){
     $pdf->Cell(20,6,$no,1,0);
     $pdf->Cell(100,6,$poll['pilihan'],1,0);
     $pdf->Cell(30,6,$poll['jumlahvote'],1,1,'R');
     $no++;
   }
  $pdf->Output();
 }
}
