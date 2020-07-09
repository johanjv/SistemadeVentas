<?php
 
namespace App\Http\Controllers;
 
use App\Productos;
use App\Clientes;

use DB;
use Redirect;
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class ProductosController extends Controller
{
        

    
public function index()
    {      
        return view('productos.registro');
    }

    
    public function listar()
    {
        $productos = Productos::paginate(10);
        return view('productos.listar', ['productos' => $productos]);
    }

    public function create(Request $request)
    {
      
        $productos = new Productos($request->all());
        $productos->save();


        return redirect()->action('ProductosController@listar')
                             ->with('msj-exito', 'Producto registrado');

        
   }

   public function update()
   {
      
   }

   public function delete($id)
   {
     $productos = Productos::find($id);
    $productos->delete();
    return redirect()->action('ProductosController@listar')
                         ->with('message', 'Producto eliminado');
   }



}
