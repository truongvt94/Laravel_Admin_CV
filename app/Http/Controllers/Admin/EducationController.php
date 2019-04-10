<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Cv;
use App\Models\Education;
use App\Models\University;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    public function index() 
    {
    	$educations = Education::paginate(Education::PAGINATE);
    	return view('admin.education.index', compact('show'));
    }

    public function create()
    {
    	$cvs = Cv::all('id', 'name');
    	$universities = University::all('id', 'name');
    	return view('admin.education.create', compact('cvs', 'universities'));
    }

    public function store(Request $request)
    {
    	Education::create([
    		'name' => $request->name,
    		'slug' =>str_slug($request->name),
    		'year_start' => $request->year_start,
    		'year_end' => $request->year_end,
            'developer' => $request->developer,
            'description' => $request->description,
            'university_id' => $request->university_id,
            'cv_id' => $request->cv_id
            ]);
    	return redirect()->back()->with('success', __('messages.insert'));
    }

    public function destroy($id)
    {
    	Education::findOrFail($id)->delete();
    	return redirect()->back()->with('success', __('messages.delete'));
    }
}
