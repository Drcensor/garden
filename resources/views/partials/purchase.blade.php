 
 <div class="content-left side-bar">
    <h3>New sideBar</h3>
        <div class="panel panel-default">
         New Sidebar

        </div>
        <div class="panel panel-default">
          <span class="glyphicon glyphicon-envelope"> hello

        </div>
        <div class="panel panel-default">
         <span class="glyphicon glyphicon-barcode"> hello

        </div>
        <div class="panel panel-default">
         <span class="glyphicon glyphicon-print"> hello

        </div>
        <div class="panel panel-default">
          <span class="glyphicon glyphicon-flag"> hello

        </div>
         <div class="panel panel-default">
          <span class="glyphicon glyphicon-time"> hello

        </div>
        <div class="panel panel-default">
         <span class="glyphicon glyphicon-trash"> hello

        </div>
        <div class="panel panel-default">
          <span class="glyphicon glyphicon-off"> hello

        </div>
        <div class="panel panel-default">
          <span class="glyphicon glyphicon-ok"> hello

        </div>
   </div>
 <div class="content">
 					<!-- @include ('partials/header')-->
		           

	

    <div class="content-left"> 
									
										<h3>remember to choose a quantity</h3>

		<form method="post" action=" ../user/thankyou">

				{{csrf_field()}}
				 

                 <div class="panel panel-default">

                     <input type="hidden" name="id" value="" />
                     <input type="hidden" name="product_id" value="1" />

                     <img id="image1" name="product_id" value="1" class=""  src="../images/pointsettiasmall3.jpg" alt="plant of the pointsettia"/>

                     <label>Plant Price &#58;</label><input class="bigger1" type="text" name="price" value="5.99" />                          
   
                     <label>Quantity &#58; </label> <input class="bigger1" type="number" name="quantity" min="1" max="5" value="1"/>

                     <input type="hidden" name="stock" value="" />

                     <button type="submit" class="btn btn-danger btn-xs"> Purchase </button> <br />



                      </div></form>

                      <form method="post" action=" ../user/thankyou">

                       {{csrf_field()}}
     

                 <div class="panel panel-default">



                     <input type="hidden" name="id" value="" />
                     <input type="hidden" name="product_id" value="2" />

                     <img id="image2"  class="" src="../images/hyacinthsmall3.jpg" alt="plant of the hyacinth "/>

                     <label>Plant Price &#58;</label><input class="bigger1" type="text" name="price" value="4.99" />                          
   
                     <label>Quantity &#58; </label> <input class="bigger1" type="number" name="quantity" min="1" max="5" value="1"/>

                     <input type="hidden" name="stock" value="" />

                     <a href="../user/thankyou"><button type="submit" class="btn btn-danger btn-xs"> Purchase </button></a> <br />
                      </div></form>

                      <form method="post" action=" ../user/thankyou">

                {{csrf_field()}}


                 <div class="panel panel-default">


                      <input type="hidden" name="id" value="" />
                     <input type="hidden" name="product_id" value="3" />

                       <img id="image3" name="product_id" value="3" class="" src="../images/pansysmall3.jpg" alt="plant of the pansy "/>

                     <label>Plant Price &#58;</label><input class="bigger1" type="text" name="price" value="3.99" />                          
   
                     <label>Quantity &#58; </label> <input class="bigger1" type="number" name="quantity" min="1" max="5" value="1"/>

                     <input type="hidden" name="stock" value="" />

                     <button type="submit" class="btn btn-danger btn-xs"> Purchase </button> <br />
                      </div></form>

                 <div class="panel panel-default">

                    <form method="post" action=" ../user/thankyou">

                {{csrf_field()}}




                      <input type="hidden" name="id" value="" />
                     <input type="hidden" name="product_id" value="4" />

                     <img id="image4" name="product_id" value="4" class="" src="../images/geraniumsmall3.jpg" alt="plant of the geranium "/>

                     <label>Plant Price &#58;</label><input class="bigger1" type="text" name="price" value="3.99" />                          
   
                     <label>Quantity &#58; </label> <input class="bigger1" type="number" name="quantity" min="1" max="5" value="1"/>

                     <input type="hidden" name="stock" value="" />

                     <button type="submit" class="btn btn-danger btn-xs"> Purchase </button> <br />
                      </div></form>

                 <div class="panel panel-default">

                    <form method="post" action=" ../user/thankyou">

                {{csrf_field()}}


                      <input type="hidden" name="id" value="" />
                     <input type="hidden" name="product_id" value="5" />

                      <img id="image5" name="product_id" value="5" class=""  src="../images/cyclamensmall3.jpg" alt="plant of the cyclamen"/>

                     <label>Plant Price &#58;</label><input class="bigger1" type="text" name="price" value="4.99" />                          
   
                     <label>Quantity &#58; </label> <input class="bigger1" type="number" name="quantity" min="1" max="5" value="1"/>

                     <input type="hidden" name="stock" value="" />

                     <button type="submit" class="btn btn-danger btn-xs"> Purchase </button> <br />
                      </div></form>

                 <div class="panel panel-default">

                    <form method="post" action=" ../user/thankyou">

                {{csrf_field()}}



                      <input type="hidden" name="id" value="" />
                     <input type="hidden" name="product_id" value="6" />

                     <img id="image6" name="product_id" value="6" class="" src="../images/spider-plantsmall3.jpg" alt="plant of the spider-plant" />

                     <label>Plant Price &#58;</label><input class="bigger1" type="text" name="price" value="5.99" />                          
   
                     <label>Quantity &#58; </label> <input class="bigger1" type="number" name="quantity" min="1" max="5" value="1"/>

                     <input type="hidden" name="stock" value="" />

                     <button type="submit" class="btn btn-danger btn-xs"> Purchase </button> <br />
                      </div></form>

                 <div class="panel panel-default">

                    <form method="post" action=" ../user/thankyou">

                {{csrf_field()}}



                      <input type="hidden" name="id" value="" />
                     <input type="hidden" name="product_id" value="7" />

                     <img id="image7"  class="" src="../images/orchidsmall3.jpg" alt="plant of the orchid" />

                     <label>Plant Price &#58;</label><input class="bigger1" type="text" name="price" value="7.99" />                          
   
                     <label>Quantity &#58; </label> <input class="bigger1" type="number" name="quantity" min="1" max="5" value="1"/>

                     <input type="hidden" name="stock" value="" />

                     <button type="submit" class="btn btn-danger btn-xs"> Purchase </button> <br />
                </div></form>

                 <div class="panel panel-default">

                    <form method="post" action=" ../user/thankyou">

                {{csrf_field()}}


                      <input type="hidden" name="id" value="" />
                     <input type="hidden" name="product_id" value="8" />

                     <img id="image8"  class="" src="../images/rainbow-rosesmall3.jpg" alt="plant of the rainbow-roses "/>

                     <label>Plant Price &#58;</label><input class="bigger1" type="text" name="price" value="6.99" />                          
   
                     <label>Quantity &#58; </label> <input class="bigger1" type="number" name="quantity" min="1" max="5" value="1"/>

                     <input type="hidden" name="stock" value="" />

                     <a href=""><button type="submit" class="btn btn-danger btn-xs"> Purchase </button></a> <br />

                 </div>

        </form> 

	</div><!--end of form tag -->
    </div><!--end of content tag -->

	<div class="content-right ">
                        <h3>Your Basket Choices are Below</h3>
                     <div class="row secondtwo ">
                         <div class="col-md-11.5 col-md-offset-0.5">
                             <div class="panel panel-default">
                                  <div class="panel-heading">Basket</div>

                                           <div class="panel-bod links">

                                         <div class="table-responsive"> 
                                         <table class="table table-striped" > 
                                          

                                              <thead>
                                                
                                                   <tr class="fon">
                                                      <th class="fon"> Qty  </th>
                                                      <th> Plant Name </th>
                                                      <th class="hid">Price</th>
                                                      <th> Total Price </th>
                                                      <th class="hid">Time Pur-chased</th>
                                                      <th class="hid">Cancel</th>
                                                      <th class="hid">Purchase</th>
                                                   </tr>
                      
                                              </thead>
                                              <tbody class="smaller2">
                                                   <?php $c = 0; ?>
                                                 @foreach($products as $purss)
                                                         
                                                       <form method="post" action="../user/form1redirect ">

                                                    {{csrf_field()}}

                                                    
                                                        <tr class="<?=($c++%2==1) ? 'odd' : 'even' ?> smaller3">
                                                     
                                                      <input class="bigger2" type="hidden" name="id"  value="{{$purss->id}}  "/>
                                                      <input class="bigger2" type="hidden" name="users_id"  value="{{$purss->users_id}}  "/>
                                                      <input class="bigger" type="hidden" name="product_id"  value="{{$purss->product_id}}  "/>       
                                                      <td><input class="bigger2 smaller1" type="text" name="quantity"  value="{{$purss->quantity}} "/></td>
                                                      <td class="smaller2"><input class="bigger3" type="text" name="plant"  value="{{ $purss->plant }}"/> </td>
                                                      <td><input class="bigger2 hid smaller1" type="text" name="price" value="{{ $purss->price  }}"/></td>
                                                      <td><input class="bigger2" type="text" name="totalprice" value="{{$purss->quantity * $purss->price  }}"/></td>
                                                      <td class="hid">{{$users = date('d-m-Y', strtotime($purss->created_at)) }}</td> 

                                                      <td class="smaller4"><a href="../user/form1"><button type="submit" class="btn btn-danger btn-xs" > Delete </button> </a></td>
                                                      <td class="smaller4"><a href=""> <button type="submit" class="btn btn-success btn-xs" > Order </button> </a></td>
                                                      

                                                       <td class="smaller5"><br /><a href="../user/form1"><button type="submit" class="btn btn-danger btn-xs" > Delete </button> </a></td>
                                                      <td class="smaller5"><a href=""> <button type="submit" class="btn btn-success btn-xs" > Order </button> </a></td>                 
                                                                                                     
                                                    </tr>
                                                  
                                                     </form>

                                                      @endforeach
                                              </tbody>
                                                            </table>
                                                        
                                                               {{$products->links()}}
                   
                                                    </div></div>
                                    
                                          

                                          <div  class="panel-body">
                                            All your basket item will be here!
                                         </div>

                                </div>                 
                            </div>
                        </div>
               
                     <div class="row firstone ">
                         <div class="col-md-11.2 col-md-offset-0.8">
                             <div class="panel panel-default">
                                  <div class="panel-heading">Offers</div>

                                        <div class="panel-body">
                     <form method="post" action="../user/thankyou ">

                                            {{csrf_field()}}
                                           
                                                         <input type="hidden" name="id" value="" />

                    <label>Plant Name &#58;</label>      <select name="product_id" style='border: 0px;''>
                                                       <option value="1">Pointsettia &nbsp;&nbsp;&nbsp;&nbsp; £5.99 </option>
                                                        <option value="2">Hyacinth &nbsp;&nbsp;&nbsp;&nbsp;£4.99</option>
                                                        <option value="3">Pansy &nbsp;&nbsp;&nbsp;&nbsp;£3.99</option>
                                                        <option value="4">Geranium Rose&nbsp;&nbsp;&nbsp;&nbsp; £3.99</option>
                                                        <option value="5">Cyclamen &nbsp;&nbsp;&nbsp;&nbsp;£4.99</option>
                                                        <option value="6">Spider plant &nbsp;&nbsp;&nbsp;&nbsp; £5.99</option>
                                                        <option value="7">Orchid &nbsp;&nbsp;&nbsp;&nbsp;£7.99</option>
                                                        <option value="8">Rainbow Rose &nbsp;&nbsp;&nbsp;&nbsp;£6.99</option>
                                                  </select>
                                                  
                    <!--  <label>Plant Price &#58;</label><input class="bigger" type="text" name="price" value="4.99" onclick="this.value='';"/>    -->                        

                     <span class='number-wrapper1'>
    
                     <label>Quantity &#58; </label> <input class="bigger1" type="number" name="quantity" min="1" max="5" value="1"/></span>

                     <input type="hidden" name="stock" value="" />

                     <button type="submit" class="btn btn-danger"> Purchase </button> 
       </form>
                                    
                                        </div>

                                        <div class="panel-body">
                                        There are some great bargains to be had!
                                        </div>
                                </div>               
                            </div>
                        </div>
                    </div>
                </div>



<!-- <input type="hidden" name="id" value="" />

                    <label>Plant Name &#58;</label>      <select name="product_id" style='border: 0px;''>
                                                       <option value="1">Pointsettia &nbsp;&nbsp;&nbsp;&nbsp; £5.99 </option>
                                                        <option value="2">Hyacinth &nbsp;&nbsp;&nbsp;&nbsp;£4.99</option>
                                                        <option value="3">Pansy &nbsp;&nbsp;&nbsp;&nbsp;£3.99</option>
                                                        <option value="4">Geranium Rose&nbsp;&nbsp;&nbsp;&nbsp; £3.99</option>
                                                        <option value="5">Cyclamen &nbsp;&nbsp;&nbsp;&nbsp;£4.99</option>
                                                        <option value="6">Spider plant &nbsp;&nbsp;&nbsp;&nbsp; £5.99</option>
                                                        <option value="7">Orchid &nbsp;&nbsp;&nbsp;&nbsp;£7.99</option>
                                                        <option value="8">Rainbow Rose &nbsp;&nbsp;&nbsp;&nbsp;£6.99</option>
                                                  </select> -->
                                                  
                    <!--  <label>Plant Price &#58;</label><input class="bigger" type="text" name="price" value="4.99" onclick="this.value='';"/>    -->                        
<!-- 
                     <span class='number-wrapper1'>
    
                     <label>Quantity &#58; </label> <input class="bigger1" type="number" name="quantity" min="1" max="5" value="1"/></span>

                     <input type="hidden" name="stock" value="" />

                     <button type="submit" class="btn btn-danger"> Purchase </button>  -->
    <!--    </form> -->


       <!--  <form method="post" action="../user/thankyou ">

                {{csrf_field()}}-->