<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    /**
     * Menampilkan ide-ide pada dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Mengambil data ide dari API
        $response = Http::get('https://suitmedia-backend.suitdev.com/api/ideas');

        // Mendapatkan data JSON dari respons
        $ideas = $response->json();

        // Pastikan 'data' ada di dalam respon
        $ideasData = isset($ideas['data']) ? $ideas['data'] : [];

        // Mengirim data ide ke tampilan (view) 'dashboard' 
        return view('dashboard', ['ideas' => $ideasData]);
    }
}
