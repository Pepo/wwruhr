<?php snippet('header') ?>
	<h3><?php echo $page->name()?></h3>
    	<div class="person clearfix">
    		<?php $image = $page->images()->first(); ?>
    		<?php echo thumb( $image, array('width' => 180, 'height' => 180, 'upscale' => true, 'crop' => true) ); ?>
            	<ul class="kontakte clearfix">
					<li><?php echo twitter($page->twitter()) ?></li>
                    <li><a href="<?php echo $page->homepage()?>"><?php echo $page->homepage()?></a></li>
                </ul>
                <p class="clearfix"><?php echo $page->longtext();?></p>
                <?php if($page->sessions()):?>
                <p><strong>Beiträge zum:</strong><br />
                	<?php $termine = yaml($page->sessions()); ?>
                	<?php foreach ($termine['Termine'] as $termin){
                			echo $termin.',';
                			echo $pages->findByUID($termin);
                		}
	               	?>
             	</p>
				<?php endif;?>
                <ul class="tags">
                    <?php if($page->tag1()):?>
                        <li><?php echo $page->tag1(); ?></li>
                    <?php endif; ?>
                    <?php if($page->tag2()):?>
                        <li><?php echo $page->tag2(); ?></li>
                    <?php endif; ?>
                    <?php if($page->tag3()):?>
                        <li><?php echo $page->tag3(); ?></li>
                    <?php endif; ?>
                    <?php if($page->tag4()):?>
                        <li><?php echo $page->tag4(); ?></li>
                    <?php endif; ?>
                    <?php if($page->tag5()):?>
                        <li><?php echo $page->tag5(); ?></li>
                    <?php endif; ?>
                    <?php if($page->tag6()):?>
                        <li><?php echo $page->tag6(); ?></li>
                    <?php endif; ?>
                    <?php if($page->tag7()):?>
                        <li><?php echo $page->tag7(); ?></li>
                    <?php endif; ?>
                </ul>
    	</div>

<?php snippet('footer');?>
