<?php

/***************************
  Sample using an FDF file
****************************/

require('fpdm.php');

$pdf = new FPDM('format3.pdf', 'fields.fdf');
$pdf->Merge();
$pdf->Output();
?>
