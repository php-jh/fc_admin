@extends('admin.layouts.admin')

@section('title', '没有权限')

@section('content')
    <div class="error-page">
        <h2 class="headline text-yellow"> 403</h2>

        <div class="error-content" style="padding-top: 30px">
            <h3><i class="fa fa-warning text-yellow"></i>  没有权限.</h3>

            <p>
                没有权限.
                此时您可以返回<a href="{{url('admin')}}"> 首页 </a> 或者返回 <a href="{{$previousUrl}}"> 上一页 </a>.
            </p>

        </div>
        <!-- /.error-content -->
    </div>
    <!-- /.error-page -->
@endsection