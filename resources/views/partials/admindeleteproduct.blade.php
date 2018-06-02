</div>
 <div class="content">

		           
 @include('partials/sidenavbar')
                  <div class="links">
                    
                     <div class="containers"> 

                      <div class="col-md-9 col-md-offset-3">
                     <div class="panel panel-default">
                <div class="panel-heading"><h1>Delete Product from Database</h1></div>

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

                                         <form method="post" action="adminDeleteProduct">

                                           {{csrf_field()}}
                                       <tr class="<?=($c++%2==1) ? 'odd' : 'even' ?>">

                      <td><input class="bigger1" type="text" name="id"  value="{{$pro->id}}"  /> </td>
                      <td><input class="bigger3" type="text" name="plant"  value="{{$pro->plant}} "/> </td>
                      <td><input class="bigger" type="text" name="description"  value="{{$pro->description}} "/></td>
                       <td><input class="bigger1" type="text" name="price"  value="{{$pro->price}} "/> </td>
                      <td><input class="bigger1" type="text" name="stock"  value="{{$pro->stock}} "/></td>
                      <td><input class="bigger3" type="text" name="created_at"  value="{{$pro->created_at}} "/></td>
                      <td><button type="submit" class="btn btn-danger" > Delete</button></td>

                                          </tr>

                                        </form>
                                        @endforeach
                                    </tbody>
                        </table>
                        <div class="text-center">
                         {{$editproducts->links()}}
                       </div>
                      
                  

                </div>
                   <div class="wid">
                         <a href="adminstock"><button type="submit" class="btn btn-warning" > return to Product Details </button></a><br />&nbsp;               
                   </div>
                 </div>
                </div>
              </div>