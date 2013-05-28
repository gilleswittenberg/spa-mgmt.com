<?php echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js', array('inline' => false)); ?>
<?php echo $this->Html->script('jquery.antispammailto.js', array('inline' => false)); ?>
<?php echo $this->Html->script('colorbox/jquery.colorbox-min.js', array('inline' => false)); ?>
<?php echo $this->Html->scriptBlock("
$(function () {
	$('#email').antispamMailto({localPart: 'info', domain: 'fishspa-management'});
	$('#slideshow a').colorbox({rel:'gal', current: false});
});
", array('inline' => false));
?>
<div id="slideshow" class="slideshow">
	<ul>
		<li><a rel="slideshow" href="img/screenshots/924x_screenshot-1.png"><img src="img/screenshots/284x_screenshot-1.png" width="284"></a></li>
		<li><a rel="slideshow" href="img/screenshots/924x_screenshot-2.png"><img src="img/screenshots/284x_screenshot-2.png" width="284"></a></li>
		<li><a rel="slideshow" href="img/screenshots/924x_screenshot-3.png"><img src="img/screenshots/284x_screenshot-3.png" width="284"></a></li>
	</ul>
</div>
<div class="slideshow-text"><p>Specifically designed for the management of Garra Rufa Fish Spas globally</p></div>
<div class="articles">
<div class="browsers">
	<img src="img/browser-logos/all-desktop_600x.png">
</div>
<article>
	<h1>Features</h1>
	<ul>
	<li>Allocation of customer to specific fish spa tanks, hand or foot spa</li>
	<li>Health and safety compliance</li>
	<li>Customer time management efficiency - customers pay for time used after treatment</li>
	<!--<li>Maintenance modules for water testing and routine maintenance reminders</li>-->
	<li>Online revenue tracking, including smart phone and tablet</li>
	<li>Customer base management, emailaddress collection for newsletters</li>
	<li>Gift card and sales promotion tracking</li>
	<li>Group reservations</li>
	<!--<li>Multi language options</li>-->
	<li>Accountancy management</li>
	</ul>
</article>
<article>
	<h1>Pricing</h1>
	<p>99 Euro (excl. VAT/BTW) / month</p>
	<ul>
		<li>Per shop</li>
		<li>Daily email support</li>
		<li>Live monitoring</li>
		<li>Possibility to export your data anytime</li>
	</ul>
</article>
<article>
	<h1>Free monthly trial</h1>
	<p>Fill in the form to apply for a free trial.</p>
	<?php echo $this->Element('ContactForm.messages_add_form'); ?>
</article>
</div>
