@extends('layout.page')

@section('content')

<div class="row">

   

    <div class="col-md-12 col-sm-12 ">
      <div class="dashboard_graph">

        <div class="row x_title">
          <div class="col-md-6">
            <h3>Network Activities <small>Graph title sub-title</small></h3>
          </div>
          <div class="col-md-6">
            <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
              <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
              <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
            </div>
          </div>
        </div>

        <div class="col-md-9 col-sm-9 ">
          <div id="chart_plot_01" class="demo-placeholder"></div>
        </div>
        <div class="col-md-3 col-sm-3  bg-white">
          <div class="x_title">
            <h2>Top Campaign Performance</h2>
            <div class="clearfix"></div>
          </div>

          <div class="col-md-12 col-sm-12 ">
            <div>
              <p>Facebook Campaign</p>
              <div class="">
                <div class="progress progress_sm" style="width: 76%;">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                </div>
              </div>
            </div>
            <div>
              <p>Twitter Campaign</p>
              <div class="">
                <div class="progress progress_sm" style="width: 76%;">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 ">
            <div>
              <p>Conventional Media</p>
              <div class="">
                <div class="progress progress_sm" style="width: 76%;">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                </div>
              </div>
            </div>
            <div>
              <p>Bill boards</p>
              <div class="">
                <div class="progress progress_sm" style="width: 76%;">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="clearfix"></div>
      </div>


      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Launch demo modal
      </button>

    </div>

  </div>


@endsection