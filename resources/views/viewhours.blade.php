@extends('layouts.master')
@section('title','查詢員工時數')
@section('content')
<form action = "HoursController@show" method="post">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header"><h1>查詢日期</h1></div>
        <div class="card-body p-1">
          <table class="table table-hover m-0">
                <tr>
                    <th><h2>月份 : </h2></th>
                    <th><h2><select name = "month" size = "1">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option> 
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        </select></h2>
                    </th>
                    <th><h2>月</h2></th>
                </tr>
                <tr>
                    <th><h2>日期 : </h2></th>
                    <th><h2><select name = "day" size = "1">
                        <?php for ($i = 1;$i<=31;$i++){ 
                        echo "<option value= $i>$i</option>";
                        }
                        ?>
                        </select></h2>
                    </th>
                    <th><h2>日</h2></th>
                </tr>
          </table>
          <td><a href="{{ action('HoursController@show') }}" class="btn btn-success btn-sm">查詢</a></td>
        </div>
      </div>
    </div>
  </div>
</form>
@stop
