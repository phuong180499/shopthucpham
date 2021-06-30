<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Input;
use App\LoaiSanPham;
class ExcelController extends Controller
{
	
    public function getImport(){
    	return view('excel.inport');
    }

    public function postImport(){
    	Excel::load(Input::file('file'),function($reader){
    		$reader->each(function($sheet){
    			foreach($sheet->toArray() as $row){
    				LoaiSanPham::firstOrCreate($sheet->toArray());
    			}
    			
    		});
    	});
    	echo "thanh công";
    } 
}
