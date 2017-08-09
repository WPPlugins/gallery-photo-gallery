<?php
class AYS_Gall_Helper{
	public static function ays_redirect($url){
		?>
			<script>
				window.location.href = "<?php echo $url;?>";
			</script>
		<?php
	}
}
?>

