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
                <?php 
                $m = $_GET['month'];
                $d = $_GET['day'];
                $count = 0;
                foreach ($hours as $hour) {
                    if ( $m == substr($hour->date_id,5,2) and $d == substr($hour->date_id,8,2)){
                        $emp_ids = App\Date::where('Date','=',$hour->date_id)->get(); #取得資料表Date
			$emp_id = $emp_ids[0]["employee_id"]; #取得資料表Date->employee_id
                        echo $emp_id;
			$id = App\Employee::where('id','=',$emp_id)->get();
			echo $id[0]["Name"];
                        $count = 1;
                        
                    }
                }
                if($count == 0){
                    echo "資料不存在";
                }
                /*
                foreach ($emps as $emp) {
                    # code...
                    echo $emp->Name;
                }*/
                ?>

    



@stop
<!--echo $_GET['month'];-->
