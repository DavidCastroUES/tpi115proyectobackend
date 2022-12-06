<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
class FirebaseController extends Controller
{
    public function index()
    {
        $firebase = (new Factory)
            ->withServiceAccount(__DIR__.'/tpi115proyecto-firebase-adminsdk-kn63x-10146b53ec.json')
            ->withDatabaseUri('https://tpi115proyecto-default-rtdb.firebaseio.com');
 
        $database = $firebase->createDatabase();
 
        $blog = $database
        ->getReference('blog');
 
        echo '<pre>';
        print_r($blog->getvalue());
        echo '</pre>';
    }
}
