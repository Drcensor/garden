</div>
 <div class="content">

		           


	                <div class="links">

                     

                     <div class="containers">

	                	 <h1> Accounts Information of Products</h1>

                     <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>ID No</th>
                                        <th>Plant</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                         <th>Stoke</th>
                                        <th>created on</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      
                                        @foreach($products as $pro)
                                       <tr>

                                            <td>{{$pro->id}}</td>
                                            <td> {{$pro->plant}}</td>
                                            <td>{{$pro->description}}</td>
                                             <td> {{$pro->price}}</td>
                                            <td>{{$pro->stock}}</td>
                                            <td>{{$pro->created_at}}</td>
                                            <td><a href="edituser"><button type="submit" class="btn btn-danger" > Edit </button></a></td>

                                          </tr>
                                        @endforeach
                                    </tbody>
                        </table>

                      
	                </div></div></div>