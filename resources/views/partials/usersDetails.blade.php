</div>
 <div class="content">

		           


	                <div class="links">

                     

                     <div class="containers">

	                	 <h1> Accounts Information of Users</h1>

                     <a href="adminpaneledituser"><button type="submit" class="btn btn-danger" > Edit Users </button></a>
                      <a href="adminpaneledituser"><button type="submit" class="btn btn-danger" > Delete User </button></a>

                      <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Created On</th>
                                        
                                      </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($users as $user)

                                       

                                           {{csrf_field()}}

                                       <tr>

                    	                	    <td>{{$user->firstname}} {{$user->lastname}}</td>
                    	                      <td>{{$user->email}}</td>
                    	                      <td>{{$user->created_at}}</td>
                                            

                                          </tr>
                                       
                                         @endforeach
                                    </tbody>
                        </table>
	                </div></div>