<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                                    <div class="panel-body">
                                        @if (session('status'))
                        <div class="alert alert-success">
                            <strong>{{ session('status') }}</strong>
                        </div>
                    @elseif(session('message'))
                        <div class="alert alert-success">
                            <strong> Welcome {{ Auth::user()->firstname}} {{Auth::user()->surname }}
                            {{ session('message') }}</strong>
                        </div>

                    @else
                        <div class="alert alert-success">
                            <strong> 
                            What Would You Like to Do Next {{ Auth::user()->firstname}} ?
                            </strong>
                        </div>
                    @endif
                                    </div>

                              <div class="panel-body">
                                  <p class="cr-bk"> <a href="user/accounts"><button type="submit" class="btn btn-success btn-xs" > Account </button></a> Do you want to look at your account details</p> 
                              </div>

                              <div class="panel-body"> 
                                   <p class="cr-bk"><a href="user/products"><button type="submit" class="btn btn-success btn-xs" > Plants </button></a> Or look at some more plants </p>
                                  
                             </div>
                             <div class="panel-body cr-bk">
                                   <p class="cr-bk"> <a href="user/contacts"><button type="submit" class="btn btn-success btn-xs" > Contact </button></a> Do you wish to contact us </p>
                                   &nbsp;
                             </div>               
                          </div>
                        </div>
                     </div>
                  </div>

                <div class="container">
                     <div class=" row">
                         <div class="col-md-8 col-md-offset-2">
                             <div class="panel panel-default">
                                  <div class="panel-heading">Your Info Details</div>

                                    <div class="panel-body cr-bk">
                                       <p class="cr-bk"> You have {{ $orders  }} plant orders.</p>
                                       <p class="cr-bk"> You have {{  $baskets }} items in your basket.</p>                  
                                       <p class="cr-bk">  <a href="user/basket"><button type="submit" class="btn btn-warning btn-xs" > Basket </button></a> Review your items in your basket </p>
                                   </div>
                                </div>                 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                     <div class=" row">
                         <div class="col-md-8 col-md-offset-2">
                             <div class="panel panel-default">
                                  <div class="panel-heading">Offers</div> 

                                        <div class="panel-body">
                   

                  
                                        </div>

                                     <div>
                                        There are some great bargains to be had!<br />
                                        so keep checking here when you sign in.
                                   </div>
                                </div>                 
                            </div>
                        </div>
                    </div>
                </div>

<script >

                  if (getCookie("first_visit") != "true") {
        document.cookie = "first_visit=true";
        location.href="/user";
         setTimeout('Redirect()', 8000);      
    }

                 //from http://www.w3schools.com/js/js_cookies.asp
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length,c.length);
            }
        }
        return "";
    } 

    </script>  