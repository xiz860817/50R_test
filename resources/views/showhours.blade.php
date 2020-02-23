@extends('layouts.master')
@section('title','編輯客戶資料')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">工作時數</div>
        <div class="card-body p-1">
          <table class="table table-hover m-0">
            <thead class="thead-darty">
                <tr>
                    <th>員工姓名</th>
                    <th>日期</th>
                    <th>時數</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hours as $hour) {
                    # code...
                    echo $hour->date_id->format('Y-m-d');
                }
                foreach ($emps as $emp) {
                    # code...
                    echo $emp->Name;
                }
                ?>

    



@stop
<!--echo $_GET['month'];-->