<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SquaredController extends Controller
{
    public function index(Request $request)
    {
        $basicNum = $request->input('number');
        $squaredNum = $basicNum * $basicNum;
        
        $link = mysqli_connect('localhost', 'root', '', 'network');   
        $stmt = mysqli_prepare($link, "INSERT INTO results (result) VALUES (?)");   
        mysqli_stmt_bind_param($stmt, "d", $squaredNum);
        $result = mysqli_stmt_execute($stmt);

        mysqli_close($link);

        return $squaredNum;
    }
}
