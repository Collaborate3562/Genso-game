<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header('', array('page' => 'top'));
?>
<section id="sec_fv" class="">
	<div class="bg">
		<video autoplay loop muted playsinline poster="<?php echo get_template_directory_uri()?>/assets/images/sec3_3.jpg">
			<source src="<?php echo get_template_directory_uri()?>/assets/videos/fv.mp4" type="video/mp4" >
		</video>
	</div>
	<div class="part1 inviewfadeInUp">
		<h2 class="eigo">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/fv_txt.png" alt="">
		</h2>
		<div class="btn_group">
			<a href="">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/fv_btn1.png" alt="">
			</a>
			<a href="">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/fv_btn2.png" alt="">
			</a>
		</div>
	</div>
</section>
<section id="sec1" class="flex_part">
	<div class="part1 part flex_img_left inviewfadeInUp">
		<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_1.png" alt="">
		<div class="flex_body">
			<h2>
				<img class="pc" src="<?php echo get_template_directory_uri()?>/assets/images/sec1_ttl.png" alt="">
				<img class="sp" src="<?php echo get_template_directory_uri()?>/assets/images/sec1_ttl_sp.png" alt="">
			</h2>
			<p>
				台湾で2012年にGame of the yearの金賞を受賞した<br class="pc">
				元素騎士オンラインにGameFi、UGC、Play to Earnを取り入れ、元素騎士オンライン META WORLDというファンタジー世界のメタバース空間を提供します。<br>
				<br>
				世界各国からMMORPGの開発メンバー、ブロックチェーン開発者、暗号資産ファイナンスの専門家など様々な分野のプレイヤーが１つのチームとなってスマートフォン、PC向けサービスとして開発を進めております！
			</p>
		</div>
	</div>
	<div class="part2 part flex_img_right inviewfadeInUp">
		<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_2.png" alt="">
		<div class="flex_body">
			<p>
				本作は、Free to Play × Play to Earn × UGC to Earn という3つの特徴を持ちます。<br>
				<br>
				どなたでも無料でゲームを始めることができて、ゲームで手に入れたアイテムをNFTマーケットプレイスで転売したり、権利を購入して、自身で製作した衣装などを販売することができます。
			</p>
		</div>
	</div>
	<div class="part3 part flex_img_left inviewfadeInUp">
		<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_3.png" alt="">
		<div class="flex_body">
			<p>
				MMORPGにDeFiの概念を取り入れることで、今まで体験されたことのないエコシステムを世界中のMMORPGプレイヤー、仮想通貨ファン、クリエイターの方々に提供することを目指しています。
			</p>
		</div>
	</div>
	<div class="part4 flex_part inviewfadeInUp">
		<h2>
			<img class="pc" src="<?php echo get_template_directory_uri()?>/assets/images/sec1_2_ttl.png" alt="">
			<img class="sp" src="<?php echo get_template_directory_uri()?>/assets/images/sec1_2_ttl_sp.png" alt="">
		</h2>
		<div class="part_body flex_img_right inviewfadeInUp">
			<video loop autoplay muted playsinline>
				<source src="<?php echo get_template_directory_uri()?>/assets/videos/video1.mp4" type="video/mp4" >
			</video>
			<div class="flex_body">
				<p>
					元素騎士オンライン META WORLDの世界では、<br>
					様々なNFTをゲーム内に持ち込んで遊ぶことができます
				</p>
				<ul>
					<li>
						<img src="<?php echo get_template_directory_uri()?>/assets/images/check1.png" alt="">	
						<span>カッコいい見た目になれる「おしゃれ衣装」</span>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri()?>/assets/images/check1.png" alt="">	
						<span>仲間を回復することのできる「回復ポーション」</span>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri()?>/assets/images/check1.png" alt="">	
						<span>強敵と対峙するための「各種装備」など</span>
					</li>
				</ul>
				<p>
					これらのNFTを使用することで、仲間と一緒に<br>
					パーティを組んで、様々なモンスターを討伐して<br>
					Play-to-Earn をしたり、一緒に冒険した仲間たち<br>
					と交流することができます
				</p>
			</div>
		</div>
	</div>
	<div class="part5 inviewfadeInUp">
		<h2>
			<img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" alt="">
		</h2>
	</div>
</section>
<section id="sec2" class="flex_part inviewfadeInUp">
	<h2>
		<img src="<?php echo get_template_directory_uri()?>/assets/images/sec2_ttl.png" alt="">
	</h2>
	<p>
		リリース後のアップデート内容として、「おしゃれ装備」の<br class="pc">
		制作権利に関するNFTや、「特定マップ」の制作権利に<br class="pc">
		関するNFTの提供を予定しています。
	</p>
	<div class="part1 flex_img_left inviewfadeInUp">
		<img src="<?php echo get_template_directory_uri()?>/assets/images/sec2_1.jpg" alt="">
		<div class="flex_body">
			<div class="block">
				<h3>
					<img src="<?php echo get_template_directory_uri()?>/assets/images/check2.png" alt="">
					<span>
					おしゃれ装備の制作権利に関するNFT
					</span>
				</h3>
				<p>
				この権利を有する方は、自身で好きなおしゃれ装備を制作し<br class="pc">
				NFTアイテムとしてゲームに登録することができます。<br>
				たくさんの商品を制作してブランドを築き販売が可能となります。
				</p>
			</div>
		</div>
	</div>
	<div class="part1 flex_img_right inviewfadeInUp">
		<img src="<?php echo get_template_directory_uri()?>/assets/images/sec2_2.jpg" alt="">
		<div class="flex_body">
			<div class="block">
				<h3>
					<img src="<?php echo get_template_directory_uri()?>/assets/images/check2.png" alt="">
					<span>
						特定エリアの制作権利に関するNFT
					</span>
				</h3>
				<p>
					特定エリアのマップオブジェクトを自由にデザインし直したり<br class="pc">
					そこに登場するモンスターに自身の保有するアイテムのNFTを<br class="pc">
					レアドロップアイテムとして設定するなどした上で、<br class="pc">
					他のプレイヤーに公開することが可能です。<br>
					このマップには入場料を設定するなどして、マップからの<br class="pc">
					権利収益を得ることが可能となります。
				</p>
			</div>
		</div>
	</div>
</section>
<section id="sec3">
	<div class="part1 flex_part">
		<h2 class="ryumin inviewfadeInUp">
			元素騎士オンライン META WORLD　ゲームシステム
		</h2>
		<div class="block1 flex_img_right inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_1.jpg" alt="">
			<div class="flex_body">
				<p>
					いにしえの時代より、人間は精霊たちと共に歩み、共に暮らしていた…。<br>
					しかし今から300年前、悲劇が起こり突如、襲いかかる魔物の大群に対し、<br class="pc">
					後世に5英雄と称えられるエレメンタルナイツの犠牲によって、<br class="pc">
					恐ろしく手強い闇竜を退け、冥王の消滅に成功した。<br>
<br>
					それから300年が経過した現在、<br class="pc">
					穏やかだったエルロンド王国は、闇の勢力により戦渦に<br class="pc">
					巻き込まれようとしていた。<br>
<br>
					今、新たなエレメンタルナイツたちが長き眠りから覚醒する

				</p>
			</div>
		</div>
	</div>
	<div class="part2 inviewfadeInUp">
		<div class="block1 inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_2.jpg" alt="">
			<h3>
				仲間との共闘で強力なボスに挑め！
			</h3>
		</div>
		<div class="block1 inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_3.jpg" alt="">
			<h3>
			職業、ステータス割振、スキルツリーで<br>あなただけのキャラクターを極めよう！
			</h3>
		</div>
		<div class="block1 inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_4.jpg" alt="">
			<h3>
			おしゃれ衣装NFTでパラメータと見た目を強化！<br>一部のおしゃれ装備には専用のスキルも備わる
			</h3>
		</div>
		<div class="block1 inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_5.jpg" alt="">
			<h3>
			たくさんのプレイヤーが集まる都市が世界に<br>
			点在拠点で仲間を募って冒険の準備をしよう
			</h3>
		</div>
	</div>
</section>
<!-- <section id="sec4">
	<div class="part1 flex_part">
		<div class="flex_img_right">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/" alt="">
			<div class="flex_body">
				<h2>
					<img src="<?php echo get_template_directory_uri()?>/assets/images/sec4_ttl.png" alt="">
				</h2>
				<p>
					NFTマーケットプレイスは、NFT可された様々なアイテムたちを出品することができて、他のプレイヤーや、仮想通貨ファンたちが暗号資産として、NFTを購入、コレクション、転売することができるプラットフォームになります。<br>
					<br>
					このプラットフォームで用いられているクロスチェーン技術によって々な仮想通貨で簡単にNFTを取引することが可能です。
				</p>
			</div>
		</div>
	</div>
</section> -->
<section id="sec5">
	<h2 class="inviewfadeInUp">
		<img class="pc" src="<?php echo get_template_directory_uri()?>/assets/images/sec5_ttl.png" alt="">
		<img class="sp" src="<?php echo get_template_directory_uri()?>/assets/images/sec5_ttl_sp.png" alt="">
	</h2>
	<div class="part1 inviewfadeInUp">
		<img src="<?php echo get_template_directory_uri()?>/assets/images/sec5_1.png" alt="">
		<img class="pc" src="<?php echo get_template_directory_uri()?>/assets/images/sec5_2.png" alt="">
		<img class="sp" src="<?php echo get_template_directory_uri()?>/assets/images/sec5_2_sp.png" alt="">
	</div>
</section>
<section id="sec6">
	<h2 class="inviewfadeInUp">
		<img class="pc" src="<?php echo get_template_directory_uri()?>/assets/images/sec6_ttl.png" alt="">
		<img class="sp" src="<?php echo get_template_directory_uri()?>/assets/images/sec6_ttl_sp.png" alt="">
	</h2>
	<div class="part1 inviewfadeInUp">
		<img class="pc" src="<?php echo get_template_directory_uri()?>/assets/images/sec6_1.png" alt="">
		<img class="sp" src="<?php echo get_template_directory_uri()?>/assets/images/sec6_1_sp.png" alt="">
	</div>
</section>
<section id="sec7">
	<h2 class="inviewfadeInUp">
		<img class="pc" src="<?php echo get_template_directory_uri()?>/assets/images/sec7_ttl.png" alt="">
		<img class="sp" src="<?php echo get_template_directory_uri()?>/assets/images/sec7_ttl_sp.png" alt="">
	</h2>
	<div class="part1 inviewfadeInUp">
		<img class="pc" src="<?php echo get_template_directory_uri()?>/assets/images/sec7_1.png" alt="">
		<img class="sp" src="<?php echo get_template_directory_uri()?>/assets/images/sec7_1_sp.png" alt="">
	</div>
	<div class="part2">
		<h3 class="inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec7_2.png" alt="">
			<span>
			その他、アップデートを予定する実装項目
			</span>
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec7_2.png" alt="">
		</h3>
		<ul>
			<li class="inviewfadeInUp">・権利を有するクリエイターによる独自アイテムの制作、実装を行う機能の公開（開発メンバーのサポート有り）</li>
			<li class="inviewfadeInUp">・権利を有するクリエイターによる独自マップ、モンスターの制作、実装を行う機能の公開</li>
			<li class="inviewfadeInUp">・従来マップの権利販売、建築物の構築、実装を行う機能の公開</li>
		</ul>
	</div>
</section>
<!-- <section id="sec_news">
	<h2 class="inviewfadeInUp">
		<img class="pc" src="<?php echo get_template_directory_uri()?>/assets/images/news_ttl.png" alt="">
		<img class="sp" src="<?php echo get_template_directory_uri()?>/assets/images/news_ttl_sp.png" alt="">
	</h2>
	<div class="part1 inviewfadeInUp">
		<a href="" class="block">
			<img src="" alt="">
			<h3>
				NEWS1
			</h3>
			<p>
				2021.11.13
			</p>
		</a>
		<a href="" class="block inviewfadeInUp">
			<img src="" alt="">
			<h3>
				NEWS2
			</h3>
			<p>
				2021.11.13
			</p>
		</a>
		<a href="" class="block inviewfadeInUp">
			<img src="" alt="">
			<h3>
				NEWS3
			</h3>
			<p>
				2021.11.13
			</p>
		</a>
	</div>
	<div class="part2 inviewfadeInUp">
		<a href="<?php echo home_url( )?>/news">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/more_news.png" alt="">
		</a>
	</div>
</section> -->

<section id="sec8">
	<h2 class="inviewfadeInUp">
		<img class="pc" src="<?php echo get_template_directory_uri()?>/assets/images/sec8_ttl.png" alt="">
		<img class="sp" src="<?php echo get_template_directory_uri()?>/assets/images/sec8_ttl_sp.png" alt="">
	</h2>
	<div class="part1">
		<a href="https://blockcast.cc/" class="block inviewfadeInUp">
			<span class="tri_up"><img src="<?php echo get_template_directory_uri(  )?>/assets/images/tri.png" alt=""></span>
			<img src="<?php echo get_template_directory_uri(  )?>/assets/images/blockcast.png" alt="">
			<span class="tri_down"><img src="<?php echo get_template_directory_uri(  )?>/assets/images/tri_down.png" alt=""></span>
		</a>
		<a href="https://jp.cointelegraph.com/" class="block inviewfadeInUp">
			<span class="tri_up"><img src="<?php echo get_template_directory_uri(  )?>/assets/images/tri.png" alt=""></span>
			<img src="<?php echo get_template_directory_uri(  )?>/assets/images/cointelegraph.png" alt="">
			<span class="tri_down"><img src="<?php echo get_template_directory_uri(  )?>/assets/images/tri_down.png" alt=""></span>
		</a>
	</div>
</section>

<section id="sec9">
	<h2 class="inviewfadeInUp">
		<img class="pc" src="<?php echo get_template_directory_uri()?>/assets/images/sec9_ttl.png" alt="">
		<img class="sp" src="<?php echo get_template_directory_uri()?>/assets/images/sec9_ttl_sp.png" alt="">
	</h2>
	<div class="part1">
		<a href="https://cryptogames.co.jp/" class="block inviewfadeInUp">
			<span class="tri_up"><img src="<?php echo get_template_directory_uri(  )?>/assets/images/tri2.png" alt=""></span>
			<img src="<?php echo get_template_directory_uri(  )?>/assets/images/cryptogames.png" alt="">
			<span class="tri_down"><img src="<?php echo get_template_directory_uri(  )?>/assets/images/tri2_down.png" alt=""></span>
		</a>
		<a href="https://polygon.technology/" class="block inviewfadeInUp">
			<span class="tri_up"><img src="<?php echo get_template_directory_uri(  )?>/assets/images/tri2.png" alt=""></span>
			<img src="<?php echo get_template_directory_uri(  )?>/assets/images/polygon.png" alt="">
			<span class="tri_down"><img src="<?php echo get_template_directory_uri(  )?>/assets/images/tri2_down.png" alt=""></span>
		</a>
	</div>
</section>
<section id="sec10" class="flex_part">
	<h2 class="eigo_gothic inviewfadeInUp">
		<img class="pc" src="<?php echo get_template_directory_uri()?>/assets/images/sec10_ttl.png" alt="">
		<img class="sp" src="<?php echo get_template_directory_uri()?>/assets/images/sec10_ttl_sp.png" alt="">
	</h2>
	<div class="part1">
			<?php
			$args = array(
				'post_status' => 'publish',
				'post_type' => 'member',
				'posts_per_page' => 8,
				'paged' => $paged,
				'orderby' => 'date',
				'order' => 'ASC'
			);
			$query = new WP_Query($args);
			$search_posts = array();
			while ($query->have_posts()) :
				$query->the_post();
				$search_posts[] = $post->ID;
			?>
				<a class="inviewfadeInUp">
					<div class="flex_body">
						<p class="category_part">
								<?php echo get_field('auth') ?>
							</p>
						<h3>
							<?php echo get_field('name') ?>
						</h3>
					</div>
					<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
				</a>
			<?php endwhile;
			wp_reset_query(); ?>
	</div>
</section>
<?php
get_footer();
