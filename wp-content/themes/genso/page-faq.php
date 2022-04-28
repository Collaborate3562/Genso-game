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
<section id="faq_sec1" class="flex_part">
	<div class="part1 part inviewfadeInUp">
    <h2>
      <img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" alt="">
    </h2>
    <h3>
      <img src="<?php echo get_template_directory_uri()?>/assets/images/faq_ttl.png" alt="">
    </h3>
	</div>
  <div class="part2 inviewfadeInUp">
    <dl>
      <dt class="inviewfadeInUp">
        <span class="mark">Q.</span>
        <span>
          このゲームはいつ開始されますか？
        </span>
      </dt>
      <dd class="inviewfadeInUp">
        <span class="mark">A.</span>
        <span>
          2021年5月～6月にテスト公開を行った上、2021年8月を予定しています。
        </span>
      </dd>
    </dl>
    <dl>
      <dt class="inviewfadeInUp">
        <span class="mark">Q.</span>
        <span>
        GENトークンと、ロンドトークンとはなんですか？
        </span>
      </dt>
      <dd class="inviewfadeInUp">
        <span class="mark">A.</span>
        <span>
          GENトークンはゲーム内外を通して様々な権利や商品購入のために利用することができるトークンです。<br>
          サービス公開後のアップデートでは自身がゲームのクリエイターとして参加できる権利の購入や、権利を有するクリエイターの方は、自身で制作したコンテンツで新たな収益をあげることができる取り組みにご参加いただけます。<br>
          GENトークンは提供数に上限が設けられます。<br>
          またステーキングすることでGENトークンを増やしていくことや、UGCを行う権利などが得られます。<br>
<br>
          一方でロンドトークンはゲーム内で様々な商品の購入や装備などの強化、遠くのエリアにワープできる機能の利用など様々な用途にご利用いただけます。ゲーム内で取り扱われるロンドの価値はゲーム外で取引されるロンドトークンの<br>
          価値と連動して変動するシステムを採用することで一定の価値が担保される形を想定しております。<br>
          またゲーム内で手に入れたアイテムを売却することで入手できるロンドをエクスポートすることで入手することも可能です。<br>
          ロンドトークンには提供数に上限がありません。
        </span>
      </dd>
    </dl>
    <dl>
      <dt class="inviewfadeInUp">
        <span class="mark">Q.</span>
        <span>
        どのようにブロックチェーンを繋げていく予定ですか？
        </span>
      </dt>
      <dd class="inviewfadeInUp">
        <span class="mark">A.</span>
        <span>
          ロンドトークン、GENトークンはEthereumで取引できるようにする予定です。<br>
          NFTはPolygon/MATIC、ウォレットはMetamask、NFTマーケットはOpenSeaを利用します。<br>
          IDOについてはPancakeSwap、Uniswap、Sushiswap、Curve Finance、TrustPad、ChainBoostなどで公開予定です。
        </span>
      </dd>
    </dl>
    <dl>
      <dt class="inviewfadeInUp">
        <span class="mark">Q.</span>
        <span>
        このゲームはどのようなゲームですか？
        </span>
      </dt>
      <dd class="inviewfadeInUp">
        <span class="mark">A.</span>
        <span>
          2012年 台湾Game Star Awardで金賞を受賞した3DMMORPG「元素騎士オンライン」にGameFi要素を取り入れて、Free to Play、Play to Earn、UCG to Earnの３つの特徴を成立させた今までにない新しいサービスとなります。<br>
          仲間と協力してリアルタイムバトルを行い、チャットで交流し、あなただけのキャラクターを育てて遊ぶことができます。<br>
          またNFT装備やNFTおしゃれ衣装をインポートすることであなたのキャラクターを着飾って強化することが可能となっています。<br>
          ダンジョンなどで獲得したレアアイテムはNFTで販売も勿論可能です。
        </span>
      </dd>
    </dl>
    <dl>
      <dt class="inviewfadeInUp">
        <span class="mark">Q.</span>
        <span>
        UGC to Earnってなんですか？
        </span>
      </dt>
      <dd class="inviewfadeInUp">
        <span class="mark">A.</span>
        <span>
          UGCとは「User Generated Contents」の頭文字を取った略称で、ユーザーが生成するコンテンツの事を指します。<br>
          UGC to Earnという言葉の通り、GENトークンを一定以上ステーキングしている方を対象にUGCをゲーム内に導入する権利が付与されます。<br>
          これによって自身で制作した「おしゃれ衣装」をゲームに実装し、それをNFT商材として販売することが可能となります。<br>
          自身でゲーム内に独自のブランドを構築し、仮想通貨をマーケットプレイスで手に入れることができます。<br>
          他にも特定の「マップ」や「ダンジョン」のオーナー権利をGENトークンのステーキングによって得られます。<br>
          これはエリアのオブジェクトデザインのアレンジや、出現するモンスターの設計を行えるようになり、出現するモンスターにはオーナーが有する「レアアイテム」などをレアドロップアイテムとして設定できる権利です。<br>
          このマップに入場料を設定し、他のプレイヤーから入場料を得ることができます。<br>
          ※これらUGC to Earnの権利販売についてはサービスリリース後のアップデートと合わせて提供予定となります。
        </span>
      </dd>
    </dl>
    <dl>
      <dt class="inviewfadeInUp">
        <span class="mark">Q.</span>
        <span>
        おしゃれ衣装とはなんですか？
        </span>
      </dt>
      <dd class="inviewfadeInUp">
        <span class="mark">A.</span>
        <span>
          このゲームでは、一般的なRPGにある「武器」「防具」といった概念とは別に「おしゃれ衣装」という装備が存在します。<br>
          おしゃれ衣装を装備することで「キャラクターの見た目」が変化するほか、バトルにおいて戦闘能力が強化される要素や、専用スキルが使用可能となり戦略に幅が生まれるような仕組みが備わっています。<br>
          おしゃれ衣装は運営公式で制作したものがNFTオークションなどの形で提供されるほか、GENトークンでの販売などを予定しております。<br>
          おしゃれ衣装はNFTとしてゲーム内にインポートすることもできれば、ゲーム外にエクスポートすることも可能なためNFTマーケットプレイスなどで取引することが可能です。
        </span>
      </dd>
    </dl>
  </div>
</section>
<?php
get_footer();
