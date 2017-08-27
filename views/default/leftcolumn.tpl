<body>
	<header>
	    <div class="container">
	      <div class="links">
	        <a href="">О компании</a>
	        <a href="">Доставка</a>
	        <a href="">Контакты</a>
	      </div>
	    </div>
	</header>
	<section class="screen1">
		<div class="container">
			<div class="col-xs-4">
				<div class="logo-box">
					<a href="/"><img src="/views/img/dragon-red.svg" alt="" class="logo"></a>
					<span><b>dragon8.ru</b>аксессуары для автомобилей, каталог</span>
				</div>	<nav class="menu">

		<ul>
		{foreach $rsCategories as $item}
			<li><a href="/category/{$item['id']}/">{$item['name']}</a></li>
						{if isset($item['children'])}
							<ul>						
							{foreach $item['children'] as $itemChild}
								<li><a href="/category/{$itemChild['id']}/"> {$itemChild['name']} </a></li>
					    	{/foreach}
					    	</ul>
						{/if}
		{/foreach}
		
		</ul>
	</nav>
</div>