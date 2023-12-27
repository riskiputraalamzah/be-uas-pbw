<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ResultResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required|confirmed'
        ]);

        if ($validator->fails()) {

            return $this->sendResponse(422, 'Mismatch data', $validator->errors());
        }

        $user = User::whereUsername($request->username)->first();
        if ($user) {
            return $this->sendResponse(422, 'Username [' . $request->username . '] sudah digunakan, silahkan membuat username kembali');
        }

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'guest'
        ]);
        return $this->sendResponse(200, 'Daftar Berhasil', 'Akun Anda berhasil dibuat, Silahkan Login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);
        if ($validator->fails()) {

            return $this->sendResponse(422, 'Mismatch data', $validator->errors());
        }
        $user = User::where('username', $request->username)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {



            return $this->sendResponse(404, 'User tidak ditemukan');
        }

        $token = $user->createToken('ApiToken')->plainTextToken;

        $data = [
            'user' => $user,
            'token' => $token
        ];
        return $this->sendResponse(200, 'Berhasil Login', $data);
    }

    public function logout(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
        ]);
        if ($validator->fails()) {

            return $this->sendResponse(422, 'Mismatch data', $validator->errors());
        }
        $user = User::whereUsername($request->username)->first();
        if (!$user) {
            return $this->sendResponse(404, 'User tidak ditemukan');
        }

        $user->tokens()->delete();
        return $this->sendResponse(200, 'Logout', 'Anda berhasil logout');
    }
}
