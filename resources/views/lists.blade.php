@extends('layouts.master')
@section('title','員工資料')
@section('content')

  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">員工資料</div>
        <div class="card-body p-1">
          <table class="table table-hover m-0">
            <thead class="thead-darty">
              <tr>
                <th>員工編號</th>
                <th>員工姓名</th>
                <th>員工地址</th>
                <th>員工電話</th>
                <th>員工時薪</th>
              </tr>
            </thead>
            <tbody>
              
              <?php
              foreach ($employees as $user){
              ?>
              <tr>
                <td><?php echo $user->Name ; ?></td>
                <td><?php echo $user->Address ; ?></td>
                <td><?php echo $user->Phone ; ?></td>
                <td><?php echo $user->Hourlypay ; ?></td>
                <td><a href="{{ action('EmployeeController@edit', 
                                ['id'=>$user->id,
                                'Name'=>$user->Name,
                                'Address'=>$user->Address,
                                'Phone'=>$user->Phone,
                                'Hourlypay'=>$user->Hourlypay ]) }}" 
                                class="btn btn-success btn-sm">編輯</a>
                    <?php  
                    $dates = App\Date::where('employee_id','=',$user->id)->get();
                    foreach($dates as $date){ 
                      echo $date;?>
                    <a href="{{ action('EmployeeController@delete', 
                              ['id'=>$user->id,
                              'Name'=>$user->Name,
                              'Address'=>$user->Address,
                              'Phone'=>$user->Phone,
                              'Hourlypay'=>$user->Hourlypay ]),
                              action('DateController@delete', 
                              ['id'=>$date->id])}}"
                              class="btn btn-danger btn-sm">刪除</a></td>       
                               <a href="{{ action('DateController@delete', ['Cusid'=>$customer->Cusid]) }}" class="btn btn-danger btn-sm">刪除</a></td>
                    <?php }  ?>  
              </tr>           
              <?php }  ?>
            </tbody>
          </table>
        </div>  
      </div>
    </div>
  </div>
  @stop
