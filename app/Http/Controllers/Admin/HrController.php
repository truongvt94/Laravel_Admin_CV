<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Cv;
use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HrController extends Controller
{
	public function index()
	{
		$cvs = Cv::paginate(Cv::PAGINATE);
		return view('admin.hr.index', compact('cvs'));
	}

	public function search(Request $request)
	{
		$keyword = $request->input('keyword');
        $cvs = Cv::where('name', 'like', "%$keyword%")
        ->orWhere('email', 'like', "%$keyword%")->paginate(Cv::PAGINATE);
        $data = [
        'cvs' => $cvs,
        'keyword' => $keyword
        ];
        return view('admin.hr.index', $data);
	}
}
