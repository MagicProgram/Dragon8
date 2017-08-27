
{* страница продукта *}
<div class="col-xs-8">

				<h1></h1>

					<div class="col-xs-5">
						<div class="row">

							<div class="product_img_box">
								<div class="sale">
									{$rsProduct['discount']}%
								</div>
								
							
								<img src="{$rsProduct['imageUrl']}" alt="" class="product_img">
								<div class="small_slider">
									<img src="{$rsProduct['imageUrl']}" alt="">
									<img src="img/products/cat/small/2-H7-H4-80.jpg_640x640.jpg" alt="">
									<img src="img/products/cat/small/2-H7-H4-80.jpg_640x640.jpg" alt="">
									<img src="img/products/cat/small/2-H7-H4-80.jpg_640x640.jpg" alt="">
									<img src="img/products/cat/small/2-H7-H4-80.jpg_640x640.jpg" alt="">
								</div>
								
							</div>
						
						</div>
					</div>

					<div class="col-xs-7">

						<div class="product_info_box">
							<a href="{$rsProduct['PromotionURL']}" target="new" rel="nofollow" class="buy">Купить</a>
							<span class="price">{$rsProduct['localPrice']}₽</span>
							
						</div>
						<p>{$rsProduct['productTitle']}</p>

					</div>
				
				
				
			</div>





