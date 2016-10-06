<?php
	header("Content-type: text/xml");

	function db_conn()
	{
		$SERVER = 'localhost';
		$user   = 'root';
		$pass   = '';
		$db     = 'csgo';

		try {
			$conn = new PDO('mysql:host='.$SERVER.';dbname='.$db.';charset=utf8', $user, $pass);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		return $conn;
		}
		function pistol_skins($name)
		{
		$conn = db_conn();
		$selectQuery = "SELECT `p_skin`, `p_exterior`, `p_float`, `p_pic`, `p_alternatePic`, `p_marketPrice`, `p_grade`, `p_collectionLink`, `p_collection` FROM `pistol` WHERE `p_name` = :name order by `p_skin`";
		try {
			$stmt = $conn->prepare($selectQuery);
			$stmt->execute(array(':name' => $name));
		} catch (PDOException $e) {
			handle_sql_errors($selectQuery, $e->getMessage());
		}
		$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $row;
	}
	echo "<?xml version='1.0' encoding='UTF-8'?>";
?>
<items>
	<menu>
		<pistol>
			<serial no="0">
				<skin>USP-S</skin>
				<link>pistol?name=usps</link>
				<pic>images/Pistol/USP-S/USP-S.png</pic>
				<alternatePic>USP-S</alternatePic>
			</serial>
			<serial no="1">
				<skin>P2000</skin>
				<link>pistol?name=p2000</link>
				<pic>images/Pistol/P2000/P2000.png</pic>
				<alternatePic>P2000</alternatePic>
			</serial>
			<serial no="2">
				<skin>Glock-18</skin>
				<link>pistol?name=glock18</link>
				<pic>images/Pistol/Glock-18/Glock-18.png</pic>
				<alternatePic>Glock-18</alternatePic>
			</serial>
			<serial no="3">
				<skin>Dual Berettas</skin>
				<link>pistol?name=dualBerettas</link>
				<pic>images/Pistol/Dual Berettas/Dual_Berettas.png</pic>
				<alternatePic>Dual Berettas</alternatePic>
			</serial>
			<serial no="4">
				<skin>Five-SeveN</skin>
				<link>pistol?name=fiveSeven</link>
				<pic>images/Pistol/Five Seven/Five-SeveN.png</pic>
				<alternatePic>Five Seven</alternatePic>
			</serial>
			<serial no="5">
				<skin>CZ75-Auto</skin>
				<link>pistol?name=cz75Auto</link>
				<pic>images/Pistol/cz-75 Auto/CZ75-Auto.png</pic>
				<alternatePic>CZ75-Auto</alternatePic>
			</serial>
			<serial no="6">
				<skin>Tec-9</skin>
				<link>pistol?name=tec9</link>
				<pic>images/Pistol/Tec-9/Tec-9.png</pic>
				<alternatePic>Tec-9</alternatePic>
			</serial>
			<serial no="7">
				<skin>P250</skin>
				<link>pistol?name=p250</link>
				<pic>images/Pistol/P250/P250.png</pic>
				<alternatePic>P250</alternatePic>
			</serial>
			<serial no="8">
				<skin>Desert Eagle</skin>
				<link>pistol?name=dEagle</link>
				<pic>images/Pistol/Desert Eagle/Desert_Eagle.png</pic>
				<alternatePic>Desert Eagle</alternatePic>
			</serial>
		</pistol>
		<rifle>
			<serial no="0">
				<skin>AK-47</skin>
				<link>Rifle/ak-47</link>
				<pic>Rifle/images/ak-47/AK-47.png</pic>
				<alternatePic>AK-47</alternatePic>
			</serial>
			<serial no="1">
				<skin>AUG</skin>
				<link>Rifle/Aug</link>
				<pic>Rifle/images/AUG/AUG.png</pic>
				<alternatePic>AUG</alternatePic>
			</serial>
			<serial no="2">
				<skin>AWP</skin>
				<link>Rifle/awp</link>
				<pic>Rifle/images/AWP/AWP.png</pic>
				<alternatePic>AWP</alternatePic>
			</serial>
			<serial no="3">
				<skin>FAMAS</skin>
				<link>Rifle/famas</link>
				<pic>Rifle/images/FAMAS/FAMAS.png</pic>
				<alternatePic>FAMAS</alternatePic>
			</serial>
			<serial no="4">
				<skin>G3SG1</skin>
				<link>Rifle/g3sg1</link>
				<pic>Rifle/images/G3SG1/G3SG1.png</pic>
				<alternatePic>G3SG1</alternatePic>
			</serial>
			<serial no="5">
				<skin>Galil AR</skin>
				<link>Rifle/galil</link>
				<pic>Rifle/images/galil ar/Galil_AR.png</pic>
				<alternatePic>Galil AR</alternatePic>
			</serial>
			<serial no="6">
				<skin>M4A1-S</skin>
				<link>Rifle/m4a1</link>
				<pic>Rifle/images/m4a1/M4A1-S.png</pic>
				<alternatePic>M4A1-S</alternatePic>
			</serial>
			<serial no="7">
				<skin>M4A4</skin>
				<link>Rifle/m4a4</link>
				<pic>Rifle/images/m4a4/M4A4.png</pic>
				<alternatePic>M4A4</alternatePic>
			</serial>
			<serial no="8">
				<skin>SCAR-20</skin>
				<link>Rifle/scar20</link>
				<pic>Rifle/images/SCAR-20/SCAR-20.png</pic>
				<alternatePic>SCAR-20</alternatePic>
			</serial>
			<serial no="9">
				<skin>SG 553</skin>
				<link>Rifle/sg-553</link>
				<pic>Rifle/images/SG 553/SG_553.png</pic>
				<alternatePic>SG 553</alternatePic>
			</serial>
			<serial no="10">
				<skin>SSG 08</skin>
				<link>Rifle/ssg08</link>
				<pic>Rifle/images/SSG 08/SSG_08.png</pic>
				<alternatePic>SSG 08</alternatePic>
			</serial>
		</rifle>
		<smg>
			<serial no="0">
				<skin>MAC-10</skin>
				<link>SMG/MAC-10</link>
				<pic>SMG/images/MAC-10/MAC-10.png</pic>
				<alternatePic>MAC-10</alternatePic>
			</serial>
			<serial no="1">
				<skin>MP7</skin>
				<link>SMG/mp7</link>
				<pic>SMG/images/MP7/MP7.png</pic>
				<alternatePic>MP7</alternatePic>
			</serial>
			<serial no="2">
				<skin>MP9</skin>
				<link>SMG/mp9</link>
				<pic>SMG/images/MP9/MP9.png</pic>
				<alternatePic>MP9</alternatePic>
			</serial>
			<serial no="3">
				<skin>PP-Bizon</skin>
				<link>SMG/PP-Bizon</link>
				<pic>SMG/images/PP-Bizon/PP-Bizon.png</pic>
				<alternatePic>PP-Bizon</alternatePic>
			</serial>
			<serial no="4">
				<skin>P90</skin>
				<link>SMG/p90</link>
				<pic>SMG/images/P90/P90.png</pic>
				<alternatePic>P90</alternatePic>
			</serial>
			<serial no="5">
				<skin>UMP-45</skin>
				<link>SMG/ump-45</link>
				<pic>SMG/images/UMP-45/UMP-45.png</pic>
				<alternatePic>UMP-45</alternatePic>
			</serial>
		</smg>
		<heavy>
			<serial no="0">
				<skin>MAG-7</skin>
				<link>Heavy/mag-7</link>
				<pic>Heavy/Images/mag-7/MAG-7.png</pic>
				<alternatePic>MAG-7</alternatePic>
			</serial>
			<serial no="1">
				<skin>Nova</skin>
				<link>Heavy/nova</link>
				<pic>Heavy/Images/Nova/Nova.png</pic>
				<alternatePic>Nova</alternatePic>
			</serial>
			<serial no="2">
				<skin>Sawed-Off</skin>
				<link>Heavy/Sawed-Off</link>
				<pic>Heavy/Images/Sawed-Off/Sawed-Off.png</pic>
				<alternatePic>Sawed-Off</alternatePic>
			</serial>
			<serial no="3">
				<skin>XM1014</skin>
				<link>Heavy/XM1014</link>
				<pic>Heavy/Images/XM1014/XM1014.png</pic>
				<alternatePic>XM1014</alternatePic>
			</serial>
			<serial no="4">
				<skin>M249</skin>
				<link>Heavy/m249</link>
				<pic>Heavy/Images/m249/M249.png</pic>
				<alternatePic>M249</alternatePic>
			</serial>
			<serial no="5">
				<skin>Negev</skin>
				<link>Heavy/negev</link>
				<pic>Heavy/Images/negev/Negev.png</pic>
				<alternatePic>Negev</alternatePic>
			</serial>
		</heavy>
		<knives>
			<serial no="0">
				<skin>Gut</skin>
				<link>knife?name=gut</link>
				<pic>images/Knife/Gut/Gut_Knife.png</pic>
				<alternatePic>Gut</alternatePic>
			</serial>
		</knives>
	</menu>
	<pistols>
		<!--01.10.2016-->
		<pistol name="usps">
			<?php $row = pistol_skins('usps');
			include 'content.php'; ?>
		</pistol>
		<pistol name="p2000">
			<?php $row = pistol_skins('p2000');
			include 'content.php'; ?>
		</pistol>
		<pistol name="glock18">
			<?php $row = pistol_skins('glock18');
			include 'content.php'; ?>
		</pistol>
		<pistol name="dualBerettas">
			<serial no="1">
				<skin>Colony</skin>
				<exterior>Field-Tested</exterior>
				<float>0.15047140</float>
				<pic>images/Pistol/Dual Berettas/Colony.png</pic>
				<alternatePic>Colony</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Dual%20Berettas%20%7C%20Colony%20(Field-Tested)</marketPrice>
				<grade>Consumer Grade Pistol</grade>
				<collectionLink>other_collections/train</collectionLink>
				<collection>The Train Collection</collection>
			</serial>
			<serial no="2">
				<skin>Contractor</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.12674332</float>
				<pic>images/Pistol/Dual Berettas/Contractor.png</pic>
				<alternatePic>Contractor</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Dual%20Berettas%20%7C%20Contractor%20(Minimal%20Wear)</marketPrice>
				<grade>Consumer Grade Pistol</grade>
				<collectionLink>other_collections/safehouse</collectionLink>
				<collection>The Safehouse Collection</collection>
			</serial>
			<serial no="3">
				<skin>Demolition</skin>
				<exterior>Field-Tested</exterior>
				<float>0.29317522</float>
				<pic>images/Pistol/Dual Berettas/Demolition.png</pic>
				<alternatePic>Demolition</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Dual%20Berettas%20%7C%20Demolition%20(Field-Tested)</marketPrice>
				<grade>Restricted Pistol</grade>
				<collectionLink>other_collections/vertigo</collectionLink>
				<collection>The Vertigo Collection</collection>
			</serial>
			<serial no="4">
				<skin>Stained</skin>
				<exterior>Field-Tested</exterior>
				<float>0.33084163</float>
				<pic>images/Pistol/Dual Berettas/Stained.png</pic>
				<alternatePic>Stained</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Dual%20Berettas%20%7C%20Stained%20(Field-Tested)</marketPrice>
				<grade>Industrial Grade Pistol</grade>
				<collectionLink>other_collections/italy</collectionLink>
				<collection>The Italy Collection</collection>
			</serial>
			<serial no="5">
				<skin>Hemoglobin</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.07951760</float>
				<pic>images/Pistol/Dual Berettas/Hemoglobin.png</pic>
				<alternatePic>Hemoglobin</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Dual%20Berettas%20%7C%20Hemoglobin%20%28Minimal%20Wear%29</marketPrice>
				<grade>Restricted Pistol</grade>
				<collectionLink>Cases/case2</collectionLink>
				<collection>The Arms Deal 2 Collection</collection>
			</serial>
			<serial no="6">
				<skin>StatTrak Marina</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.11453265</float>
				<pic>images/Pistol/Dual Berettas/Marina.png</pic>
				<alternatePic>StatTrak Marina</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20Dual%20Berettas%20%7C%20Marina%20(Minimal%20Wear)</marketPrice>
				<grade>StatTrak Restricted Pistol</grade>
				<collectionLink>Cases/Winter_Offensive</collectionLink>
				<collection>The Winter Offensive Collection</collection>
			</serial>
			<serial no="7">
				<skin>Anodized Navy</skin>
				<exterior>Factory New</exterior>
				<float>0.05057311</float>
				<pic>images/Pistol/Dual Berettas/Anodized Navy.png</pic>
				<alternatePic>Anodized Navy</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Dual%20Berettas%20%7C%20Anodized%20Navy%20(Factory%20New)</marketPrice>
				<grade>Mil-Spec Grade Pistol</grade>
				<collectionLink>other_collections/inferno</collectionLink>
				<collection>The Inferno Collection</collection>
			</serial>
			<serial no="8">
				<skin>Cobalt Quartz</skin>
				<exterior>Factory New</exterior>
				<float>0.02092555</float>
				<pic>images/Pistol/Dual Berettas/Cobalt Quartz.png</pic>
				<alternatePic>Cobalt Quartz</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Dual%20Berettas%20%7C%20Cobalt%20Quartz%20(Factory%20New)</marketPrice>
				<grade>Restricted Pistol</grade>
				<collectionLink>other_collections/lake</collectionLink>
				<collection>The Lake Collection</collection>
			</serial>
			<serial no="9">
				<skin>Briar</skin>
				<exterior>Factory New</exterior>
				<float>0.01811264</float>
				<pic>images/Pistol/Dual Berettas/Briar.png</pic>
				<alternatePic>Briar</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Dual%20Berettas%20%7C%20Briar%20(Factory%20New)</marketPrice>
				<grade>Consumer Grade Pistol</grade>
				<collectionLink>other_collections/cobblestone</collectionLink>
				<collection>The Cobblestone Collection</collection>
			</serial>
		</pistol>
		<pistol name="fiveSeven">
			<serial no="1">
				<skin>Copper Galaxy</skin>
				<exterior>Factory New</exterior>
				<float>0.05719616</float>
				<pic>images/Pistol/Five Seven/Copper Galaxy.png</pic>
				<alternatePic>Copper Galaxy</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Five-SeveN%20%7C%20Copper%20Galaxy%20(Factory%20New)</marketPrice>
				<grade>Restricted Pistol</grade>
				<collectionLink>Cases/case3</collectionLink>
				<collection>The Arms Deal 3 Collection</collection>
			</serial>
			<serial no="2">
				<skin>Forest Night</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.08145879</float>
				<pic>images/Pistol/Five Seven/Forest Night.png</pic>
				<alternatePic>Forest Night</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Five-SeveN%20%7C%20Forest%20Night%20(Minimal%20Wear)</marketPrice>
				<grade>Consumer Grade Pistol</grade>
				<collectionLink>other_collections/train</collectionLink>
				<collection>The Train Collection</collection>
			</serial>
			<serial no="3">
				<skin>Case Hardened</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.11166054</float>
				<pic>images/Pistol/Five Seven/Case Hardened.png</pic>
				<alternatePic>Case Hardened</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Five-SeveN%20%7C%20Case%20Hardened%20(Minimal%20Wear)</marketPrice>
				<grade>Restricted Pistol</grade>
				<collectionLink>Cases/case2</collectionLink>
				<collection>The Arms Deal 2 Collection</collection>
			</serial>
			<serial no="4">
				<skin>Orange Peel</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.12669824</float>
				<pic>images/Pistol/Five Seven/Orange Peel.png</pic>
				<alternatePic>Orange Peel</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Five-SeveN%20%7C%20Orange%20Peel%20(Field-Tested)</marketPrice>
				<grade>Industrial Grade Pistol</grade>
				<collectionLink>other_collections/dust2</collectionLink>
				<collection>The Dust 2 Collection</collection>
			</serial>
			<serial no="5">
				<skin>StatTrak Kami</skin>
				<exterior>Factory New</exterior>
				<float>0.03337011</float>
				<pic>images/Pistol/Five Seven/Kami.png</pic>
				<alternatePic>StatTrak Kami</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20Five-SeveN%20%7C%20Kami%20(Factory%20New)</marketPrice>
				<grade>StatTrak Mil-Spec Grade Pistol</grade>
				<collectionLink>Cases/Winter_Offensive</collectionLink>
				<collection>The Winter Offensive Collection</collection>
			</serial>
			<serial no="6">
				<skin>Kami</skin>
				<exterior>Factory New</exterior>
				<float>0.03716080</float>
				<pic>images/Pistol/Five Seven/Kami.png</pic>
				<alternatePic>Kami</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Five-SeveN%20%7C%20Kami%20(Factory%20New)</marketPrice>
				<grade>Mil-Spec Grade Pistol</grade>
				<collectionLink>Cases/Winter_Offensive</collectionLink>
				<collection>The Winter Offensive Collection</collection>
			</serial>
			<serial no="7">
				<skin>Jungle</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.13666418</float>
				<pic>images/Pistol/Five Seven/Jungle.png</pic>
				<alternatePic>Jungle</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Five-SeveN%20%7C%20Jungle%20(Minimal%20Wear)</marketPrice>
				<grade>Consumer Grade Pistol</grade>
				<collectionLink>other_collections/aztec</collectionLink>
				<collection>The Aztec Collection</collection>
			</serial>
			<serial no="8">
				<skin>StatTrak Urban Hazard</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.12460054</float>
				<pic>images/Pistol/Five Seven/Urban Hazard.png</pic>
				<alternatePic>StatTrak Urban Hazard</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20Five-SeveN%20%7C%20Urban%20Hazard%20(Minimal%20Wear)</marketPrice>
				<grade>StatTrak Mil-Spec Grade Pistol</grade>
				<collectionLink>Cases/Operation_Vanguard</collectionLink>
				<collection>The Vanguard Collection</collection>
			</serial>
		</pistol>
		<pistol name="cz75Auto">
			<serial no="1">
				<skin>Green Plaid</skin>
				<exterior>Factory New</exterior>
				<float>0.06042572</float>
				<pic>images/Pistol/cz-75 Auto/Green Plaid.png</pic>
				<alternatePic>Green Plaid</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/CZ75-Auto%20%7C%20Green%20Plaid%20(Factory%20New)</marketPrice>
				<grade>Consumer Grade Pistol</grade>
				<collectionLink>other_collections/baggage</collectionLink>
				<collection>The Baggage Collection</collection>
			</serial>
			<serial no="2">
				<skin>Tigris</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.10906215</float>
				<pic>images/Pistol/cz-75 Auto/Tigris.png</pic>
				<alternatePic>Tigris</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/CZ75-Auto%20%7C%20Tigris%20(Minimal%20Wear)</marketPrice>
				<grade>Restricted Pistol</grade>
				<collectionLink>Cases/Operation_Breakout</collectionLink>
				<collection>The Breakout Collection</collection>
			</serial>
			<serial no="3">
				<skin>StatTrak Crimson Web</skin>
				<exterior>Field-Tested</exterior>
				<float>0.06454378</float>
				<pic>images/Pistol/cz-75 Auto/crimson web.png</pic>
				<alternatePic>StatTrak Crimson Web</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20CZ75-Auto%20%7C%20Crimson%20Web%20(Field-Tested)</marketPrice>
				<grade>StatTrak Mil-Spec Grade Pistol</grade>
				<collectionLink>Cases/case3</collectionLink>
				<collection>The Arms Deal 3 Collection</collection>
			</serial>
			<serial no="4">
				<skin>StatTrak Poison Dart</skin>
				<exterior>Field-Tested</exterior>
				<float>0.16159545</float>
				<pic>images/Pistol/cz-75 Auto/Poison dart.png</pic>
				<alternatePic>StatTrak Poison Dart</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20CZ75-Auto%20%7C%20Poison%20Dart%20(Field-Tested)</marketPrice>
				<grade>StatTrak Mil-Spec Grade Pistol</grade>
				<collectionLink>Cases/Huntsman</collectionLink>
				<collection>The Huntsman Collection</collection>
			</serial>
			<serial no="5">
				<skin>StatTrak Twist</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.08160255</float>
				<pic>images/Pistol/cz-75 Auto/Twist.png</pic>
				<alternatePic>StatTrak Twist</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20CZ75-Auto%20%7C%20Twist%20(Minimal%20Wear)</marketPrice>
				<grade>StatTrak Mil-Spec Grade Pistol</grade>
				<collectionLink>Cases/Huntsman</collectionLink>
				<collection>The Huntsman Collection</collection>
			</serial>
			<serial no="6">
				<skin>StatTrak Hexane</skin>
				<exterior>Factory New</exterior>
				<float>0.05035302</float>
				<pic>images/Pistol/cz-75 Auto/Hexane.png</pic>
				<alternatePic>StatTrak Hexane</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20CZ75-Auto%20%7C%20Hexane%20(Factory%20New)</marketPrice>
				<grade>StatTrak Mil-Spec Grade Pistol</grade>
				<collectionLink>Cases/eSports_Summer</collectionLink>
				<collection>The eSports 2014 Summer Collection</collection>
			</serial>
			<serial no="7">
				<skin>StatTrak Pole Position</skin>
				<exterior>Field-Tested</exterior>
				<float>0.17199247</float>
				<pic>images/Pistol/cz-75 Auto/Pole Position.png</pic>
				<alternatePic>StatTrak Pole Position</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20CZ75-Auto%20%7C%20Pole%20Position%20(Field-Tested)</marketPrice>
				<grade>StatTrak Restricted Pistol</grade>
				<collectionLink>Cases/Chroma2</collectionLink>
				<collection>The Chroma 2 Collection</collection>
			</serial>
			<serial no="8">
				<skin>Army Sheen</skin>
				<exterior>Factory New</exterior>
				<float>0.06454378</float>
				<pic>images/Pistol/cz-75 Auto/Army Sheen.png</pic>
				<alternatePic>Army Sheen</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/CZ75-Auto%20%7C%20Army%20Sheen%20(Factory%20New)</marketPrice>
				<grade>Consumer Grade Pistol</grade>
				<collectionLink>other_collections/chop_shop</collectionLink>
				<collection>The Chop Shop Collection</collection>
			</serial>
		</pistol>
		<pistol name="tec9">
			<serial no="1">
				<skin>Army Mesh</skin>
				<exterior>Factory New</exterior>
				<float>0.05182318</float>
				<pic>images/Pistol/Tec-9/Army Mesh.png</pic>
				<alternatePic>Army Mesh</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Tec-9%20%7C%20Army%20Mesh%20(Factory%20New)</marketPrice>
				<grade>Consumer Grade Pistol</grade>
				<collectionLink>other_collections/safehouse</collectionLink>
				<collection>The Safehouse Collection</collection>
			</serial>
			<serial no="2">
				<skin>Urban DDPAT</skin>
				<exterior>Battle-Scarred</exterior>
				<float>0.77053618</float>
				<pic>images/Pistol/Tec-9/Urban DDPAT.png</pic>
				<alternatePic>Urban DDPAT</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Tec-9%20%7C%20Urban%20DDPAT%20(Battle-Scarred)</marketPrice>
				<grade>Consumer Grade Pistol</grade>
				<collectionLink>other_collections/bank</collectionLink>
				<collection>The Bank Collection</collection>
			</serial>
			<serial no="3">
				<skin>Souvenir Groundwater</skin>
				<exterior>Field-Tested</exterior>
				<float>0.30637151</float>
				<pic>images/Pistol/Tec-9/Groundwater.png</pic>
				<alternatePic>Souvenir Groundwater</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Souvenir%20Tec-9%20%7C%20Groundwater%20(Field-Tested)</marketPrice>
				<grade>Souvenir Consumer Grade Pistol</grade>
				<collectionLink>other_collections/italy</collectionLink>
				<collection>The Italy Collection</collection>
			</serial>
			<serial no="4">
				<skin>Groundwater</skin>
				<exterior>Field-Tested</exterior>
				<float>0.25875008</float>
				<pic>images/Pistol/Tec-9/Groundwater.png</pic>
				<alternatePic>Groundwater</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Tec-9%20%7C%20Groundwater%20(Field-Tested)</marketPrice>
				<grade>Consumer Grade Pistol</grade>
				<collectionLink>other_collections/italy</collectionLink>
				<collection>The Italy Collection</collection>
			</serial>
			<serial no="5">
				<skin>StatTrak Sandstorm</skin>
				<exterior>Field-Tested</exterior>
				<float>0.18101795</float>
				<pic>images/Pistol/Tec-9/Sandstorm.png</pic>
				<alternatePic>StatTrak Sandstorm</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20Tec-9%20%7C%20Sandstorm%20(Field-Tested)</marketPrice>
				<grade>StatTrak Mil-Spec Grade Pistol</grade>
				<collectionLink>Cases/Operation_Phoenix</collectionLink>
				<collection>The Phoenix Collection</collection>
			</serial>
			<serial no="6">
				<skin>StatTrak Isaac</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.09985564</float>
				<pic>images/Pistol/Tec-9/Isaac.png</pic>
				<alternatePic>StatTrak Isaac</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20Tec-9%20%7C%20Isaac%20(Minimal%20Wear)</marketPrice>
				<grade>StatTrak Mil-Spec Grade Pistol</grade>
				<collectionLink>Cases/Huntsman</collectionLink>
				<collection>The Huntsman Collection</collection>
			</serial>
			<serial no="7">
				<skin>Ossified</skin>
				<exterior>Factory New</exterior>
				<float>0.01534616</float>
				<pic>images/Pistol/Tec-9/Ossified.png</pic>
				<alternatePic>Ossified</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Tec-9%20%7C%20Ossified%20(Factory%20New)</marketPrice>
				<grade>Mil-Spec Grade Pistol</grade>
				<collectionLink>other_collections/aztec</collectionLink>
				<collection>The Aztec Collection</collection>
			</serial>
			<serial no="8">
				<skin>Titanium Bit</skin>
				<exterior>Factory New</exterior>
				<float>0.02352560</float>
				<pic>images/Pistol/Tec-9/Titanium Bit.png</pic>
				<alternatePic>Titanium Bit</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Tec-9%20%7C%20Titanium%20Bit%20(Factory%20New)</marketPrice>
				<grade>Restricted Pistol</grade>
				<collectionLink>Cases/case3</collectionLink>
				<collection>The Arms Deal 3 Collection</collection>
			</serial>
			<serial no="9">
				<skin>Bamboo Forest</skin>
				<exterior>Factory New</exterior>
				<float>0.00866362</float>
				<pic>images/Pistol/Tec-9/Bamboo Forest.png</pic>
				<alternatePic>Bamboo Forest</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Tec-9%20%7C%20Bamboo%20Forest%20(Factory%20New)</marketPrice>
				<grade>Consumer Grade Pistol</grade>
				<collectionLink>other_collections/rising_sun</collectionLink>
				<collection>The Rising Sun Collection</collection>
			</serial>
		</pistol>
		<pistol name="p250">
			<serial no="1">
				<skin>Boreal Forest</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.12158275</float>
				<pic>images/Pistol/P250/Boreal Forest.png</pic>
				<alternatePic>Boreal Forest</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/P250%20%7C%20Boreal%20Forest%20(Minimal%20Wear)</marketPrice>
				<grade>Consumer Grade Pistol</grade>
				<collectionLink>other_collections/lake</collectionLink>
				<collection>The Lake Collection</collection>
			</serial>
			<serial no="2">
				<skin>Splash</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.07422149</float>
				<pic>images/Pistol/P250/Splash.png</pic>
				<alternatePic>Splash</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/P250%20%7C%20Splash%20(Minimal%20Wear)</marketPrice>
				<grade>Restricted Pistol</grade>
				<collectionLink>Cases/eSports_2013</collectionLink>
				<collection>The eSports 2013 Collection</collection>
			</serial>
			<serial no="3">
				<skin>StatTrak Steel Disruption</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.08459904</float>
				<pic>images/Pistol/P250/Steel Disruption MW.png</pic>
				<alternatePic>StatTrak Steel Disruption</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20P250%20%7C%20Steel%20Disruption%20(Minimal%20Wear)</marketPrice>
				<grade>StatTrak Mil-Spec Grade Pistol</grade>
				<collectionLink>Cases/eSports_2013_Winter</collectionLink>
				<collection>The eSports 2013 Winter Collectionn</collection>
			</serial>
			<serial no="4">
				<skin>Steel Disruption</skin>
				<exterior>Factory New</exterior>
				<float>0.04744660</float>
				<pic>images/Pistol/P250/Steel Disruption FN.png</pic>
				<alternatePic>Steel Disruption</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/P250%20%7C%20Steel%20Disruption%20(Factory%20New)</marketPrice>
				<grade>Mil-Spec Grade Pistol</grade>
				<collectionLink>Cases/eSports_2013_Winter</collectionLink>
				<collection>The eSports 2013 Winter Collectionn</collection>
			</serial>
			<serial no="5">
				<skin>Mehndi</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.12071925</float>
				<pic>images/Pistol/P250/Mehndi.png</pic>
				<alternatePic>Mehndi</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/P250%20%7C%20Mehndi%20(Minimal%20Wear)</marketPrice>
				<grade>Classified Pistol</grade>
				<collectionLink>Cases/Winter_Offensive</collectionLink>
				<collection>The Winter Offensive Collection</collection>
			</serial>
			<serial no="6">
				<skin>StatTrak Supernova</skin>
				<exterior>Field-Tested</exterior>
				<float>0.16609775</float>
				<pic>images/Pistol/P250/Supernova.png</pic>
				<alternatePic>StatTrak Supernova</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20P250%20%7C%20Supernova%20(Field-Tested)</marketPrice>
				<grade>StatTrak Restricted Pistol</grade>
				<collectionLink>Cases/Operation_Breakout</collectionLink>
				<collection>The Breakout Collection</collection>
			</serial>
			<serial no="7">
				<skin>Supernova</skin>
				<exterior>Field-Tested</exterior>
				<float>0.28195536</float>
				<pic>images/Pistol/P250/Supernova.png</pic>
				<alternatePic>Supernova</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/P250%20%7C%20Supernova%20(Field-Tested)</marketPrice>
				<grade>Restricted Pistol</grade>
				<collectionLink>Cases/Operation_Breakout</collectionLink>
				<collection>The Breakout Collection</collection>
			</serial>
			<serial no="8">
				<skin>Contamination</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.08408143</float>
				<pic>images/Pistol/P250/Contamination.png</pic>
				<alternatePic>Contamination</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/P250%20%7C%20Contamination%20(Minimal%20Wear)</marketPrice>
				<grade>Industrial Grade Pistol</grade>
				<collectionLink>other_collections/cache</collectionLink>
				<collection>The Cache Collection</collection>
			</serial>
			<serial no="9">
				<skin>Metallic DDPAT</skin>
				<exterior>Factory New</exterior>
				<float>0.03200199</float>
				<pic>images/Pistol/P250/Metallic DDPAT.png</pic>
				<alternatePic>Metallic DDPAT</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/P250%20%7C%20Metallic%20DDPAT%20(Factory%20New)</marketPrice>
				<grade>Industrial Grade Pistol</grade>
				<collectionLink>other_collections/train</collectionLink>
				<collection>The Train Collection</collection>
			</serial>
			<serial no="10">
				<skin>Hive</skin>
				<exterior>Factory New</exterior>
				<float>0.03309761</float>
				<pic>images/Pistol/P250/Hive.png</pic>
				<alternatePic>Hive</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/P250%20%7C%20Hive%20(Factory%20New)</marketPrice>
				<grade>Mil-Spec Grade Pistol</grade>
				<collectionLink>Cases/case2</collectionLink>
				<collection>The Arms Deal 2 Collection</collection>
			</serial>
			<serial no="11">
				<skin>Souvenir Sand Dune</skin>
				<exterior>Battle-Scarred</exterior>
				<float>0.76335156</float>
				<pic>images/Pistol/P250/Sand Dune BS.png</pic>
				<alternatePic>Souvenir Sand Dune</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Souvenir%20P250%20%7C%20Sand%20Dune%20(Battle-Scarred)</marketPrice>
				<grade>Souvenir Consumer Grade Pistol</grade>
				<collectionLink>other_collections/dust2</collectionLink>
				<collection>The Dust 2 Collection</collection>
			</serial>
			<serial no="12">
				<skin>Souvenir Sand Dune</skin>
				<exterior>Field-Tested</exterior>
				<float>0.26621723</float>
				<pic>images/Pistol/P250/Sand Dune FT.png</pic>
				<alternatePic>Souvenir Sand Dune</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Souvenir%20P250%20%7C%20Sand%20Dune%20(Field-Tested)</marketPrice>
				<grade>Souvenir Consumer Grade Pistol</grade>
				<collectionLink>other_collections/dust2</collectionLink>
				<collection>The Dust 2 Collection</collection>
			</serial>
			<serial no="13">
				<skin>Mint Kimono</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.14518167</float>
				<pic>images/Pistol/P250/Mint Kimono MW.png</pic>
				<alternatePic>Mint Kimono</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/P250%20%7C%20Mint%20Kimono%20(Minimal%20Wear)</marketPrice>
				<grade>Consumer Grade Pistol</grade>
				<collectionLink>other_collections/rising_sun</collectionLink>
				<collection>The Rising Sun Collection</collection>
			</serial>
			<serial no="14">
				<skin>Mint Kimono</skin>
				<exterior>Battle-Scarred</exterior>
				<float>0.64477903</float>
				<pic>images/Pistol/P250/Mint Kimono BS.png</pic>
				<alternatePic>Mint Kimono</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/P250%20%7C%20Mint%20Kimono%20(Battle-Scarred)</marketPrice>
				<grade>Consumer Grade Pistol</grade>
				<collectionLink>other_collections/rising_sun</collectionLink>
				<collection>The Rising Sun Collection</collection>
			</serial>
			<serial no="15">
				<skin>StatTrak Valence</skin>
				<exterior>Field-Tested</exterior>
				<float>0.29531869</float>
				<pic>images/Pistol/P250/Valence.png</pic>
				<alternatePic>StatTrak Valence</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20P250%20%7C%20Valence%20(Field-Tested)</marketPrice>
				<grade>StatTrak Mil-Spec Grade Pistol</grade>
				<collectionLink>Cases/Chroma2</collectionLink>
				<collection>The Chroma 2 Collection</collection>
			</serial>
		</pistol>
		<pistol name="dEagle">
			<serial no="1">
				<skin>Mudder</skin>
				<exterior>Field-Tested</exterior>
				<float>0.16030428</float>
				<pic>images/Pistol/Desert Eagle/Mudder.png</pic>
				<alternatePic>Mudder</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Desert%20Eagle%20%7C%20Mudder%20(Field-Tested)</marketPrice>
				<grade>Industrial Grade Pistol</grade>
				<collectionLink>other_collections/lake</collectionLink>
				<collection>The Lake Collection</collection>
			</serial>
			<serial no="2">
				<skin>Urban Rubble</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.11268624</float>
				<pic>images/Pistol/Desert Eagle/Urban Rubble.png</pic>
				<alternatePic>Urban Rubble</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Desert%20Eagle%20%7C%20Urban%20Rubble%20(Minimal%20Wear)</marketPrice>
				<grade>Mil-Spec Grade Pistol</grade>
				<collectionLink>other_collections/train</collectionLink>
				<collection>The Train Collection</collection>
			</serial>
			<serial no="3">
				<skin>StatTrak Hypnotic</skin>
				<exterior>Factory New</exterior>
				<float>0.05715840</float>
				<pic>images/Pistol/Desert Eagle/Hypnotic.png</pic>
				<alternatePic>StatTrak Hypnotic</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20Desert%20Eagle%20%7C%20Hypnotic%20(Factory%20New)</marketPrice>
				<grade>StatTrak Classified Pistol</grade>
				<collectionLink>Cases/case1</collectionLink>
				<collection>The Arms Deal Collection</collection>
			</serial>
			<serial no="4">
				<skin>Cobalt Disruption</skin>
				<exterior>Factory New</exterior>
				<float>0.06103356</float>
				<pic>images/Pistol/Desert Eagle/Cobalt Disruption.png</pic>
				<alternatePic>Cobalt Disruption</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Desert%20Eagle%20%7C%20Cobalt%20Disruption%20(Factory%20New)</marketPrice>
				<grade>Classified Pistol</grade>
				<collectionLink>Cases/eSports_2013_Winter</collectionLink>
				<collection>The eSports 2013 Winter Collection</collection>
			</serial>
			<serial no="5">
				<skin>StatTrak Heirloom</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.11670102</float>
				<pic>images/Pistol/Desert Eagle/Heirloom.png</pic>
				<alternatePic>StatTrak Heirloom</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/StatTrak%E2%84%A2%20Desert%20Eagle%20%7C%20Heirloom%20(Minimal%20Wear)</marketPrice>
				<grade>StatTrak Restricted Pistol</grade>
				<collectionLink>Cases/case3</collectionLink>
				<collection>The Arms Deal 3 Collection</collection>
			</serial>
			<serial no="6">
				<skin>Crimson Web</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.09864094</float>
				<pic>images/Pistol/Desert Eagle/Crimson Web.png</pic>
				<alternatePic>Crimson Web</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Desert%20Eagle%20%7C%20Crimson%20Web%20(Minimal%20Wear)</marketPrice>
				<grade>Restricted Pistol</grade>
				<collectionLink>Cases/eSports_Summer</collectionLink>
				<collection>The eSports 2014 Summer Collection</collection>
			</serial>
			<serial no="7">
				<skin>Conspiracy</skin>
				<exterior>Factory New</exterior>
				<float>0.03936237</float>
				<pic>images/Pistol/Desert Eagle/Conspiracy.png</pic>
				<alternatePic>Conspiracy</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Desert%20Eagle%20%7C%20Conspiracy%20(Factory%20New)</marketPrice>
				<grade>Classified Pistol</grade>
				<collectionLink>Cases/Operation_Breakout</collectionLink>
				<collection>The Breakout Collection</collection>
			</serial>
			<serial no="8">
				<skin>Naga</skin>
				<exterior>Minimal Wear</exterior>
				<float>0.11122546</float>
				<pic>images/Pistol/Desert Eagle/Naga.png</pic>
				<alternatePic>Naga</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Desert%20Eagle%20%7C%20Naga%20(Minimal%20Wear)</marketPrice>
				<grade>Restricted Pistol</grade>
				<collectionLink>Cases/Chroma</collectionLink>
				<collection>The Chroma Collection</collection>
			</serial>
			<serial no="9">
				<skin>Bronze Deco</skin>
				<exterior>Factory New</exterior>
				<float>0.03790721</float>
				<pic>images/Pistol/Desert Eagle/Bronze Deco.png</pic>
				<alternatePic>Bronze Deco</alternatePic>
				<marketPrice>http://steamcommunity.com/market/listings/730/Desert%20Eagle%20%7C%20Bronze%20Deco%20(Factory%20New)</marketPrice>
				<grade>Mil-Spec Grade Pistol</grade>
				<collectionLink>other_collections/Chroma2</collectionLink>
				<collection>The Chroma 2 Collection</collection>
			</serial>
		</pistol>
		<pistol name="revolver">
			<?php $row = pistol_skins('revolver');
			include 'content.php'; ?>
		</pistol>
	</pistols>
</items>