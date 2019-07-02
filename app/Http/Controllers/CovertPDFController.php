<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App;

class CovertPDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $datas = $this->get_data();
       return view('fichier.pdf_file',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function get_data(){

        $data = DB::table('authors')
            ->limit(5)
            ->get();

        return $data;

    }

    function convert_data_to_html(){
        $datas = $this->get_data();
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

    return $output;
    }

    function pdf(){
         $datas = DB::table('authors')
            ->limit(5)
            ->get();
       // //$auteurs = $this->get_data();
       // $pdf= PDF::loadView('auteur.pdf_view',$data);
       // //$pdf->stream('document.pdf');
       //  return $pdf->download('fichier.pdf');
        // $data = [
        //         'title' =>'PDF',
        //         'content' => 'lol'
        // ];
        $pdf = PDF::loadView('auteur.pdf_view',compact('datas'));
        return $pdf->download('test.pdf');
    }

    
}
