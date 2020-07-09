<?php
 
namespace App\Http\Controllers;
 
use App\User;
use App\UserReferidos;
use Session;
use Auth;
use DB;
use Redirect;
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class UsuariosController extends Controller
{
        
 public function __construct()
    {
        $this->middleware('auth');
    }
    
public function index()
    {      
        return view('auth.registro');
    }

    
    public function listar()
    {
        $usuarios = User::paginate(10);
        return view('auth.listar', ['usuarios' => $usuarios]);
    }

    public function create(Request $request)
    {
      
        $usuario = new User($request->all());
        $usuario->password = bcrypt($request->password);
        $usuario->save();


//dd($_POST);
        return redirect()->action('UsuariosController@listar')
                             ->with('msj-exito', 'Usuario registrado');

        
   }

   public function update()
   {
      
   }

   public function delete($id)
   {
     $usuario = User::find($id);
    $usuario->delete();
    return redirect()->action('UsuariosController@listar')
                         ->with('message', 'Usuario eliminado');
   }

}
