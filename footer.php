<div id="footer">

<?php if (!is_front_page()) { ?>
<!--<div class="sociallinkinfooter"><a href="https://www.etsy.com/uk/shop/bullfrogart"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/DD_Social_Media_Icon_Set_65654/etsy.png" width="80" height="80" alt="Etsy icon"/><br>Etsy</a></div>-->
<div class="sociallinkinfooter"><a href="http://stores.ebay.co.uk/bullfrogart/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/DD_Social_Media_Icon_Set_65654/ebay.png" width="80" height="80" alt="Ebay icon"/><br>Ebay</a></div>
<div class="sociallinkinfooter"><a href="https://www.flickr.com/photos/95754753@N05"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/DD_Social_Media_Icon_Set_65654/yahoo.png" width="80" height="80" alt="Flickr icon"/><br>Flickr</a></div>
<?php
$contact_id = get_page_by_title( 'Contact Emma' )->ID;
$legal_id = get_page_by_title( 'Legal' )->ID;
?>
<div class="sociallinkinfooter"><a href="<?php echo get_site_url();?>?p=<?php echo $contact_id;?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/DD_Social_Media_Icon_Set_65654/email_mod.png" width="80" height="80" alt="Contact icon"/><br>Contact</a></div>
<div class="sociallinkinfooter" style="font-size:50%;">Copyright &copy; Emma Bentley, 2011-2021. All rights reserved.<a href="<?php echo get_site_url();?>?p=<?php echo $legal_id;?>">Legal notices</a>.</div>
</div>
</div>

<?php 
}
wp_footer(); ?>
</body>
</html>
