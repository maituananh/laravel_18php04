<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    //
    public function xinchao() {
        echo "chào các bạn";
    }

    function controller2($thamso) {
        echo "đây là controller thứ 2 ". $thamso;
    }

    function chuyencontroller() {
        return redirect()->route('denday');
    }

    function request(Request $request) {
        if($request->isMethod('get')) {
            echo 'đây là phương thức Get '.$request->url();
        } else {
            echo 'đây là phương thức Post ';
        }
    }

    function postForm(Request $request) {
        echo $request->ten;
    }

    function postFile(Request $request) {
        if($request->hasFile('myFile')) {
            $file = $request->file('myFile'); // lấy file
            // lấy tên file gốc
            $filename = $file->getClientOriginalName('myFile');
            // lưu vào thư mục
            $saveFile = $file->move('img', $filename);
            // kiểm tra lưu chưa
            if ($saveFile) {
                echo "lưu thành công <img src='$saveFile'>";
            } else {
                echo 'không thành công';
            }
        } else {
            echo 'chưa có file';
        }
    }

    function thamso($thamso) {
        return view('thamsoview', ['thamso'=>$thamso]);
    }

    function bladeTemplate($link) {
        switch ($link) {
            case 'home':
                return view('pages.home');
                break;

            case 'addUser':
                return view('pages.addUser');
                break;

            case 'products':
                return view('pages.products');
                break;

            default:
                return 'ERROR LINK';
                break;
        }
    }
}
