<div class="gallerySelector">
            <ul class="gallerySelectorList">
			<li class="current"><a href="#" data-filter="*"><?php echo JText::_('Show All'); ?></a></li>
				<?php foreach (modSPPortfolioJHelper::getCategories($catid) as $key => $value) { ?>
					<li>
						<a href="#" data-filter="article.portfolio[data-category~='<?php echo modSPPortfolioJHelper::slug($value) ?>']">
							<?php echo ucfirst(trim($value)) ?>
						</a>
					</li>
				<?php } ?>

            </ul>
        </div>
            
        <section class="portfolio_container">


			<?php foreach($items as $index=>$item){ ?>
            <article class="portfolio" data-category="<?php echo modSPPortfolioJHelper::slug($item->tag) ?>">
                <section class="thumbImage">
                	<img src="<?php echo $item->image; ?>" alt="<?php echo $item->title; ?>" class="fullwidth">
                    <div class="thumbTextWrap">
                        <div class="thumbText">
                           <?php if($show_title){ ?>
								<?php if($linked_title){ ?>
							<h3 class="sectionTitle"><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h3>
								<?php }else { ?>
							<h3 class="sectionTitle"><?php echo $item->title; ?></h3>
							<?php } ?>
							<?php } ?>
							
							<?php if($show_introtext){ ?>
                            <p><?php echo $item->introtext;?></p>
							<?php } ?>
							<?php if($show_introtext){ ?>
                             <a class="thumbLink" rel="lightbox" title="<?php echo $item->title; ?> "  href="<?php echo $item->image_full; ?>"><i class="icon-search"></i></a>
							<?php } ?>
						</div>
                    </div>
                </section>
            </article>
           <?php } ?>

         </section>
		