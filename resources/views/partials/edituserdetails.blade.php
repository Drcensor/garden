</div>
 <div class="content">
          
            <div class="title m-b-md">
                   {{ config('app.name', 'Garden') }}<br />
                </div>


	                <div class="links">
                      <h1>Your Accounts User Editing Information</h1>
                     <div class="containers">

	                     <div class="media-left">
                         <!-- Modal --> 
                         
                           <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                
                                  <!-- Modal content-->
                                   <div class="modal-content">
                                               <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                  <h4 class="modal-title">Your Profiles</h4>
                                               </div>
                                                  <div class="modal-body">

                                                        @include('partials.image')

                                                  </div>
                                            <div class="modal-footer"><p>Click on a image that you want has your new profile!<br>
                                              if there are no images close this window and load some pictures with the link at the bottom of the page.
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></p>
                                            </div>
                                  </div>
                                      
                                </div><!-- end modal-dialog-->
                     </div>
                                                            
                <div class="wid">
                   <img src="/storage/uploads/avatars/{{ Auth::user()->avatar }}" style="width:100px; height:100px; float:left; top:10px; left:10px; border-radius:50%">
                      <table class="table " id="customers">
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
                    <div class="wid">
                      <a href="#"  data-toggle="modal" data-target="#myModal" title="Click on the image to change your profile picture!"> 
                       <!--<img src="../storage/{{$users_id}}/ty1.jpg" class="media-object" style="width:100px"> </a>-->
                      
                            </div>
                                 <div class="wid">

                                           <a href="accounts"><button type="submit" class="btn btn-warning" > Return to Accounts </button></a><br />&nbsp;               
                                  </div>

                                  <div class="wid1">

                                      <h1>Upload Your Profile Image</h1>
                                          <form class="picwid" action="{{ URL::to('../user/edituser') }}" method="post" enctype="multipart/form-data">
                                            <label>Select image to upload:</label>
                                              <input type="file" name="file" id="file">
                                              <input type="submit" value="Upload" name="submit">
                                            <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                          </form>
                                  </div>
                                </di></div></div>