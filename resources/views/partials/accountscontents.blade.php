</div>
 <div class="content">

		             @include ('../partials/nav')

           
            	                <div class="title m-b-md">
            	                   {{ config('app.name', 'Garden') }}<br />
            	                </div>


	                <div class="links">

                      <h1>Your Accounts Information</h1>

                     <div class="containers">

	                	

                      <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Created On</th>
                                        <th>Edit</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                    	                	    <td>{{$users = Auth::user()->firstname}} {{$users = Auth::user()->lastname}}</td>
                    	                      <td>{{$users = Auth::user()->email}}</td>
                    	                      <td>{{$users = date('d-m-Y', strtotime(Auth::user()->created_at))}}</td>
                                            <td><a href="edituser"><button type="submit" class="btn btn-danger" > Edit </button></a></td>

                                    </tbody>
                        </table>
	                </div></div>


                     <div class="links">

                          <h1>Your purchase Information {{$users = Auth::user()->firstname}} {{$users = Auth::user()->lastname}}</h1>
                           
                           <div class="containers">

                         

                                     <table class="table table-striped">
          <thead>
            <tr>
               <tr>
                  <th>Quantity</th>
                  <th>Plant Name</th>
                  <th>Price</th>
                  <th>Total Price</th>
                  <th>Time Purchased</th>
                  <th>Cancel</th>
               </tr>
            </tr>
          </thead>
          <tbody>

             @foreach($products as $purss)

                 


                    <tr>
                  <input class="bigger" type="hidden" name="id"  value="{{$purss->id}} readonly "/>   
                  <td><input class="bigger" type="text" name="quantity"  value="{{$purss->quantity}} "/></td>
                  <td><input class="bigger" type="text" name="plant"  value="{{ $purss->plant }}"/> </td>
                  <td><input type="text" name="price" value="{{ $purss->price  }}"/></td>
                   <td><input type="text" name="totalprice" value="{{$purss->quantity * $purss->price  }}"/></td>
                  <td>{{$users = date('d-m-Y', strtotime($purss->created_at)) }}</td>
                  

                  <td>

                   @if( date("d/m/Y") <= date('d-m-Y', strtotime(($purss->created_at) . '+ 1 day'))  )

                                 <a href="productdelete"><button type="submit" class="btn btn-danger" > Delete </button> </a> 
                              
                              @else

                               <a href="#" data-toggle="tooltip" title="Your order is on it's way!"><button type="submit" class="btn btn-success" > Ordered </button> </a> 
                
                @endif
                  </td>
                </tr>
                 

                  @endforeach
          </tbody>
                        </table>

                        </div>
                           
                    

            </div><!-- end of container-->

            </div><!-- end of content-->
            <div class='footer'></div>