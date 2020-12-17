<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    public function show($id)
    {
        echo 'your id is: '.$id;
    }
}