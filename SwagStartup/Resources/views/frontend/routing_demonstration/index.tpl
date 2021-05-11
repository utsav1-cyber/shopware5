{extends file="parent:frontend/index/index.tpl"}

{block name="frontend_index_sidebar"}

{/block}

{block name='frontend_index_content'}
	<h1>Hi, I'm the {$currentAction}-Action</h1>

	<a href="{url module='frontend' controller='shopware.bay20.com' action=$nextPage}">
		{s name='RoutingDemonstrationNextPage'}{/s}
	</a>

	{action module='widgets' controller='listing' action='topSeller'}

{/block}