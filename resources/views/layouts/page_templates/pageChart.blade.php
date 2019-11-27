@extends('layouts.app', ['activePage' => 'notes', 'titlePage' => __('Fiche Frais')])

@section('content')
<div class="content">
    <div class="container-fluid">
    
    <div class="col-md-5">
          <div class="card card-chart">
            <div class="card-header card-header-icon card-header-danger">
              <div class="card-icon">
                <i class="material-icons">pie_chart</i>
              </div>
              <h4 class="card-title">Pie Chart</h4>
            </div>
            <div class="card-body">
              <div id="chartPreferences" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="230px" class="ct-chart-pie" style="width: 100%; height: 230px;"><g class="ct-series ct-series-a"><path d="M223.028,195.187A110,110,0,1,0,298.328,5L298.328,115Z" class="ct-slice-pie" ct:value="62"></path></g><g class="ct-series ct-series-b"><path d="M257.834,12.725A110,110,0,0,0,223.308,195.449L298.328,115Z" class="ct-slice-pie" ct:value="32"></path></g><g class="ct-series ct-series-c"><path d="M298.328,5A110,110,0,0,0,257.478,12.867L298.328,115Z" class="ct-slice-pie" ct:value="6"></path></g><g><text dx="349.46583172385385" dy="135.24685039765728" text-anchor="middle" class="ct-label">62%</text><text dx="244.30232620992211" dy="104.6940276977852" text-anchor="middle" class="ct-label">32%</text><text dx="288.0221526977851" dy="60.974201209922136" text-anchor="middle" class="ct-label">6%</text></g></svg></div>
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-md-12">
                  <h6 class="card-category">Legend</h6>
                </div>
                <div class="col-md-12">
                  <i class="fa fa-circle text-info"></i> Apple
                  <i class="fa fa-circle text-warning"></i> Samsung
                  <i class="fa fa-circle text-danger"></i> Windows Phone
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
</div>
@endsection
