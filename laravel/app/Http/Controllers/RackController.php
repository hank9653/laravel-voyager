<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BreadService;
use \TCG\Voyager\Facades\Voyager;
class RackController extends Controller
{

    private $slug;
    private $breadService;

    public function __construct(BreadService $breadService)
    {
        $this->breadService = $breadService;
        $this->slug = 'racks';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $this->breadService->index($request, $this->slug);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return $this->breadService->create($request, $this->slug);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->breadService->store($request, $this->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        return $this->breadService->show($request, $id, $this->slug);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        // $dataType = Voyager::model('DataType')->where('slug', '=', 'racks')->first();
        
        // if(Voyager::can('copy_racks')){
        //     // Check permission
        //     $this->authorize('copy', app($dataType->model_name));
        //     //return 'ture';
        // }else{
        //     //return 'You don\'t have permission.';
        // }

        //return view('rack');
        return $this->breadService->edit($request, $id, $this->slug);
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
        return $this->breadService->upload($request, $id, $this->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        return $this->breadService->destroy($request, $id, $this->slug);
    }
}
