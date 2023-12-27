<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ResultResource;
use App\Models\Home;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Home::find(2);
        return $this->sendResponse(200, 'Data Home', $home);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $home = Home::find($id);
        return new ResultResource(true, 'Data Home', $home);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'logo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'primary_color' => 'required',
            'image_slides' => 'required',
            'slogan' => 'required',
            'image_documentation' => 'required',
            'footer' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $home = Home::findOrFail($id);

        $logo_name = $home->logo;

        if ($request->hasFile('logo')) {
            $foto = $request->file('logo');
            $logo_name = $foto->hashName();
            $foto->storeAs('public/images', $logo_name);
            //delete old image
            Storage::delete('public/images/' . basename($home->foto));
        }


        if ($request->hasFile('image_slides')) {
            // store files
            $newImage = [];
            foreach ($request->file('image_slides') as $img_slides) {

                $image_slides = $img_slides;

                $image_slidesName = $image_slides->hashName();

                array_push($newImage, $image_slidesName);

                $image_slides->storeAs('public/images', $image_slidesName);
            }

            $oldImage = json_decode($request->old_image_slides); // didapat dari fe
            foreach ($oldImage as $old) {
                Storage::delete('public/images/' . basename($old));
            }
        }

        $image_slides =

            $home->update([
                'logo' => $logo_name,
                'primary_color' => $request->primary_color,
                'slogan' => $request->slogan,
                'image_documentation' => $request->image_documentation,
                'footer' => $request->footer,
            ]);

        return new ResultResource(true, 'Data Home berhasil diubah', $home);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
