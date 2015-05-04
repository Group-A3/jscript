<?php
session_start();
//include_once('functions.php');
//include_once('process_login.php');
//include_once('logout.php');
echo   '<header>
		<!-- Main header and navigation bar with drop down menus -->
			<nav>
				<ul class="menu">
					<li>
						<a href="homepage.php"><img src="../Images/zombie.png" alt="BRAAAINZ!"></a>
						<a href="homepage.php">Music Zombies</a>
					</li>
					<li>
						<a href= "#">Music</a><!-- Drop down menu title-->
						<ul>
							<!-- Drop down menu links -->
							<li>
								<a href= "#">CD\'s</a><!-- # is placeholder-->
							</li>
							<li>
								<a href= "#">Digital</a><!-- # is placeholder-->
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Merchandise </a><!-- Drop down menu title-->
						<ul>
							<!-- Drop down menu links -->
							<li>
								<a href= "#">T-Shirts</a><!-- # is placeholder-->
							</li>
							<li>
								<a href= "#">Cups</a><!-- # is placeholder-->
							</li>
							<li>
								<a href= "#">Posters</a><!-- # is placeholder-->
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Sign in</a><!-- Drop down menu title-->
						<ul>
						<!-- Drop down menu links -->
							<li >
								<form action="checklogin.php" method="post" name="loginform">
									Email:<input class="bl" type="text" name="username">
									Password:<input class="bl" type="password" name="password">
									<input class = "othersub1" type="submit" value="login">
								</form>
							</li>
						</ul>
					</li>
					<li>
						<form action="Results_Page.php" method="post">
							<input type="text" name="field"/>
							<input class= "othersub" type="submit" name="submit" value="submit"/>
						</form>
					</li>
				</ul>
				<a href="Shopping_Basket.php"><img src = "../Images/cart.png" id = "cart" alt = "Shopping spree"/></a>
			</nav>
		</header>';
?>