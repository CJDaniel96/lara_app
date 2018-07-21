@extends('layouts.admin')
@section('content')

	<!--面包屑导航 开始-->
	<div class="crumb_warp">
		<!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
		<i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首頁</a> &raquo; 系統基本信息
	</div>
	<!--面包屑导航 结束-->
	
	<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="#"><i class="fa fa-plus"></i>新增文章</a>
                <a href="#"><i class="fa fa-recycle"></i>批量刪除</a>
                <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->

	
    <div class="result_wrap">
        <div class="result_title">
            <h3>系统基本信息</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>操作系統</label><span>{{PHP_OS}}</span>
                </li>
                <li>
                    <label>運行環境</label><span>{{$_SERVER['SERVER_SOFTWARE']}}</span>
                </li>
                <li>
                    <label>PHP運行方式</label><span>{{$_SERVER['SERVER_PROTOCOL']}}</span>
                </li>
                <li>
                    <label>設計版本</label><span>v-0.1</span>
                </li>
                <li>
                    <label>上傳附件限制</label><span>{{get_cfg_var("upload_max_filesize")}}</span>
                </li>
                <li>
                    <label>台北時間</label><span>{{date("Y-m-d G:i:s")}}</span>
                </li>
                <li>
                    <label>服務器域名/IP</label><span>{{$_SERVER['SERVER_NAME']}} [ {{$_SERVER['SERVER_ADDR']}} ]</span>
                </li>
                <li>
                    <label>Host</label><span>{{$_SERVER['SERVER_ADDR']}}</span>
                </li>
            </ul>
        </div>
    </div>


    <div class="result_wrap">
        <div class="result_title">
            <h3>使用幫助</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>個人部落格</label><span><a href="http://mblog.paradisebird.me">mblog.paradisebird.me</a></span>
                </li>
                <li>
                    <label>Facebook: </label><span><a>cqr96@hotmail.com.tw</a></span>
                </li>

            </ul>
        </div>
    </div>
	<!--结果集列表组件 结束-->

@endsection