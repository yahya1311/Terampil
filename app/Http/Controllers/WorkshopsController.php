<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Workshop;

class WorkshopsController extends Controller
{
    private $limit = 4;
    private $upload_dir = 'public/uploads';
    
    public function __construct()
    {
        $this->upload_dir = base_path() . '/' . $this->upload_dir;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($id_kategori = ($request->get('kategori_id'))) {
            // $workshops = Workshop::where('kategori_id', $id_kategori)->paginate($this->limit);
            $workshops = Workshop::where('kategori_id', $id_kategori)->orderBy('id', 'desc')->paginate($this->limit);
        }
        else {
            // $workshops = Workshop::paginate($this->limit);
            $workshops = Workshop::orderBy('id', 'desc')->paginate($this->limit);
        }
        // $workshops = Workshop::paginate(1);
        //dd($workshops);

        return view('workshops.index', compact('workshops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function getRequest(Request $request)
    {
        $data = $request->all();
 
        if ($request->hasFile('photo'))
        {
            $photo       = $request->file('photo');
            $fileName    = $photo->getClientOriginalName();
            $destination = $this->upload_dir;
            $photo->move($destination, $fileName);
 
            $data['photo'] = $fileName;
        }
        return $data;
     }
}
