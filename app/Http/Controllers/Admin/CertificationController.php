<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    /**
     * Daftar field yang digunakan untuk validasi, penyimpanan, dan pencarian.
     * Field 'name' dan 'type' tidak perlu dicari karena bersifat internal.
     */
    private array $certificateFields = [
        'pkp',
        'skt_pajak',
        'sbu_konstruksi',
        'sbu_non_konstruksi',
        'iso',
        'sertifikasi_baru',
        'akta_pendirian',
        'akta_perubahan',
        'pengesahan_ahu',
    ];

    public function index(Request $request)
    {
        $search = $request->search;

        $certificates = Certificate::query()
            ->where('type', 'profil-sertifikasi')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    foreach ($this->certificateFields as $field) {
                        $q->orWhere($field, 'like', '%' . $search . '%');
                    }
                });
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.certificates.index', compact('certificates'));
    }

    public function create()
    {
        return view('admin.certificates.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate($this->rules());

        Certificate::create($data + [
            'name' => 'Sertifikasi Perusahaan',
            'type' => 'profil-sertifikasi',
        ]);

        return redirect()->route('admin.certificates.index')
            ->with('success', 'Data sertifikasi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $certificate = Certificate::query()->where('type', 'profil-sertifikasi')->findOrFail($id);
        return view('admin.certificates.edit', compact('certificate'));
    }

    public function update(Request $request, $id)
    {
        $certificate = Certificate::query()->where('type', 'profil-sertifikasi')->findOrFail($id);
        $data = $request->validate($this->rules());

        $certificate->update($data);

        return redirect()->route('admin.certificates.index')
            ->with('success', 'Data sertifikasi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $certificate = Certificate::query()->where('type', 'profil-sertifikasi')->findOrFail($id);
        $certificate->delete();

        return redirect()->route('admin.certificates.index')
            ->with('success', 'Data sertifikasi berhasil dihapus');
    }

    /**
     * Aturan validasi untuk semua field yang diizinkan.
     * Semua field opsional (nullable) dan berupa string.
     */
    private function rules(): array
    {
        return collect($this->certificateFields)
            ->mapWithKeys(fn ($field) => [$field => 'nullable|string'])
            ->all();
    }
}


// namespace App\Http\Controllers\Admin;

// use Illuminate\Routing\Controller as BaseController;
// use App\Models\Certificate;
// use Illuminate\Http\Request;

// class CertificationController extends BaseController
// {
//     public function __construct()
//     {
//         $this->middleware('auth');
//     }

//     public function index()
//     {
//         $certificates = Certificate::orderBy('jenis_sertifikat')->paginate(20);
//         return view('admin.certificates.index', compact('certificates'));
//     }

//     public function create()
//     {
//         return view('admin.certificates.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'jenis_sertifikat' => 'required|string|max:100',
//             'nomor_sertifikat'  => 'required|string|max:200|unique:certificates,nomor_sertifikat',
//             'nama_sertifikat'   => 'nullable|string|max:200',
//             'penerbit'          => 'nullable|string|max:200',
//             'tanggal_terbit'    => 'nullable|date',
//             'tanggal_berlaku_sampai' => 'nullable|date|after_or_equal:tanggal_terbit',
//             'kualifikasi'       => 'nullable|string|max:100',
//             'kode_kbli'         => 'nullable|string|max:50',
//             'scope'             => 'nullable|string',
//             'keterangan'        => 'nullable|string',
//         ]);

//         Certificate::create($request->all());
//         return redirect()->route('admin.certificates.index')->with('success', 'Certificate berhasil ditambahkan.');
//     }

//     public function edit($id)
//     {
//         $certificate = Certificate::findOrFail($id);
//         return view('admin.certificates.edit', compact('certificate'));
//     }

//     public function update(Request $request, $id)
//     {
//         $certificate = Certificate::findOrFail($id);
//         $request->validate([
//             'jenis_sertifikat' => 'required|string|max:100',
//             'nomor_sertifikat'  => 'required|string|max:200|unique:certificates,nomor_sertifikat,' . $certificate->id,
//             'nama_sertifikat'   => 'nullable|string|max:200',
//             'penerbit'          => 'nullable|string|max:200',
//             'tanggal_terbit'    => 'nullable|date',
//             'tanggal_berlaku_sampai' => 'nullable|date|after_or_equal:tanggal_terbit',
//             'kualifikasi'       => 'nullable|string|max:100',
//             'kode_kbli'         => 'nullable|string|max:50',
//             'scope'             => 'nullable|string',
//             'keterangan'        => 'nullable|string',
//         ]);

//         $certificate->update($request->all());
//         return redirect()->route('admin.certificates.index')->with('success', 'Certificate berhasil diperbarui.');
//     }

//     public function destroy($id)
//     {
//         Certificate::findOrFail($id)->delete();
//         return redirect()->route('admin.certificates.index')->with('success', 'Certificate berhasil dihapus.');
//     }
// }
