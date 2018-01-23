</div>

 <div class="content">
 					 @include ('partials/header')
		             @include ('partials/nav')

	 <div >


	 	

	<div id="form1">
										
										<h3>Please fill in the Form</h3>

										


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

					 <label>Quantity &#58; </label> <input class="bigger1" type="number" name="quantity" min="1" max="5" value="1"/>

					 <input type="hidden" name="stock" value="" />

					 <button type="submit" class="btn btn-danger"> Purchase </button>
		</form>


		

	</div><!--end of form tag -->

	<div class="container">
                     <div class=" row">
                         <div class="col-md-8 col-md-offset-2">
                             <div class="panel panel-default">
                                  <div class="panel-heading">Basket</div>

                                        <div class="panel-body">
                   

                  
                                        </div>

                                     <div>
                                        All your basket item will be here!
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
                                        There are some great bargains to be had!
                                   </div>
                                </div>                 
                            </div>
                        </div>
                    </div>
                </div>

</div><!--end of content tag -->