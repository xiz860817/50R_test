<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;
use Redirect;
use View;

class AuthController extends Controller{
  public function __construct(){
    $this->middleware('guest',['except'=>['getLogout']]);
  }

  public function getLogin(){
    return View::make('auth/login');
  }

  public function postLogin(LoginRequest $request){

    $authData = $request->only([
      'email','password'
    ]);
    echo $authData;

    if (Auth::attempt($authData, $request->has('remember'))){
      return Redirect::action('BoardController@getIndex');
    }else{
      return Redirect::back()->withError(['msg'=> '帳號或密碼輸入錯誤'])->withInput($request->except('password'));
    }
  }
  public function getLogout(){
    Auth::logout();
    return Redirect::action('BoardController@getIndex');
  }
}
