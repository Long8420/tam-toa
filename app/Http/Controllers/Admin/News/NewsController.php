<?php

namespace App\Http\Controllers\Admin\News;
use App\Models\Admin\News\NewsModel;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $all_new =  DB::table('tbl_news')->get();
        $manager_news =view('admin.news.show_news')->with(compact('all_new'));
        return view('admin.public.admin_layout')->with(compact('manager_news'));
        // return view('admin.news.show_news');
    }
    public function index_create(){
        return view('admin.news.add_news');
    }
    public function save_news()
    {   
        //kiểm tra giá trị nhập vào
        $request ->validate([
            'name_brand_product'=>'required',
            'desc_brand_product'=>'required',
            'keyword_brand_product'=>'required',
            'slug_brand_product'=>'required',
        ],[
            'name_brand_product.required'=>'Bạn vui lòng nhập name thương hiệu',
            'desc_brand_product.required'=>'Bạn vui lòng nhập chi tiết danh mục thương hiệu',
            'keyword_brand_product.required'=>'Bạn vui lòng nhập keyword thương hiệu',
            'slug_brand_product.required'=>'Bạn vui lòng nhập slug thương hiệu',
        ]);
        //
        return view('admin.news.show_news');
       
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
}
