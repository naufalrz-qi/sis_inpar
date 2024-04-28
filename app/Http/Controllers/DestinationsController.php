<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Destinations;

class DestinationsController extends Controller
{
    public function view()
    {
        $datas = Destinations::get();
        return view('admin.backend.destinations.view', compact('datas'));
    }

    public function add()
    {
        return view('admin.backend.destinations.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
        ]);

        $image = '';

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/destinations/' . $request->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/destinations/'),$filename);
            $image=$filename;
         }

        $data = Destinations::create([
            'name' => $request->name,
            'description' => $request->description,
            'location' => $request->location,
            'image' => $image,
        ]);

        $notification = array(
            'message' => 'Post Create Successfully!',
            'alert-type' => 'success'
        );

        if (Auth::user()->role === 'admin') {
            return redirect()->route('view.destinations')->with($notification);
        }else{
            return redirect()->route('dashboard')->with($notification);
        }
    }

    public function edit($id)
    {
        $data = Destinations::findOrFail($id);
        return view('admin.backend.destinations.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Destinations::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'location' => 'required',
        ]);

        $image = '';
        if ($request->file('image')) {
            if ($request->image !== $data->image) {
                $file = $request->file('image');
                @unlink(public_path('upload/destinations/' . $request->image));
                $filename = date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/destinations/'),$filename);
                $image=$filename;
             }
        }else {
            $image = $data->image;
        }

         $data->name = $request->name;
         $data->description = $request->description;
         $data->location = $request->location;
         $data->image = $image;

         $data->save();

         return redirect()->route('view.destinations');
    }

    public function delete($id)
    {
        $data = Destinations::findOrFail($id);
        $image = $data->image;
        if ($image !== null && $image !== '') {
            if (file_exists(public_path('upload/destinations/' . $image))) {
                unlink(public_path('upload/destinations/' . $image));
            }
        }

        $data->delete();
        $notification = array(
            'message' => 'Post Delete Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }



}
