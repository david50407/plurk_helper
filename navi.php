			<div id="navi">
				<span id="content">
					<a id="go_plurk" href="//plurk.com/m/">Plurk</a>
					<span class="tab_bar">
<? if (isset($_SESSION['logined'])): ?>
						<a href='?'>發噗</a>
						<a href='?logout'>登出 [<?=$_SESSION['nick_name']?>]</a>
<? else: ?>
						<a href='?login'>登入</a>
<? endif; ?>
					</span>
				</span>
			</div>
