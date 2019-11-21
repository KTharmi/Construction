<?php

namespace App\Http\Controllers\Architect;


use App\Project;
use App\Project_Image;
use App\Http\Requests\ImageStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use Intervention\Image\ImageManagerStatic as Image;

class ImageController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $project_images =Project_Image::all();
        return view('architect/image/view', compact('projects','project_images'));
    }

    public function create()
    {
        $projects = Project::get()->pluck('ProName','id')->toArray();
        return view('architect/image/image', compact('projects'));
    }
    public function store(ImageStoreRequest $request)
    {
        
        $images = $request->input('images');
        $imagePath = 'public/projects';
        foreach ($images as $image){
            $extension = $image->getClientOriginalExtension();
            $project_images = Project_Image::create([
                'name' => $image->getClientOriginalName(),
                'extension' => $extension,
                'project_id' => $request->input('project_name'),
            ]);
            $name = $project_images->id . '.' . $extension;
            $image->storeAs($imagePath, $name);
            
        }

        return redirect()->route('architect.image.view');
    }
}
