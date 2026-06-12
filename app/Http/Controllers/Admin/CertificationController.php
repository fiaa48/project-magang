<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    private array $certificateFields = [
        'siujk',
        'siup',
        'sbu_konstruksi',
        'sbu_non_konstruksi',
        'pkp',
        'skt_pajak',
        'bukti_spt',
        'iso',
        'sertifikasi_baru',
    ];

    public function index(Request $request)
    {
        $search = $request->search;

        $certificates = $this->profileCertificateQuery()
            ->when($search, function ($query) use ($search) {
                $query->where(function ($query) use ($search) {
                    foreach ($this->certificateFields as $field) {
                        $query->orWhere($field, 'like', '%' . $search . '%');
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
        $certificate = Certificate::findOrFail($id);

        return view('admin.certificates.edit', compact('certificate'));
    }

    public function update(Request $request, $id)
    {
        $certificate = Certificate::findOrFail($id);
        $data = $request->validate($this->rules());

        $certificate->update($data + [
            'name' => $certificate->name ?: 'Sertifikasi Perusahaan',
            'type' => $certificate->type ?: 'profil-sertifikasi',
        ]);

        return redirect()->route('admin.certificates.index')
            ->with('success', 'Data sertifikasi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $certificate = Certificate::findOrFail($id);
        $certificate->delete();

        return redirect()->route('admin.certificates.index')
            ->with('success', 'Data sertifikasi berhasil dihapus');
    }

    private function rules(): array
    {
        return collect($this->certificateFields)
            ->mapWithKeys(fn ($field) => [$field => 'nullable|string'])
            ->all();
    }

    private function profileCertificateQuery()
    {
        return Certificate::where(function ($query) {
            $query->where('type', 'profil-sertifikasi');

            foreach ($this->certificateFields as $field) {
                $query->orWhereNotNull($field);
            }
        });
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
