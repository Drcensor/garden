@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                                    <div class="panel-body">
                                        @if (session('status'))
                        <div class="alert alert-success">
                            <strong>{{ session('status') }}</strong>
                        </div>
                    @elseif(session('message'))
                        <div class="alert alert-success">
                            <strong> Welcome {{ Auth::user()->firstname}} {{Auth::user()->surname }}
                            {{ session('message') }}</strong>
                        </div>

                    @else
                        <div class="alert alert-success">
                            <strong> 
                            What Would You Like to Do Next {{ Auth::user()->firstname}} {{Auth::user()->surname }}?
                            </strong>
                        </div>
                    @endif
                                    </div>

                              <div>
                                    There are some great bargains to be had!
                             </div>               
                          </div>
                        </div>
                     </div>
                  </div>

                <div class="container">
                     <div class=" row">
                         <div class="col-md-8 col-md-offset-2">
                             <div class="panel panel-default">
                                  <div class="panel-heading">Offers</div>

                                        <div class="panel-body">
                   

                  
                                        </div>

                                     <div>
                                        There are some great bargains to be had!
                                   </div>
                                </div>                 
                            </div>
                        </div>
                    </div>
                </div>
@endsection
