@extends('layouts.master')
@section('title','查詢員工時數')
@section('content')
<form action="{{ action('HoursController@show') }}" method="get">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header"><h1>查詢日期</h1></div>
        <div class="card-body p-1">
          <table class="table table-hover m-0">
                <tr>
                    <th><h2>月份 : </h2></th>
                    <th><h2><select name = "month" size = "1">
                        <option value="01">1</option>
                        <option value="02">2</option>
                        <option value="03">3</option>
                        <option value="04">4</option>
                        <option value="05">5</option>
                        <option value="06">6</option>
                        <option value="07">7</option>
                        <option value="08">8</option> 
                        <option value="09">9</option>
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
          <div class="form-group row">
            <div class="col-sm-1"></div>
            <div class="col-sm-7">
                <input type="submit" class="btn btn-primary" value="送出">
            </div>
            <div class="col-sm-3">
                <input type="submit" class="btn btn-warning" value="取消" name="cancel">
            </div>
        </div> 
        </div>
      </div>
    </div>
  </div>
</form>
@stop
