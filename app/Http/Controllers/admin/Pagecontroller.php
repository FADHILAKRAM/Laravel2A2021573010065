<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Coba\Foo;

use SebastianBergmann\CodeCoverage\Report\Html\Facade;

    class pagecontroller extends Controller
    {
        public function index()
        {
            return "HALAMAN HOME ADMIN";
        }
        public function tampil()
        {
            return "DATA MAHASISWA ADMIN";
        }
        public function cobaFacade()
        {
         echo \Illuminate\Support\Str::snake('sedang belajar laraveluncover');
         echo "<br>";
         echo \Illuminate\Support\Str::snake('sedang belajar laraveluncover');
        }
        public function cobaclass()
        {
        $foo = new Foo();
        echo $foo->bar();
        }
    }
?>
