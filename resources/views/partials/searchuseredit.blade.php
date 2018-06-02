</div>
 <div class="content">

		            @include('partials/sidenavbar')

	                <div class="links">
                 
                     <div class="containers">

                      <div class="col-md-9 col-md-offset-3 "> 
                     <div class="panel panel-default">
                <div class="panel-heading"><h1>Edit User</h1></div>
                 <div class="panel-body">
                <form class="example" method="get" action="/action_page_edit" style="max-width:300px">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit" class="fa fa-search btn btn-danger"> Search</button>
                 </form>
               </div>
                         <div class="wid">
                             <a href="{{ route('user/adminEditUser') }}"><button type="submit" class="btn btn-warning" > Return to Accounts of User </button></a>
                         </div> 
	                	 

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

                                        <form method="post" action="user/adminpaneledituser">  

                                           {{csrf_field()}}

                                       <tr class="<?=($c++%2==1) ? 'odd' : 'even' ?>">
                                             <td><input class="bigger1" type="text" name="id"  value="{{$user->id}} "/> </td>
                    	                	    <td><input class="bigger3" type="text" name="firstname"  value="{{$user->firstname}} "/> </td>
                                            <td><input class="bigger3" type="text" name="lastname"  value="{{$user->lastname}}" /> </td>
                    	                      <td><input class="bigger4" type="text" name="email"  value="{{$user->email}}" /> </td>
                                             <td><input class="bigger1" type="text" name="admin"  value="{{$user->admin}} "/> </td>
                    	                       <td><input class="bigger" type="text" name="created_at"  value="{{$user->created_at}}" /> </td>
                                            <td><button type="submit" class="btn btn-danger" > Edit </button></td>

                                          </tr>
                                         </form>
                                         @endforeach
                                    </tbody>
                        </table>
                       
	                </div></div></div></div><hr>
