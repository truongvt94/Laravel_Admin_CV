<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Cv;
use App\Models\Portfolio;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function index() 
    {
    	$portfolios = Portfolio::paginate(Portfolio::PAGINATE);
    	return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create() 
    {
    	$cvs = Cv::all('id', 'name');
    	return view('admin.portfolio.create', compact('cvs'));
    }

    public function store(Request $request) 
    {
    	Portfolio::create([
    		'name' => $request->name,
    		'slug' =>str_slug($request->name),
    		'date_start' => $request->date_start,
    		'date_end' => $request->date_end,
            'is_feature' => $request->is_feature,
    		'cv_id' => $request->cv_id
    		]);
    	return redirect()->back()->with('success', __('messages.insert'));
    }

    public function destroy($id) 
    {
        Portfolio::findOrFail($id)->delete();
        return redirect()->back()->with('success', __('messages.delete'));
    }
}
