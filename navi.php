		<div id="navi">
			<span id="content">
				<a id="go_plurk" href="//plurk.com/m/">Plurk</a>
<? if (isset($_SESSION['logined'])): ?>
				<?=$_SESSION['nickname']?>, <a herf='logout.php'>登出</a>
<? endif; ?>
			</span>
		</div>
