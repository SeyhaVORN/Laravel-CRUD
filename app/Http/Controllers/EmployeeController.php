<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Empty_;

class EmployeeController extends Controller
{
    //
    public function index()
    {
        $employee = Employee::all();
        return view('pages.employee.index', compact('employee'));
    }

    public function create()
    {
        return view('pages.employee.create');
    }

    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->designation = $request->input('designation');
        $employee->save();
        return redirect('employee')->with(
            'message',
            'Employee add successfully.'
        );
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('pages.employee.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->designation = $request->input('designation');
        $employee->status = $request->input('status') == true ? '1' : '0 ';
        $employee->update();

        return redirect('employee')->with(
            'message',
            'Employee data update successfully.'
        );
    }

    public function delete($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('employee')->with(
            'message',
            'Employee has been delete successfully.'
        );
    }

    public function search(Request $request)
    {
        $data = Employee::where('id', 'like', '%' . $request->search . '%')
            ->orwhere('name', 'like', '%' . $request->search . '%')
            ->orwhere('email', 'like', '%' . $request->search . '%')
            ->orwhere('phone', 'like', '%' . $request->search . '%')
            ->orwhere('designation', 'like', '%' . $request->search . '%')
            ->orwhere('status', 'like', '%' . $request->search . '%')
            ->get();
        $html = view('pages.employee.row', ['employee' => $data])->render();

        return ['html' => $html];
    }
}