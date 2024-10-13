<?php

namespace App\Controllers;

use \Mpdf\Mpdf;
use CodeIgniter\API\ResponseTrait;
use App\Models\Transactions;

class PdfController extends BaseController
{
   use ResponseTrait;
   public function generatePdf()
   {
      $request = $this->request->getPost();
      $transModel = new Transactions();
      if (session('user')['role'] == 'ADMIN') {
         // Join with the users table
         $orders = $transModel->select('transactions.*, vehicles.name vehicle_name, vehicles.daily_price, users.first_name, users.last_name')
         ->join('vehicles', 'vehicles.id = transactions.vehicle_id')
         ->join('users', 'users.id = transactions.user_id')
         ->orderby('transactions.id', 'ASC')
         ->where('transactions.created_at <=', $request['endedPeriode'])
         ->where('transactions.created_at >=', $request['startPeriode'])
         ->where('transactions.status = ', "FINISHED")
         ->findAll();
         $data = [
            'transactions' => $orders,
            'startPeriode' => $request['startPeriode'],
            'endedPeriode' => $request['endedPeriode'],
         ];
      }

     
      $htmlContent = view('export/pdf_view', $data);

      // Initialize mPDF
      $mpdf = new Mpdf();
      // $mpdf->AddPage('L');

      // Write the content to the PDF
      $mpdf->WriteHTML($htmlContent);

      // Output the PDF
      return $mpdf->Output('generated_pdf.pdf', "D");
   }
}
