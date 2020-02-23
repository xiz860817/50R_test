@extends('layouts.master')
@section('title','查詢員工時數')
@section('content')

  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">查詢日期</div>
        <div class="card-body p-1">
          <table class="table table-hover m-0">
              <h2>
                <tr>
                    <th>月份 : </th>
                    <th><select name = "month" size = "1">
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
                        </select>
                    </th>
                    <th>月</th>
                </tr>
                <tr>
                    <th>日期 : </th>
                    <th><select name = "day" size = "1">
                        <?php for ($i = 1;$i<=31;$i++){ 
                        echo "<option value= $i>$i</option>";
                        }
                        ?>
                        </select>
                    </th>
                    <th>日</th>
                </tr>
              </h2>
          </table>
        </div>
      </div>
    </div>
  </div>
@stop