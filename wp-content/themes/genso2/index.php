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

	/* ja / en_US / zh_CN */
	$locale = get_locale();
	if ($locale == 'ja') {
		get_header('ja');
	}
	elseif ($locale == 'zh_CN') {
		get_header('zh_CN');
	}
	else {
		get_header();
	}
?>

<section id="sec_fv" class="">
	<div id="bgvideo"></div>
	<div class="part1 inviewfadeInUp">
		<?php if($locale == 'ja'): ?>
			<img class="keyvisual" src="<?php echo get_template_directory_uri()?>/assets/images/fv_txt.png">
			<?php /*
			<img class="lede" src="<?php echo get_template_directory_uri()?>/assets/images/bubble_ja.png"> */?>
			<div class="button-container" style="margin-top: 10px;">
				<a href="#mt-community">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/button_community.png" alt="">
				</a>
				<a href="https://genso.game/wp-content/uploads/pdf/WhitePaper_genso_JP.pdf">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/button_whitepaper.png" alt="">
				</a>
				<a href="https://genso.game/wp-content/uploads/pdf/GensoKishi_whitepaper_Lite_JP.pdf">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/button_whitepaper_lite.png" alt="">
				</a>
			</div>
			<a class="banner" href="/ja/news-130122/">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/lounchpool_bybit.jpg" alt="Total amount $10,000 Private Sale">
			</a>
		<?php elseif($locale == 'zh_CN'): ?>
			<img class="keyvisual" src="<?php echo get_template_directory_uri()?>/assets/images/fv_txt_zh.png" alt="">
			<?php /*
			<img class="lede" src="<?php echo get_template_directory_uri()?>/assets/images/bubble_zh.png" alt=""> */?>
			<div class="button-container" style="margin-top: 10px;">
				<a href="#mt-community">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/button_community.png" alt="">
				</a>
				<a href="https://genso.game/wp-content/uploads/pdf/WhitePaper_genso_ZH.pdf">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/button_whitepaper.png" alt="">
				</a>
				<a href="https://genso.game/wp-content/uploads/pdf/GensoKishi_whitepaper_Lite_ZH.pdf">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/button_whitepaper_lite.png" alt="">
				</a>
			</div>
			<a class="banner" href="/zh/news-130122/">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/lounchpool_bybit.jpg" alt="Total amount $10,000 Private Sale">
			</a>
		<?php else: ?>
			<img class="keyvisual" src="<?php echo get_template_directory_uri()?>/assets/images/fv_txt_en.png" alt="">
			<?php /*
			<img class="lede" src="<?php echo get_template_directory_uri()?>/assets/images/bubble_en.png" alt=""> */?>
			<div class="button-container" style="margin-top: 10px;">
				<a href="#mt-community">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/button_community.png" alt="">
				</a>
				<a href="https://genso.game/wp-content/uploads/pdf/WhitePaper_genso_EN.pdf">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/button_whitepaper.png" alt="">
				</a>
				<a href="https://genso.game/wp-content/uploads/pdf/GensoKishi_whitepaper_Lite_EN.pdf">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/button_whitepaper_lite.png" alt="">
				</a>
			</div>
			<a class="banner" href="/news-130122/">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/lounchpool_bybit.jpg" alt="Total amount $10,000 Private Sale">
			</a>
		<?php endif; ?>
	</div>
	<div class="ytPlayer" data-property="{
		<?php if($locale == 'ja'): ?>
		videoURL: 'zhzOzvMsE3Q',
		<?php elseif($locale == 'zh_CN'): ?>
		videoURL: 'POzSd4fdZ7I',
		<?php else: ?>
		videoURL: 'ZL067vGNzA4',
		<?php endif; ?>
		containment: '#bgvideo',
		autoPlay: true,
		loop: 1,
		ratio: '16/9',
		mute: true,
		startAt: 0,
		showControls: false,
		showYTLogo: false,
		stopMovieOnBlur: false,
		optimizeDisplay: false
	}"></div>
	
</section>

<?php if($locale == 'ja'): ?>

	<section id="sec1" class="flex_part">
		<div class="part1 part flex_img_left inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_1.png" alt="">
			<div class="flex_body">
				<h2 id="mt-play">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_ttl.png" alt="">
				</h2>
				<p>
					元素騎士オンライン -META WORLD-は、累計ダウンロード数800万以上、2012年に台湾で「Game of the year金賞」を受賞した元素騎士オンラインの新作GameFiです。<br>
					UGC、Play to Earnを取り入れ、ファンタジー世界のメタバース空間を実現します。<br>
					世界各国からMMORPGの開発メンバー、ブロックチェーン開発者、暗号資産ファイナンスの専門家など様々な分野のプレイヤーが１つのチームとなって開発が進行しております！
				</p>
			</div>
		</div>
		<div class="part2 part flex_img_right inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_2.png" alt="">
			<div class="flex_body">
				<p>
					本プロジェクトは、Free to Play × UGC to Earn× Play to Earnの３つの特徴があります。<br>
					どなたでも無料でゲームを始めることができて、ゲームで手に入れたアイテムをNFTマーケットプレイスで転売したり、権利を購入して、自身が制作した衣装などを販売することができます。
				</p>
			</div>
		</div>
		<div class="part3 part flex_img_left inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_3.png" alt="">
			<div class="flex_body">
				<p>
				メタバース空間にDeFiの概念を取り入れることで、今まで体験されたことのないファンタジー世界での経済圏を実現します。
				</p>
			</div>
		</div>
		<div class="part4 flex_part inviewfadeInUp">
			<h2 id="mt-nft">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_2_ttl.png" alt="">
			</h2>
			<div class="part_body flex_img_right inviewfadeInUp">
				<div class="flex_video">
					<div id="video-nft">
						<div class="ytPlayer" data-property="{
							videoURL: 'Q_wEOlOK28k',
							containment: '#video-nft',
							autoPlay: true,
							loop: 1,
							ratio: '16/9',
							mute: true,
							startAt: 0,
							showControls: false,
							showYTLogo: false,
							stopMovieOnBlur: false,
							optimizeDisplay: false
						}"></div>
					</div>
				</div>
				<div class="flex_body">
					<p>
						元素騎士オンライン META WORLDの世界では、<br>
						様々なNFTをゲーム内に持ち込んで遊ぶことができます
					</p>
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/check1.png" alt="">	
							<span>個性ある見た目と特殊な能力が備わった「限定オシャレ装備」</span>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/check1.png" alt="">	
							<span>数が限定された希少価値のある「特殊アイテム」</span>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/check1.png" alt="">	
							<span>強敵と対峙するために独自の進化をとげた「オリジナル装備」など</span>
						</li>
					</ul>
					<p>
						これらのNFTを利用することで、仲間と一緒にパーティを組んで、様々なモンスターを討伐して 貴重価値の高いアイテムを手に入れてPlay to Earnをしたり、世界の冒険者たちと交流し、NFTのトレードをすることができます。
					</p>
				</div>
			</div>
		</div>
		<div class="part5 inviewfadeInUp">
		</div>
	</section>
	<section id="sec2" class="flex_part inviewfadeInUp">
		<div class="part_body">
			<h2 id="mt-ugc">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec2_ttl.png" alt="">
			</h2>
			<p>
				リリース後のアップデート内容として、「オシャレ装備」の制作権利に関するNFTや、「建物、モンスター、ダンジョン」などの制作権利に関する土地NFTの販売を予定しています。
			</p>
			<div class="part1 flex_img_left inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec2_1.jpg" alt="">
				<div class="flex_body">
					<div class="block">
						<h3>オシャレ装備の制作権利に関するNFT</h3>
						<p>
							この権利を有する方は、自身で好きなオシャレ装備を制作し、NFTアイテムとしてゲームに登録することができます。<br>
							たくさんの商品を制作してブランドを築き販売することが可能となります。<br>
							将来的には企業ブランドやアニメなど、様々なジャンルのメーカーが参入します。
						</p>
					</div>
				</div>
			</div>
			<div class="part1 flex_img_right inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec2_2.jpg" alt="">
				<div class="flex_body">
					<div class="block">
						<h3>土地の権利と制作権利に関するNFT</h3>
						<p>
						土地を購入することで、マップのオブジェクトを自由にデザインし直したり、そこに登場するモンスターに自身の保有するNFTをレアドロップアイテムとして設定するなどした上で、他のプレイヤーに公開することが可能です。このマップには入場料を設定するなどして、マップからの権利収益を得ることが可能となります。
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="sec3">
		<div class="part1 flex_part">
			<h2 id="mt-system" class="ryumin inviewfadeInUp">
				元素騎士オンライン META WORLD のPlay to Earn
			</h2>
			<div class="block1 flex_img_right inviewfadeInUp">
				<?php /*<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_1.jpg" alt=""> */?>
				<div class="flex_video">
					<div id="video-starts">
							<div class="ytPlayer" data-property="{
								videoURL: 'wSz01Fr3PCY',
								containment: '#video-starts',
								autoPlay: true,
								loop: 1,
								ratio: '16/9',
								mute: true,
								startAt: 0,
								showControls: false,
								showYTLogo: false,
								stopMovieOnBlur: false,
								optimizeDisplay: false
							}"></div>
					</div>
				</div>
				<div class="flex_body">
					<p>本ゲームはRONDというゲームマネーでゲーム内経済が構成されます。RONDはStableトークンのような存在で、ゲーム内で稼いだRONDを仮想通貨取引所で交換するための役割を備えています。</p>
					<p>RONDは仮想通貨取引所の価格と連動して、ゲーム内でもRONDの価値が変化し、ゲーム内の武器屋などでもアービトラージトレードが採用されます。</p>
					<p>プレイヤーは、メタバースの世界でクエストを受けたり、仲間とダンジョンを冒険して強敵を討伐したりして、ゲームの中で価値あるアイテムを獲得することにより、誰でもNFT販売とRONDによる収入を得ることができます。</p>
					<p>時にはレアアイテムの獲得で思わぬ収入が得られるでしょう。それを仲間と達成すると大きな喜びに変わります。</p>
					<p>また、メタバースの世界での全てのアイテムは、流通個数が決まっています。希少なアイテムを手に入れた場合、プレイヤーが増えて需要が高まるほど価値が向上します。</p>
				</div>
			</div>
		</div>
		<div class="part2 inviewfadeInUp">
			<div class="block1 inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_2.jpg" alt="">
				<h3>
				ダンジョンなどで獲得したレアアイテムはNFTで販売可能
				</h3>
			</div>
			<div class="block1 inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_3.jpg" alt="">
				<h3>
				仲間と一緒に冒険で資産を稼ごう
				</h3>
			</div>
			<div class="block1 inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_4.png" alt="">
				<h3>
				オシャレ装備のNFTを掛け合わせることによってパラメータと見た目を強化！
				世界に一つしかない付加価値を加えて、希少性を向上させよう！
				</h3>
			</div>
			<div class="block1 inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_5.png" alt="">
				<h3>
					町では世界中のプレイヤーが集まってNFTのトレードや権利交渉などの経済活動が盛んにおこなわれます。仲間を見つけたり交流を楽しむのもメタバースの醍醐味です。
				</h3>
			</div>
		</div>
	</section>
	<section id="sec5">
		<h2 id="mt-token" class="inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec5_ttl.png" alt="">
		</h2>
		<div class="part1 inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec5_1.png" alt="">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec5_2.png" alt="">
		</div>
	</section>
	<section id="sec6">
		<h2 id="mt-roadmap" class="inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec6_ttl.png" alt="">
		</h2>
		<div class="part1 inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec6_1.png" alt="">
		</div>
	</section>
	<section id="sec7">
		<div class="part_body">
			<h2 class="inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec7_ttl.png" alt="">
			</h2>
			<div class="part1 inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec7_1.png?211223" alt="">
			</div>
		</div>
	</section>

	<section id="sec8">
		<div class="part_body">
			<h2 class="inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec8_ttl.png" alt="">
			</h2>
			<div class="row row--banner">
				<a href="https://blockcast.it/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/logo_blockcast.png" alt="">
				</a>
				<a href="https://jp.cointelegraph.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/logo_cointelegraph.png" alt="">
				</a>
				<a href="https://www.abmedia.io/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/logo_abmedia.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://www.newsbtc.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/NewsBTC.png" alt="">
				</a>
				<a href="https://cryptoslate.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/cs-media-logo-light.png" alt="">
				</a>
				<a href="https://coinpost.jp/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/coinpost.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://crypto-times.jp/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/Cryptotimes.png" alt="">
				</a>
				<a href="https://ambcrypto.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/AMBCrypto.png" alt="">
				</a>
				<a href="https://brave.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/Brave-logo-color-RGB.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://dappradar.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/Dappradar.png" alt="">
				</a>
				<a href="https://news.bitcoin.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/bitcoin_com.png" alt="">
				</a>
				<a href="https://bitcoinist.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/BITCOINIST.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://btcmanager.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/BTCmanager.png" alt="">
				</a>
				<a href="https://coincodex.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/CoinCodex.png" alt="">
				</a>
				<a href="https://coinquora.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/CoinQuora.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://cryptonews.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/cryptonews_resized.png" alt="">
				</a>
				<a href="https://u.today/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/U.png" alt="">
				</a>
				<a href="https://coin360.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/Coin360.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://rr2.capital/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/RRLogoRS_logo.png" alt="">
				</a>
				<a href="https://cointelegraph.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/cointelegraph_global.png" alt="">
				</a>
				<a href="https://beincrypto.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/BeInCrypto.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://dappsmarket.net/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/dAppsmarket.png" alt="">
				</a>
			</div>
		</div>
	</section>
	
	<section id="sec9">
		<div class="part_body">
			<h2 class="inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec9_ttl.png" alt="">
			</h2>
			<div class="row row--banner">
				<a href="https://polygon.technology/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri(  )?>/assets/images/logo_polygon.png" alt="">
				</a>
				<a href="https://trustpad.io/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri(  )?>/assets/images/trustpad-light_logo.png" alt="">
				</a>
			</div>
		</div>
	</section>

<?php elseif($locale == 'zh_CN'): ?>

	<section id="sec1" class="flex_part">
		<div class="part1 part flex_img_left inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_1.png" alt="">
			<div class="flex_body">
				<h2 id="mt-play">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_ttl_zh.png" alt="">
				</h2>
				<p>
					元素騎士線上-META WORLD-是元素騎士線上的新GameFi作品，累計下載量超800萬，2012年在臺灣獲得“年度遊戲金獎”。該款遊戲結合UGC、邊玩邊賺（Play to Earn），打造位於幻想世界中的元宇宙。<br>
					由來自世界各國的MMORPG開發成員、區塊鏈開發者、加密貨幣金融專家等不同領域的參與者組成的團隊正在開發！<br>
					* 作爲《元素騎士Online》的授權來源的《Elemental Knights Online》是在日本，并且在Android、iPhone、Switch、PlayStation4多平臺運營。<br>
				</p>
			</div>
		</div>
		<div class="part2 part flex_img_right inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_2.png" alt="">
			<div class="flex_body">
				<p>
					本項目有三個特點：免費玩遊戲（Free to Play） × 用戶創作內容來賺錢（UGC to Earn） × 邊玩邊賺（Play to Earn）。<br>
					任何人都可以免費玩遊戲，在NFT市場轉售從遊戲中獲得的道具，或者購買權利，銷售自己製作的服裝等。
				</p>
			</div>
		</div>
		<div class="part3 part flex_img_left inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_3.png" alt="">
			<div class="flex_body">
				<p>
				將DeFi的概念引入元宇宙，打造一個前所未有的幻想世界經濟圈。
				</p>
			</div>
		</div>
		<div class="part4 flex_part inviewfadeInUp">
			<h2 id="mt-nft">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_2_ttl_zh.png" alt="">
			</h2>
			<div class="part_body flex_img_right inviewfadeInUp">
				<div class="flex_video">
					<div id="video-nft">
						<div class="ytPlayer" data-property="{
							videoURL: 'Q_wEOlOK28k',
							containment: '#video-nft',
							autoPlay: true,
							loop: 1,
							ratio: '16/9',
							mute: true,
							startAt: 0,
							showControls: false,
							showYTLogo: false,
							stopMovieOnBlur: false,
							optimizeDisplay: false
						}"></div>
					</div>
				</div>
				<div class="flex_body">
					<p>
						在《元素騎士Online META WORLD》的世界中，<br>
						可將各種各樣的NFT帶入遊戲中來玩。
					</p>
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/check1.png" alt="">	
							<span>具備獨特外觀和特殊能力的“限定時尚裝備”</span>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/check1.png" alt="">	
							<span>數量有限且具有稀缺價值的“特殊道具”</span>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/check1.png" alt="">	
							<span>與強敵對抗而進行獨特進化的“原創裝備”等</span>
						</li>
					</ul>
					<p>
						使用這些NFT，可與夥伴們一起組成團隊，討伐各種怪物並得到價值連城的道具來邊玩邊賺（Play to Earn），或與全世界的冒險者們交流，交易NFT。
					</p>
				</div>
			</div>
		</div>
		<div class="part5 inviewfadeInUp">
		</div>
	</section>
	<section id="sec2" class="flex_part inviewfadeInUp">
		<div class="part_body">
			<h2 id="mt-ugc">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec2_ttl_zh.png" alt="">
			</h2>
			<p>
				發佈的更新內容，將包含出售有關製作“時尚裝備”權利的NFT，以及有關製作“建築物、怪物、地牢”等權利的土地NFT。
			</p>
			<div class="part1 flex_img_left inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec2_1.jpg" alt="">
				<div class="flex_body">
					<div class="block">
						<h3>有關製作時尚裝備權利的NFT</h3>
						<p>
							擁有這一權利的參與者可製作自己喜歡的時尚裝備，並將其註冊為遊戲中的NFT道具。<br>
							可創造大量商品，建立品牌並銷售。<br>
							未來會有企業品牌,動漫等不同類型的廠商參與其中。
						</p>
					</div>
				</div>
			</div>
			<div class="part1 flex_img_right inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec2_2.jpg" alt="">
				<div class="flex_body">
					<div class="block">
						<h3>關於土地權利和製作權利的NFT</h3>
						<p>
							購買土地，可隨心所欲重新設計地圖中的物體，將擁有的NFT設置為出現在地圖中怪獸的稀有掉落道具，然後向其他參與者公佈。可對該地圖設置入場費，並從地圖中獲得權利收入。
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="sec3">
		<div class="part1 flex_part">
			<h2 id="mt-system" class="ryumin inviewfadeInUp">
				元素騎士Online　META WORLD邊玩邊賺（Play to Earn）
			</h2>
			<div class="block1 flex_img_right inviewfadeInUp">
				<?php /*<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_1.jpg" alt=""> */?>
				<div class="flex_video">
					<div id="video-starts">
							<div class="ytPlayer" data-property="{
								videoURL: 'wSz01Fr3PCY',
								containment: '#video-starts',
								autoPlay: true,
								loop: 1,
								ratio: '16/9',
								mute: true,
								startAt: 0,
								showControls: false,
								showYTLogo: false,
								stopMovieOnBlur: false,
								optimizeDisplay: false
							}"></div>
					</div>
				</div>
				<div class="flex_body">
					<p>名為ROND的遊戲幣構成本遊戲的遊戲內經濟。ROND類似穩定代幣，具有在加密貨幣交易所兌換在遊戲中賺取ROND的作用。</p>
					<p>ROND與加密貨幣交易所的價格掛鉤，遊戲中ROND的價值也會變化，遊戲中的武器商店等會採用套利交易。</p>
					<p>通過在元宇宙中接受任務，或與夥伴冒險在地牢中討伐強敵，在遊戲中獲得有價值的道具，任何參與者都可獲得銷售NFT和ROND帶來的收入。</p>
					<p>有時，獲得稀有道具可帶來意想不到的收入。和夥伴實現目標會讓人非常高興。</p>
					<p>此外，元宇宙中所有道具的流通數量都是固定的。當得到稀有道具時，參與者越多，需求就會增多，價值也就會越高。</p>
				</div>
			</div>
		</div>
		<div class="part2 inviewfadeInUp">
			<div class="block1 inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_2.jpg" alt="">
				<h3>
					可作爲NFT來銷售在地牢等處獲得的稀有道具
				</h3>
			</div>
			<div class="block1 inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_3.jpg" alt="">
				<h3>
					和夥伴一起冒險賺點錢吧
				</h3>
			</div>
			<div class="block1 inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_4.png" alt="">
				<h3>
					通過搭配時尚裝備的NFT來增強參數和外觀！再加上全世界獨一無二的附加價值，提升其稀缺性
				</h3>
			</div>
			<div class="block1 inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_5.png" alt="">
				<h3>
					全世界的參與者聚集在城市，積極開展NFT交易和權利談判等經濟活動。尋找朋友和享受互動也是元宇宙的樂趣。
				</h3>
			</div>
		</div>
	</section>
	<section id="sec5">
		<h2 id="mt-token" class="inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec5_ttl_zh.png" alt="">
		</h2>
		<div class="part1 inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec5_1_zh.png" alt="">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec5_2_zh.png" alt="">
		</div>
	</section>
	<section id="sec6">
		<h2 id="mt-roadmap" class="inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec6_ttl_zh.png" alt="">
		</h2>
		<div class="part1 inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec6_1_zh.png?211203" alt="">
		</div>
	</section>
	<section id="sec7">
		<div class="part_body">
			<h2 class="inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec7_ttl_zh.png" alt="">
			</h2>
			<div class="part1 inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec7_1_zh.png?211223" alt="">
			</div>
		</div>
	</section>

	<section id="sec8">
		<div class="part_body">
			<h2 class="inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec8_ttl_zh.png" alt="">
			</h2>
			<div class="row row--banner">
				<a href="https://blockcast.it/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/logo_blockcast.png" alt="">
				</a>
				<a href="https://jp.cointelegraph.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/logo_cointelegraph.png" alt="">
				</a>
				<a href="https://www.abmedia.io/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/logo_abmedia.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://www.newsbtc.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/NewsBTC.png" alt="">
				</a>
				<a href="https://cryptoslate.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/cs-media-logo-light.png" alt="">
				</a>
				<a href="https://coinpost.jp/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/coinpost.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://crypto-times.jp/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/Cryptotimes.png" alt="">
				</a>
				<a href="https://ambcrypto.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/AMBCrypto.png" alt="">
				</a>
				<a href="https://brave.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/Brave-logo-color-RGB.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://dappradar.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/Dappradar.png" alt="">
				</a>
				<a href="https://news.bitcoin.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/bitcoin_com.png" alt="">
				</a>
				<a href="https://bitcoinist.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/BITCOINIST.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://btcmanager.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/BTCmanager.png" alt="">
				</a>
				<a href="https://coincodex.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/CoinCodex.png" alt="">
				</a>
				<a href="https://coinquora.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/CoinQuora.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://cryptonews.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/cryptonews_resized.png" alt="">
				</a>
				<a href="https://u.today/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/U.png" alt="">
				</a>
				<a href="https://coin360.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/Coin360.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://rr2.capital/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/RRLogoRS_logo.png" alt="">
				</a>
				<a href="https://cointelegraph.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/cointelegraph_global.png" alt="">
				</a>
				<a href="https://beincrypto.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/BeInCrypto.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://dappsmarket.net/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/dAppsmarket.png" alt="">
				</a>
			</div>
		</div>
	</section>
	<section id="sec9">
		<div class="part_body">
			<h2 class="inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec9_ttl_zh.png" alt="">
			</h2>
			<div class="row row--banner">
				<a href="https://polygon.technology/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri(  )?>/assets/images/logo_polygon.png" alt="">
				</a>
				<a href="https://trustpad.io/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri(  )?>/assets/images/trustpad-light_logo.png" alt="">
				</a>
			</div>
		</div>
	</section>

<?php else: ?>

	<section id="sec1" class="flex_part">
		<div class="part1 part flex_img_left inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_1.png" alt="">
			<div class="flex_body">
				<h2 id="mt-play">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_ttl_en.png" alt="">
				</h2>
				<p>
					GENSOKISHI Online -META WORLD- is the new GameFi of Elemental Knights Online that won the "Gold Award of Game of the year" in Taiwan in 2012 with a total downloads of over 8 million. Incorporates UGC and Play to Earn to realize a metaverse space in a fantasy world.<br>
					Players from various fields such as MMORPG developers, blockchain developers, and cryptocurrency finance experts from all over the world are developing the game as one team!<br>
					* As the authorized source of "GENSOKISHI Online", "Elemental Knights Online" is in Japan and is operated on Android, iPhone, Switch, and PlayStation4 platforms.
				</p>
			</div>
		</div>
		<div class="part2 part flex_img_right inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_2.png" alt="">
			<div class="flex_body">
				<p>
					This project has three features: Free to Play x UGC to Earn x Play to Earn. <br>
					Anyone can start the game for free, resell the items acquired in the game on the NFT Marketplace, buy the rights and sell costumes made by themselves.
				</p>
			</div>
		</div>
		<div class="part3 part flex_img_left inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_3.png" alt="">
			<div class="flex_body">
				<p>
					By incorporating the concept of DeFi into the Metaverse space, we will realize an economic circle in a fantasy world that has never been experienced before.
				</p>
			</div>
		</div>
		<div class="part4 flex_part inviewfadeInUp">
			<h2 id="mt-nft">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec1_2_ttl_en.png" alt="">
			</h2>
			<div class="part_body flex_img_right inviewfadeInUp">
				<div class="flex_video">
					<div id="video-nft">
						<div class="ytPlayer" data-property="{
							videoURL: 'Q_wEOlOK28k',
							containment: '#video-nft',
							autoPlay: true,
							loop: 1,
							ratio: '16/9',
							mute: true,
							startAt: 0,
							showControls: false,
							showYTLogo: false,
							stopMovieOnBlur: false,
							optimizeDisplay: false
						}"></div>
					</div>
				</div>
				<div class="flex_body">
					<p>
						In META WORLD of GENSOKISHI Online, you can bring various NFTs into the game and play the game.
					</p>
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/check1.png" alt="">	
							<span>"Limited fashion equipment" with unique appearance and special abilities</span>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/check1.png" alt="">	
							<span>A limited number of rare and valuable "special items"</span>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri()?>/assets/images/check1.png" alt="">	
							<span>"Original equipment" that has evolved uniquely by confronting strong enemies</span>
						</li>
					</ul>
					<p>
						By using these NFTs, you can form a party with your friends, defeat various monsters, get valuable items, play to earn, and interact with adventurers around the world and you can trade NFT.
					</p>
				</div>
			</div>
		</div>
		<div class="part5 inviewfadeInUp">
		</div>
	</section>
	<section id="sec2" class="flex_part inviewfadeInUp">
		<div class="part_body">
			<h2 id="mt-ugc">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec2_ttl_en.png" alt="">
			</h2>
			<p>
				Updated contents after release will include sales of NFTs related to the production rights of "fashionable equipment" and land NFTs related to the production rights of "buildings, monsters and dungeons".
			</p>
			<div class="part1 flex_img_left inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec2_1.jpg" alt="">
				<div class="flex_body">
					<div class="block">
						<h3><span>NFT regarding production rights for fashionable equipment</span></h3>
						<p>
							Those who have this right can make their favorite fashionable equipment and register them in the game as NFT items.<br>
							It will be possible to make many products and build a brand to sell them. <br>
							In the future, manufacturers of various types such as corporate brands and animations will enter the market.
						</p>
					</div>
				</div>
			</div>
			<div class="part1 flex_img_right inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec2_2.jpg" alt="">
				<div class="flex_body">
					<div class="block">
						<h3><span>NFT on land rights and production rights</span></h3>
						<p>
							By purchasing land, you can freely redesign the objects on the map, set your own NFTs as rare drop items for the monsters that appear there, and then release it to other players. You can also set up an entrance fee for the map and earn rights revenue from the map.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="sec3">
		<div class="part1 flex_part">
			<h2 id="mt-system" class="ryumin inviewfadeInUp">
				Play to Earn of GENSOKISHI Online META WORLD
			</h2>
			<div class="block1 flex_img_right inviewfadeInUp">
				<?php /* <img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_1.jpg" alt=""> */?>
				<div class="flex_video">
					<div id="video-starts">
							<div class="ytPlayer" data-property="{
								videoURL: 'wSz01Fr3PCY',
								containment: '#video-starts',
								autoPlay: true,
								loop: 1,
								ratio: '16/9',
								mute: true,
								startAt: 0,
								showControls: false,
								showYTLogo: false,
								stopMovieOnBlur: false,
								optimizeDisplay: false
							}"></div>
					</div>
				</div>
				<div class="flex_body">
					<p> In this game, the in-game economy is composed of game money called ROND. ROND is like a Stable token and has the role of exchanging ROND earned in the game on the cryptocurrency exchange.</p>
					<p>ROND is linked to the price of the cryptocurrency exchange, the value of ROND also changes even in the game, and arbitrage trading is adopted even in the in-game weapon shop.</p>
					<p>Players can earn income through NFT sales and ROND by accepting requests in the Metaverse world, adventuring dungeons with friends and defeating strong enemies to acquire valuable items in the game.</p>
					<p>Sometimes you can earn unexpected income by acquiring rare items. It will be a great pleasure to achieve this with your friends.</p>
					<p>In addition, all items in the Metaverse world have a fixed distribution quantity. If you get a rare item, the value will increase as the number of players increases and the demand increases.</p>
				</div>
			</div>
		</div>
		<div class="part2 inviewfadeInUp">
			<div class="block1 inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_2.jpg" alt="">
				<h3>
					Rare items acquired in dungeons can be sold as NFT
				</h3>
			</div>
			<div class="block1 inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_3.jpg" alt="">
				<h3>
					Earn cryptocurrency through adventure with your friends
				</h3>
			</div>
			<div class="block1 inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_4.png" alt="">
				<h3>
					Enhance the parameters and appearance by multiplying the NFTs of fashionable equipment! Add value that is unique in the world and improve its rarity
				</h3>
			</div>
			<div class="block1 inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec3_5.png" alt="">
				<h3>
					Players from all over the world gather in the town to actively engage in economic activities such as NFT trading and rights negotiations. Finding friends and enjoying interaction is also the best part of Metaverse.
				</h3>
			</div>
		</div>
	</section>
	<section id="sec5">
		<h2 id="mt-token" class="inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec5_ttl_en.png" alt="">
		</h2>
		<div class="part1 inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec5_1_en.png" alt="">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec5_2_en.png" alt="">
		</div>
	</section>
	<section id="sec6">
		<h2 id="mt-roadmap" class="inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec6_ttl_en.png" alt="">
		</h2>
		<div class="part1 inviewfadeInUp">
			<img src="<?php echo get_template_directory_uri()?>/assets/images/sec6_1_en.png?211204" alt="">
		</div>
	</section>
	<section id="sec7">
		<div class="part_body">
			<h2 class="inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec7_ttl_en.png" alt="">
			</h2>
			<div class="part1 inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec7_1_en.png?211223" alt="">
			</div>
		</div>
	</section>

	<section id="sec8">
		<div class="part_body">
			<h2 class="inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec8_ttl_en.png" alt="">
			</h2>
			<div class="row row--banner">
				<a href="https://blockcast.it/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/logo_blockcast.png" alt="">
				</a>
				<a href="https://jp.cointelegraph.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/logo_cointelegraph.png" alt="">
				</a>
				<a href="https://www.abmedia.io/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/logo_abmedia.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://www.newsbtc.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/NewsBTC.png" alt="">
				</a>
				<a href="https://cryptoslate.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/cs-media-logo-light.png" alt="">
				</a>
				<a href="https://coinpost.jp/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/coinpost.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://crypto-times.jp/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/Cryptotimes.png" alt="">
				</a>
				<a href="https://ambcrypto.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/AMBCrypto.png" alt="">
				</a>
				<a href="https://brave.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/Brave-logo-color-RGB.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://dappradar.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/Dappradar.png" alt="">
				</a>
				<a href="https://news.bitcoin.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/bitcoin_com.png" alt="">
				</a>
				<a href="https://bitcoinist.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/BITCOINIST.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://btcmanager.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/BTCmanager.png" alt="">
				</a>
				<a href="https://coincodex.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/CoinCodex.png" alt="">
				</a>
				<a href="https://coinquora.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/CoinQuora.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://cryptonews.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/cryptonews_resized.png" alt="">
				</a>
				<a href="https://u.today/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/U.png" alt="">
				</a>
				<a href="https://coin360.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/Coin360.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://rr2.capital/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/RRLogoRS_logo.png" alt="">
				</a>
				<a href="https://cointelegraph.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/cointelegraph_global.png" alt="">
				</a>
				<a href="https://beincrypto.com/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/BeInCrypto.png" alt="">
				</a>
			</div>
			<div class="row row--banner">
				<a href="https://dappsmarket.net/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/dAppsmarket.png" alt="">
				</a>
			</div>
		</div>
	</section>
	<section id="sec9">
		<div class="part_body">
			<h2 class="inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec9_ttl_en.png" alt="">
			</h2>
			<div class="row row--banner">
				<a href="https://polygon.technology/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri(  )?>/assets/images/logo_polygon.png" alt="">
				</a>
				<a href="https://trustpad.io/" class="block inviewfadeInUp row__item">
					<img src="<?php echo get_template_directory_uri(  )?>/assets/images/trustpad-light_logo.png" alt="">
				</a>
			</div>
		</div>
	</section>

<?php endif; ?>

<?php if($locale == 'ja'): ?>
	<section id="sec10" class="flex_part">
		<div class="part_body">
			<h2 class="eigo_gothic inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec10_ttl.png" alt="">
			</h2>
			<ul class="member">
			<li>
				<div class="member__thumbnail">
					<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_maxi.jpg" alt="Maxi Kuan">
				</div>
				<div class="member__info">
					<h4 class="position">CEO</h4>
					<h3 class="name">Maxi Kuan</h3>
					<p class="resume">
						Blockcast 日本市場顧問<br>
						元C Channel中華圏ディレクター<br>
						IAPSアクレラレータブロックチェーンメンター<br>
					</p>
				</div>
			</li>
			<li>
				<div class="member__thumbnail">
					<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_captain.jpg" alt="Captain-Ricky">
				</div>
				<div class="member__info">
					<h4 class="position">アドバイザー</h4>
					<h3 class="name">Captain-Ricky</h3>
					<p class="resume">
						TomoTouch創業者<br>
						元クラウドゲーム会社Ubitus<br>
						Blockchainビジネス開発ディレクター<br>
						Blockchainゲーム AAVEGOTCHIアンバサダー<br>
					</p>
				</div>
			</li>
			<li>
				<div class="member__thumbnail">
					<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_kevin.jpg" alt="Kevin Hoo">
				</div>
				<div class="member__info">
					<h4 class="position">アドバイザー</h4>
					<h3 class="name">Kevin Hoo</h3>
					<p class="resume">
						blockcast.it 共同創設者<br>
						CEOMICAファンドパートナー<br>
						ブロックチェーン愛好家<br>
					</p>
				</div>
			</li>
			<li>
				<div class="member__thumbnail">
					<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_uwabo.jpg" alt="上保 徳彦">
				</div>
				<div class="member__info">
					<h4 class="position">アドバイザー</h4>
					<h3 class="name">上保 徳彦</h3>
					<p class="resume">
						元Zero WattPower.inc 執行役員<br>
						元SEGA株式会社<br>
						ファンタシースター クリエイター<br>
					</p>
				</div>
			</li>
			<li>
				<div class="member__thumbnail">
					<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_kunchou.jpg" alt="Kunchou Tsai">
				</div>
				<div class="member__info">
					<h4 class="position">リーガルアドバイザー</h4>
					<h3 class="name">Kunchou Tsai</h3>
					<p class="resume">
						EnlightenLaw事務所<br>
						仮想通貨系に詳しい国際弁護士<br>
						Coinbaseへのリーガルアドバイスも経験
					</p>
				</div>
			</li>
			<li>
				<div class="member__thumbnail">
					<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_kato.jpg" alt="加藤 雅樹">
				</div>
				<div class="member__info">
					<h4 class="position">アドバイザー</h4>
					<h3 class="name">加藤 雅樹</h3>
					<p class="resume">
						NHNJapan株式会社 顧問<br>
						株式会社レベルファイブ 顧問<br>
						元NHN PlayArt株式会社 代表取締役
					</p>
				</div>
			</li>
			<?php /* 森川さん非公開
			<li>
				<div class="member__thumbnail">
					<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_morikawa.jpg" alt="森川 亮">
				</div>
				<div class="member__info">
				<h4 class="position">アドバイザー</h4>
					<h3 class="name">森川 亮</h3>
					<p class="resume">
						C Channel株式会社 代表取締役社長
						元LINE株式会社 代表取締役社長
					</p>
				</div>
			</li> */ ?>
			</ul>
		</div>
	</section>

	<section id="sec11" class="flex_part">
		<div class="part_body">
			<h2 class="eigo_gothic inviewfadeInUp" id="mt-community">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec11_ttl.png" alt="">
			</h2>
			<div class="community">
				<div class="community__image">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/sec11_1.jpg" alt="">
				</div>
				<div class="community__content">
					<p>コミュニティに参加するには、こちらをクリックしてください。<br>プロジェクトに関する素晴らしい情報をお届けします！</p>
					<div class="buttons">
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
					<a class="banner" href="/ja/news-271221/">
						<img src="<?php echo get_template_directory_uri()?>/assets/images/banner_campaign_end_ja.png" alt="コミュニティ登録キャンペーン応募受付中">
					</a>
				</div>
			</div>
		</div>
	</section>

<?php elseif($locale == 'zh_CN'): ?>

	<section id="sec10" class="flex_part">
		<div class="part_body">
			<h2 class="eigo_gothic inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec10_ttl_zh.png" alt="">
			</h2>
			<ul class="member">
				<li>
					<div class="member__thumbnail">
						<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_maxi.jpg" alt="Maxi Kuan">
					</div>
					<div class="member__info">
						<h4 class="position">CEO</h4>
						<h3 class="name">Maxi Kuan</h3>
						<p class="resume">
							Blockcast 日本區塊鏈市場顧問<br>
							C Channel 前大中華區顧問<br>
							IAPS 加速器日本市場顧問<br>
						</p>
					</div>
				</li>
				<li>
					<div class="member__thumbnail">
						<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_captain.jpg" alt="Captain-Ricky">
					</div>
					<div class="member__info">
						<h4 class="position">顧問</h4>
						<h3 class="name">Captain-Ricky</h3>
						<p class="resume">
							TomoTouch 創辦人<br>
							Ubitus Blockchain BD<br>
							GameFi項目 AAVEGOTCHI宣傳大使<br>
						</p>
					</div>
				</li>
				<li>
					<div class="member__thumbnail">
						<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_kevin.jpg" alt="Kevin Hoo">
					</div>
					<div class="member__info">
						<h4 class="position">顧問</h4>
						<h3 class="name">Kevin Hoo</h3>
						<p class="resume">
							blockcast.it區塊客共同創辦人暨執行長<br>
							MICA Fund合作夥伴<br>
							區塊鏈愛好者/研究開發者<br>
						</p>
					</div>
				</li>
				<li>
					<div class="member__thumbnail">
						<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_uwabo.jpg" alt="上保 徳彦">
					</div>
					<div class="member__info">
						<h4 class="position">顧問</h4>
						<h3 class="name">上保 徳彦</h3>
						<p class="resume">
							元Zero WattPower.inc 執行董事<br>
							元SEGA株式会社<br>
							知名遊戲「幻想之星(SEGA MD)」遊戲製作人<br>
						</p>
					</div>
				</li>
				<li>
					<div class="member__thumbnail">
						<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_kunchou.jpg" alt="Kunchou Tsai">
					</div>
					<div class="member__info">
						<h4 class="position">法律顧問</h4>
						<h3 class="name">Kunchou Tsai</h3>
						<p class="resume">
							EnlightenLaw 事務所代表律師<br>
							虛擬貨幣/區塊鏈業界國際律師<br>
						</p>
					</div>
				</li>
				<li>
					<div class="member__thumbnail">
						<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_kato.jpg" alt="加藤 雅樹">
					</div>
					<div class="member__info">
						<h4 class="position">顧問</h4>
						<h3 class="name">加藤 雅樹</h3>
						<p class="resume">
							株式会社clappers 代表取締役<br>
							NHNJapan株式会社 顧問<br>
							株式会社LEVEL5 顧問<br>
							元NHN PlayArt 株式会社 代表取締役<br>
						</p>
					</div>
				</li>
				<?php /* 森川さん非公開
				<li>
					<div class="member__thumbnail">
						<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_morikawa.jpg" alt="森川 亮">
					</div>
					<div class="member__info">
					<h4 class="position">顧問</h4>
						<h3 class="name">森川 亮</h3>
						<p class="resume">
							C Channel株式会社 代表取締役社長
							元LINE株式会社 代表取締役社長
						</p>
					</div>
				</li> */ ?>
			</ul>
		</div>
	</section>

	<section id="sec11" class="flex_part">
		<div class="part_body">
			<h2 class="eigo_gothic inviewfadeInUp" id="mt-community">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec11_ttl_zh.png" alt="">
			</h2>
			<div class="community">
				<div class="community__image">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/sec11_1.jpg" alt="">
				</div>
				<div class="community__content">
					<p>從這裡加入社群。<br>社群裡將會持續發布關於項目的優惠訊息。</p>
					<div class="buttons">
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
					<a class="banner" href="/zh/news-271221/">
						<img src="<?php echo get_template_directory_uri()?>/assets/images/banner_campaign_end_zh.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>

<?php else: ?>

	<section id="sec10" class="flex_part">
		<div class="part_body">
			<h2 class="eigo_gothic inviewfadeInUp">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec10_ttl_en.png" alt="">
			</h2>
			<ul class="member">
				<li>
					<div class="member__thumbnail">
						<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_maxi.jpg" alt="Maxi Kuan">
					</div>
					<div class="member__info">
						<h4 class="position">CEO</h4>
						<h3 class="name">Maxi Kuan</h3>
						<p class="resume">
							Advisor of Blockcast<br>
							Advisor of C Channel Co., Ltd.<br>
							Blockchain Mentor of IAPS Accelerator<br>
						</p>
					</div>
				</li>
				<li>
					<div class="member__thumbnail">
						<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_captain.jpg" alt="Captain-Ricky">
					</div>
					<div class="member__info">
						<h4 class="position">Advisor</h4>
						<h3 class="name">Captain-Ricky</h3>
						<p class="resume">
							Founder  of TomoTouch<br>
							Former Blockchain Business Development Director of Ubitus.inc<br>
							AAVEGOTCHI Ambassador of Blockchain Game<br>
						</p>
					</div>
				</li>
				<li>
					<div class="member__thumbnail">
						<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_kevin.jpg" alt="Kevin Hoo">
					</div>
					<div class="member__info">
						<h4 class="position">Advisor</h4>
						<h3 class="name">Kevin Hoo</h3>
						<p class="resume">
							Co-founder & CEO of blockcast.it<br>
							Partner of MICA Fund<br>
							Blockchain Enthusiast<br>
						</p>
					</div>
				</li>
				<li>
					<div class="member__thumbnail">
						<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_uwabo.jpg" alt="Tokuhiko Uwabo">
					</div>
					<div class="member__info">
						<h4 class="position">Advisor</h4>
						<h3 class="name">Tokuhiko Uwabo</h3>
						<p class="resume">
							Former Operating officer of ZERO WattPower.inc<br>
							Former Phantasy Star's Creator of SEGA Co., Ltd.<br>
						</p>
					</div>
				</li>
				<li>
					<div class="member__thumbnail">
						<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_kunchou.jpg" alt="Kunchou Tsai">
					</div>
					<div class="member__info">
						<h4 class="position">Legal advisor</h4>
						<h3 class="name">Kunchou Tsai</h3>
						<p class="resume">
							Enlighten Law Office International lawyer familiar with virtual currency<br>
							Experienced legal advice to Coinbase<br>
						</p>
					</div>
				</li>
				<li>
					<div class="member__thumbnail">
						<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_kato.jpg" alt="Masaki Kato">
					</div>
					<div class="member__info">
						<h4 class="position">Advisor</h4>
						<h3 class="name">Masaki Kato</h3>
						<p class="resume">
							President and CEO of Clappers Co., Ltd.<br>
							Advisor of NHN Japan Corp.<br>
							Advisor of LEVEL-5 Inc.<br>
							Former CEO of NHN PlayArt Corp.<br>
						</p>
					</div>
				</li>
				<?php /* Morikawa非公開
				<li>
					<div class="member__thumbnail">
						<img src="<?php echo get_template_directory_uri(  )?>/assets/images/profile_morikawa.jpg" alt="Akira Morikawa">
					</div>
					<div class="member__info">
					<h4 class="position">Advisor</h4>
						<h3 class="name">Akira Morikawa </h3>
						<p class="resume">
							President and CEO of C Channel Co., Ltd.<br>
							Former CEO of LINE Corporation (Japan)<br>
						</p>
					</div>
				</li> */ ?>
			</ul>
		</div>
	</section>

	<section id="sec11" class="flex_part">
		<div class="part_body">
			<h2 class="eigo_gothic inviewfadeInUp" id="mt-community">
				<img src="<?php echo get_template_directory_uri()?>/assets/images/sec11_ttl_en.png" alt="">
			</h2>
			<div class="community">
				<div class="community__image">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/sec11_1.jpg" alt="">
				</div>
				<div class="community__content">
					<p>Click here to join the community.<br>We'll be sending out some great information about the project!</p>
					<div class="buttons">
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
					<a class="banner" href="/news-271221/">
						<img src="<?php echo get_template_directory_uri()?>/assets/images/banner_campaign_end_en.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>

<?php endif; ?>

<?php
	if ($locale == 'ja') {
		get_footer('ja');
	}
	elseif ($locale == 'zh_CN') {
		get_footer('zh_CN');
	}
	else {
		get_footer();
	}
