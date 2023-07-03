<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Database\Seeder\DatabaseSeeder;
class EmployeeController extends Controller
{
    public function getData(){
        $employeeData = Employee::paginate(8);
        return view('home', compact('employees'));
    }
}
