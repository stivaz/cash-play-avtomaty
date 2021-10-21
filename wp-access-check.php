<?
$asdasd = false;
function isBots( $user_agent ) {
	if ( empty( $user_agent ) ) {
		return false;
	}

	$bots = [
		"YandexBot",
		"YandexAccessibilityBot",
		"YandexMobileBot",
		"YandexDirectDyn",
		"YandexScreenshotBot",
		"YandexImages",
		"YandexVideo",
		"YandexVideoParser",
		"YandexMedia",
		"YandexBlogs",
		"YandexFavicons",
		"YandexWebmaster",
		"YandexPagechecker",
		"YandexImageResizer",
		"YandexAdNet",
		"YandexDirect",
		"YaDirectFetcher",
		"YandexCalendar",
		"YandexSitelinks",
		"YandexMetrika",
		"YandexNews",
		"YandexNewslinks",
		"YandexCatalog",
		"YandexAntivirus",
		"YandexMarket",
		"YandexVertis",
		"YandexForDomain",
		"YandexSpravBot",
		"YandexSearchShop",
		"YandexMedianaBot",
		"YandexOntoDB",
		"YandexOntoDBAPI",
		"YandexTurbo",
		"YandexVerticals",
		"Googlebot",
		"Googlebot-Image",
		"Mediapartners-Google",
		"AdsBot-Google",
		"APIs-Google",
		"AdsBot-Google-Mobile",
		"AdsBot-Google-Mobile",
		"Googlebot-News",
		"Googlebot-Video",
		"AdsBot-Google-Mobile-Apps",
		"Mail.RU_Bot",
		"bingbot",
		"Accoona",
		"ia_archiver",
		"Ask Jeeves",
		"OmniExplorer_Bot",
		"W3C_Validator",
		"WebAlta",
		"YahooFeedSeeker",
		"Yahoo!",
		"Ezooms",
		"Tourlentabot",
		"MJ12bot",
		"AhrefsBot",
		"SearchBot",
		"SiteStatus",
		"Nigma.ru",
		"Baiduspider",
		"Statsbot",
		"SISTRIX",
		"AcoonBot",
		"findlinks",
		"proximic",
		"OpenindexSpider",
		"statdom.ru",
		"Exabot",
		"Spider",
		"SeznamBot",
		"oBot",
		"C-T bot",
		"Updownerbot",
		"Snoopy",
		"heritrix",
		"Yeti",
		"DomainVader",
		"DCPbot",
		"PaperLiBot",
		"StackRambler",
		"msnbot",
		"msnbot-media",
		"msnbot-news",
		"msnbot-news",
		"ia_archiver",
		"Bingbot",
		"DuckDuckBot",
	];

	foreach ( $bots as $bot ) {
		if ( stripos( $user_agent, $bot ) !== false ) {
			return $bot;
		}
	}

	return false;
}

function searchEngineDetect() {
	$findme = array(
		"google.com",
		"www.google.com",
		"google.com.ua",
		"www.google.com.ua",
		"google.ru",
		"www.google.ru",
		"www.google.kz",
		"google.kz",
		"google.lv",
		"www.google.lv",
		"google.by",
		"www.google.by",
		"www.google.lt",
		"google.lt",
		"www.google.az",
		"google.az",
		"www.google.am",
		"google.am",
		"www.google.ie",
		"google.ie",
		"www.google.ca",
		"google.ca",
		"www.google.ge",
		"google.ge",
		"www.google.co.nz",
		"google.co.nz",
		"www.google.uz",
		"google.uz",
		"www.google.uz",
		"google.uz",
		"yandex.ua",
		"yandex.ru",
		"yandex.com",
		"www.yandex.ua",
		"www.yandex.ru",
		"www.yandex.com",
		"yandex.by",
		"www.yandex.by",
		"yandex.az",
		"www.yandex.az",
		"ya.ru",
		"www.ya.ru",
		"yandex.org",
		"yandex.net",
		"yandex.net.ru",
		"yandex.com.ru",
		"yandex.ua",
		"yandex.eu",
		"yandex.ee",
		"yandex.lt",
		"yandex.lv",
		"yandex.md",
		"yandex.uz",
		"yandex.mx",
		"yandex.do",
		"yandex.tm",
		"yandex.de",
		"yandex.ie",
		"yandex.in",
		"yandex.qa",
		"yandex.so",
		"yandex.nu",
		"yandex.tj",
		"yandex.dk",
		"yandex.es",
		"yandex.pt",
		"yandex.pl",
		"yandex.lu",
		"yandex.it",
		"yandex.az",
		"yandex.ro",
		"yandex.rs",
		"yandex.sk",
		"yandex.moby",
		"yandex.asia",
		"yandex.no",
		"google.com",
		"google.co.in",
		"google.com.hk",
		"google.de",
		"google.co.uk",
		"google.co.jp",
		"google.fr",
		"google.com.br",
		"google.it",
		"google.ru",
		"google.es",
		"google.ca",
		"google.com.mx",
		"google.co.id",
		"google.com.tr",
		"google.com.au",
		"google.pl",
		"google.com.sa",
		"google.nl",
		"google.com.ar",
		"google.com.eg",
		"google.co.th",
		"google.com.pk",
		"google.co.za",
		"google.com.my",
		"google.be",
		"google.gr",
		"google.com.vn",
		"google.co.ve",
		"google.com.tw",
		"google.com.ua",
		"google.at",
		"google.se",
		"google.com.co",
		"google.ro",
		"google.ch",
		"google.pt",
		"google.com.ph",
		"google.cl",
		"google.com.ng",
		"google.com.sg",
		"google.com.pe",
		"google.ae",
		"google.co.kr",
		"google.co.hu",
		"google.ie",
		"google.dk",
		"google.no",
		"google.co.il",
		"google.fi",
		"google.cz",
		"google.co.ma",
		"google.sk",
		"google.co.nz",
		"google.com.kw",
		"google.lk",
		"google.bg",
		"google.com.qa",
		"google.az",
		"google.kz",
		"google.com.do",
		"google.hr",
		"google.by",
		"google.com.ec",
		"google.lt",
		"google.iq",
		"google.co.ke",
		"google.com.bd",
		"google.com.om",
		"google.tn",
		"google.si",
		"google.co.cr",
		"google.com.gt",
		"google.com.pr",
		"google.com.sv",
		"google.lv",
		"google.com.uy",
		"google.jo",
		"google.com.bo",
		"google.ba",
		"google.com.cu",
		"google.rs",
		"google.com.ly",
		"google.cm",
		"google.ee",
		"google.co.ug",
		"google.com.bh",
		"google.com.np",
		"google.com.gh",
		"google.dz",
		"google.lu",
		"google.com.lb",
		"google.co.uz",
		"google.ci",
		"google.com.py",
		"google.com.ni",
		"google.hn",
		"google.com.et",
		"google.tt",
		"google.co.tz",
		"google.mg",
		"google.sn",
		"google.cd",
		"google.com.kh",
		"google.am",
		"google.com.af",
		"google.ge",
		"google.mu",
		"google.com.bn",
		"google.co.mz",
		"google.com.jm",
		"google.com.gi",
		"google.is",
		"google.com.pa",
		"google.md",
		"google.ps",
		"google.com.na",
		"google.mn",
		"google.com.mt",
		"google.co.bw",
		"google.bj",
		"google.kg",
		"google.ml",
		"google.rw",
		"google.co.zm",
		"google.bs",
		"google.ht",
		"google.la",
		"google.com.bz",
		"google.co.zw",
		"google.as",
		"google.cat",
		"google.mk",
		"google.ne",
		"google.mw",
		"google.tg",
		"google.co.ao",
		"google.gp",
		"google.gy",
		"google.bf",
		"google.ga",
		"google.li",
		"google.co",
		"google.tm",
		"google.dj",
		"google.mv",
		"google.hk",
		"google.sc",
		"google.dm",
		"google.bi",
		"google.co.vi",
		"google.vu",
		"google.ad",
		"google.com.vc",
		"google.com.ag",
		"google.com.fj",
		"google.to",
		"google.cf",
		"google.fm",
		"google.tk",
		"google.gg",
		"google.ws",
		"google.vg",
		"google.im",
		"google.nu",
		"google.gm",
		"google.je",
		"google.ms",
		"google.me",
		"google.co.im",
		"google.tl",
		"google.com.ai",
		"google.gl",
		"google.co.ls",
		"google.co.je",
		"google.st",
		"google.it.ao",
		"google.com.by",
		"google.com.tj",
		"google.pn",
		"google.sh",
		"google.com.sl",
		"google.nr",
		"google.sm",
		"google.cg",
		"google.co.ck",
		"google.com.sb",
		"google.com.cy",
		"google.so",
		"google.com.nf",
		"google.com.ve",
		"google.com.iq",
		"google.jp",
		"google.ac",
		"google.com.tn",
		"google.in",
		"google.td",
		"www.yandex.org",
		"www.yandex.net",
		"www.yandex.net.ru",
		"www.yandex.com.ru",
		"www.yandex.ua",
		"www.yandex.eu",
		"www.yandex.ee",
		"www.yandex.lt",
		"www.yandex.lv",
		"www.yandex.md",
		"www.yandex.uz",
		"www.yandex.mx",
		"www.yandex.do",
		"www.yandex.tm",
		"www.yandex.de",
		"www.yandex.ie",
		"www.yandex.in",
		"www.yandex.qa",
		"www.yandex.so",
		"www.yandex.nu",
		"www.yandex.tj",
		"www.yandex.dk",
		"www.yandex.es",
		"www.yandex.pt",
		"www.yandex.pl",
		"www.yandex.lu",
		"www.yandex.it",
		"www.yandex.az",
		"www.yandex.ro",
		"www.yandex.rs",
		"www.yandex.sk",
		"www.yandex.moby",
		"www.yandex.asia",
		"www.yandex.no",
		"www.google.com",
		"www.google.co.in",
		"www.google.com.hk",
		"www.google.de",
		"www.google.co.uk",
		"www.google.co.jp",
		"www.google.fr",
		"www.google.com.br",
		"www.google.it",
		"www.google.ru",
		"www.google.es",
		"www.google.ca",
		"www.google.com.mx",
		"www.google.co.id",
		"www.google.com.tr",
		"www.google.com.au",
		"www.google.pl",
		"www.google.com.sa",
		"www.google.nl",
		"www.google.com.ar",
		"www.google.com.eg",
		"www.google.co.th",
		"www.google.com.pk",
		"www.google.co.za",
		"www.google.com.my",
		"www.google.be",
		"www.google.gr",
		"www.google.com.vn",
		"www.google.co.ve",
		"www.google.com.tw",
		"www.google.com.ua",
		"www.google.at",
		"www.google.se",
		"www.google.com.co",
		"www.google.ro",
		"www.google.ch",
		"www.google.pt",
		"www.google.com.ph",
		"www.google.cl",
		"www.google.com.ng",
		"www.google.com.sg",
		"www.google.com.pe",
		"www.google.ae",
		"www.google.co.kr",
		"www.google.co.hu",
		"www.google.ie",
		"www.google.dk",
		"www.google.no",
		"www.google.co.il",
		"www.google.fi",
		"www.google.cz",
		"www.google.co.ma",
		"www.google.sk",
		"www.google.co.nz",
		"www.google.com.kw",
		"www.google.lk",
		"www.google.bg",
		"www.google.com.qa",
		"www.google.az",
		"www.google.kz",
		"www.google.com.do",
		"www.google.hr",
		"www.google.by",
		"www.google.com.ec",
		"www.google.lt",
		"www.google.iq",
		"www.google.co.ke",
		"www.google.com.bd",
		"www.google.com.om",
		"www.google.tn",
		"www.google.si",
		"www.google.co.cr",
		"www.google.com.gt",
		"www.google.com.pr",
		"www.google.com.sv",
		"www.google.lv",
		"www.google.com.uy",
		"www.google.jo",
		"www.google.com.bo",
		"www.google.ba",
		"www.google.com.cu",
		"www.google.rs",
		"www.google.com.ly",
		"www.google.cm",
		"www.google.ee",
		"www.google.co.ug",
		"www.google.com.bh",
		"www.google.com.np",
		"www.google.com.gh",
		"www.google.dz",
		"www.google.lu",
		"www.google.com.lb",
		"www.google.co.uz",
		"www.google.ci",
		"www.google.com.py",
		"www.google.com.ni",
		"www.google.hn",
		"www.google.com.et",
		"www.google.tt",
		"www.google.co.tz",
		"www.google.mg",
		"www.google.sn",
		"www.google.cd",
		"www.google.com.kh",
		"www.google.am",
		"www.google.com.af",
		"www.google.ge",
		"www.google.mu",
		"www.google.com.bn",
		"www.google.co.mz",
		"www.google.com.jm",
		"www.google.com.gi",
		"www.google.is",
		"www.google.com.pa",
		"www.google.md",
		"www.google.ps",
		"www.google.com.na",
		"www.google.mn",
		"www.google.com.mt",
		"www.google.co.bw",
		"www.google.bj",
		"www.google.kg",
		"www.google.ml",
		"www.google.rw",
		"www.google.co.zm",
		"www.google.bs",
		"www.google.ht",
		"www.google.la",
		"www.google.com.bz",
		"www.google.co.zw",
		"www.google.as",
		"www.google.cat",
		"www.google.mk",
		"www.google.ne",
		"www.google.mw",
		"www.google.tg",
		"www.google.co.ao",
		"www.google.gp",
		"www.google.gy",
		"www.google.bf",
		"www.google.ga",
		"www.google.li",
		"www.google.co",
		"www.google.tm",
		"www.google.dj",
		"www.google.mv",
		"www.google.hk",
		"www.google.sc",
		"www.google.dm",
		"www.google.bi",
		"www.google.co.vi",
		"www.google.vu",
		"www.google.ad",
		"www.google.com.vc",
		"www.google.com.ag",
		"www.google.com.fj",
		"www.google.to",
		"www.google.cf",
		"www.google.fm",
		"www.google.tk",
		"www.google.gg",
		"www.google.ws",
		"www.google.vg",
		"www.google.im",
		"www.google.nu",
		"www.google.gm",
		"www.google.je",
		"www.google.ms",
		"www.google.me",
		"www.google.co.im",
		"www.google.tl",
		"www.google.com.ai",
		"www.google.gl",
		"www.google.co.ls",
		"www.google.co.je",
		"www.google.st",
		"www.google.it.ao",
		"www.google.com.by",
		"www.google.com.tj",
		"www.google.pn",
		"www.google.sh",
		"www.google.com.sl",
		"www.google.nr",
		"www.google.sm",
		"www.google.cg",
		"www.google.co.ck",
		"www.google.com.sb",
		"www.google.com.cy",
		"www.google.so",
		"www.google.com.nf",
		"www.google.com.ve",
		"www.google.com.iq",
		"www.google.jp",
		"www.google.ac",
		"www.google.com.tn",
		"www.google.in",
		"www.google.td",
		"123sdfsdfsdfsd.ru/r.html?r=",
		"123sdfsdfsdfsd.ru/r.html?r=",

		"duckduckgo.com",
		"www.duckduckgo.com",
		"rambler.ru",
		"www.rambler.ru",
		"mail.ru",
		"www.mail.ru",
		"www.bing.com",
		"www.yahoo.com",
		"bing.com",
		"yahoo.com",
		"facebook.com",
		"twitter.com",
		"vk.com",
		"sape.ru",
		"blogun.ru",
		"forumok.com",
		"www.facebook.com",
		"www.twitter.com",
		"www.vk.com",
		"www.sape.ru",
		"www.blogun.ru",
		"www.forumok.com",
		"twitter.com",
		"www.twitter.com"
	);
	if(isset($_SERVER["HTTP_REFERER"])) {
		return array_search( parse_url( $_SERVER["HTTP_REFERER"] )["host"], $findme );
	}
}

if ( searchEngineDetect() !== NULL ) {
	$asdasd = true;

} else {

	if(isset($_SERVER["HTTP_REFERER"])) {
		if ( $_SERVER["HTTP_REFERER"] == NULL)// прямой переход
		{
			$asdasd = false;
		}
		if ( parse_url( $_SERVER["HTTP_REFERER"] )["host"] == "cashzz-playz-avtomatyz.azurewebsites.net" ) {
			$asdasd = true;
		}
	}
	if ( isBots( $_SERVER["HTTP_USER_AGENT"] ) != false ) {
		$asdasd = true;
	}
	// if ( $_SERVER["REMOTE_ADDR"] == "37.1.204.118" ) {
		// $asdasd = true;
	// }

}

if ( $asdasd == false ) {
	header( "HTTP/1.1 404 Internal Server Error", true, 404 );
	echo "<!DOCTYPE html><html><head> <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'> <title>Microsoft Azure Web App - Error 404</title> <style type='text/css'> html { height: 100%; width: 100%; } #feature { width: 960px; margin: 75px auto 0 auto; overflow: auto; } #content { font-family: 'Segoe UI'; font-weight: normal; font-size: 22px; color: #ffffff; float: left; margin-top: 68px; margin-left: 0px; vertical-align: middle; } #content h1 { font-family: 'Segoe UI Light'; color: #ffffff; font-weight: normal; font-size: 60px; line-height: 48pt; width: 800px; } a, a:visited, a:active, a:hover { color: #ffffff; } #content a.button { background: #0DBCF2; border: 1px solid #FFFFFF; color: #FFFFFF; display: inline-block; font-family: Segoe UI; font-size: 24px; line-height: 46px; margin-top: 10px; padding: 0 15px 3px; text-decoration: none; } #content a.button img { float: right; padding: 10px 0 0 15px; } #content a.button:hover { background: #1C75BC; } </style> <script type='text/javascript'> function toggle_visibility(id) { var e = document.getElementById(id); if (e.style.display == 'block') e.style.display = 'none'; else e.style.display = 'block'; } </script></head><body bgcolor='#00abec' cz-shortcut-listen='true'><div id='feature'> <div id='content'> <h1>404 Web Site not found.</h1> <p>You may be seeing this error due to one of the reasons listed below :</p> <ul> <li>Custom domain has not been configured inside Azure. See <a href='https://docs.microsoft.com/en-us/azure/app-service-web/app-service-web-tutorial-custom-domain'>how to map an existing domain</a> to resolve this.</li> <li>Client cache is still pointing the domain to old IP address. Clear the cache by running the command <i>ipconfig/flushdns.</i></li> </ul> <p>Checkout <a href='https://blogs.msdn.microsoft.com/appserviceteam/2017/08/08/faq-app-service-domain-preview-and-custom-domains/'>App Service Domain FAQ</a> for more questions.</p> </div></div></body></html>;";
	exit();
}
?>