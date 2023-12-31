<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $contacts = Contact::when($request->search, function ($query) use ($request) {
            return $query->where('name', 'LIKE', "%{$request->search}%")
                ->orWhere('email', 'LIKE', "%{$request->search}%")
                ->orWhere('telp', 'LIKE', "%{$request->search}%");
        })->latest()->paginate(10);
        $type = Contact::latest()->get(['name', 'slug', 'type']);
        return $this->sendResponse(200, 'List Data Contact', [
            'all' => $contacts,
            'type' => $type
        ]);
    }



    public function set_type(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'slug' => 'required',

        ]);

        if ($validator->fails()) {

            return $this->sendResponse(422, 'Mismatch data', $validator->errors());
        }

        //ambil type pusat saat ini, dan set ke cabang;

        Contact::whereType('pusat')->update(['type' => 'cabang']);


        //  update dengan yang baru
        $new  = Contact::whereSlug($request->slug)->first();
        $new->update(['type' => 'pusat']);
        return $this->sendResponse(200, 'Berhasil', 'Kontak Pusat telah berhasil diubah ke ' . $new->name);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'lokasi' => 'required',
            'map' => 'required',
            'email' => 'required',
            'telp' => 'required',
        ]);

        if ($validator->fails()) {

            return $this->sendResponse(422, 'Mismatch data', $validator->errors());
        }
        $slug = Str::slug($request->name);
        $contact = Contact::whereSlug($slug)->first();
        if ($contact) {
            return $this->sendResponse(422, 'Nama [' . $request->name . '] sudah digunakan, silahkan membuat nama yang berbeda');
        }

        Contact::create([
            'name' => $request->name,
            'slug' => $slug,
            'type' => 'cabang',
            'map' => $request->map,
            'lokasi' => $request->lokasi,
            'email' => $request->email,
            'telp' => $request->telp,
        ]);
        return $this->sendResponse(200, 'Berhasil', 'Data Kontak telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::whereSlug($id)->first();
        if ($contact) {

            return $this->sendResponse(200, 'Berhasil', $contact);
        }
        return $this->sendResponse(404, 'Data Kontak tidak ditemukan',);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'lokasi' => 'required',
            'map' => 'required',
            'email' => 'required',
            'telp' => 'required',
        ]);

        if ($validator->fails()) {

            return $this->sendResponse(422, 'Mismatch data', $validator->errors());
        }


            // cek apakah sudah ada data saat mengupdate
        ;
        $isUsed = Contact::whereSlug(Str::slug($request->name))->first();
        if ($isUsed && $isUsed->slug != $slug) {
            return $this->sendResponse(422, 'Nama [' . $request->name . '] sudah digunakan, silahkan membuat nama yang berbeda');
        }

        // update data yang di inginkan
        $contact = Contact::whereSlug($slug)->firstOrFail();
        $contact->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'type' => 'cabang',
            'map' => $request->map,
            'lokasi' => $request->lokasi,
            'email' => $request->email,
            'telp' => $request->telp,
        ]);
        return $this->sendResponse(200, 'Berhasil', 'Data Kontak telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::whereSlug($id)->first();
        if ($contact) {
            $contact->delete();
            return $this->sendResponse(200, 'Berhasil', 'Data Kontak ' . $contact->name . ' berhasil dihapus');
        }
        return $this->sendResponse(404, 'Data Kontak tidak ditemukan',);
    }
}
