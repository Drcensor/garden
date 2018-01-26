</div>
 <div class="content">

		           


	                <div class="links">

                     

                     <div class="containers">

	                	 <h1> Accounts Information of Users (Edit Page)</h1>

                      <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th>User Id</th>
                                        <th>First name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Admin</th>
                                        <th>Created On</th>
                                        <th>Edit</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                       <?php $c = 0; ?>
                                       @foreach($users as $user)

                                        <form method="post" action="adminpaneledituser">

                                           {{csrf_field()}}

                                       <tr class="<?=($c++%2==1) ? 'odd' : 'even' ?>">
                                             <td><input class="bigger1" type="text" name="id"  value="{{$user->id}} "/> </td>
                    	                	    <td><input class="bigger" type="text" name="firstname"  value="{{$user->firstname}} "/> </td>
                                            <td><input class="bigger" type="text" name="lastname"  value="{{$user->lastname}}" /> </td>
                    	                      <td><input class="bigger" type="text" name="email"  value="{{$user->email}}" /> </td>
                                             <td><input class="bigger" type="text" name="admin"  value="{{$user->admin}} "/> </td>
                    	                      <td><input class="bigger" type="text" name="created_at"  value="{{$user->created_at}}" /> </td>
                                            <td><button type="submit" class="btn btn-danger" > Edit </button></td>

                                          </tr>
                                         </form>
                                         @endforeach
                                    </tbody>
                        </table>
	                </div></div>
