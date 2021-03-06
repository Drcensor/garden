</div>
 <div class="content">
                   <div class="title m-b-md">
                       {{ config('app.name', 'Garden') }}<br />
                   </div>
          
	                <div class="links">
                      <h1>Your Personal Details</h1>
                     <div class="containers"> 

                      <!-- Left-aligned media object -->
                    <div class="media media2">

                      <div class="media-left">
                    <!-- <a href="#"  data-toggle="modal" data-target="#myModal"><img src="../storage/{{$users_id}}/ty1.jpg" class="media-object" style="width:100px" title="Click on the Edit button to the right to change your profile picture!"></a> -->
                    <img src="/storage/uploads/avatars/{{ Auth::user()->avatar }}" style="width:100px; height:100px; float:left; posit/ion:absolute; top:10px; left:10px; border-radius:50%">
                       
                      </div>

                      <div class="media-body "> 
                        <table class="table" id="customers">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Number Street</th>
                                <th>City</th>
                                <th>County</th>
                                <th>Post Code</th>
                                <th>Created On</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <td>{{$users = Auth::user()->firstname}} {{$users = Auth::user()->lastname}}</td>
                              <td>{{$users = Auth::user()->email}}</td>
                              <td>{{$users = Auth::user()->number_street}}</td>
                              <td> {{$users = Auth::user()->city}}</td>
                              <td>{{$users = Auth::user()->county}}</td>
                              <td>{{$users = Auth::user()->postcode}}</td>
                              <td>{{$users = date('d-m-Y', strtotime(Auth::user()->created_at))}}</td>
                              <td><a href="edituser"><button type="submit" class="btn btn-danger btn-xs" > Edit </button></a></td>

                            </tbody>
                        </table>
                       </div>
                   </div>                 	
	            


                     <div class="links">

                      <h1 id="C4">Your purchase Information {{$users = Auth::user()->firstname}} {{$users = Auth::user()->lastname}}</h1>
                           
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
                       <?php $c = 0; ?>
                     @foreach($products as $purss)<!-- homecontroller -->

                    <tr class="<?=($c++%2==1) ? 'odd' : 'even' ?>">
                  <input class="bigger" type="hidden" name="id"  value="{{$purss->id}} readonly "/>   
                  <td><input class="bigger" type="text" name="quantity"  value="{{$purss->quantity}} "/></td>
                  <td><input class="bigger" type="text" name="plant"  value="{{ $purss->plant }}"/> </td>
                  <td><input type="text" name="price" value="{{ $purss->price  }}"/></td>
                   <td><input type="text" name="totalprice" value="{{$purss->quantity * $purss->price  }}"/></td>
                  <td>{{$users = date('d-m-Y', strtotime($purss->created_at)) }}</td>
                  <td>
                             @if( date("d/m/Y") < date('d-m-Y', strtotime(($purss->created_at) . '+ 1 day'))  )
                                <a href="productdelete"><button type="submit" class="btn btn-danger btn-xs " > Delete </button> </a> 
                             @else
                               <a href="#" data-toggle="tooltip" title="Your order is on it's way!"><button type="submit" class="btn btn-success btn-xs disabled" > Ordered </button> </a>                
                             @endif
                    </td>
                    </tr>
                   
               
                      @endforeach
                      

              </tbody>

              </table>
                {{$products->links()}}
             
            </div>
           
             
           </div><!-- end of container-->
       </div><!-- end of content-->
  <div class='footer'></div>