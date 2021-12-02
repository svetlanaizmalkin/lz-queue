<?php
define('FPDF_FONTPATH','../font/');
require('../fpdf184/fpdf.php');

class PDF extends FPDF
{
  function LoadData() //get list from db
  {
    require_once "../database/dbconnect.php";
    $sql = "SELECT $nameCol, $surnameCol, datetime FROM $usertable ORDER BY datetime";
    $result = $conn -> query($sql);
    
    if ($result->num_rows > 0) {
      $i = 1;
      $data = array();
      while($row = $result->fetch_assoc()) {
        $data[] = [iconv('utf-8', 'cp1251', $row["name"]), iconv('utf-8', 'cp1251', $row["surname"])];
        $i++;
      }
      $conn -> close();
      return $data;
    }
  }

  function BasicTable($header, $data)
  {
      // Header
      foreach($header as $col)
          $this->Cell(40,7,$col,1);
      $this->Ln();
      // Data
      foreach($data as $row)
      {
          foreach($row as $col)
              $this->Cell(40,6,$col,1);
          $this->Ln();
      }
  }
}

$pdf = new PDF();
$header = array('Name', 'Surname');
$data = $pdf->LoadData();
$pdf->AddPage();
$pdf->AddFont('montserrat','','Montserrat-Regular.php');
$pdf->SetFont('montserrat','',16);
$pdf->BasicTable($header,$data);
$pdf->Output();

