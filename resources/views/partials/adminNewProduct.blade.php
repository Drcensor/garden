</div>
 <div class="content">

		            @include('partials/sidenavbar')
	                <div class="links">
                    
                     <div class="containers">

                      <div class="col-md-9 col-md-offset-3">
                     <div class="panel panel-default">
                <div class="panel-heading"><h1> Create a New Product</h1></div>
	                	 

                     <table class="table table-striped">

                                    <thead>
                                      <tr>                                       
                                        <th>Plant</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                         <th>Stock</th>
                                      
                                      </tr>
                                    </thead>

                                    <tbody>
                                      
                                         <form method="post" action="adminNewProduct">

                                           {{csrf_field()}}
                                       <tr>

                      <input class="bigger" type="hidden" name="id"  value=""/> 

                      <td><input class="bigger" type="text" name="plant"  value=""/> </td>
                      <td><input class="bigger" type="text" name="description"  value=""/></td>
                       <td><input class="bigger" type="text" name="price"  value=""/> </td>
                      <td><input class="bigger" type="number" name="stock"  value=""/></td>
                      <td><button type="submit" class="btn btn-danger" > Create </button></td>

                                          </tr>

                                        </form>
                                      
                                    </tbody>
                        </table>

                      
	                </div>
                   <div class="wid">
                         <a href="adminstock"><button type="submit" class="btn btn-warning" > return to Product Details </button></a><br />&nbsp;               
                   </div></div>
                </div>
              </div>