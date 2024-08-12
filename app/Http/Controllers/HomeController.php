<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = Employee::with('department')->find(2);
       

       echo $data->department->name ,'<br>';
        echo $data->name, '<br><br>';
        echo $data->phone, '<br><br><br>';
      

    }
}
