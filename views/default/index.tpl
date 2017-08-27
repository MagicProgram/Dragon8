
			<div class="col-xs-8">
				<h1>Аксессуары для автомобиля, интернет-магазин</h1>
				<p>Интернет-магазин Дракон8.ру. Каталог с недорогими таварами для автомобиля.Товары отобраны по пользовательским отзывам и разбиты по категориям удобным для поиска. В категориях представлены электроника, элементы дизайна, и другие товары.</p>
				
				
				<img src="/views/img/drakon-internet-magazin-tovary-dlya-avto-deshevo-po-vsei-rossii.jpg" 
				alt="интернет-магазин аксессуары для автомобилей дракон8">
				
			
					{foreach $rsCategories as $item}
						<div class="cat-box"><h2><a href="/category/{$item['id']}/">{$item['name']}</a></h2>
									{if isset($item['children'])}					
										{foreach $item['children'] as $itemChild}
										<span><a href="/category/{$itemChild['id']}/"> {$itemChild['name']} </a></span> 
								    	{/foreach}
								    	
									{/if}
						</div>
					{/foreach}
			</div>
				
		</div>

	</section>
