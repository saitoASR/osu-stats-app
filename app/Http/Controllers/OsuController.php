<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OsuController extends Controller
{
    public function index()
    {
        return view('osu.index');
    }

    public function search(Request $request)
    {
        $username = $request->input('username');

        // 1. アクセストークン取得
        $tokenResponse = Http::asForm()->post('https://osu.ppy.sh/oauth/token', [
            'client_id' => env('OSU_CLIENT_ID'),
            'client_secret' => env('OSU_CLIENT_SECRET'),
            'grant_type' => 'client_credentials',
            'scope' => 'public',
        ]);

        $accessToken = $tokenResponse['access_token']; // access_tokenを取り出す

        // 2. ユーザーデータ取得
        $userResponse = Http::withToken($accessToken)
            ->get("https://osu.ppy.sh/api/v2/users/{$username}/osu");

        // データをBladeに渡す
        return view('osu.result', [
            'user' => $userResponse->json(),
        ]);
    }
}
