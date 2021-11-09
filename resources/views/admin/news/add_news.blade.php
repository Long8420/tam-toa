@extends('admin.public.admin_layout')
@section('content')
<section id="main-content">
<section class="wrapper">
	<div class="form-w3layouts">
<div class="row">
            <div class="col-lg-12">
<section class="panel">
                        <header class="panel-heading">
                            THÊM TIN TỨC
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('Admin/save-news')}}" method="POST">
                                <div class="form-group">
                                    <label >Tiêu đề</label>
                                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label >Nội dung</label>
                                    <input type="text" class="form-control"name="content" placeholder="Password">
                                </div>
                                 <div class="form-group">
                                    <label >Tác giả</label>
                                    <input type="text" class="form-control" name ="arthur"placeholder="Password">
                                </div> 
                                <div class="form-group">
                                    <label >id_Danh Mục</label>
                                    <input type="number" class="form-control"  name ="category" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Trạng Thái</label>
                                    <input type="password" class="form-control"  name ="status" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hình ảnh</label>
                                    <input type="file" id="exampleInputFile">
                                </div>

                     
                                <button type="submit" class="btn btn-info">Thêm tin tức</button>
                            </form>
                            </div>

                        </div>
                    </section>
</div>
</div>
</section>
<!-- </section> -->
                    @stop                    