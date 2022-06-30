<?php

namespace App\Http\Controllers\Api;

use App\Models\Todo\Todo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\{Request, JsonResponse};

class TodoController extends Controller
{

		public function __construct(Todo $todo)
		{
				$this->todo = $todo;
		}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				$data = $this->todo->all();

				return response()->json([
					'status'	=> true,
					'code'		=> 201,
					'message'	=> 'List Todo',
					'data'		=> $data
				], 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): JsonResponse
    {
				$data = $this->validate($request, [
					'name'        => 'required|max:100',
					'description' => 'nullable'
				]);

				try {
					//!menyimpan data ke database
					$todo = Todo::create($data);
					// $todo = $this->todo->create($data);			

					//!pesan sukses
					return response()->json([
						'status'	=> true,
						'code'		=> 201,
						'message'	=> 'Data Berhasil Di Simpan',
						'data'		=> $todo
					], 201);

				} catch (\Exception $e) {

					//!pesan eror
					return response()->json([
						'status'	=> false,
						'message'	=> 'Data Tidak Berhasil di Input'
					], 409);
				}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): JsonResponse
    {
        $data = Todo::findOrFail($id);
				// $data = $this->todo->findOrFail($id);

				return response()->json([
					'status'	=>	true,
					'code'		=>	201,
					'message'	=>	'Get Todo',
					'data'		=>	$data
				], 201);
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
}
