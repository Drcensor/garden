 <div class="content">

		             @include ('../partials/nav')

           
            	                <div class="title m-b-md">
            	                   {{ config('app.name', 'Garden') }}<br />
            	                </div>


	                <div class="links">

	                	  <h1>Your Accounts Information</h1>

	                	<strong>First name: </strong>{{$users = Auth::user()->firstname}}<br />
	                    <strong>Last name:  </strong> {{$users = Auth::user()->lastname}}<br />
	                    <strong>Email:      </strong>{{$users = Auth::user()->email}}<br />
	                    <strong>Created on: </strong>{{$users = date('d-m-Y', strtotime(Auth::user()->created_at)) }}<br />
	                </div>


                     <div class="links">

                          <h1>Your purchase Information {{$users = Auth::user()->firstname}} {{$users = Auth::user()->lastname}}</h1>
                           
                          <div class="containers">

                        
                                     <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Quantity</th>
                                        <th>Plant Name</th>
                                        <th>Price</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                     
                                        @foreach( $product as $purss )
                        
                                       <tr>                                                                                 
                                              <td>{{$purss->quantity}}</td> 
                                       
                                              <td>{{ $purss->plant }}</td>

                                              <td>{{ $purss->price  }}</td>

                                        </tr>

                                         @endforeach      
                                     
                                    </tbody>
                        </table>

                         </div>
 
                           
                        

            </div><!-- end of container-->

            </div><!-- end of content-->
            <div class='footer'></div>