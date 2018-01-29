</div>
 <div class="content">

	                <div class="links">

                  <div class="containers">

	                	 <h1> Accounts: Information of New Users Less Than a Month Old</h1>

                      <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Created On</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                                                                                                
                                       @foreach($users as $user)                                       
                                         {{csrf_field()}}

                                          @if( date("d/m/Y") >= date('d-m-Y', strtotime(($user->created_at) . '+ 30 day'))  )

                                       <tr>
                    	                	    <td>{{$user->firstname}} {{$user->lastname}}</td>
                    	                      <td>{{$user->email}}</td>
                    	                      <td>{{$user->created_at}}</td>
                                            
                                        </tr>
                                           @endif

                                         @endforeach
                                    </tbody>
                        </table>
                        <a href="adminpaneledituser"><button type="submit" class="btn btn-success btn-xs" > Edit Users Page </button></a>
	                  </div>
                    </div>


                     <div class="links">                         
                           <div class="containers">

                           <h1> Purchase Information of Users From The Last 6 Days</h1> 

                                     <table class="table table-striped" >
                                                  <thead>
                                                    <tr>
                                                       <tr>
                                                          <th>Order ID</th>
                                                          <th>User ID</th>
                                                          <th>Quantity</th>
                                                          <th>Plant Name</th>
                                                          <th>Price</th>
                                                          <th>Total Price</th>
                                                          <th>Time Purchased</th>
                                                          
                                                       </tr>
                                                    </tr>
                                                  </thead>
         <tbody>

                   @foreach($products as $purss)
              
                   

                                           {{csrf_field()}}
                      @if( date("d/m/Y") <= date('d-m-Y', strtotime(($purss->created_at) . '+ 6 day'))  )
              <tr>
                  <td>{{$purss->id}}  </td> 
                  <td>{{$purss->users_id}}  </td>  
                  <td>{{$purss->quantity}} </td>
                  <td>{{ $purss->plant }} </td>
                  <td>£ {{ $purss->price  }}</td>
                   <td>£ {{$purss->quantity * $purss->price  }}</td>
                  <td>{{$users = date('d-m-Y', strtotime($purss->created_at)) }}</td>
                 
                </tr>
                 
                 @endif
                  @endforeach
          </tbody>
                        </table>
                   <a href="adminpurchases"><button type="submit" class="btn btn-success btn-xs" > Edit Purchases Page </button></a>

                        </div>
                        </div><!-- end of container-->
                        </div><!-- end of content-->


          