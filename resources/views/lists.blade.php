@extends('layouts.master')
@section('title','員工資料')
@section('content')
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">50嵐華夏高鐵店</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="member">員工資料</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">查詢日期</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">調整薪資</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">新增員工資料</a>
      </li> 
    </ul>
  </div>  
</nav>
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
