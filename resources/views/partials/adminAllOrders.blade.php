</div> 
 <div class="content">
   
                   @include('partials/sidenavbar')
                            <div class="links">                         
                           <div class="containers">
                            <div class="col-md-9 col-md-offset-3 ">
                                <div class="panel panel-default">
                                   <div class="panel-heading"><h1>Purchase Information of Users (delete Page)</h1></div>
                         

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
         <tbody >
                    <?php $c = 0; ?>
                   @foreach($products as $purss)
              
                   <form method="post" action="adminpurchases">

                                           {{csrf_field()}}

              <tr class="<?=($c++%2==1) ? 'odd' : 'even' ?>">
                
                   <input class="bigger" type="hidden" name="product_id"  value="{{$purss->product_id}}  "/>  
                  <td><input class="bigger1" type="text" name="id"  value="{{$purss->id}} "/> </td> 
                  <td><input class="bigger1" type="text" name="user_id"  value="{{$purss->users_id}} "/> </td>  
                  <td><input class="bigger1" type="text" name="quantity"  value="{{$purss->quantity}} "/></td>
                  <td><input class="bigger3" type="text" name="plant"  value="{{ $purss->plant }}"/> </td>
                  <td><input class="bigger1" type="text" name="price" value="£ {{ $purss->price  }}"/></td>
                   <td><input class="bigger1" type="text" name="price" value="£ {{$purss->quantity * $purss->price  }}"/></td>
                  <td class ="table-time">{{$users = date('d-m-Y', strtotime($purss->created_at)) }}</td>
                  <td>
                      @if( date("d/m/Y") <= date('d-m-Y', strtotime(($purss->created_at) . '+ 1 day'))  )

                                     <button type="submit" class="btn btn-danger" > Delete </button>                              
                                 @else
                                     <a href="#" data-toggle="tooltip" title="Your order is on it's way!"><button type="reset" class="btn btn-success" > Ordered </button> </a>                 
                        @endif
                   </td>
                   <td> <button type="submit" class="btn btn-danger" > Delete </button>  </td>
                </tr>
                 
                  </form>
                  @endforeach
          </tbody>
                        </table>
                         <div class="text-center">
                         {{$products->links()}}
                       </div>
                        </div>
                        </div><!-- end of container-->
                        </div><!-- end of content-->
                      </div>
                    </div>
                    <hr>
