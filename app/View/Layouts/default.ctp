<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->css('static');
		echo $this->Html->css('style');
		echo $this->Html->script('jquery-3.2.1.min');
		echo $this->Html->script('static');
		echo $this->Html->script('ajax');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div class="header-wap cf">
				<div class="hunbergar_wap">
					<div id="hunbergar" class="hunbergar">
						<p class="menu">メニュー</p>
					</div>
					<div class="hunbergar" onclick="url()">
						<p class="menu">ご案内</p>
					</div>
					<div class="hunbergar" onclick="top_page_url()">
						<p class="menu">チュートリアル</p>
					</div>
					<div class="hunbergar">
						<p class="menu">掲示板</p>
					</div>
					<div class="hunbergar">
						<p class="menu">ゲーム</p>
					</div>
					<div class="hunbergar">
						<p class="menu">ID登録</p>
					</div>
					<div class="hunbergar">
						<p class="menu">ご要望</p>
					</div>
				</div>
				<div class="form_wap">
					<!-- <a href="http://127.0.0.1:5000/"><img class="bounceInRight animated logo" src="{{url_for('static', filename='logo.svg')}}" alt="logo"/></a> -->
					<h1>紳士<span class="title_name">の</span>嗜み</h1>
					<div id="serch">
						<form action="/" name="search" method="POST">
							<dl class="search">
								<dt>
									<input type="text" name="search" value="" placeholder="紳士的に検索" />
								</dt>
								<dd>
									<button>
										<span></span>
									</button>
								</dd>
							</dl>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="side_bar" class="cf">
			<ul id="event" class="list">
				<li id="all">
					<a href="http://localhost:8888/cakephp-2.x/gentolmen/all_video">→全ての動画</a>
				</li>
				<li id="title">
					<a href="file:///Users/kawasakiyuji/Desktop/yks-net/templates/all_video.html">→タイトル別</a>
				</li>
				<li id="actor">
					<a href="file:///Users/kawasakiyuji/Desktop/yks-net/templates/index.html">→女優一覧</a>
				</li>
				<li id="">
					<a href="file:///Users/kawasakiyuji/Desktop/yks-net/templates/index.html">→お気に入り</a>
				</li>
			</ul>
			<ul id="select" class="list">
				<p>動画の絞り込み</p>
				<select class="selecter">
					<option>日本人</option>
					<option>アメリカ</option>
					<option>中国</option>
					<option>ロシア</option>
					<option>その他</option>
				</select>

				<p>表示順</p>
				<select class="selecter">
					<option>再生時間順</option>
					<option>お気に入り</option>
					<option>日付順</option>
				</select>

				<p>再生時間↑↓</p>
				<select class="selecter">
					<option>5分↑</option>
					<option>15分↑</option>
					<option>20分↑</option>
					<option>30分↑</option>
				</select>
			</ul>
			<ul id="site" class="list">
				<img src="http://adf.shinobi.jp/static/images/banner/admax_468x60.gif">
				<img src="http://adf.shinobi.jp/static/images/banner/admax_468x60.gif">
				<img src="http://adf.shinobi.jp/static/images/banner/admax_468x60.gif">
				<img src="http://adf.shinobi.jp/static/images/banner/admax_468x60.gif">
				<img src="http://adf.shinobi.jp/static/images/banner/admax_468x60.gif">
			</ul>
		</div>
		<div id="render_content">
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
</body>
</html>
