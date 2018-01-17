</div>
 <div class="content">

	                <div class="links">

                  <div class="containers">

	                	 <h1> Accounts: Information of New Users</h1>

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
                        <a href="adminpaneledituser"><button type="submit" class="btn btn-success" > Edit Users Page </button></a>
	                  </div>
                    </div>


                     <div class="links">                         
                           <div class="containers">

                           <h1> Purchase Information of Users</h1>

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
                                                          <th>Ordered</th>
                                                          <th>Canceled</th>
                                                       </tr>
                                                    </tr>
                                                  </thead>
         <tbody>

                   @foreach($products as $purss)
              
                   <form method="post" action="adminpanel">

                                           {{csrf_field()}}

              <tr>
                  <td><input class="bigger1" type="text" name="id"  value="{{$purss->id}} "/> </td> 
                  <td><input class="bigger1" type="text" name="user_id"  value="{{$purss->users_id}} "/> </td>  
                  <td><input class="bigger1" type="text" name="quantity"  value="{{$purss->quantity}} "/></td>
                  <td><input class="bigger" type="text" name="plant"  value="{{ $purss->plant }}"/> </td>
                  <td><input class="bigger1" type="text" name="price" value="£ {{ $purss->price  }}"/></td>
                   <td><input class="bigger1" type="text" name="price" value="£ {{$purss->quantity * $purss->price  }}"/></td>
                  <td>{{$users = date('d-m-Y', strtotime($purss->created_at)) }}</td>
                  <td>
                      @if( date("d/m/Y") <= date('d-m-Y', strtotime(($purss->created_at) . '+ 1 day'))  )

                                     <button type="submit" class="btn btn-danger" > Delete </button>                              
                                 @else
                                     <a href="#" data-toggle="tooltip" title="Your order is on it's way!"><button type="submit" class="btn btn-success" > Ordered </button> </a>                 
                        @endif
                   </td>
                   <td> <button type="submit" class="btn btn-danger" > Delete </button>  </td>
                </tr>
                 
                  </form>
                  @endforeach
          </tbody>
                        </table>

                        </div>
                        </div><!-- end of container-->
                        </div><!-- end of content-->


          