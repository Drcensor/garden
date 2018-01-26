</div>
<div class="content">

                     @include ('../partials/nav')

           
                    <div class="title m-b-md">
                       {{ config('app.name', 'Garden') }}<br />


                    </div>



                    <h2>Thank You for your Purchase</h2>

                    <script type="text/javascript">   
                        function Redirect() 
                        {  
                        window.location="accounts"; 
                        } 
                        document.write("You will be redirected to your accounts page in 2 seconds"); 
                        setTimeout('Redirect()', 1500);   
                    </script>
                           
                        

            </div><!-- end of content-->