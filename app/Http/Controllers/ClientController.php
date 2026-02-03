<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $query = Client::query();

    if ($request->filled('q')) {
        $q = $request->q;
        $query->where(function ($sub) use ($q) {
            $sub->where('nama', 'like', "%{$q}%")
                ->orWhere('nik', 'like', "%{$q}%")
                ->orWhere('no_hp', 'like', "%{$q}%")
                ->orWhere('email', 'like', "%{$q}%");
        });
    }

    if ($request->filled('kelas')) {
        $query->where('kelas', $request->kelas);
    }

    $clients = $query->orderBy('created_at', 'desc')->paginate(10);

    if ($request->ajax()) {
        return view('layouts.partial.table', compact('clients'))->render();
    }

    return view('pages.clients.index', compact('clients'));
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'nama' => 'required|string|max:100',
                'nik' => 'required|digits:16|unique:clients,nik',

                'nama_ibu_kandung' => 'required|string|max:100',
                'va' => 'required|string|max:50',
                'no_hp' => 'required|string|max:15',
                'email' => 'required|email|max:100',
                'alamat' => 'nullable|string',
                'faskes_pertama' => 'required|string|max:100',
                'kelas' => 'required|in:1,2,3',
            ],
            [
                'nama.required' => 'Nama lengkap wajib diisi.',
                'nik.required' => 'NIK wajib diisi.',
                'nik.digits' => 'NIK harus terdiri dari 16 digit.',
                'nik.unique' => 'NIK sudah terdaftar.',
                'nama_ibu_kandung.required' => 'Nama ibu kandung wajib diisi.',
                'va.required' => 'VA / nomor peserta wajib diisi.',
                'no_hp.required' => 'Nomor HP wajib diisi.',
                'email.required' => 'Email wajib diisi.',
                'email.email' => 'Format email tidak valid.',
                'faskes_pertama.required' => 'Faskes pertama wajib diisi.',
                'kelas.required' => 'Kelas wajib dipilih.',
                'kelas.in' => 'Kelas yang dipilih tidak valid.',
            ]
        );

        Client::create($validated);

        return redirect()
            ->route('clients.create')
            ->with('success', 'Data klien berhasil disimpan.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);

        return view('pages.clients.detail', compact('client'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
        return view('pages.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $validated = $request->validate(
            [
                'nama' => 'required|string|max:100',
                'nama_ibu_kandung' => 'required|string|max:100',
                'va' => 'required|string|max:50',
                'no_hp' => 'required|string|max:15',
                'email' => 'required|email|max:100',
                'alamat' => 'nullable|string',
                'faskes_pertama' => 'required|string|max:100',
                'kelas' => 'required|in:1,2,3',
            ],
            [
                'nama.required' => 'Nama lengkap wajib diisi.',
                'nik.digits' => 'NIK harus terdiri dari 16 digit.',
                'nik.unique' => 'NIK sudah digunakan oleh klien lain.',

                'nama_ibu_kandung.required' => 'Nama ibu kandung wajib diisi.',
                'va.required' => 'VA / nomor peserta wajib diisi.',
                'no_hp.required' => 'Nomor HP wajib diisi.',
                'email.required' => 'Email wajib diisi.',
                'email.email' => 'Format email tidak valid.',
                'faskes_pertama.required' => 'Faskes pertama wajib diisi.',
                'kelas.required' => 'Kelas wajib dipilih.',
                'kelas.in' => 'Kelas yang dipilih tidak valid.',
            ]
        );

        $client->update($validated);

        return redirect()
            ->route('clients.show', $client->id_client)
            ->with('success', 'Data klien berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);

        $client->delete();

        return redirect()
            ->route('clients.index')
            ->with('success', 'Data klien berhasil dihapus.');
    }

}
