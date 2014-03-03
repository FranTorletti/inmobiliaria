{extends file='layouts/base.tpl'}

{block name="title"}
	{$title}
{/block}

{block name="body"}

    <div class="container-fluid">
    <!-- como hago para obtener la lista de imagenes, provinientes de una carpeta o base de datos-->
    {if ($publications)}
    	<h3>{$message}</h3> 
	{else}

		{foreach from = $publications item=publication}
    		<div class="col-lg-4">
			<img src="{Router::assets($publication->getPhoto())}" alt="no found"><br>
			<h2>$publication.getTitle()</h2>'.'<br>
			<p>$publication.getDescritpion()</p><br>
			<p><a class="btn btn-default" href="#" role="button"> View details &raquo </a></p><br>
			</div>
		{/foreach}
		
		</div>
	{/if}

{/block}
