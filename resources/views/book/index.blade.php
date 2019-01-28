@extends('layouts.public')
@section('style')
<link href="{{ asset('css/book-grid.css') }}" rel="stylesheet">
@endsection
@section('content')


    <div class="panel panel-primary ">
        <div class="panel-heading">
            <h3 class="panel-title">Pilih Seat</h3>
        </div>
        <div class="panel-body grid-2">
            <div class="color-swatches">
                <div class="swatches">
                    <div class="clearfix">
                        <div class="pull-left light" style="background-color:#ED5565"></div>
                        <div class="pull-right dark" style="background-color:#ED5565"></div>
                    </div>
                    <div class="infos">
                        <h4>namaseat</h4>
                        <p><span class="badge badge-danger">DIPAKE</span>.</p>
                    </div>
                    <div class="infos">
                            <div class="panel-group panel-group-lists " id="accordion2" style="">
                                    <div class="panel">
                                      <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                            Lain - lain
                                          </a>
                                        </h4>
                                      </div>
                                      <div id="collapseFour" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Waktu mulai</td>
                                                        <td>08:00</td>
                                                    </tr>
                                                    <tr>
                                                            <td>Perkiraan Selesai</td>
                                                            <td>08:30</td>
                                                    </tr>
                                                    <tr>
                                                            <td colspan="2"><h4>layanan</h4></td>
                                                           
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"><span class="badge badge-primary">potong</span><span class="badge badge-primary">pijat</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                      </div>
                                    </div>
                                  
                                  </div>
                    </div>

                </div>
            </div>
            <div class="color-swatches">
                <div class="swatches">
                    <div class="clearfix">
                        <div class="pull-left light" style="background-color:#8CC152"></div>
                        <div class="pull-right dark" style="background-color:#8CC152"></div>
                    </div>
                    <div class="infos">
                        <h4>namaseat</h4>
                        <p><span class="badge badge-success">ada</span>.</p>
                    </div>
                    <hr class="dashed">
                    <div class="infos">
                        <h4>Bisa Melayani</h4>

                        <p><span class="badge badge-primary">potong</span><span class="badge badge-primary">Pijat</span>.</p>
                    </div>
                    <hr class="dashed">
                    <div class="infos btn-success">
                        <span class="">PILIH SEAT</span>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Pilih Layanan</h3>
            </div>
            <div class="panel-body">
                <div class="well">
                        <div class="label">Layanan A</div>
                        <input type="checkbox" name="vehicle1" value="Bike"> Cukur<br>
                </div>
                <div class="well">
                        <div class="label">Layanan A</div>
                        <input type="checkbox" name="vehicle1" value="Bike"> Pijat<br>
                </div>
                <div class="well">
                        <div class="label">Layanan A</div>
                        <input type="checkbox" name="vehicle1" value="Bike"> Pijat<br>
                </div>
            </div>
    </div>


           
                    <div class="panel panel-default card">
                            <div class="panel-heading">
                              <h3 class="panel-title">Booking Anda</h3>
                            </div>
                            <div class="panel-body card">
                                    <div class=" card--content"> 
                                            <div class="service">
                                        
                                                <div class="infos">
                                                    <h4>14.000</h4>
                                                    <p><span class="badge badge-primary">cukur</span></p>
                                                </div>
                                                <hr >
                                                <button>delete</button>
                                            </div>
                                    </div>
                                    <div class=" card--content"> 
                                            <div class="service">
                                        
                                                <div class="infos">
                                                    <h4>14.000</h4>
                                                    <p><span class="badge badge-primary">cukur</span></p>
                                                </div>
                                                <hr >
                                                <button>delete</button>
                                            </div>
                                    </div>
                                    <div class=" card--content"> 
                                            <div class="service">
                                        
                                                <div class="infos">
                                                    <h4>14.000</h4>
                                                    <p><span class="badge badge-primary">cukur</span></p>
                                                </div>
                                                <hr >
                                                <button>delete</button>
                                            </div>
                                    </div>
                                    <div class=" card--content"> 
                                            <div class="service">
                                        
                                                <div class="infos">
                                                    <h4>14.000</h4>
                                                    <p><span class="badge badge-primary">cukur</span></p>
                                                </div>
                                                <hr >
                                                <button>delete</button>
                                            </div>
                                    </div>
                                    <div class=" card--content"> 
                                            <div class="service">
                                        
                                                <div class="infos">
                                                    <h4>14.000</h4>
                                                    <p><span class="badge badge-primary">cukur</span></p>
                                                </div>
                                                <hr >
                                                <button>delete</button>
                                            </div>
                                    </div>
                                    <div class=" card--content"> 
                                            <div class="service">
                                        
                                                <div class="infos">
                                                    <h4>14.000</h4>
                                                    <p><span class="badge badge-primary">cukur</span></p>
                                                </div>
                                                <hr >
                                                <button>delete</button>
                                            </div>
                                    </div>
                                    <div class=" card--content"> 
                                            <div class="service">
                                        
                                                <div class="infos">
                                                    <h4>14.000</h4>
                                                    <p><span class="badge badge-primary">cukur</span></p>
                                                </div>
                                                <hr >
                                                <button>delete</button>
                                            </div>
                                    </div>
                                    <div class=" card--content"> 
                                            <div class="service">
                                        
                                                <div class="infos">
                                                    <h4>14.000</h4>
                                                    <p><span class="badge badge-primary">cukur</span></p>
                                                </div>
                                                <hr >
                                                <button>delete</button>
                                            </div>
                                    </div>
                                    <div class=" card--content"> 
                                            <div class="service">
                                        
                                                <div class="infos">
                                                    <h4>14.000</h4>
                                                    <p><span class="badge badge-primary">cukur</span></p>
                                                </div>
                                                <hr >
                                                <button>delete</button>
                                            </div>
                                    </div>
                                    <div class=" card--content"> 
                                            <div class="service">
                                        
                                                <div class="infos">
                                                    <h4>14.000</h4>
                                                    <p><span class="badge badge-primary">cukur</span></p>
                                                </div>
                                                <hr >
                                                <button>delete</button>
                                            </div>
                                    </div>
                            </div>
                                
                    </div>
             
              




    </div>
    <div>
        <input type="submit" class="btn-success btn btn-block book" value="Book">
   
    
    @endsection
