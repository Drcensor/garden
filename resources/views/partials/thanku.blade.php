</div>
<div class="content">

                     @include ('../partials/nav')

           
                    <div class="title m-b-md">
                       {{ config('app.name', 'Garden') }}<br />


                    </div>

                        <div class="container">

                            

                                 <h1>Your purchase Information {{$users = Auth::user()->firstname}} {{$users = Auth::user()->lastname}}</h1>

                                 <div class="containers">
                                           
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>{{$users = Auth::user()->firstname}}</td>
                                        <td>{{$users = Auth::user()->lastname}}</td>
                                        <td>{{$users = Auth::user()->email}}</td>
                                      </tr>
                                    </tbody>
                                  </table>

                              </div>
                        </div>
                   


                   

                        <div class="containers">

                         

                                     <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Quantity</th>
                                        <th>Plant Name</th>
                                        <th>Price</th>
                                        <th>Cancel</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                     
                                        
                                         @foreach($products as $purss)
                        
                                       <tr>                                                                                 
                                              <td>{{$purss->quantity}}</td> 
                                       
                                              <td>{{ $purss->plant }}</td>

                                              <td>{{ $purss->price  }}</td>

                                              <td> <button type="submit" class="btn btn-primary"> cancel </button></td>

                                        </tr>

                                         @endforeach      
                                     
                                    </tbody>
                        </table>

                         </div>

                    </div>
                           
                        

            </div><!-- end of content-->