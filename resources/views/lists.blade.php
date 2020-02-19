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
                    echo "<tr>";
                    echo "<td>".$user->id."</td>";
                    echo "<td>".$user->Name."</td>";
                    echo "<td>".$user->Address."</td>";
                    echo "<td>".$user->Phone."</td>";
                    echo "<td>".$user->Hourlypay."</td>";
                    
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
