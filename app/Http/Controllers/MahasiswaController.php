1<?php
2
3	class MahasiswaController extends Controller
4	{
5	public function delete(){
6	$mahasiswa = Mahasiswa::find(1);
7	$mahasiswa->delete();
8
9	dump($mahasiswa);
10	}
11	}



