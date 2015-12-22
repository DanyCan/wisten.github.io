					    
		
		
		<div id="options" class="filter-menu inline">
						<ul id="filters" class="filters option-set" data-option-key="filter">
							<li><a href="#filter" data-option-value="*" class="selected"><?php echo JText::_('Show All'); ?></a></li>
							
							<?php foreach (modSPPortfolioJHelper::getCategories($catid) as $key => $value) { ?>
								<li><a href="#filter" data-option-value=".<?php echo modSPPortfolioJHelper::slug($value) ?>"><?php echo ucfirst(trim($value)) ?></a></li>
							<?php } ?>
						</ul>
					</div>
					
		<div class="items ">
		<?php foreach($items as $index=>$item){ ?>
		
		<div class="work <?php echo $column; ?> <?php echo modSPPortfolioJHelper::slug($item->tag) ?> ">
							<div class="work-inner">
								<div class="work-img">
									<img src="<?php echo $item->image; ?>" alt="<?php echo $item->title; ?>"/>
									<div class="mask">
										<?php if ($item->video!=null) { ?>
										<a class="button zoom" href="<?php echo $item->video; ?>" data-rel="prettyPhoto[gallery]"><i class="fa fa-search"></i></a>
										<?php } else { ?>
										<a class="button zoom" href="<?php echo $item->image_full; ?>" data-rel="prettyPhoto[gallery]"><i class="fa fa-search"></i></a>
										<?php } ?>
										<a class="button detail" href="<?php echo $item->link; ?>"><i class="fa fa-picture-o"></i></a>
									</div>
								</div>
								<div class="work-desc">
								 <?php if($show_title){ ?>
								<?php if($linked_title){ ?>
									<h4><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h4>
									<?php }else { ?>
									<h4><?php echo $item->title; ?></h4>
									<?php } ?>
									<?php } ?>
									
									<?php if($show_introtext){ ?>
									<p><?php echo $item->introtext;?></p>
									<?php } ?>
								</div>
							</div>
		</div>
		 <?php } ?>
		</div>
            
      
		