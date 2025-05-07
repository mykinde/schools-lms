<?php

namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Models\User;
use PDF;
use Illuminate\Support\Facades\Auth;
    
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        //$users = User::get();

        $users = \App\Models\User::where('id',   Auth::user()->id)->get();
    
        $data = [
            'title' => 'CED',
            'date' => date('m/d/Y'),
            'users' => $users
        ]; 
              
        $pdf = PDF::loadView('myPDF', $data);
        //    dd($lectures);
        // return $pdf->download('mtu-ict-print-pdf.pdf');
        return $pdf->download(Auth::user()->name . ".pdf");
    }
}