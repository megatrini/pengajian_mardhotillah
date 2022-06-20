<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Pengajian;
use Exception;
use Illuminate\Http\Request;

class PengajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pengajian::all();
        return response()->json(['message'=>'succes',
            'data'=>$data],200);
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
    $request->validate(
        [
            'tanggal' => 'required',
            'materi' => 'required',
            'penceramah' => 'required',
        ]);
    $pengajian = Pengajian::create($request->all());

    return  response()->json(['message' => 'Succes',
        'data'=> $pengajian], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pengajian::find($id);
        return response()->json($data);
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
        $pengajian = Pengajian::find($id);

        $pengajian->update($request->all());

        return response()->json([
            'message' => 'Success',
            'data' => $pengajian
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $pengajian = Pengajian::find($id);
            $pengajian->delete();
    
            return response()->json([
                'message' => 'Deleted',
                'data' => $pengajian
            ],200);
        }
    }
}