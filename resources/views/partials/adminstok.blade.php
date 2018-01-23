</div>
 <div class="content">

		           


	                <div class="links">

                     

                     <div class="containers">

	                	 <h1> Accounts Information of Products (Editing Page)</h1>

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

                                         <form method="post" action="editproducts">

                                           {{csrf_field()}}
                                       <tr class="<?=($c++%2==1) ? 'odd' : 'even' ?>">

                      <td><input class="bigger" type="text" name="id"  value="{{$pro->id}}" readonly /> </td>
                      <td><input class="bigger" type="text" name="plant"  value="{{$pro->plant}} "/> </td>
                      <td><input class="bigger" type="text" name="description"  value="{{$pro->description}} "/></td>
                       <td><input class="bigger" type="text" name="price"  value="{{$pro->price}} "/> </td>
                      <td><input class="bigger" type="text" name="stock"  value="{{$pro->stock}} "/></td>
                      <td><input class="bigger" type="text" name="created_at"  value="{{$pro->created_at}} "/></td>
                      <td><button type="submit" class="btn btn-danger" > Edit </button></td>

                                          </tr>

                                        </form>
                                        @endforeach
                                    </tbody>
                        </table>

                      
	                </div></div></div>