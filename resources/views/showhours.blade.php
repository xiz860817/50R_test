@extends('layouts.master')
@section('title','顯示員工時數')
@section('content')
    @csrf
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
        <div class="card-header">編輯客戶資料</div>
        <div class="card-body p-1">
            <div class="form-group row">
                <div class="col-sm-2"></div>
                <label for="id" class="col-sm-2 col-form-label">員工編號</label>
                    <?php 
                    echo $_POST['month'];
                    ?>
            </div>
        </div>
        </div>
    </div>
</div>
