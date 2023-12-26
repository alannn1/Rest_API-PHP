<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
use GuzzleHttp\Client;
use Illuminate\Http\RedirectResponse;

class ApiController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function home()
    {
        return view('home');
    }
    public function apiLogin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $response = Http::post('http://localhost:8000/api/login', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        $data = json_decode($response->body(),true);
        if (array_key_exists('message', $data)) {
            $this->setCookie($data['message']);
        }else{
            $this->setCookie($data['access_token']);
        }
        return redirect('/home');
    }
    public function apiLogout()
    {
        $tkn = $this->getCookie();
        Http::withToken($tkn)->post('http://localhost:8000/api/logout');
        Cookie::forget('token');

        return redirect('/');
    }
    public function apigetPasien()
    {
        $tkn = $this->getCookie();
        if($tkn <> "Unauthorized"){
            $response = Http::withToken($tkn)->get('http://localhost:8000/api/pasien');
            $data['query'] = json_decode($response->body(),true);
            return view('pasien.list',$data);
        }else{
            return "Unauthorized";
        }
    }
    public function apigetonePasien($id)
    {
        $tkn = $this->getCookie();
        if($tkn <> "Unauthorized"){
            $response = Http::withToken($tkn)->get('http://localhost:8000/api/pasien/'.$id);
            $data['query'] = json_decode($response->body(),true);
            return view('pasien.view',$data);
        }else{
            return "Unauthorized";
        }
    }
    public function addPasien()
    {
        return view('pasien.add');
    }
    public function apisavePasien(Request $request)
    {
        $tkn = $this->getCookie();
        if($tkn !== "Unauthorized"){
            $response = Http::withToken($tkn)->post('http://localhost:8000/api/pasien', [
                'nama' => $request->input('nama'),
                'tgl_lahir' => $request->input('tgl_lahir'),
                'jk' => $request->input('jk'),
                'no_rm' => $request->input('no_rm'),
                'rp' => $request->input('rp'),
            ]);

            if($response->successful()) {
                return redirect('getpasien')->with('success', 'Data pasien berhasil ditambahkan!');
            }else {
                return back()->with('error', 'Gagal menbambahkan data pasien. Error:' .$response->status());
            }
            
        }else{
            return "Unauthorized";
        }
    }
    public function editPasien($id)
    {
        $tkn = $this->getCookie();
        if($tkn <> "Unauthorized"){
            $response = Http::withToken($tkn)->get('http://localhost:8000/api/pasien/'.$id);
            $data['query'] = json_decode($response->body(),true);
            if($data != true){
                $error = $data['message'];
                return redirect()->to('getpasien')->with($error);
            }else {
                return view('pasien.edit',$data); 
            }
        }else{
            return "Unauthorized";
        }
    }
    public function apiupdatePasien(Request $request, $id)
    {
        $tkn = $this->getCookie();
        if($tkn !== "Unauthorized"){
            $response = Http::withToken($tkn)->put('http://localhost:8000/api/pasien/'.$id, [
                'nama' => $request->input('nama'),
                'tgl_lahir' => $request->input('tgl_lahir'),
                'jk' => $request->input('jk'),
                'no_rm' => $request->input('no_rm'),
                'rp' => $request->input('rp'),
            ]);

            if($response->successful()) {
                return redirect('getpasien')->with('success', 'Data pasien berhasil diupdate!');
            }else {
                return back()->with('error', 'Gagal menbambahkan data pasien. Error:' .$response->status());
            }
            
        }else{
            return "Unauthorized";
        }
    }
    public function apideletePasien($id)
    {
        $tkn = $this->getCookie();
        if($tkn <> "Unauthorized"){
            $response = Http::withToken($tkn)->delete('http://localhost:8000/api/pasien/'.$id);
            return redirect('getpasien');
        }else{
            return "Unauthorized";
        }
    }
    public function setCookie($token){
        Cookie::queue(Cookie::make('token', $token, 60));
    }
    public function getCookie(){
        return Cookie::get('token');
    }
}
?>