@extends('layouts.master')
@section('title','客戶列表')
@section('content')
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">客戶列表</div>
        <div class="card-body p-1">
          <table class="table table-hover m-0">
            <thead class="thead-darty">
              <tr>
                <th>員工編號</th>
                <th>員工姓名</th>
                <th>員工電話</th>
                <th>員工地址</th>
                <th>員工時薪</th>
                <th>員工時數</th>
              </tr>
            </thead>
            <tbody>
              
              <?php
                foreach ($lists as $user){
                    echo "<tr>";
                    echo "<td>".$user->id."</td>";
                    echo "<td>".$user->Name."</td>";
                    echo "<td>".$user->Phone."</td>";
                    echo "<td>".$user->Address."</td>";
                    echo "<td>".$user->HourlyPay."</td>";
                    echo "<td>".$user->Hours."</td>";
                    echo "</tr>";
                }
                ?>                  
              
            </tbody>
          </table>
        </div>  
      </div>
    </div>
  </div>
  @stop
