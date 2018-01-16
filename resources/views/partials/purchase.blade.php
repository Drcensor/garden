</div>

 <div class="content">
 					 @include ('partials/header')
		             @include ('partials/nav')

	 <div >


	 	

	<div id="form1">
										
										<h3>Please fill in the Form</h3>

										


		<form method="post" action="../user/thankyou ">

				{{csrf_field()}}

                    <label>Plant Name &#58;      <select name="product_id">
                                                       <option value="1">Pointsettia  £5.99 </option>
                                                        <option value="2">Hyacinth £4.99</option>
                                                        <option value="3">Pansy £3.99</option>
                                                        <option value="4">Geranium Rose £3.99</option>
                                                        <option value="5">Cyclamen £4.99</option>
                                                        <option value="6">Spider plant  £5.99</option>
                                                        <option value="7">Orchid £7.99</option>
                                                        <option value="8">Rainbow Rose £6.99</option>
                                                  </select>
                    <!--  <label>Plant Price &#58;</label><input class="bigger" type="text" name="price" value="4.99" onclick="this.value='';"/>    -->                        

					 <label>Quantity &#58; </label> <input class="bigger" type="number" name="quantity" min="0" max="5" value="0"/>

					 <button type="submit" class="btn btn-danger"> Purchase </button>
		</form>


		

	</div><!--end of form tag -->

</div><!--end of content tag -->