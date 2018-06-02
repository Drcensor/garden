</div>

  <div class="content" >
          
       
          
            <div class="links">
              <h1> Information of Your User Editing</h1>
               </div>
               
    <div class="containers" >
        
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
                                
                            </form>
                        </tbody>
                        </table>
                  </div>
                  
                  <div></div>

                  <div class="links">
              <h1>You might need to refresh the page to see the Result</h1>
               </div>
                  
        <div class="wid" style=" min-height:200px;">
            
        <div>
                      
        <form method="post" action="/editName">
               {{csrf_field()}}

          <table class="table1 " id="customers1">
          <thead>
            <tr>
                <th>Firstname</th>
            </tr>
          </thread>
          <tbody>
            <tr>  
            <td><input class="bigger1" type="text" name="firstname"  value="{{$users = Auth::user()->firstname}} "/>
            </td>
            </tr>
            <tr>
            <td><a href="edituser"><button type="submit" class="btn btn-danger btn-xs" > Edit </button></a></td>
            </tr>
          </tbody>
           </table>
        </form>
        </div>
        
         <div>
        <form method="post" action="/editLastname">
               {{csrf_field()}}

          <table class="table1 " id="customers1">
          <thead>
            <tr>
               <th>Lastname</th>
            </tr>
          </thread>
          <tbody>
            <tr>  
            <td><input class="bigger1" type="text" name="lastname"  value="{{$users = Auth::user()->lastname}}"/>
            </td>
            </tr>
            <tr>
            <td><a href="edituser"><button type="submit" class="btn btn-danger btn-xs" > Edit </button></a></td>
            </tr>
          </tbody>
           </table>
        </form>
         </div>
         <div>
        <form method="post" action="/editEmail">
               {{csrf_field()}}

          <table class="table1 " id="customers1">
          <thead>
            <tr>
                <th>Email</th>
            </tr>
          </thread>
          <tbody>
            <tr>  
            <td><input class="bigger" type="text" name="email" value="{{$users = Auth::user()->email}}"/>
            </td>
            </tr>
            <tr>
            <td><a href="edituser"><button type="submit" class="btn btn-danger btn-xs" > Edit </button></a></td>
            </tr>
          </tbody>
           </table>
        </form>
         </div>
         <div>
        <form method="post" action="/editStreet">
               {{csrf_field()}}

          <table class="table1 " id="customers1">
          <thead>
            <tr>
                 <th>Number Street</th>
            </tr>
          </thread>
          <tbody>
            <tr>  
             <td><input class="bigger" type="text" name="number_street" value="{{$users = Auth::user()->number_street}}"/>
            </td>
            </tr>
            <tr>
            <td><a href="edituser"><button type="submit" class="btn btn-danger btn-xs" > Edit </button></a></td>
            </tr>
          </tbody>
           </table>
        </form>
        </div>
         <div>
        <form method="post" action="/editCity">
               {{csrf_field()}}

          <table class="table1 " id="customers1">
          <thead>
            <tr>
                 <th>City</th>
            </tr>
          </thread>
          <tbody>
            <tr>  
            <td> <input class="bigger" type="text" name="city" value="{{$users = Auth::user()->city}}"/>
            </td>
            </tr>
            <tr>
            <td><a href="edituser"><button type="submit" class="btn btn-danger btn-xs" > Edit </button></a>
            </td>
            </tr>
          </tbody>
           </table>
        </form>
        </div>
         <div>
         <form method="post" action="/editCounty">
               {{csrf_field()}}

          <table class="table1 " id="customers1">
          <thead>
            <tr>
                 <th>County</th>
            </tr>
          </thread>
          <tbody>
            <tr>  
             <td><input class="bigger" type="text" name="county" value="{{$users = Auth::user()->county}}"/>
            </td>
            </tr>
            <tr>
              <td><a href="edituser"><button type="submit" class="btn btn-danger btn-xs" > Edit </button></a>
            </td>
            </tr>
          </tbody>
           </table>
        </form>
        </div>
         <div>
         <form method="post" action="/editPostcode">
               {{csrf_field()}}

          <table class="table1 " id="customers1">
          <thead>
            <tr>
                 <th>Post Code</th>
            </tr>
          </thread>
          <tbody>
            <tr>  
              <td><input class="bigger1" type="text" name="postcode" value="{{$users = Auth::user()->postcode}}"/>
            </td>
            </tr>
            <tr>
              <td><a href="edituser"><button type="submit" class="btn btn-danger btn-xs" > Edit </button></a>
            </td>
            </tr>
          </tbody>
           </table>
        </form>
        </div>
         <div>
         <form method="post" action="../user/accounts">
               {{csrf_field()}}
          <table class="table1" id="customers1">
          <thead>
            <tr>
                <th>Created On</th>
            </tr>
          </thread>
          <tbody>
            <tr>  
              <td>{{$users = date('d-m-Y', strtotime(Auth::user()->created_at))}}
            </td>
            </tr>
            <tr>
              <td><a href="edituser"><button type="submit" class="btn btn-danger btn-xs" > Edit </button></a>
            </td>
            </tr>
          </tbody>
          </table>
        </form>
        </div>
       
         
        
          <div class="wid" style="min-height:50px; clear:both; padding-top:10px;">
    
         <a  href="accounts"><button style="width:12%; " type="submit" class="btn btn-warning" > Return to Accounts </button></a><br />&nbsp;               
   

         </div>                       
               </div>                 