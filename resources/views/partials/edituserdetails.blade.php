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
              <th>FIRSTName</th>
              <th>LASTName</th>
              <th>Email</th>
              <th>Created On</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
                  <form method="post" action="../user/accounts">

                    {{csrf_field()}}

            	    <td><input class="bigger" type="text" name="firstname"  value="{{$users = Auth::user()->firstname}} "/></td>
                  <td><input class="bigger" type="text" name="lastname"  value="{{$users = Auth::user()->lastname}}"/> </td>
                  <td><input type="text" name="email" value="{{$users = Auth::user()->email}}"/></td>
                  <td>{{$users = date('d-m-Y', strtotime(Auth::user()->created_at)) }}</td>
                  <td><a href="edituser"><button type="submit" class="btn btn-danger" > Edit </button></a></td>

                  </form>
          </tbody>
                        </table>
	                </div>

                       <a href="accounts"><button type="submit" class="btn btn-warning" > Return to Accounts </button></a><br />&nbsp;
                </div>