	<footer id="footer">
		<div class="part1">
			<a href="" target="_blank">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/logo_footer.png" alt="">
			</a>
		</div>
		<div class="part2">
			<a href="https://genso.game/wp-content/uploads/pdf/privacypolicy.pdf">プライバシーポリシー</a>&nbsp;｜&nbsp;<a href="<?php echo home_url()?>/faq">FAQ</a>&nbsp;｜&nbsp;<a href="<?php echo home_url()?>/contact">お問い合わせ</a>
		</div>
		<div class="part3">
			<a href="https://twitter.com/genso_meta" target="_blank">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/twitter.png" alt="">
			</a>
			<a href="https://t.me/gensometamain" target="_blank">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/palk.png" alt="">
			</a>
			<a href="https://discord.gg/gensometa" target="_blank">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/discord.png" alt="">
			</a>
			<a href="https://lin.ee/fRx2vvE" target="_blank">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/line.png" alt="">
			</a>
			<a href="https://www.youtube.com/channel/UCMi4wGMEWgC9VVps8d_NLDA" target="_blank">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/youtube.png" alt="">
			</a>
		</div>
		<div class="powerdby">
			<a href="https://polygon.technology/">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/logo_polygon_powerdby.png" alt="">
			</a>
		</div>
		<div class="footer-bottom">
			<p>&copy;<?php echo date('Y'); ?> Metap Inc. All rights reserved.</p>
		</div>
	</footer>
	
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.mb.YTPlayer.min.js"></script><?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri()?>/assets/js/common.js"></script><?php wp_footer(); ?>
<script>
	jQuery(function(){
		$(".ytPlayer").YTPlayer();
	});
</script>
</body>
</html>
