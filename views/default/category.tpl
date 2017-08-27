<div class="col-xs-8">
	<h1>{$rsCategory['name']}</h1>
				
		<div class="products">

			{foreach $rsProducts as $item name = products}
			<div class="product"> 
				<img src="{$item['imageUrl']}">
					<a href="/product/{$item['id']}/">{$item['productTitle']} </a>
					<b>{$item['localPrice']} ₽</b>
			</div>	
			{/foreach}

			{foreach $rsChildCats as $item name = childCats}
				<h2><a href = "/category/{$item['id']}/"> {$item['name']} </a></h2>
			{/foreach}

		</div>
	</div>
</section>


		 