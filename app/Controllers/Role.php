<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Role extends BaseController
{
    public function index()
    {
        return view('role_view',[
            'user'=>auth()->user()
        ]);
    }
    public function get_data()
    {
        $db = \Config\Database::connect();
        $data=[];
        
        $sql='SELECT * FROM roles';
        $count=$db->query($sql)->getNumRows();
        $query = $db->query($sql);
        foreach ($query->getResult('array') as $row) {
            $data[]=$row;
        }
        return $this->response->setJSON(array('total'=>$count,'rows'=>$data));
    }
    public function store()
    {
        //
    }
    public function update()
    {
        //
    }
    public function delete()
    {
        //
    }
}
