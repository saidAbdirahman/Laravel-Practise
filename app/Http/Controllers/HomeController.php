<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = Department::with('employee')->find(2);
        echo $data->name, '<br><br>';
       foreach($data->employee as $item){
        echo $item->name ,'<br>';
        echo $item->phone, '<br><br><br>';
       }

    }
}
