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
		            if(strlen($d)==1){$z = 0;$d = $z.$d ;echo $d;} //把單數的day變成雙數顯示
                $count = 0;  //計數是否有資料,0為沒資料,1則有
                foreach ($dates as $date) {  
                    //如果有資料則if成立
                    if ( $m == substr($date->Date,5,2) and $d == substr($date->Date,8,2)){  
                        $date_ids = App\Hours::where('date_id','=',$date->employee_id)->get(); #取得資料表Date
                        $date_id = $date_ids[0]["Hours"]; #取得資料表Hours->Hours
                        $id = App\Employee::where('id','=',$date->employee_id)->get(); #取的Employee的Name
                        $Name = $id[0]["Name"];
                        $count = 1;
                        echo '<th>'.$Name.'</th>';
                        echo '<th>'.$date->Date.'</th>';
                        echo '<th>'.$date_id->Hours.'</th>';
                    }
                }
                if($count == 0){   #如果沒有該筆資料
                    echo "<th>資料不存在</th>";
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
