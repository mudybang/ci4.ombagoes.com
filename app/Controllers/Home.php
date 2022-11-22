<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home_view',[
            'user'=>auth()->user()
        ]);
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->to('/admin');
    }
    public function info()
    {
        phpinfo();
    }
    public function testdb()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM roles');

        foreach ($query->getResult() as $row) {
            echo $row->id;
            echo $row->name;
        }
    }
}
