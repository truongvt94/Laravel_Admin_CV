<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Cv;
use App\Models\WorkExperince;
use App\Models\Company;
use App\Http\Controllers\Controller;

class WorkExperinceController extends Controller
{
    public function index() 
    {
    	$show = WorkExperince::paginate(WorkExperince::PAGINATE);
    	return view('admin.experence.index', compact('show'));
    }

    public function create() 
    {
    	$cv = Cv::all('id', 'name');
    	$company = Company::all('id', 'name');
    	return view('admin.experence.create', compact('cv'));
    }

    public function store(Request $request) 
    {
    	WorkExperince::create([
    		'year_start' => $request->year_start,
    		'year_end' => $request->year_end,
            'developer' => $request->developer,
            'description' => $request->description,
            'company_id' => $request->company_id,
            'cv_id' => $request->cv_id
            ]);
    	return redirect()->back()->with('success', __('messages.insert'));
    }

    public function destroy($id) 
    {
    	WorkExperince::findOrFail($id)->delete();
    	return redirect()->back()->with('success', __('messages.delete'));
    }
}
