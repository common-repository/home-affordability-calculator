<script type="text/javascript">  $ = jQuery.noConflict(); </script>
<?php include __DIR__.'/main-css.php';?>
<div class="hac-main">
	
	<div class="hac-flexer hac-form-x">
	<div class="hac-card"><?php include __DIR__.'/steps/1.php'; ?></div>
	<div><?php include __DIR__.'/steps/2.php'; ?></div>
    </div>

</div>


<script type="text/javascript">
	$(document).on('click', '.hac-heading', function() {
  var closet_head = $(this).attr('data-closet-head');
  $('[data-closet-body="'+closet_head+'"]').toggle('slow');

});
</script>

<script type="text/javascript">
	// 
	$(document).on('click', '#hac-show-debt-fields', function() {
  $('#hac-debt-fields').toggle('slow');

});

</script>


<style type="text/css">
	.hac-main {
    margin: auto;
    width: 100%;
    min-width: 800px;
    max-width: 1400px;
    /* border: 1px dotted red; */
    margin-top: 50px;
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    color: black;
    background-color: white;
}

  .hac-flexer{
  	display: flex;
  	justify-content: space-between;
  }


	.hac-flexer > div:nth-child(1){
		width: 60%;
		/*border: 1px dotted green;*/
	}


	.hac-flexer > div:nth-child(2){
		width: 38%;
		/*border: 1px dotted blue;*/
	}


	 @media screen and (max-width: 600px) {

	 	.hac-main {

    min-width: 280px;
}

.hac-flexer{
  	flex-direction: column;
  }

  .hac-flexer > div:nth-child(1){
		width: 100%;
	}


	.hac-flexer > div:nth-child(2){
		width: 100%;
		text-align: center;
	}

	.hac-input-div{
		flex-direction: column;
	}

.hac-input-div > div:nth-child(1) {
    width: 100%;
    font-size: 14px;
    text-align: center;
    margin: 10px 0 17px 0;
}

.hac-input-div > div:nth-child(2) {
    width: 100%;
}

}
</style>