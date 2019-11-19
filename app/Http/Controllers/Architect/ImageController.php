<?php

namespace App\Http\Controllers\Architect;


use App\Project;
use App\Project_Image;
use App\Http\Requests\ImageStoreRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $images = $request->file('images');

        $project_images = new Project_Image();
        $project_images->setAttribute('project_id', $request->input('project_name'));
        

        $imagePath = 'public/products';
        foreach ($images as $image){
            $extension = $image->getClientOriginalExtension();
            $productImage = Project_Image::create([
                'name' => $image->getClientOriginalName(),
                'extension' => $extension,
                'product_id' => $phone->id
            ]);
            $name = $project_images->id . '.' . $extension;
            $image->storeAs($imagePath, $name);
            $project_images->setAttribute('name',  $name);
            $project_images->setAttribute('extension',  $extension);
            $project_images->save();
        }

        return redirect()->route('architect.image.view');
    }
}
