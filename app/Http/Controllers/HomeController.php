<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\Clientes;
use App\Productos;
use App\Facturacions;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {

        //dd($contprod);

        if (Auth::user()->tipo == 'admin') {
            return view('home');
        }
        

    }

    public function detail($id)
    {
        return view('administracion.detail', [
            'model' => $this->_invoiceRepo->get($id)
        ]);
    }

    public function pdf($id)
    {
        $model = $this->_invoiceRepo->get($id);
        $invoice_name = sprintf('comprobante-%s.pdf', str_pad ($model->id, 7, '0', STR_PAD_LEFT));

        $pdf = PDF::loadView('administracion.pdf', [
            'model' => $model
        ]);

        return $pdf->download($invoice_name);
    }

    public function add()
    {
        return view('administracion.add');
    }

    public function save(Request $req)
    {
        $data = (object)[
            'iva' => $req->input('iva'),
            'subTotal' => $req->input('subTotal'),
            'total' => $req->input('total'),
            'client_id' => $req->input('client_id'),
            'detail' => []
        ];

        foreach($req->input('detail') as $d){
            $data->detail[] = (object)[
                'product_id' => $d['id'],
                'quantity'   => $d['quantity'],
                'unitPrice'  => $d['price'],
                'total'      => $d['total']
            ];
        }

        return $this->_invoiceRepo->save($data);
    }

    public function findClient(Request $req)
    {
        return $this->_clientRepo
                    ->findByName($req->input('q'));
    }

    public function findProduct(Request $req)
    {
        return $this->_productRepo
                    ->findByName($req->input('q'));
    }

    
}