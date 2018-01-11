</div>
 <div class="content">

		             @include ('../partials/nav')

           
            	                <div class="title m-b-md">
            	                   {{ config('app.name', 'Garden') }}<br />
            	                </div>


	                <div class="links">

                      <h1>Your Accounts Information</h1>

                     <div class="containers">

	                	

                      <table class="table table-striped">
          <thead>
            <tr>
               <tr>
                  <th>Quantity</th>
                  <th>Plant Name</th>
                  <th>Price</th>
                  <th>Total Price</th>
                  <th>Cancel Time</th>
                  <th>Cancel</th>
               </tr>
            </tr>
          </thead>
          <tbody>

             @foreach($products as $purss)

                  <form method="post" action="../user/productdelete">

                    {{csrf_field()}}


                    <tr>
                  <input class="bigger" type="hidden" name="id"  value="{{$purss->id}}  "/>   
            	    <td><input class="bigger" type="text" name="quantity"  value="{{$purss->quantity}} "/></td>
                  <td><input class="bigger" type="text" name="plant"  value="{{ $purss->plant }}"/> </td>
                  <td><input type="text" name="price" value="{{ $purss->price  }}"/></td>
                   <td><input type="text" name="price" value="{{$purss->quantity * $purss->price  }}"/></td>
                  <td>{{$users = date('d-m-Y', strtotime($purss->created_at)) }}</td>
                  <td><button type="submit" class="btn btn-danger" > Delete </button></td>
                </tr>
                  </form>

                  @endforeach
          </tbody>
                        </table>
	                </div>

                  <a href="accounts"><button type="submit" class="btn btn-warning" > Return to Accounts </button></a>

                </div>