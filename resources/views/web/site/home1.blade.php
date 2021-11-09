@extends('web.site.layout')
@section('content')
<div class="col-md-8">
                        <h2>Trực tuyến</h2>
                        <!-- <div class="row cn-slider"> -->
                        <div class="embed-responsive embed-responsive-16by9"> 
    //add video code 
    
    <iframe  src="https://www.youtube.com/embed/VK8nSoudxKg"
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             </div> 
                        <!-- </div> -->
                        <h2>Tin Tức</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{asset('static/site/img/news/news-350x223-1.jpg')}}" />
                                    <div class="cn-title">
                                        <a href="">Xin Chào bạn</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{asset('static/site/img/news/news-350x223-2.jpg')}}" />
                                    <div class="cn-title">
                                        <a href="">Long Nguyên</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{asset('static/site/img/news/news-350x223-3.jpg')}}" />
                                    <div class="cn-title">
                                        <a href="">Lorem ipsum dolor sit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

        <!-- Top News End-->
@endsection