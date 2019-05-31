<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NahidulHasan\Html2pdf\Facades\Pdf;
use DB;

class ConvertToPdf extends Controller
{
    public function index(){
    	$datas = $this->get_data();
    	//$datas = $this->get_data();
        $output = '
          
<head>
    <title>PDF</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Tous les Auteurs</h1>
             </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Matricule</th>
                            <th>Email</th>
                            <th>Telephone</th>
                        </tr>
                    </thead>
        ';
        foreach ($datas as $data) {
            $output .= '<tr>
                            <td>'.$data->nom.'</td>
                            <td>'.$data->matricule.'</td>
                            <td>'.$data->email.'</td>
                            <td>'.$data->telephone.'</td>
                    </tr>';
        }

        $output .= '</table>
            </div>
        </div>
    </div>  
</body>';
		Pdf::generatePdf($output);
       return Pdf::download();
    }

    public function get_data(){

        $data = DB::table('authors')
            ->limit(5)
            ->get();

        return $data;

    }

}
