</div>
 <div class="content">

                    @include('partials/sidenavbar')

	                <div class="links">

                     

                     <div class="containers">
                      <div class="col-md-9 col-md-offset-3">
                         <div class="panel panel-default">
                              <div class="panel-heading"><h1> Account Information of All Users - List</h1></div>
                               <div class="panel-body">
                                 
                                 <!--  <form class="example" method="get" action="/action_page_users" style="max-width:300px">
                                      <input type="text" placeholder="Search.." name="search">
                                      <button type="submit" class="fa fa-search btn btn-danger"> Search</button>
                                  </form> -->
                               </div>                 	 

                    <a href="{{ route('user/adminpaneledituser') }}"><button type="submit" class="btn btn-warning" > Edit Users </button></a>
                      <a href="{{ route('user/adminDeleteUser') }}"><button type="submit" class="btn btn-warning" > Delete User </button></a>
                    <!--   <a href="{{ route('user/adminEditUser') }}"><button type="submit" class="btn btn-warning" > Return To All Users </button></a> -->

                      <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Created On</th>
                                        
                                      </tr> 
                                    </thead>
                                    <tbody>
                                       @foreach($users as $user)

                                       

                                           {{csrf_field()}}

                                       <tr>
                                            <td>{{$user->id }}</td>
                    	                	    <td>{{$user->firstname}} {{$user->lastname}}</td>
                    	                      <td>{{$user->email}}</td>
                    	                      <td>{{$user->created_at}}</td>
                                            

                                          </tr>
                                       
                                         @endforeach
                                    </tbody>
                        </table>
	                </div>
                </div>
              </div>
            </div>
          <hr>