<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CircleController extends Controller
{
    public function index(Request $request)
    {

        $basicNum = $request->input('number');
        $circleNum = ($basicNum * $basicNum ) * 3.14;
          
        $link = mysqli_connect('localhost', 'root', '', 'network');   
        $stmt = mysqli_prepare($link, "INSERT INTO results (result) VALUES (?)");   
        mysqli_stmt_bind_param($stmt, "d", $circleNum);
        $result = mysqli_stmt_execute($stmt);

        mysqli_close($link);

        return $circleNum;
    }
}
