<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Kegiatan;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->kegiatan = new Kegiatan ();
    }
    
    public function index()
    {  
       $kegiatans = Kegiatan::all();
       
        return view("backend.kegiatan.index", compact('kegiatans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $getKode = $this->kegiatan->generateCode();
        
        return view("backend.kegiatan.create",compact('getKode'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $kegiatan = Kegiatan::create($this->validateRequest());
        $this->storeImage($kegiatan);
        return redirect()->back()->with(['success' => 'Kegiatan Berhasil Dibuat']);
    }

    private function validateRequest()
    {
        return tap(request()->validate([
            'kode_kegiatan'     => 'required',
            'nama_kegiatan'     => 'required',
            'tanggal'           => 'required',
            'keterangan'        => 'required',
            'status_kegiatan'   => 'required',
            'harga_tiket'       => 'required',
            'images'            => 'file|image|max:5000',
            'kapasitas'         => 'required',
        ]), function(){
            if(request()->hasFile('images')){
                request()->validate([
                    'images' => 'file|image|max:5000',
                ]);
            }
        }); 
    } 
    private function storeImage($kegiatan){
        if(request()->has('images')){
            $kegiatan->update([
                'images' => request()->images->store('uploads','public'),
            ]);
            $image = Image::make(public_path('storage/'. $kegiatan->images))->fit(300,300, null, 'top-left');

            $image->save();
        }
    }
    public function edit($id)
    {
        
        $kegiatan = Kegiatan::findOrFail($id);
        return view("backend.kegiatan.edit", compact('kegiatan'));
    }
    
    public function update(Kegiatan $kegiatan)
    {
        $kegiatan->update($this->validateRequest());
        $this->storeImage($kegiatan);
        return redirect()->back()->with(['success' => 'Kegiatan Berhasil Diperbarui']);
    }
}  

