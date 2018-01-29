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
                                        <th>Firstname</th>
                                         <th>Lastname</th>
                                        <th>Email</th>
                                         <th>Number Street</th>
                                        <th>City</th>
                                         <th>County</th>
                                        <th>Post Code</th>
                                        <th>Created On</th>
                                        <th>Edit</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                       <form method="post" action="../user/accounts">
                                       {{csrf_field()}}

                                            <td><input class="bigger1" type="text" name="firstname"  value="{{$users = Auth::user()->firstname}} "/></td>
                                            <td><input class="bigger1" type="text" name="lastname"  value="{{$users = Auth::user()->lastname}}"/> </td>
                                            <td><input class="bigger" type="text" name="email" value="{{$users = Auth::user()->email}}"/></td>
                                            <td><input class="bigger" type="text" name="number_street" value="{{$users = Auth::user()->number_street}}"/></td>
                                            <td> <input class="bigger" type="text" name="city" value="{{$users = Auth::user()->city}}"/></td>
                                            <td><input class="bigger" type="text" name="county" value="{{$users = Auth::user()->county}}"/></td>
                                            <td><input class="bigger1" type="text" name="postcode" value="{{$users = Auth::user()->postcode}}"/></td>
                                            <td>{{$users = date('d-m-Y', strtotime(Auth::user()->created_at))}}</td>
                                            <td><a href="edituser"><button type="submit" class="btn btn-danger btn-xs" > Edit </button></a></td>
                                        </form>
                                    </tbody>
          
                        </table>
	                </div>

                       <a href="accounts"><button type="submit" class="btn btn-warning" > Return to Accounts </button></a><br />&nbsp;
                </div>