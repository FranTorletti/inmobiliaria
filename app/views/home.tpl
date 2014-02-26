{extends file='layouts/base.tpl'}

{block name="title"}
	Inmobiliaria
{/block}

{block name="body"}

    <div class="container-fluid">
    <!-- como hago para obtener la lista de imagenes, provinientes de una carpeta o base de datos-->

	if(isset($list)){
		{foreach from = $list item=$img}
    		<div class="col-lg-4">
			<img src="{Router::assets($img)}" alt="no found"><br>
			<h2>Heading</h2>'.'<br>
			<p>Descripcion de la imagen.</p><br>
			<p><a class="btn btn-default" href="#" role="button"> View details &raquo </a></p><br>
			</div>
		
				
				
		{/foreach}
		</div>

		}else{
			No se han registrado datos
		}

{/block}
