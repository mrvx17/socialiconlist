<?php 
/**
 * "Greativ" Content Manage System
 * @author Margo Pärnaku
 * @version 4.3
 * module "List"
 * Social icon list with links - uses font awesome or image files. 
 */
?>

<style>	

.socialList {

	a {
		margin-left: 30px;	
		 @set transition: $globalAnimation;

		&:hover, &:focus, &:active {
			text-decoration: none;
		}
		
		&.color-primary:hover {
			color: $brand-secondary !important;
		}
		&.color-secondary:hover {
			color: $brand-primary  !important;
		}
		&.color-third:hover {
			color: $brand-primary  !important;
		}
		&.color-white:hover {
			color: $brand-primary  !important;
		}
		&.color-black:hover {
			color: $brand-primary  !important;
		}


	}

	.imageIcon {
		width: 30px;
		height: 30px;
		-webkit-background-size: contain;
		background-size: contain;
		background-position: left center;
		display: inline-block;
		background-repeat: no-repeat;

	}
}


</style>



<div class="modList socialList <?php echo $this->data['cssClass']; ?>">
		<?php if($this->data['heading']){
		echo '<h3>'.$this->data['heading'].'</h3>';
	}?>

	<?php  
	$array = $this->data['items'];
	foreach ($array as $data) { ?>
	

		<?php if(!$data['image']) { ?>

		<a target="_blank" href="<?php echo $data['item'][4]['value']; ?>" class="value inline-block fz20 fa fa-<?php echo $data['item'][1]['value'] ?> <?php echo $data['item'][3]['value']; ?>" style="font-size: <?php echo $data['item'][2]['value']; ?>px;">  
		</a> 
		<?php } ?>


		<?php 

		if($data['image']) { ?>

		<a target="_blank" href="<?php echo $data['item'][4]['value']; ?>" class="imageIcon inline-block" style="background-image: url('<?php echo $data["image"][0]["thumb"];?>');  width: <?php echo $data['item'][1]['value']; ?>px;  height: <?php echo $data['item'][1]['value']; ?>px;"></a>
	<?php } ?>

<?php } ?>
</div>