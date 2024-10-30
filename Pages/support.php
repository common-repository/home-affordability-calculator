<style type="text/css">
	.support-card{
		width: 400px;
		border-radius: 0;
		text-align: center;
	}
.support-card h1 {font-size: 23px;}
.icon-support-sgsr{width: 100px;}

</style>

<div style="display: grid;
  grid-template-columns: auto auto auto;">
  <?php $SUPPORT_LINK = plugins_url( '/', __FILE__ );?>
<!-- -------------------------- -->
<div class="shadow font support-card" style="margin-top: 20px;margin-right: 2px;">
<img src="<?php echo esc_html($SUPPORT_LINK).'icons/email-support.png'; ?>" class="icon-support-sgsr">
<h1>Customer Support</h1>
<p><b>Email:</b> support@wppluginbox.com </p>


</div>



<div class="shadow font support-card" style="margin-top: 20px;margin-right: 2px;">
<img src="<?php echo esc_html($SUPPORT_LINK).'icons/customer-service.svg'; ?>" class="icon-support-sgsr">
<h1>Live Chat</h1>
<p><a href="https://wppluginbox.com/en">Live Chat</a></p>


</div>


</div>


