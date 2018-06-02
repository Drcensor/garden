</div>
 <div class="content">

		             @include('partials/sidenavbar')

	                <div class="links">
                 
                     <div class="containers">
                      <div class="col-md-9 col-md-offset-3 ">
                        <div class="panel panel-default">
                <div class="panel-heading"><h1>Product Information &amp; Update Page </h1></div>
	                 <div class="panel-body">
                  <div class="wid">
                         <a href="adminNewProduct"><button type="submit" class="btn btn-warning" > Create New Product </button></a>&nbsp;   
                          <a href="adminDeleteProduct"><button type="submit" class="btn btn-warning" > Delete Product Page </button></a><br />&nbsp;              
                   </div></div> 	         

                                       <table class="table table-striped">

                                                      <thead>
                                                        <tr>
                                                          <th>ID No</th>
                                                          <th>Plant</th>
                                                          <th>Description</th>
                                                          <th>Price</th>
                                                           <th>Stock</th>
                                                          <th>created on</th>
                                                        </tr>
                                                      </thead>

                                                      <tbody>
                                                         <?php $c = 0; ?>
                                                          @foreach($editproducts as $pro)

                                                                 <form method="post" action="adminstock">

                                                                   {{csrf_field()}}
                                                                       <tr class="<?=($c++%2==1) ? 'odd' : 'even' ?>">

                                                                              <td><input class="bigger" type="text" name="id"  value="{{$pro->id}}" readonly /> </td>
                                                                              <td><input class="bigger" type="text" name="plant"  value="{{$pro->plant}} "/> </td>
                                                                              <td><input class="bigger4" type="text" name="description"  value="{{$pro->description}} "/></td>
                                                                               <td><input class="bigger1" type="text" name="price"  value="{{$pro->price}} "/> </td>
                                                                              <td><input class="bigger1" type="text" name="stock"  value="{{$pro->stock}} "/></td>
                                                                              <td><input class="bigger" type="text" name="created_at"  value="{{$pro->created_at}} "/></td>
                                                                              <td><button type="submit" class="btn btn-success" >Update</button></td>

                                                                        </tr>

                                                                </form>
                                                          @endforeach
                                                      </tbody>
                                          </table>
                                          <div class="text-center">
                                              {{$editproducts->links()}}
                                          </div>
                      
	                

                
                  
                </div>
            </div>
          </div>
         </div>   
              <hr>