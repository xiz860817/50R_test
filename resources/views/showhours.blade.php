@extends('layouts.master')
@section('title','顯示員工時數')
@section('content')
    @csrf
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
        <div class="card-header">編輯客戶資料</div>
        <div class="card-body p-1">
                    <?php 
                    echo $_POST['month'];
                    ?>
        </div>
        </div>
    </div>
    </div>

@stop