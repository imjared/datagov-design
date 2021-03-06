			<div class="sixteen columns">
				<div class="next-logo">
					<div id="next-logo-title-bg" class="next-background"></div>
					<div class="next-object"><span id="next-logo-title"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></span></div>
				</div>
				<div class="next-search">
					<div class="next-background"></div>
					<div class="next-object">
						<div class="next-search-label">
							<label class="next" for="next-search-box">Search</label>
						</div>
						<div class="next-search-icon">
							<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/search.png">
						</div>
						<div class="next-search-input">
							<form method="get" action="http://catalog-next.data.gov/dataset">
								<label for="search-textbox" class="hddn" title="Search Data.gov">Search Data.gov</label>
	  							<input id="search-textbox" role="search" class="next" name="q" type="text" />
								<input id="next-search-submit" type="submit" />
							</form>
	  					</div>
  					</div>
				</div>
			</div> <!-- sixteen columns -->

			