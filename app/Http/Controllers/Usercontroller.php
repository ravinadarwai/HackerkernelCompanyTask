<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    // User-related methods
    public function addUser()
    {
        return view('adduser');
    }

   
    public function storeUser(Request $request)
    {
        // DD('HELLO');
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email', // Ensures unique email
            'password' => 'required|string',
            'mobile' => 'required|string', // Accepts string values for mobile
        ]);
    
        // Additional validation for mobile number length
        if (strlen($request->mobile) != 10) {
            return redirect()->back()->withErrors(['mobile' => 'Mobile number must be 10 digits long.'])->withInput();
        }
        User::create($validatedData);

        return redirect()->route('adduser')->with('success', 'User added successfully');
    }


    public function viewAddUser()
    {
        $users = User::paginate(5);
        return view('viewadduser', compact('users'));
    }





    
    // Task-related methods
    public function createTask()
    {
        $users = User::all();
        return view('addtask', compact('users'));
    }

    public function storeTask(Request $request)
    {
        $task = Task::create($request->all());
        return redirect()->route('createTask')->with('success', 'Task added successfully');
    }

    public function taskList()
    {
        $tasks = Task::paginate(5);
        return view('taskuser', compact('tasks'));
    }
}