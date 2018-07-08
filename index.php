<?php get_header(); ?>

<?php if (!is_front_page()) { ?>
<div id="secondrownormal">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h2><?php the_title(); ?></h2>
<p><?php the_content(__('(more...)')); ?></p>
<p><i>Posted on <?php the_time('F jS, Y') ?></i></p>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

</div>

<?php } else { 
$contact_id = get_page_by_title( 'Contact Emma' )->ID;
$legal_id = get_page_by_title( 'Legal and Privacy' )->ID;
?>

<div id="secondrow">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<p><?php the_content(__('(more...)')); ?></p>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>

<div id="thirdrow">
<div id="thirdrowright">
<div id="TRRfirst">
<div id="TRRfirstRight"></div>
<div style="float:left;">
<div class="sociallinkblock"><a href="https://www.etsy.com/uk/shop/bullfrogart"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/DD_Social_Media_Icon_Set_65654/etsy.png" width="80" height="80" alt="Etsy icon"/><br>Etsy</a></div>
<div class="sociallinkblock"><a href="http://stores.ebay.co.uk/bullfrogart/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/DD_Social_Media_Icon_Set_65654/ebay.png" width="80" height="80" alt="Ebay icon"/><br>Ebay</a></div>
</div>
</div>

<div style="clear:both;"></div>

<div id="TRRsecond">
<div id="TRRsecondLeft">
</div>

<div style="float:left;">
<div class="sociallinkblock"><a href="https://www.flickr.com/photos/95754753@N05"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/DD_Social_Media_Icon_Set_65654/yahoo.png" width="80" height="80" alt="Flickr icon"/><br>Flickr</a></div>
<div class="sociallinkblock"><a href="<?php echo get_site_url();?>?p=<?php echo $contact_id;?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/DD_Social_Media_Icon_Set_65654/email_mod.png" width="80" height="80" alt="Contact icon"/><br>Contact</a></div>
</div>
<div class="sociallinkblock"></div>
<div class="sociallinkblock" style="font-size:50%;">Copyright &copy; Emma Bentley, 2011-2017. All rights reserved.<a href="<?php echo get_site_url();?>?p=<?php echo $legal_id;?>">Legal and privacy notices</a>.</div>
</div>

</div>
</div>

<div id="thirdrowLeftUpper">
</div>

<?php
if (is_active_sidebar( 'front-area-1' ) ) {
?>
<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'front-area-1' ); ?>
</aside><!-- #secondary -->
<?php } ?>

<div style="clear:left;"></div>


<?php } ?>

<div style="clear:both;"></div>
<?php get_footer(); ?>


