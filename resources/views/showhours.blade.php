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
                <tr>
                <?php 
                $m = $_GET['month']; #取得從viewhours的month
                $d = $_GET['day'];  #取得從viewhours的day
                $count = 0;  //計數是否有資料,0為沒資料,1則有
                foreach ($hours as $hour) {   
                    //如果有資料則if成立
                    if ( $m == substr($hour->date_id,5,2) and $d == substr($hour->date_id,8,2)){  
                        $emp_ids = App\Date::where('Date','=',$hour->date_id)->get(); #取得資料表Date
                        $emp_id = $emp_ids[0]["employee_id"]; #取得資料表Date->employee_id
                        $id = App\Employee::where('id','=',$emp_id)->get();
                        $Name = $id[0]["Name"];
                        $count = 1;
                        echo '<th>'.$Name.'</th>';
                    }
                }
                if($count == 0){   #如果沒有該筆資料
                    echo "資料不存在";
                }
                ?>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>

    



@stop
<!--echo $_GET['month'];-->
