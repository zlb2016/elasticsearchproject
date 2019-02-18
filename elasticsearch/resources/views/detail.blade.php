@extends('layouts.main')
@section('content')
    @if($id)
        <!-- <div class="row text-center">
            <div class="col-md-12">
                <div class="panel panel-default list-panel search-results">
                    <div class="panel-heading">
                        <h3 class="panel-title ">
                            <i class="fa fa-search"></i> 关于 “<span class="highlight">{{ $paginator->title }}</span>” 的详情
                        </h3>
                    </div>

                    <div class="panel-body ">
                            <div class="result">
                                <h2 class="title"> 
                                    {{ $paginator->title }}   
                                </h2>
                                <div class="info">
                                </div>
                                <div class="desc">  
                                    <p>{{ $paginator->content }}</p>
                                </div>
                                <hr>
                            </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="panel panel-default list-panel">
        <div class="panel-heading">
            <h3 class="panel-title ">
                <i class="fa fa-search"></i> 关于 “<span class="highlight">{{ $paginator->title }}</span>” 的详情
            </h3>
        </div>
        <h1 style="text-align: center; margin-top: 50px;">{{ $paginator->title }}</h1>
        <hr>
        <div id="date" style="text-align: right;">
            {{ $paginator->updated_at }}
        </div>
        <div id="content" style="margin: 20px;">
            <p>
                {{ $paginator->content }}
            </p>
        </div>
        </div>
    @else
    @endif
@endsection