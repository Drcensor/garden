 <div class="content">
 					 @include ('partials/header')
		

<div class="row">
    <div class="col-sm-3" style="background-color:yellow;">	
           
               
	               
				<div class="onebyone"><!--image enlarger requires multizoom and mulitizoom1 js files to work  -->

							<img id="image1" class="sidebyside"  src="../images/pointsettiasmall.jpg" alt="plant of the pointsettia"/>

							<div class="innerbox">
						<p class="cen">
						<strong>Pointsettia</strong><br />
						a perfect gift for you</p>
					
					<form method="post" action="../user/products ">
				      {{csrf_field()}}
                     <input type="hidden" name="id" value="" />
                     <input type="hidden" name="product_id" value="1" />                         
                     <input class="bigger1" type="hidden" name="quantity"  value="1"/>
                     <button type="submit" class="btn btn-danger btn-xs "> put in Basket &#163;5.99 </button> <br />
                    </form>
																	
					 </div></div></div>

	 <div class="col-sm-3" style="background-color:green;">	
	 						<div class="onebyone">	 	
							<img id="image2" class="sidebyside" src="../images/hyacinthsmall.jpg" alt="plant of the hyacinth "/>

							<div class="innerbox">
						<p class="cen">
						<strong>Hyacinth</strong><br />
						a perfect gift for you</p>
					
						<form method="post" action="../user/products ">
				      {{csrf_field()}}
                     <input type="hidden" name="id" value="" />
                     <input type="hidden" name="product_id" value="2" />                         
                     <input class="bigger1" type="hidden" name="quantity"  value="1"/>
                     <button type="submit" class="btn btn-danger btn-xs"> put in Basket &#163;4.99 </button> <br />
                    </form>
						
						
						
						</div></div></div>


    <div class="col-sm-3" style="background-color:pink;">	
           
               
	               
				<div class="onebyone">
							<img id="image3" class="sidebyside" src="../images/pansysmall.jpg" alt="plant of the pansy "/>

							<div class="innerbox">
						<p class="cen">
						<strong>Pansy</strong><br />
						a perfect gift for you</p>

						<form method="post" action="../user/products ">
				      {{csrf_field()}}
                     <input type="hidden" name="id" value="" />
                     <input type="hidden" name="product_id" value="3" />                         
                     <input class="bigger1" type="hidden" name="quantity"  value="1"/>
                     <button type="submit" class="btn btn-danger btn-xs"> put in Basket &#163;3.99 </button> <br />
                    </form>
						</div></div></div>

	
<div class="col-sm-3" style="background-color:red;">	

							<div class="onebyone">
							<img id="image4" class="sidebyside" src="../images/geraniumsmall.jpg" alt="plant of the geranium "/>

							<div class="innerbox">
						<p class="cen">
						<strong>Geranium</strong><br />
						a perfect gift for you</p>
						<form method="post" action="../user/products ">
				      {{csrf_field()}}
                     <input type="hidden" name="id" value="" />
                     <input type="hidden" name="product_id" value="4" />                         
                     <input class="bigger1" type="hidden" name="quantity"  value="1"/>
                     <button type="submit" class="btn btn-danger btn-xs"> put in Basket &#163;3.99 </button> <br />
                    </form>
						
				</div></div></div></div>

		

<div class="row">
    <div class="col-sm-3" style="background-color:orange;">	
			<div class="onebyone">
						<img id="image5" class="sidebyside"  src="../images/cyclamensmall.jpg" alt="plant of the cyclamen"/>

						<div class="innerbox">
						<p class="cen">
						<strong>Cyclamen</strong><br />
						a perfect gift for you</p>

						<form method="post" action="../user/products ">
				      {{csrf_field()}}
                     <input type="hidden" name="id" value="" />
                     <input type="hidden" name="product_id" value="5" />                         
                     <input class="bigger1" type="hidden" name="quantity"  value="1"/>
                     <button type="submit" class="btn btn-danger btn-xs"> put in Basket &#163;4.99 </button> <br />
                    </form>
						</div></div></div>

 <div class="col-sm-3" style="background-color:pink;">	
           
               
	               
				<div class="onebyone">

						<img id="image6" class="sidebyside" src="../images/spider-plantsmall.jpg" alt="plant of the spider-plant" />

						<div class="innerbox">
						<p class="cen">
						<strong>Spider Plant</strong><br />
						a perfect gift for you</p>

						<form method="post" action="../user/products ">
				      {{csrf_field()}}
                     <input type="hidden" name="id" value="" />
                     <input type="hidden" name="product_id" value="6" />                         
                     <input class="bigger1" type="hidden" name="quantity"  value="1"/>
                     <button type="submit" class="btn btn-danger btn-xs"> put in Basket &#163;5.99 </button> <br />
                    </form>
						</div></div></div>

<div class="col-sm-3" style="background-color:red;">	
           
               
	               
				<div class="onebyone">


						<img id="image7" class="sidebyside" src="../images/orchidsmall.jpg" alt="plant of the orchid" />

						<div class="innerbox">
						<p class="cen">
						<strong>Orchid</strong><br />
						a perfect gift for you</p>

						<form method="post" action="../user/products ">
				      {{csrf_field()}}
                     <input type="hidden" name="id" value="" />
                     <input type="hidden" name="product_id" value="7" />                         
                     <input class="bigger1" type="hidden" name="quantity"  value="1"/>
                     <button type="submit" class="btn btn-danger btn-xs"> put in Basket &#163;7.99 </button> <br />
                    </form>
						</div></div></div>

<div class="col-sm-3" ">	
           
               
	               
				<div class="onebyone">


						<img id="image8" class="sidebyside" src="../images/rainbow-rosesmall.jpg" alt="plant of the rainbow-roses "/>


						<div class="innerbox">
						<p class="cen">
						<strong>Rainbow rose</strong><br />
						a perfect gift for You</p>

						<form method="post" action="../user/products ">
				      {{csrf_field()}}
                     <input type="hidden" name="id" value="" />
                     <input type="hidden" name="product_id" value="8" />                         
                     <input class="bigger1" type="hidden" name="quantity" min="1" max="5" value="1"/>
                     <button type="submit" class="btn btn-danger btn-xs"> put in Basket &#163;6.99 </button> <br />
                    </form>
						</div></div></div>
			</div>
			

</div>
<hr />
							
								
			
