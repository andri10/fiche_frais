@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="alert" style="background:#B0C4DE;">
            <b> Bonjour - {{ Auth::user()->name }}</b> {{ Auth::user()->first_name }} [{{ Auth::user()->role }}]
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date : {{ $date->format('j M Y') }}
        </div>

        <div class="row mb-4 mt-4">
            <div class="col-6">
                
                <a href="{{ route('missions.create') }}" class="btn btn-lg btn-success"><i class="material-icons">add_box</i> Créer une mission</a>
                <a href="{{ route('note.create') }}" class="btn btn-lg btn-success"><i class="material-icons">add_box</i> Ajouter une note</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">card_travel</i>
                        </div>
                        <p class="card-category">Total Mission</p>
                        <h3 class="card-title">{{ $x }}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> infos
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">library_books</i>
                        </div>
                        <p class="card-category">Note de frais</p>
                        <h3 class="card-title">{{ $y }}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">local_offer</i> Lorem ipsum
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">directions_car</i>
                        </div>
                        <p class="card-category">Frais kilométrique</p>
                        <h3 class="card-title">{{ $z }}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">local_offer</i> Lorem ipsum
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">info_outline</i>
                        </div>
                        <p class="card-category">Mes dépenses remboursables</p>
                        <h3 class="card-title">@money($e) EUR</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-danger">warning</i>
                            <a href="#pablo">N'oubliez pas de saisir vos fiches de frais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header card-header-tabs card-header-rose">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <span class="nav-tabs-title">Infos :</span>
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#profile" data-toggle="tab">
                                            <i class="material-icons">card_travel</i> Missions
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#messages" data-toggle="tab">
                                            <i class="material-icons">library_books</i> Notes
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#settings" data-toggle="tab">
                                            <i class="material-icons">directions_car</i> Frais KM
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                                Lorem Elsass ipsum knepfle nüdle Strasbourg flammekueche knack gewurztraminer tristique météor nullam leo rucksack porta mänele schneck placerat consectetur leverwurscht und mamsell et tellus kartoffelsalad commodo hopla lacus sit hopla habitant salu aliquam merci vielmols wie tellus sagittis Morbi munster mollis amet ante Pfourtz ! lotto-owe ch'ai messti de Bischheim Carola suspendisse Oberschaeffolsheim so sit turpis, geïz bissame semper tchao bissame ac vulputate dui id, vielmols, Gal ! hoplageiss Racing. geht's morbi auctor, kougelhopf hopla rhoncus eget quam, amet elementum Hans Salut bisamme Richard Schirmeck wurscht Huguette gal rossbolla libero, dolor purus Coopé de Truchtersheim baeckeoffe yeuh. Pellentesque sed blottkopf, in, sit DNA, elit Kabinetpapier eleifend amet, turpis réchime jetz gehts los quam. ornare schnaps Gal. varius condimentum risus, pellentesque id adipiscing libero. non Chulia Roberstau chambon Verdammi gravida ac senectus sed ftomi! Spätzle Heineken bredele ornare schpeck dignissim Salu bissame s'guelt Yo dû. leo Chulien Mauris non hopla hop barapli ullamcorper kuglopf Christkindelsmärik Miss Dahlias Oberschaeffolsheim libero, Wurschtsalad picon bièreWurschtsalad picon bièreWurschtsalad picon bièreWurschtsalad picon bièreWurschtsalad picon bièreWurschtsalad picon bièreWurschtsalad picon bièreWurschtsalad
                            </div>
                            <div class="tab-pane" id="messages">
                                <p>Lorem Salu bissame ! Wie geht's les samis ? Hans apporte moi une Wurschtsalad avec un picon bitte, s'il te plaît.
                                    Voss ? Une Carola et du Melfor ? Yo dû, espèce de Knäckes, ch'ai dit un picon !</p>
                                <p>Hopla vous savez que la mamsell Huguette, la miss Miss Dahlias du messti de Bischheim était au Christkindelsmärik en compagnie de Richard Schirmeck (celui qui a un blottkopf), le mari de Chulia Roberstau, qui lui trempait sa Nüdle dans sa Schneck ! Yo dû, Pfourtz ! Ch'espère qu'ils avaient du Kabinetpapier, Gal !</p>
                                <p>Yoo ch'ai lu dans les DNA que le Racing a encore perdu contre Oberschaeffolsheim. Verdammi et moi ch'avais donc parié deux knacks et une flammekueche. Ah so ? T'inquiète, ch'ai ramené du schpeck, du chambon, un kuglopf et du schnaps dans mon rucksack. Allez, s'guelt ! Wotch a kofee avec ton bibalaekaess et ta wurscht ? Yeuh non che suis au réchime, je ne mange plus que des Grumbeere light et che fais de la chym avec Chulien. Tiens, un rottznoz sur le comptoir.</p>
                            </div>
                            <div class="tab-pane" id="settings">
                                Alii nullo quaerente vultus severitate adsimulata patrimonia sua in inmensum extollunt, cultorum ut puta feracium multiplicantes annuos fructus, quae a primo ad ultimum solem se abunde iactitant possidere, ignorantes profecto maiores suos, per quos ita magnitudo Romana porrigitur, non divitiis eluxisse sed per bella saevissima, nec opibus nec victu nec indumentorum vilitate gregariis militibus discrepantes opposita cuncta superasse virtute. </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card card-chart">
                    <div class="card-header card-header-icon card-header-success">
                        <div class="card-icon">
                            <i class="material-icons">pie_chart</i>
                        </div>
                        <h4 class="card-title">Remboursement du 01/12/2019 au 31/12/2019</h4>
                    </div>
                    <div class="card-body">
                        <div id="chartPreferences" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="230px" class="ct-chart-pie" style="width: 100%; height: 230px;">
                                <g class="ct-series ct-series-a">
                                    <path d="M223.028,195.187A110,110,0,1,0,298.328,5L298.328,115Z" class="ct-slice-pie" ct:value="62"></path>
                                </g>
                                <g class="ct-series ct-series-b">
                                    <path d="M257.834,12.725A110,110,0,0,0,223.308,195.449L298.328,115Z" class="ct-slice-pie" ct:value="32"></path>
                                </g>
                                <g class="ct-series ct-series-c">
                                    <path d="M298.328,5A110,110,0,0,0,257.478,12.867L298.328,115Z" class="ct-slice-pie" ct:value="6"></path>
                                </g>
                                <g><text dx="349.46583172385385" dy="135.24685039765728" text-anchor="middle" class="ct-label">62%</text><text dx="244.30232620992211" dy="104.6940276977852" text-anchor="middle" class="ct-label">32%</text><text dx="288.0221526977851" dy="60.974201209922136" text-anchor="middle" class="ct-label">6%</text></g>
                            </svg></div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="card-category">Legend</h6>
                            </div>
                            <div class="col-md-12">
                                <i class="fa fa-circle text-info"></i> Note
                                <i class="fa fa-circle text-warning"></i> Frais km
                                <i class="fa fa-circle text-danger"></i> Remboursement
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();
    });
</script>
@endpush
