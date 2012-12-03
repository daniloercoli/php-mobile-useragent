<?php

require ('./UserAgentInfo.php');

//Desktop
$UAs['Chrome/16.0.912.36'] = array (
								'user_agent_string' => 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.7 (KHTML, like Gecko) Chrome/16.0.912.36 Safari/535.7',
								'platform' => false,
								'user_agent_name' => false,
);
$UAs['Chrome/15.0.874.121'] = array (
								'user_agent_string' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/535.2 (KHTML, like Gecko) Chrome/15.0.874.121 Safari/535.2',
								'platform' => false,
								'user_agent_name' => false,
);
$UAs['Firefox 9.0'] = array (
								'user_agent_string' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:9.0) Gecko/20100101 Firefox/9.0',
								'platform' => false,
								'user_agent_name' => false,
);
$UAs['Firefox 6.0'] = array (
								'user_agent_string' => 'Mozilla/5.0 (X11; Linux i686; rv:6.0) Gecko/20100101 Firefox/6.0',
								'platform' => false,
								'user_agent_name' => false,
);
$UAs['IE9'] = array (
								'user_agent_string' => 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)',
								'platform' => false,
								'user_agent_name' => false,
);
$UAs['IE8'] = array (
								'user_agent_string' => 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)',
								'platform' => false,
								'user_agent_name' => false,
);

//Mobile Browsers
$UAs['Android Native Browser'] = array (
								'user_agent_string' => 'Mozilla/5.0 (Linux; U; Android 2.3.5; en-us; HTC Vision Build/GRI40) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1',
								'platform' => 'android',
								'user_agent_name' => 'android',
);
$UAs['Android Tablet Native Browser'] = array (
								'user_agent_string' => 'Mozilla/5.0 (Linux; U; Android 3.0; en-us; Xoom Build/HRI39) AppleWebKit/534.13 (KHTML, like Gecko) Version/4.0 Safari/534.13',
								'platform' => 'android_tablet',
								'user_agent_name' => 'android_tablet',
);
$UAs['BlackBerry OS 6.0.0.546'] = array (
								'user_agent_string' => 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9700; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.546 Mobile Safari/534.8+',
								'platform' => 'blackberry',
								'user_agent_name' => 'blackberry',
);
$UAs['BlackBerry 10'] = array (
		'user_agent_string' => 'Mozilla/5.0 (BB10; <Device Model>) AppleWebKit/<WebKit Version> (KHTML, like Gecko) Version/<BB Version #> Mobile Safari/<WebKit Version>',
		'platform' => 'blackberry_10',
		'user_agent_name' => 'blackberry_10',
);
$UAs['iPad iOS 3.2'] = array (
								'user_agent_string' => 'Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.10',
								'platform' => 'ipad',
								'user_agent_name' => 'ipad',
);
$UAs['iPad iOS 4.3.3'] = array (
								'user_agent_string' => 'Mozilla/5.0 (iPad; U; CPU OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5',
								'platform' => 'ipad',
								'user_agent_name' => 'ipad',
);
$UAs['iPhone iOS 3.0'] = array (
								'user_agent_string' => 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 3_0 like Mac OS X; en-us) AppleWebKit/528.18 (KHTML, like Gecko) Version/4.0 Mobile/7A341 Safari/528.16',
								'platform' => 'iphone',
								'user_agent_name' => 'iphone',
);
$UAs['iPhone iOS 4.3.'] = array (
								'user_agent_string' => 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5',
								'platform' => 'iphone',
								'user_agent_name' => 'iphone',
);
$UAs['iPhone iOS 5.0.1'] = array (
								'user_agent_string' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 5_0_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Version/5.1 Mobile/9A405 Safari/7534.48.3',
								'platform' => 'iphone',
								'user_agent_name' => 'iphone',
);
$UAs['iPhone Unknown'] = array (
								'user_agent_string' => 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_2 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Mobile/8H7',
								'platform' => 'iphone',
								'user_agent_name' => 'iphone-unknown',
);
//Mobile Chrome
$UAs['Chrome for Android - phone'] = array (
		'user_agent_string' => 'Mozilla/5.0 (Linux; <Android Version>; <Build Tag etc.>) AppleWebKit/<WebKit Rev> (KHTML, like Gecko) Chrome/<Chrome Rev> Mobile Safari/<WebKit Rev>',
		'platform' => 'android',
		'user_agent_name' => 'android',
);
$UAs['Chrome for Android - tablet'] = array (
		'user_agent_string' => 'Mozilla/5.0 (Linux; <Android Version>; <Build Tag etc.>) AppleWebKit/<WebKit Rev>(KHTML, like Gecko) Chrome/<Chrome Rev> Safari/<WebKit Rev>',
		'platform' => 'android_tablet',
		'user_agent_name' => 'android_tablet',
);
$UAs['Chrome for iOS'] = array (
		'user_agent_string' => 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 5_1_1 like Mac OS X; en) AppleWebKit/534.46.0 (KHTML, like Gecko) CriOS/19.0.1084.60 Mobile/9B206 Safari/7534.48.3',
		'platform' => 'iphone',
		'user_agent_name' => 'chrome-for-ios',
);

//iOS Apps 
$UAs['Facebook 4020 for iPhone - a very old version'] = array (
								'user_agent_string' => 'Facebook 4020.0 (iPhone; iPhone OS 5.0.1; fr_FR)',
								'platform' => 'iphone',
								'user_agent_name' => 'facebook-for-iphone',
);
$UAs['Facebook for iPhone v4.X'] = array (
								'user_agent_string' => 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 5_0 like Mac OS X; en_US) AppleWebKit (KHTML, like Gecko) Mobile [FBAN/FBForIPhone;FBAV/4.0.2;FBBV/4020.0;FBDV/iPhone3,1;FBMD/iPhone;FBSN/iPhone OS;FBSV/5.0;FBSS/2; FBCR/O2;FBID/phone;FBLC/en_US;FBSF/2.0]',
								'platform' => 'iphone',
								'user_agent_name' => 'facebook-for-iphone',
);
$UAs['Facebook for iPhone v5.0 or higher'] = array (
		'user_agent_string' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 5_1_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Mobile/9B206 [FBAN/FBIOS;FBAV/5.0;FBBV/47423;FBDV/iPhone3,1;FBMD/iPhone;FBSN/iPhone OS;FBSV/5.1.1;FBSS/2; FBCR/3ITA;FBID/phone;FBLC/en_US]',
		'platform' => 'iphone',
		'user_agent_name' => 'facebook-for-iphone',
);
$UAs['Facebook for iPad old version'] = array (
								'user_agent_string' => 'Mozilla/5.0 (iPad; CPU OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Mobile/10A403 [FBAN/FBIOS;FBAV/5.0;FBBV/47423;FBDV/iPad2,1;FBMD/iPad;FBSN/iPhone OS;FBSV/6.0;FBSS/1; FBCR/;FBID/tablet;FBLC/en_US]',
								'platform' => 'ipad',
								'user_agent_name' => 'facebook-for-ipad',
);
$UAs['Facebook for iPad v5.0 or higher'] = array (
		'user_agent_string' => 'Mozilla/5.0 (iPad; CPU iPhone OS 5_1_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Mobile/9B206 [FBAN/FBIOS;FBAV/5.0;FBBV/47423;FBDV/iPad2,1;FBMD/iPhone;FBSN/iPhone OS;FBSV/5.1.1;FBSS/2; FBCR/3ITA;FBID/tablet;FBLC/en_US]',
		'platform' => 'ipad',
		'user_agent_name' => 'facebook-for-ipad',
);
//Twitter
$UAs['Twitter for iPhone'] = array (
								'user_agent_string' => 'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_5 like Mac OS X; nb-no) AppleWebKit/533.17.9 (KHTML, like Gecko) Mobile/8L1 Twitter for iPhone',
								'platform' => 'iphone',
								'user_agent_name' => 'twitter-for-iphone',
);
$UAs['Twitter for iPad - v4.X'] = array (
								'user_agent_string' => 'Mozilla/5.0 (iPad; U; CPU OS 4_3_5 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Mobile/8L1 Twitter for iPad',
								'platform' => 'ipad',
								'user_agent_name' => 'twitter-for-ipad',
);
$UAs['Twitter for iPad - v5.0 or higher'] = array (
		'user_agent_string' => 'Mozilla/5.0 (iPad; CPU OS 5_1_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Mobile/9B206 Twitter for iPhone',
		'platform' => 'ipad',
		'user_agent_name' => 'twitter-for-ipad',
);

//Windows UAs
$UAs['WinPhone 8 / IE Mobile 10'] = array (
		'user_agent_string' => 'Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; ARM; Touch; IEMobile/10.0; <Manufacturer>; <Device> [;<Operator>])',
		'platform' => 'windows',
		'user_agent_name' => 'winphone8',
);
$UAs['IE Mobile 9.0'] = array (
								'user_agent_string' => 'Mozilla/5.0 (compatible; MSIE 9.0; Windows Phone OS 7.5; Trident/5.0; IEMobile/9.0)',
								'platform' => 'windows',
								'user_agent_name' => 'win7',
);
$UAs['IE Mobile 7.10'] = array (
								'user_agent_string' => 'Mozilla/4.0 (compatible; MSIE 7.0; Windows Phone OS 7.0; Trident/3.1; IEMobile/7.0; Nokia;N70)',
								'platform' => 'windows',
								'user_agent_name' => 'win7',
); 
$UAs['Windows CE / IE Mobile 7.11'] = array (
								'user_agent_string' => 'HTC_Touch_3G Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)',
								'platform' => 'windows',
								'user_agent_name' => 'windows ce',
);
$UAs['Windows CE / Smartphone'] = array (
								'user_agent_string' => 'Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Smartphone; 176x220)',
								'platform' => 'windows',
								'user_agent_name' => 'windows ce',
);


//Opera Mini User Agents
$UAs['iPhone; Opera Mini/5.0'] = array (
								'user_agent_string' => 'Opera/9.80 (iPhone; Opera Mini/5.0.019802/18.738; U; en) Presto/2.4.15',
								'platform' => 'iphone',
								'user_agent_name' => 'opera-mini',
);
$UAs['Android;Opera Mini/6.0'] = array (
								'user_agent_string' => 'Opera/9.80 (Android;Opera Mini/6.0.24212/24.746 U;en) Presto/2.5.25 Version/10.5454',
								'platform' => 'android',
								'user_agent_name' => 'opera-mini',
);
$UAs['Opera Mini/5.1 on BlackBerry'] = array (
								'user_agent_string' => 'Opera/9.80 (BlackBerry; Opera Mini/5.1.22303/22.387; U; en) Presto/2.5.25 Version/10.54',
								'platform' => 'blackberry',
								'user_agent_name' => 'opera-mini',
);
$UAs['BlackBerry;Opera Mini/5.1'] = array (
								'user_agent_string' => 'Opera/9.80 (BlackBerry; Opera Mini/5.1.22303/22.387; U; en) Presto/2.5.25 Version/10.54',
								'platform' => 'blackberry',
								'user_agent_name' => 'opera-mini',
);
$UAs['BlackBerry9700;Opera Mini 9'] = array (
								'user_agent_string' => 'Opera/9.80 (J2ME/MIDP; Opera Mini/9 (Compatible; MSIE:9.0; iPhone; BlackBerry9700; AppleWebKit/24.746; U; en) Presto/2.5.25 Version/10.54',
								'platform' => 'blackberry',
								'user_agent_name' => 'opera-mini',
);
$UAs['BlackBerry9800;Opera Mini 5.1.22296'] = array (
								'user_agent_string' => 'Opera/9.80 (J2ME/MIDP; Opera Mini/5.1.22296; BlackBerry9800; U; AppleWebKit/23.370; U; en) Presto/2.5.25 Version/10.54',
								'platform' => 'blackberry',
								'user_agent_name' => 'opera-mini',
);
$UAs['SymbOS;Opera Mini 9.80'] = array (
								'user_agent_string' => 'Opera/9.80 (J2ME/MIDP; Opera Mini/9.80 (S60; SymbOS; Opera Mobi/23.334; U; id) Presto/2.5.25 Version/10.54',
								'platform' => 'symbian_series60',
								'user_agent_name' => 'opera-mini',
);
$UAs['SymbianOS;Opera Mini 9.80'] = array (
								'user_agent_string' => 'Opera/9.80 (J2ME/MIDP; Opera Mini/SymbianOS/22.478; U; en) Presto/2.5.25 Version/10.54',
								'platform' => 'symbian_series60',
								'user_agent_name' => 'opera-mini',
);
$UAs['J2ME;Opera Mini/J2ME'] = array (
								'user_agent_string' => 'Opera/8.01 (J2ME/MIDP; Opera Mini/3.0.6306/1528; en; U; ssr)',
								'platform' => 'j2me_midp',
								'user_agent_name' => 'opera-mini',
);
$UAs['J2ME;Opera Mini 6.24288'] = array (
								'user_agent_string' => 'Opera/9.80 (J2ME/MIDP; Opera Mini/6.24288/25.729; U; en) Presto/2.5.25 Version/10.54',
								'platform' => 'j2me_midp',
								'user_agent_name' => 'opera-mini',
);
$UAs['Series 60;Opera Mini 5.1.22784'] = array (
								'user_agent_string' => 'Opera/9.80 (Series 60; Opera Mini/5.1.22784/22.394; U; en) Presto/2.5.25 Version/10.54',
								'platform' => 'symbian_series60',
								'user_agent_name' => 'opera-mini',
);

/* Nokia S60 */
$UAs['Nokia N90'] = array (
		'user_agent_string' => 'NokiaN90-1/3.0545.5.1 Series60/2.8 Profile/MIDP-2.0 Configuration/CLDC-1.1',
		'platform' => 'symbian_series60',
		'user_agent_name' => 'series60',
);
$UAs['Nokia N80'] = array (
		'user_agent_string' => 'NokiaN80-3/1.0552.0.7Series60/3.0Profile/MIDP-2.0Configuration/CLDC-1.1',
		'platform' => 'symbian_series60',
		'user_agent_name' => 'series60',
);
$UAs['Nokia7610'] = array (
		'user_agent_string' => 'Nokia7610/2.0 (5.0509.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0 Configuration/CLDC-1.0',
		'platform' => 'symbian_series60',
		'user_agent_name' => 'series60',
);
$UAs['Nokia3650/1.0'] = array (
		'user_agent_string' => 'Nokia3650/1.0 SymbianOS/6.1 Series60/1.2 Profile/MIDP-1.0 Configuration/CLDC-1.0',
		'platform' => 'symbian_series60',
		'user_agent_name' => 'series60',
);
$UAs['SymbianOS/9.1 Series60/3.0 on Samsung'] = array (
		'user_agent_string' => 'SamsungI8910/SymbianOS/9.1 Series60/3.0',
		'platform' => 'symbian_series60',
		'user_agent_name' => 'series60',
);
$UAs['SymbianOS/9.1 Series60/3.0 on Nokia'] = array (
		'user_agent_string' => 'NokiaE52-1/SymbianOS/9.1 Series60/3.0 3gpp-gba',
		'platform' => 'symbian_series60',
		'user_agent_name' => 'series60',
);


//S60 3rd Edition - OSS Browser 3.0 (Web browser) 
$UAs['S60 3rd Edition - OSS Browser 3.0 (Web browser) '] = array (
		'user_agent_string' => 'Mozilla/5.0 (SymbianOS/9.1; U; [en]; Series60/3.0 NokiaE60/4.06.0) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
		'platform' => 'symbian_series60',
		'user_agent_name' => 'series60',
);

//S60 3rd Edition Feature Pack 1 - OSS Browser 3.1
$UAs[' S60 3rd Edition Feature Pack 1 (OSS 3.1)'] = array (
		'user_agent_string' => 'Mozilla/5.0 (SymbianOS/9.2; U; Series60/3.1 NokiaXxx/1.0; Profile/MIDP-2.0 Configuration/CLDC-1.1) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
		'platform' => 'symbian_series60',
		'user_agent_name' => 'series60',
);

//S60 3rd Edition Feature Pack 2
$UAs[' OSS Browser 3.2 on E75'] = array (
		'user_agent_string' => 'Mozilla/5.0 (SymbianOS/9.3; U; Series60/3.2 NokiaE75-1/110.48.125 Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
		'platform' => 'symbian_series60',
		'user_agent_name' => 'series60',
);

$UAs['(OSS Browser 3.2) SymbianOS/9.3 Series60/3.2 on NokiaC5-00'] = array (
		'user_agent_string' => 'NokiaC5-00/061.005 (SymbianOS/9.3; U; Series60/3.2 Mozilla/5.0; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 Safari/525 3gpp-gba',
		'platform' => 'symbian_series60',
		'user_agent_name' => 'series60',
);



/* S60 5th Edition */

//Browser 7.0 is used on 5800 XpressMusic, 5530 XpressMusic and Nokia 5230.
$UAs['S60 5th Edition - 7.0 Browser (Nokia 5800 XpressMusic (v21.0.025))'] = array (
		'user_agent_string' => 'Mozilla/5.0 (SymbianOS/9.4; U; Series60/5.0 Nokia5800d-1/21.0.025; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/413 (KHTML, like Gecko) Safari/413',
		'platform' => 'symbian_series60',
		'user_agent_name' => 'series60',
);

$UAs['S60 5th Edition - SymbianOS/9.4 Series60/5.0 on Nokia NokiaC6-00'] = array (
		'user_agent_string' => 'NokiaC6-00/10.0.021 (SymbianOS/9.4; Series60/5.0 Mozilla/5.0; Profile/MIDP-2.1 Configuration/CLDC-1.1) AppleWebkit/525 (KHTML, like Gecko) BrowserNG/7.2.6 UNTRUSTED/1.0 3gpp-gba',
		'platform' => 'symbian_series60',
		'user_agent_name' => 'series60',
);

//7.1 Browser is used by N97, N97-mini and various 3.2.3 devices
$UAs['S60 5th Edition - Nokia N97 (v12.0.024) - Browser 7.1'] = array (
		'user_agent_string' => 'Mozilla/5.0 (SymbianOS/9.4; Series60/5.0 NokiaN97-1/12.0.024; Profile/MIDP-2.1 Configuration/CLDC-1.1; en-us) AppleWebKit/525 (KHTML, like Gecko) BrowserNG/7.1.12344',
		'platform' => 'symbian_series60',
		'user_agent_name' => 'series60',
);


/* Nokia Symbian S^3 */

$UAs['Symbian S^3 - Nokia N8 v13.016 - Browser 7.2'] = array ( //Browser 7.2 is built in browser for Symbian^3 devices.
		'user_agent_string' => 'Mozilla/5.0 (Symbian/3; Series60/5.2 NokiaN8-00/013.016; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/525 (KHTML, like Gecko) Version/3.0 BrowserNG/7.2.8.10 3gpp-gba',
		'platform' => 'symbian_series60',
		'user_agent_name' => 'series60',
);
$UAs['Symbian S^3 - Nokia N8 - Browser 7.3'] = array ( //Browser 7.3 is part of Symbian Anna refresh.
		'user_agent_string' => 'Mozilla/5.0 (Symbian/3; Series60/5.2 NokiaN8-00/012.002; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/533.4 (KHTML, like Gecko) NokiaBrowser/7.3.0 Mobile Safari/533.4 3gpp-gba',
		'platform' => 'symbian_series60',
		'user_agent_name' => 'series60',
);
$UAs['Symbian S^3 - Nokia N701 - Browser 7.4'] = array ( //Browser 7.4 is part of Symbian Belle update
		'user_agent_string' => 'Mozilla/5.0 (Symbian/3; Series60/5.3 Nokia701/111.020.0307; Profile/MIDP-2.1 Configuration/CLDC-1.1 ) AppleWebKit/533.4 (KHTML, like Gecko) NokiaBrowser/7.4.1.14 Mobile Safari/533.4 3gpp-gba',
		'platform' => 'symbian_series60',
		'user_agent_name' => 'series60',
);

//Symbian S40
$UAs['Nokia X3-02 - S40 OviBrowser/1.0.0.11.8'] = array (
								'user_agent_string' => 'Mozilla/5.0 (Series40; NokiaX3-02/le6.32; Profile/MIDP-2.1 Configuration/CLDC-1.1) Gecko/20100401 S40OviBrowser/1.0.0.11.8',
								'platform' => 'symbian_series40',
								'user_agent_name' => 'nokia',
);
$UAs['Nokia X3-02 - S40 OviBrowser/1.5.0.34.11'] = array (
								'user_agent_string' => 'Mozilla/5.0 (Series40; NokiaX3-02/06.00; Profile/MIDP-2.1 Configuration/CLDC-1.1) Gecko/20100401 S40OviBrowser/1.5.0.34.11',
								'platform' => 'symbian_series40',
								'user_agent_name' => 'nokia',
);

//very old nokia devices without symbian
$UAs['Nokia3200'] = array (
								'user_agent_string' => 'Nokia3200/1.0 (5.29) Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Link/6.3.1.13.0',
								'platform' => 'j2me_midp',
								'user_agent_name' => 'nokia',
);
$UAs['Nokia7250i/1.0'] = array (
								'user_agent_string' => 'Nokia7250i/1.0 (3.22) Profile/MIDP-1.0 Configuration/CLDC-1.0',
								'platform' => 'j2me_midp',
								'user_agent_name' => 'nokia',
);
$UAs['Nokia6800/2.0'] = array (
								'user_agent_string' => 'Nokia6800/2.0 (4.17) Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Link/5.1.2.9',
								'platform' => 'j2me_midp',
								'user_agent_name' => 'nokia',
);
$UAs['Nokia8310/1.0'] = array (
								'user_agent_string' => 'Nokia8310/1.0 (05.11) UP.Link/6.5.0.0.06.5.0.0.06.5.0.0.06.5.0.0.0',
								'platform' => 'j2me_midp',
								'user_agent_name' => 'nokia',
);


// Kindle Fire UA
$UAs['Kindle Fire Silk accelerated'] = array (
								'user_agent_string' => 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us; Silk/1.1.0-84) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16 Silk-Accelerated=true',
								'platform' => 'android_tablet',
								'user_agent_name' => 'kindle-fire',
);
$UAs['Kindle Fire NO Silk accelerated'] = array (
								'user_agent_string' => 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us; Silk/1.1.0-84) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16 Silk-Accelerated=false',
								'platform' => 'android_tablet',
								'user_agent_name' => 'kindle-fire',
);

//FireFox Mobile
$UAs['Firefox Mobile 1'] = array (
								'user_agent_string' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2.1.1) Gecko/20110415 Firefox/4.0.2pre Fennec/4.0.1',
								'platform' => false,
								'user_agent_name' => 'firefox_mobile',
);
$UAs['Firefox Mobile 2'] = array (
								'user_agent_string' => 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1b2pre) Gecko/20081015 Fennec/1.0a1',
								'platform' => false,
								'user_agent_name' => 'firefox_mobile',
);

foreach ($UAs as $browser_name => $browser_obj) {
	$_SERVER['HTTP_USER_AGENT']  = $browser_obj['user_agent_string'];
	$should_print_details = false;
	
	$ua_info = new UserAgentInfo();
	echo "<h2> $browser_name </h2>";
		
	if ( $ua_info->get_mobile_user_agent_name() !== $browser_obj["user_agent_name"] ) {
		echo  '<b style="background-color:red;">Error. Wrong user agent detected!!!</b><br/>';
		echo  'Expected '.$browser_obj['user_agent_name'].' found '.$ua_info->get_mobile_user_agent_name().'<br/>';
		$should_print_details = true;
	} else {
		echo  '<b style="color:green;">User agent ok!!!</b><br/>';
	}

	if ( $ua_info->get_platform() !== $browser_obj["platform"] ) {
		echo  '<b style="background-color:red;">Error. Wrong Platform detected!!!</b><br/>';
		echo  'Expected '.$browser_obj['platform'].' found '.$ua_info->get_platform().'<br/>';
		$should_print_details = true;
	} else {
		echo  '<b style="color:green;">Platform ok!!!</b><br/>';
	}
	
	if ( $should_print_details === true ) { 
		
		if ( $ua_info->get_mobile_user_agent_name() !== false ) 
			echo "<br/> -get_mobile_device_name: ". $ua_info->get_mobile_user_agent_name();
		else 
			echo "<br/> -get_mobile_device_name: <b>desktop</b>";
		
		if ( $ua_info->get_platform() === false )
			echo "<br/> -get_platform: <b>false</b>";
		else
			echo "<br/> -get_platform: ". $ua_info->get_platform();
	
		if( $ua_info->get_mobile_user_agent_name() != false ) {
			echo "<br/> -detect_blackberry_browser_version: ". $ua_info->detect_blackberry_browser_version();
			echo "<br/> -get_blackbeberry_OS_version: ". $ua_info->get_blackbeberry_OS_version();
			echo "<br/> -UA String: ". $_SERVER['HTTP_USER_AGENT'];
		}
	} elseif ( $browser_obj["platform"] == 'blackberry' ) {
			echo "<br/> -detect_blackberry_browser_version: ". $ua_info->detect_blackberry_browser_version();
			echo "<br/> -get_blackbeberry_OS_version: ". $ua_info->get_blackbeberry_OS_version();
	}
	echo '<hr/>';
}