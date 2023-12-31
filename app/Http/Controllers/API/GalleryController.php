<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $galleries =  Gallery::with('category')->when($request->search, function ($query) use ($request) {

            return $query->whereHas('category', function ($query) use ($request) {
                return $query->where('name', 'LIKE', "%{$request->search}%");
            })->orWhere('judul', 'LIKE', "%{$request->search}%")
                ->orWhere('deskripsi', 'LIKE', "%{$request->search}%");
        })->latest()->paginate(5);
        return $this->sendResponse(200, 'Berhasil', $galleries);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);
        if ($validator->fails()) {

            return $this->sendResponse(422, 'Mismatch data', $validator->errors());
        }


        //upload image
        $image = $request->file('foto');
        $image->storeAs('public/images', $image->hashName());

        Gallery::create([
            'category_id' => $request->category_id,
            'foto' => $image->hashName(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        return  $this->sendResponse(200, 'Berhasil', 'Data Galeri telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $data = Gallery::with('category')->find($id);
        if ($data) {

            return $this->sendResponse(200, 'Berhasil', $data);
        }
        return $this->sendResponse(404, 'Data Kontak tidak ditemukan',);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'foto' => 'image|mimes:png,jpg,jpeg',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);
        if ($validator->fails()) {

            return $this->sendResponse(422, 'Mismatch data', $validator->errors());
        }

        $galeri = Gallery::find($id);


        DB::transaction(function () use ($request, $galeri) {

            if ($request->hasFile('foto')) {
                //upload image
                $image = $request->file('foto');
                $image->storeAs('public/images', $image->hashName());

                Storage::delete('public/images/' . basename($galeri->foto));

                $galeri->foto = $image->hashName();
            }
            $galeri->judul = $request->judul;
            $galeri->category_id = $request->category_id;
            $galeri->deskripsi = $request->deskripsi;
            $galeri->updated_at = Carbon::now();
            $galeri->save();
        });
        return $this->sendResponse(200, 'Berhasil', 'Data Galeri telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galeri = Gallery::find($id);
        if ($galeri) {

            Storage::delete('public/images/' . basename($galeri->foto));

            $galeri->delete();

            return $this->sendResponse(200, 'Berhasil', 'Data Kontak ' . $galeri->name . ' berhasil dihapus');
        }
        return $this->sendResponse(404, 'Data Kontak tidak ditemukan',);
    }
}
