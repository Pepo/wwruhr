<?php snippet('header') ?>
    <h3><?php echo $page->name()?></h3>
        <div class="person clearfix">
            <?php $image = $page->images()->first(); ?>
            <? echo thumb( $image, array('width' => 180, 'height' => 180, 'upscale' => true, 'crop' => true) ); ?>
                <ul class="kontakte clearfix">
                    <li><? echo twitter($page->twitter()) ?></li>
                    <li><a href="<?php echo $page->homepage()?>"><?php echo $page->homepage()?></a></li>
                </ul>
                <p class="clearfix"><?php echo $page->longtext();?></p>
               
                <?php  if($page->sessions()):?>
                <p><strong>Beiträge zum:</strong><br />
                    <?php $termine = yaml($page->sessions()); ?> 
                    <?php foreach ($termine['Termine'] as $termin):?>
                            <a href="<?php echo $pages->findByUID($termin)->first()->url();?>"><? echo $termin?></a>,
                    <?php endforeach?>
                </p>
                <?php endif;?>
                <ul class="tags">
                    <? if($page->tag1()):?>
                        <li><?php echo $page->tag1(); ?></li>
                    <?php endif; ?>    
                    <? if($page->tag2()):?>
                        <li><?php echo $page->tag2(); ?></li>
                    <?php endif; ?>    
                    <? if($page->tag3()):?>
                        <li><?php echo $page->tag3(); ?></li>
                    <?php endif; ?>    
                    <? if($page->tag4()):?>
                        <li><?php echo $page->tag4(); ?></li>
                    <?php endif; ?>    
                    <? if($page->tag5()):?>
                        <li><?php echo $page->tag5(); ?></li>
                    <?php endif; ?>
                    <? if($page->tag6()):?>
                        <li><?php echo $page->tag6(); ?></li>
                    <?php endif; ?>    
                    <? if($page->tag7()):?>
                        <li><?php echo $page->tag7(); ?></li>
                    <?php endif; ?>    
                </ul>
        </div>

<?php snippet('footer');?>
