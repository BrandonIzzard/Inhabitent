<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset class= "nospaces">
		<div class="flex">
		<a class="search-btn">
			<span class="icon-search" aria-hidden="true">
				<i class="fa fa-search"></i>
			</span>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</a>
		<label>
			<input id="search-1" type="search" class="search-field" placeholder="Type and Enter..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		</div>
	</fieldset>
</form>
