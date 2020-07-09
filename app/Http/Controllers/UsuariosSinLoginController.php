<?php
 
namespace App\Http\Controllers;
 
use App\User;
use Session;
use Auth;
use DB;
use Redirect;
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class UsuariosSinLoginController extends Controller
{
        
public function index()
    {      
        return view('auth.registro');
    }

    public function create(Request $request)
    {


if ($request->codigoref == '') {

        $usuario = new User($request->all());
        $usuario->password = bcrypt($request->password);
        $usuario->posref = 0;
        $usuario->save();
//dd($contref, $contref0, $usuario);
        return Redirect::to('login')->with('success', 'Usuario registrado Exitosamente');

      }else{

      $contref = User::where("codigoref", "=", $request->codigoref)->count();
  //dd($contref0);
      
      if ($contref == 0) {
            $posref = "D";
        }elseif ($contref == 1) {
            $posref = "I";
        }elseif ($contref == 2) {
          return Redirect::to('login')->with('error', 'EL numero de Referidos permitidos es 2 maximo');
        }

        $usuario = new User($request->all());
        $usuario->password = bcrypt($request->password);
        $usuario->posref = $posref;
        $usuario->save();

        return Redirect::to('login')->with('success', 'Usuario registrado Exitosamente');


      }       
   

  }

}