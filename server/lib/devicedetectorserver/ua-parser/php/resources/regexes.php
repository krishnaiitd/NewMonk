<?php
return array (
  'user_agent_parsers' => 
  array (
    0 => 
    array (
      'regex' => '(HbbTV)/(\\d+)\\.(\\d+)\\.(\\d+) \\(',
    ),
    1 => 
    array (
      'regex' => '(Chimera|SeaMonkey|Camino)/(\\d+)\\.(\\d+)\\.?([ab]?\\d+[a-z]*)?',
    ),
    2 => 
    array (
      'regex' => '(Pale[Mm]oon)/(\\d+)\\.(\\d+)\\.?(\\d+)?',
      'family_replacement' => 'Pale Moon (Firefox Variant)',
    ),
    3 => 
    array (
      'regex' => '(Fennec)/(\\d+)\\.(\\d+)\\.?([ab]?\\d+[a-z]*)',
      'family_replacement' => 'Firefox Mobile',
    ),
    4 => 
    array (
      'regex' => '(Fennec)/(\\d+)\\.(\\d+)(pre)',
      'family_replacement' => 'Firefox Mobile',
    ),
    5 => 
    array (
      'regex' => '(Fennec)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Firefox Mobile',
    ),
    6 => 
    array (
      'regex' => 'Mobile.*(Firefox)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Firefox Mobile',
    ),
    7 => 
    array (
      'regex' => '(Namoroka|Shiretoko|Minefield)/(\\d+)\\.(\\d+)\\.(\\d+(?:pre)?)',
      'family_replacement' => 'Firefox ($1)',
    ),
    8 => 
    array (
      'regex' => '(Firefox)/(\\d+)\\.(\\d+)(a\\d+[a-z]*)',
      'family_replacement' => 'Firefox Alpha',
    ),
    9 => 
    array (
      'regex' => '(Firefox)/(\\d+)\\.(\\d+)(b\\d+[a-z]*)',
      'family_replacement' => 'Firefox Beta',
    ),
    10 => 
    array (
      'regex' => '(Firefox)-(?:\\d+\\.\\d+)?/(\\d+)\\.(\\d+)(a\\d+[a-z]*)',
      'family_replacement' => 'Firefox Alpha',
    ),
    11 => 
    array (
      'regex' => '(Firefox)-(?:\\d+\\.\\d+)?/(\\d+)\\.(\\d+)(b\\d+[a-z]*)',
      'family_replacement' => 'Firefox Beta',
    ),
    12 => 
    array (
      'regex' => '(Namoroka|Shiretoko|Minefield)/(\\d+)\\.(\\d+)([ab]\\d+[a-z]*)?',
      'family_replacement' => 'Firefox ($1)',
    ),
    13 => 
    array (
      'regex' => '(Firefox).*Tablet browser (\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'MicroB',
    ),
    14 => 
    array (
      'regex' => '(MozillaDeveloperPreview)/(\\d+)\\.(\\d+)([ab]\\d+[a-z]*)?',
    ),
    15 => 
    array (
      'regex' => '(Flock)/(\\d+)\\.(\\d+)(b\\d+?)',
    ),
    16 => 
    array (
      'regex' => '(RockMelt)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    17 => 
    array (
      'regex' => '(Navigator)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Netscape',
    ),
    18 => 
    array (
      'regex' => '(Navigator)/(\\d+)\\.(\\d+)([ab]\\d+)',
      'family_replacement' => 'Netscape',
    ),
    19 => 
    array (
      'regex' => '(Netscape6)/(\\d+)\\.(\\d+)\\.?([ab]?\\d+)?',
      'family_replacement' => 'Netscape',
    ),
    20 => 
    array (
      'regex' => '(MyIBrow)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'My Internet Browser',
    ),
    21 => 
    array (
      'regex' => '(Opera Tablet).*Version/(\\d+)\\.(\\d+)(?:\\.(\\d+))?',
    ),
    22 => 
    array (
      'regex' => '(Opera)/.+Opera Mobi.+Version/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Opera Mobile',
    ),
    23 => 
    array (
      'regex' => '(Opera)/(\\d+)\\.(\\d+).+Opera Mobi',
      'family_replacement' => 'Opera Mobile',
    ),
    24 => 
    array (
      'regex' => 'Opera Mobi.+(Opera)(?:/|\\s+)(\\d+)\\.(\\d+)',
      'family_replacement' => 'Opera Mobile',
    ),
    25 => 
    array (
      'regex' => 'Opera Mobi',
      'family_replacement' => 'Opera Mobile',
    ),
    26 => 
    array (
      'regex' => '(Opera Mini)(?:/att)?/(\\d+)\\.(\\d+)',
    ),
    27 => 
    array (
      'regex' => '(Opera)/9.80.*Version/(\\d+)\\.(\\d+)(?:\\.(\\d+))?',
    ),
    28 => 
    array (
      'regex' => '(?:Mobile Safari).*(OPR)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Opera Mobile',
    ),
    29 => 
    array (
      'regex' => '(?:Chrome).*(OPR)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Opera',
    ),
    30 => 
    array (
      'regex' => '(hpw|web)OS/(\\d+)\\.(\\d+)(?:\\.(\\d+))?',
      'family_replacement' => 'webOS Browser',
    ),
    31 => 
    array (
      'regex' => '(luakit)',
      'family_replacement' => 'LuaKit',
    ),
    32 => 
    array (
      'regex' => '(Snowshoe)/(\\d+)\\.(\\d+).(\\d+)',
    ),
    33 => 
    array (
      'regex' => '(Lightning)/(\\d+)\\.(\\d+)\\.?((?:[ab]?\\d+[a-z]*)|(?:\\d*))',
    ),
    34 => 
    array (
      'regex' => '(Firefox)/(\\d+)\\.(\\d+)\\.(\\d+(?:pre)?) \\(Swiftfox\\)',
      'family_replacement' => 'Swiftfox',
    ),
    35 => 
    array (
      'regex' => '(Firefox)/(\\d+)\\.(\\d+)([ab]\\d+[a-z]*)? \\(Swiftfox\\)',
      'family_replacement' => 'Swiftfox',
    ),
    36 => 
    array (
      'regex' => '(rekonq)/(\\d+)\\.(\\d+)\\.?(\\d+)? Safari',
      'family_replacement' => 'Rekonq',
    ),
    37 => 
    array (
      'regex' => 'rekonq',
      'family_replacement' => 'Rekonq',
    ),
    38 => 
    array (
      'regex' => '(conkeror|Conkeror)/(\\d+)\\.(\\d+)\\.?(\\d+)?',
      'family_replacement' => 'Conkeror',
    ),
    39 => 
    array (
      'regex' => '(konqueror)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Konqueror',
    ),
    40 => 
    array (
      'regex' => '(WeTab)-Browser',
    ),
    41 => 
    array (
      'regex' => '(Comodo_Dragon)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Comodo Dragon',
    ),
    42 => 
    array (
      'regex' => '(YottaaMonitor|BrowserMob|HttpMonitor|YandexBot|Slurp|BingPreview|PagePeeker|ThumbShotsBot|WebThumb|URL2PNG|ZooShot|GomezA|Catchpoint bot|Willow Internet Crawler|Google SketchUp|Read%20Later)',
    ),
    43 => 
    array (
      'regex' => '(Symphony) (\\d+).(\\d+)',
    ),
    44 => 
    array (
      'regex' => '(Minimo)',
    ),
    45 => 
    array (
      'regex' => 'PLAYSTATION 3.+WebKit',
      'family_replacement' => 'NetFront NX',
    ),
    46 => 
    array (
      'regex' => 'PLAYSTATION 3',
      'family_replacement' => 'NetFront',
    ),
    47 => 
    array (
      'regex' => '(PlayStation Portable)',
      'family_replacement' => 'NetFront',
    ),
    48 => 
    array (
      'regex' => '(PlayStation Vita)',
      'family_replacement' => 'NetFront NX',
    ),
    49 => 
    array (
      'regex' => 'AppleWebKit.+ (NX)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'NetFront NX',
    ),
    50 => 
    array (
      'regex' => '(Nintendo 3DS)',
      'family_replacement' => 'NetFront NX',
    ),
    51 => 
    array (
      'regex' => '(Silk)/(\\d+)\\.(\\d+)(?:\\.([0-9\\-]+))?',
      'family_replacement' => 'Amazon Silk',
    ),
    52 => 
    array (
      'regex' => '(Puffin)/(\\d+)\\.(\\d+)(?:\\.(\\d+))?',
    ),
    53 => 
    array (
      'regex' => '(CrMo)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Chrome Mobile',
    ),
    54 => 
    array (
      'regex' => '(CriOS)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Chrome Mobile iOS',
    ),
    55 => 
    array (
      'regex' => '(Chrome)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+) Mobile',
      'family_replacement' => 'Chrome Mobile',
    ),
    56 => 
    array (
      'regex' => '(chromeframe)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Chrome Frame',
    ),
    57 => 
    array (
      'regex' => '(UCBrowser)[ /](\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'UC Browser',
    ),
    58 => 
    array (
      'regex' => '(UC Browser)[ /](\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    59 => 
    array (
      'regex' => '(UC Browser|UCBrowser|UCWEB)(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'UC Browser',
    ),
    60 => 
    array (
      'regex' => '(SLP Browser)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Tizen Browser',
    ),
    61 => 
    array (
      'regex' => '(SE 2\\.X) MetaSr (\\d+)\\.(\\d+)',
      'family_replacement' => 'Sogou Explorer',
    ),
    62 => 
    array (
      'regex' => '(baidubrowser)[/\\s](\\d+)',
      'family_replacement' => 'Baidu Browser',
    ),
    63 => 
    array (
      'regex' => '(FlyFlow)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Baidu Explorer',
    ),
    64 => 
    array (
      'regex' => '(MQQBrowser/Mini)(?:(\\d+)(?:\\.(\\d+)(?:\\.(\\d+))?)?)?',
      'family_replacement' => 'QQ Browser Mini',
    ),
    65 => 
    array (
      'regex' => '(MQQBrowser)(?:/(\\d+)(?:\\.(\\d+)(?:\\.(\\d+))?)?)?',
      'family_replacement' => 'QQ Browser Mobile',
    ),
    66 => 
    array (
      'regex' => '(QQBrowser)(?:/(\\d+)(?:\\.(\\d+)\\.(\\d+)(?:\\.(\\d+))?)?)?',
      'family_replacement' => 'QQ Browser',
    ),
    67 => 
    array (
      'regex' => '(Pingdom.com_bot_version_)(\\d+)\\.(\\d+)',
      'family_replacement' => 'PingdomBot',
    ),
    68 => 
    array (
      'regex' => '(facebookexternalhit)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'FacebookBot',
    ),
    69 => 
    array (
      'regex' => '(LinkedInBot)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'LinkedInBot',
    ),
    70 => 
    array (
      'regex' => '(Twitterbot)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'TwitterBot',
    ),
    71 => 
    array (
      'regex' => 'Google.*/\\+/web/snippet',
      'family_replacement' => 'GooglePlusBot',
    ),
    72 => 
    array (
      'regex' => '(Rackspace Monitoring)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'RackspaceBot',
    ),
    73 => 
    array (
      'regex' => '(PyAMF)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    74 => 
    array (
      'regex' => '(YaBrowser)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Yandex Browser',
    ),
    75 => 
    array (
      'regex' => '(Chrome)/(\\d+)\\.(\\d+)\\.(\\d+).* MRCHROME',
      'family_replacement' => 'Mail.ru Chromium Browser',
    ),
    76 => 
    array (
      'regex' => '(AOL) (\\d+)\\.(\\d+); AOLBuild (\\d+)',
    ),
    77 => 
    array (
      'regex' => '(AdobeAIR|FireWeb|Jasmine|ANTGalio|Midori|Fresco|Lobo|PaleMoon|Maxthon|Lynx|OmniWeb|Dillo|Camino|Demeter|Fluid|Fennec|Epiphany|Shiira|Sunrise|Flock|Netscape|Lunascape|WebPilot|NetFront|Netfront|Konqueror|SeaMonkey|Kazehakase|Vienna|Iceape|Iceweasel|IceWeasel|Iron|K-Meleon|Sleipnir|Galeon|GranParadiso|Opera Mini|iCab|NetNewsWire|ThunderBrowse|Iris|UP\\.Browser|Bunjalloo|Google Earth|Raven for Mac|Openwave)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    78 => 
    array (
      'regex' => 'MSOffice 12',
      'family_replacement' => 'Outlook',
      'v1_replacement' => '2007',
    ),
    79 => 
    array (
      'regex' => 'MSOffice 14',
      'family_replacement' => 'Outlook',
      'v1_replacement' => '2010',
    ),
    80 => 
    array (
      'regex' => 'Microsoft Outlook 15\\.\\d+\\.\\d+',
      'family_replacement' => 'Outlook',
      'v1_replacement' => '2013',
    ),
    81 => 
    array (
      'regex' => '(Airmail) (\\d+)\\.(\\d+)(?:\\.(\\d+))?',
    ),
    82 => 
    array (
      'regex' => '(Thunderbird)/(\\d+)\\.(\\d+)\\.(\\d+(?:pre)?)',
      'family_replacement' => 'Thunderbird',
    ),
    83 => 
    array (
      'regex' => '(Chromium|Chrome)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    84 => 
    array (
      'regex' => '\\b(Dolphin)(?: |HDCN/|/INT\\-)(\\d+)\\.(\\d+)\\.?(\\d+)?',
    ),
    85 => 
    array (
      'regex' => '(bingbot|Bolt|Jasmine|IceCat|Skyfire|Midori|Maxthon|Lynx|Arora|IBrowse|Dillo|Camino|Shiira|Fennec|Phoenix|Chrome|Flock|Netscape|Lunascape|Epiphany|WebPilot|Opera Mini|Opera|NetFront|Netfront|Konqueror|Googlebot|SeaMonkey|Kazehakase|Vienna|Iceape|Iceweasel|IceWeasel|Iron|K-Meleon|Sleipnir|Galeon|GranParadiso|iCab|NetNewsWire|Space Bison|Stainless|Orca|Dolfin|BOLT|Minimo|Tizen Browser|Polaris|Abrowser|Planetweb|ICE Browser|mDolphin)/(\\d+)\\.(\\d+)\\.?(\\d+)?',
    ),
    86 => 
    array (
      'regex' => '(Chromium|Chrome)/(\\d+)\\.(\\d+)',
    ),
    87 => 
    array (
      'regex' => '(IEMobile)[ /](\\d+)\\.(\\d+)',
      'family_replacement' => 'IE Mobile',
    ),
    88 => 
    array (
      'regex' => '(iRider|Crazy Browser|SkipStone|iCab|Lunascape|Sleipnir|Maemo Browser) (\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    89 => 
    array (
      'regex' => '(iCab|Lunascape|Opera|Android|Jasmine|Polaris) (\\d+)\\.(\\d+)\\.?(\\d+)?',
    ),
    90 => 
    array (
      'regex' => '(Kindle)/(\\d+)\\.(\\d+)',
    ),
    91 => 
    array (
      'regex' => '(Android) Donut',
      'v1_replacement' => '1',
      'v2_replacement' => '2',
    ),
    92 => 
    array (
      'regex' => '(Android) Eclair',
      'v1_replacement' => '2',
      'v2_replacement' => '1',
    ),
    93 => 
    array (
      'regex' => '(Android) Froyo',
      'v1_replacement' => '2',
      'v2_replacement' => '2',
    ),
    94 => 
    array (
      'regex' => '(Android) Gingerbread',
      'v1_replacement' => '2',
      'v2_replacement' => '3',
    ),
    95 => 
    array (
      'regex' => '(Android) Honeycomb',
      'v1_replacement' => '3',
    ),
    96 => 
    array (
      'regex' => '(MSIE) (\\d+)\\.(\\d+).*XBLWP7',
      'family_replacement' => 'IE Large Screen',
    ),
    97 => 
    array (
      'regex' => '(Obigo)InternetBrowser',
    ),
    98 => 
    array (
      'regex' => '(Obigo)\\-Browser',
    ),
    99 => 
    array (
      'regex' => '(Obigo|OBIGO)[^\\d]*(\\d+)(?:.(\\d+))?',
      'family_replacement' => 'Obigo',
    ),
    100 => 
    array (
      'regex' => '(MAXTHON|Maxthon) (\\d+)\\.(\\d+)',
      'family_replacement' => 'Maxthon',
    ),
    101 => 
    array (
      'regex' => '(Maxthon|MyIE2|Uzbl|Shiira)',
      'v1_replacement' => '0',
    ),
    102 => 
    array (
      'regex' => '(BrowseX) \\((\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    103 => 
    array (
      'regex' => '(NCSA_Mosaic)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'NCSA Mosaic',
    ),
    104 => 
    array (
      'regex' => '(POLARIS)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Polaris',
    ),
    105 => 
    array (
      'regex' => '(Embider)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Polaris',
    ),
    106 => 
    array (
      'regex' => '(BonEcho)/(\\d+)\\.(\\d+)\\.?([ab]?\\d+)?',
      'family_replacement' => 'Bon Echo',
    ),
    107 => 
    array (
      'regex' => '(CFNetwork)(?:/(\\d+)\\.(\\d+)\\.?(\\d+)?)?',
      'family_replacement' => 'CFNetwork',
    ),
    108 => 
    array (
      'regex' => '(iPod).+Version/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Mobile Safari',
    ),
    109 => 
    array (
      'regex' => '(iPod).*Version/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Mobile Safari',
    ),
    110 => 
    array (
      'regex' => '(iPhone).*Version/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Mobile Safari',
    ),
    111 => 
    array (
      'regex' => '(iPhone).*Version/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Mobile Safari',
    ),
    112 => 
    array (
      'regex' => '(iPad).*Version/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Mobile Safari',
    ),
    113 => 
    array (
      'regex' => '(iPad).*Version/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Mobile Safari',
    ),
    114 => 
    array (
      'regex' => '(iPod|iPhone|iPad);.*CPU.*OS (\\d+)_(\\d+)(?:_(\\d+))?.*Mobile',
      'family_replacement' => 'Mobile Safari',
    ),
    115 => 
    array (
      'regex' => '(iPod|iPhone|iPad)',
      'family_replacement' => 'Mobile Safari',
    ),
    116 => 
    array (
      'regex' => '(AvantGo) (\\d+).(\\d+)',
    ),
    117 => 
    array (
      'regex' => '(OneBrowser)/(\\d+).(\\d+)',
      'family_replacement' => 'ONE Browser',
    ),
    118 => 
    array (
      'regex' => '(Avant)',
      'v1_replacement' => '1',
    ),
    119 => 
    array (
      'regex' => '(QtCarBrowser)',
      'v1_replacement' => '1',
    ),
    120 => 
    array (
      'regex' => '^(iBrowser/Mini)(\\d+).(\\d+)',
      'family_replacement' => 'iBrowser Mini',
    ),
    121 => 
    array (
      'regex' => '^(iBrowser|iRAPP)/(\\d+).(\\d+)',
    ),
    122 => 
    array (
      'regex' => '^(Nokia)',
      'family_replacement' => 'Nokia Services (WAP) Browser',
    ),
    123 => 
    array (
      'regex' => '(NokiaBrowser)/(\\d+)\\.(\\d+).(\\d+)\\.(\\d+)',
      'family_replacement' => 'Nokia Browser',
    ),
    124 => 
    array (
      'regex' => '(NokiaBrowser)/(\\d+)\\.(\\d+).(\\d+)',
      'family_replacement' => 'Nokia Browser',
    ),
    125 => 
    array (
      'regex' => '(NokiaBrowser)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Nokia Browser',
    ),
    126 => 
    array (
      'regex' => '(BrowserNG)/(\\d+)\\.(\\d+).(\\d+)',
      'family_replacement' => 'Nokia Browser',
    ),
    127 => 
    array (
      'regex' => '(Series60)/5\\.0',
      'family_replacement' => 'Nokia Browser',
      'v1_replacement' => '7',
      'v2_replacement' => '0',
    ),
    128 => 
    array (
      'regex' => '(Series60)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Nokia OSS Browser',
    ),
    129 => 
    array (
      'regex' => '(S40OviBrowser)/(\\d+)\\.(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'Ovi Browser',
    ),
    130 => 
    array (
      'regex' => '(Nokia)[EN]?(\\d+)',
    ),
    131 => 
    array (
      'regex' => '(BB10);',
      'family_replacement' => 'BlackBerry WebKit',
    ),
    132 => 
    array (
      'regex' => '(PlayBook).+RIM Tablet OS (\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'BlackBerry WebKit',
    ),
    133 => 
    array (
      'regex' => '(Black[bB]erry).+Version/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'BlackBerry WebKit',
    ),
    134 => 
    array (
      'regex' => '(Black[bB]erry)\\s?(\\d+)',
      'family_replacement' => 'BlackBerry',
    ),
    135 => 
    array (
      'regex' => '(OmniWeb)/v(\\d+)\\.(\\d+)',
    ),
    136 => 
    array (
      'regex' => '(Blazer)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Palm Blazer',
    ),
    137 => 
    array (
      'regex' => '(Pre)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Palm Pre',
    ),
    138 => 
    array (
      'regex' => '(ELinks)/(\\d+)\\.(\\d+)',
    ),
    139 => 
    array (
      'regex' => '(ELinks) \\((\\d+)\\.(\\d+)',
    ),
    140 => 
    array (
      'regex' => '(Links) \\((\\d+)\\.(\\d+)',
    ),
    141 => 
    array (
      'regex' => '(QtWeb) Internet Browser/(\\d+)\\.(\\d+)',
    ),
    142 => 
    array (
      'regex' => '(PhantomJS)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    143 => 
    array (
      'regex' => '(AppleWebKit)/(\\d+)\\.?(\\d+)?\\+ .* Safari',
      'family_replacement' => 'WebKit Nightly',
    ),
    144 => 
    array (
      'regex' => '(Version)/(\\d+)\\.(\\d+)(?:\\.(\\d+))?.*Safari/',
      'family_replacement' => 'Safari',
    ),
    145 => 
    array (
      'regex' => '(Safari)/\\d+',
    ),
    146 => 
    array (
      'regex' => '(OLPC)/Update(\\d+)\\.(\\d+)',
    ),
    147 => 
    array (
      'regex' => '(OLPC)/Update()\\.(\\d+)',
      'v1_replacement' => '0',
    ),
    148 => 
    array (
      'regex' => '(SEMC\\-Browser)/(\\d+)\\.(\\d+)',
    ),
    149 => 
    array (
      'regex' => '(Teleca)',
      'family_replacement' => 'Teleca Browser',
    ),
    150 => 
    array (
      'regex' => '(Phantom)/V(\\d+)\\.(\\d+)',
      'family_replacement' => 'Phantom Browser',
    ),
    151 => 
    array (
      'regex' => 'Trident(.*)rv.(\\d+)\\.(\\d+)',
      'family_replacement' => 'IE',
    ),
    152 => 
    array (
      'regex' => '(Espial)/(\\d+)(?:\\.(\\d+))?(?:\\.(\\d+))?',
    ),
    153 => 
    array (
      'regex' => '(AppleWebKit)/(\\d+)\\.(\\d+)\\.(\\d+)',
      'family_replacement' => 'AppleMail',
    ),
    154 => 
    array (
      'regex' => '(Firefox)/(\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    155 => 
    array (
      'regex' => '(Firefox)/(\\d+)\\.(\\d+)(pre|[ab]\\d+[a-z]*)?',
    ),
    156 => 
    array (
      'regex' => '([MS]?IE) (\\d+)\\.(\\d+)',
      'family_replacement' => 'IE',
    ),
    157 => 
    array (
      'regex' => '(python-requests)/(\\d+)\\.(\\d+)',
      'family_replacement' => 'Python Requests',
    ),
  ),
  'os_parsers' => 
  array (
    0 => 
    array (
      'regex' => 'HbbTV/\\d+\\.\\d+\\.\\d+ \\( ;(LG)E ;NetCast 4.0',
      'os_v1_replacement' => '2013',
    ),
    1 => 
    array (
      'regex' => 'HbbTV/\\d+\\.\\d+\\.\\d+ \\( ;(LG)E ;NetCast 3.0',
      'os_v1_replacement' => '2012',
    ),
    2 => 
    array (
      'regex' => 'HbbTV/1.1.1 \\(;;;;;\\) Maple_2011',
      'os_replacement' => 'Samsung',
      'os_v1_replacement' => '2011',
    ),
    3 => 
    array (
      'regex' => 'HbbTV/\\d+\\.\\d+\\.\\d+ \\(;(Samsung);SmartTV([0-9]{4});.*FXPDEUC',
      'os_v2_replacement' => 'UE40F7000',
    ),
    4 => 
    array (
      'regex' => 'HbbTV/\\d+\\.\\d+\\.\\d+ \\(;(Samsung);SmartTV([0-9]{4});.*MST12DEUC',
      'os_v2_replacement' => 'UE32F4500',
    ),
    5 => 
    array (
      'regex' => 'HbbTV/1.1.1 \\(; (Philips);.*NETTV/4',
      'os_v1_replacement' => '2013',
    ),
    6 => 
    array (
      'regex' => 'HbbTV/1.1.1 \\(; (Philips);.*NETTV/3',
      'os_v1_replacement' => '2012',
    ),
    7 => 
    array (
      'regex' => 'HbbTV/1.1.1 \\(; (Philips);.*NETTV/2',
      'os_v1_replacement' => '2011',
    ),
    8 => 
    array (
      'regex' => 'HbbTV/\\d+\\.\\d+\\.\\d+.*(firetv)-firefox-plugin (\\d+).(\\d+).(\\d+)',
      'os_replacement' => 'FireHbbTV',
    ),
    9 => 
    array (
      'regex' => 'HbbTV/\\d+\\.\\d+\\.\\d+ \\(.*; ?([a-zA-Z]+) ?;.*(201[1-9]).*\\)',
    ),
    10 => 
    array (
      'regex' => '(Windows Phone) (?:OS[ /])?(\\d+)\\.(\\d+)',
    ),
    11 => 
    array (
      'regex' => '(Android)[ \\-/](\\d+)\\.(\\d+)(?:[.\\-]([a-z0-9]+))?',
    ),
    12 => 
    array (
      'regex' => '(Android) Donut',
      'os_v1_replacement' => '1',
      'os_v2_replacement' => '2',
    ),
    13 => 
    array (
      'regex' => '(Android) Eclair',
      'os_v1_replacement' => '2',
      'os_v2_replacement' => '1',
    ),
    14 => 
    array (
      'regex' => '(Android) Froyo',
      'os_v1_replacement' => '2',
      'os_v2_replacement' => '2',
    ),
    15 => 
    array (
      'regex' => '(Android) Gingerbread',
      'os_v1_replacement' => '2',
      'os_v2_replacement' => '3',
    ),
    16 => 
    array (
      'regex' => '(Android) Honeycomb',
      'os_v1_replacement' => '3',
    ),
    17 => 
    array (
      'regex' => '^UCWEB.*; (Adr) (\\d+)\\.(\\d+)(?:[.\\-]([a-z0-9]+))?;',
      'os_replacement' => 'Android',
    ),
    18 => 
    array (
      'regex' => '^UCWEB.*; (iPad OS|iPh OS) (\\d+)_(\\d+)(?:_(\\d+))?;',
      'os_replacement' => 'iOS',
    ),
    19 => 
    array (
      'regex' => '^UCWEB.*; (wds) (\\d+)\\.(\\d+)(?:\\.(\\d+))?;',
      'os_replacement' => 'Windows Phone',
    ),
    20 => 
    array (
      'regex' => '^(JUC).*; ?U; ?(?:Android)?(\\d+)\\.(\\d+)(?:[\\.\\-]([a-z0-9]+))?',
      'os_replacement' => 'Android',
    ),
    21 => 
    array (
      'regex' => '(Silk-Accelerated=[a-z]{4,5})',
      'os_replacement' => 'Android',
    ),
    22 => 
    array (
      'regex' => '(XBLWP7)',
      'os_replacement' => 'Windows Phone',
    ),
    23 => 
    array (
      'regex' => '(Windows ?Mobile)',
      'os_replacement' => 'Windows Mobile',
    ),
    24 => 
    array (
      'regex' => '(Windows (?:NT 5\\.2|NT 5\\.1))',
      'os_replacement' => 'Windows XP',
    ),
    25 => 
    array (
      'regex' => '(Windows NT 6\\.1)',
      'os_replacement' => 'Windows 7',
    ),
    26 => 
    array (
      'regex' => '(Windows NT 6\\.0)',
      'os_replacement' => 'Windows Vista',
    ),
    27 => 
    array (
      'regex' => '(Win 9x 4\\.90)',
      'os_replacement' => 'Windows ME',
    ),
    28 => 
    array (
      'regex' => '(Windows 98|Windows XP|Windows ME|Windows 95|Windows CE|Windows 7|Windows NT 4\\.0|Windows Vista|Windows 2000|Windows 3.1)',
    ),
    29 => 
    array (
      'regex' => '(Windows NT 6\\.2; ARM;)',
      'os_replacement' => 'Windows RT',
    ),
    30 => 
    array (
      'regex' => '(Windows NT 6\\.2)',
      'os_replacement' => 'Windows 8',
    ),
    31 => 
    array (
      'regex' => '(Windows NT 6\\.3; ARM;)',
      'os_replacement' => 'Windows RT 8.1',
    ),
    32 => 
    array (
      'regex' => '(Windows NT 6\\.3)',
      'os_replacement' => 'Windows 8.1',
    ),
    33 => 
    array (
      'regex' => '(Windows NT 5\\.0)',
      'os_replacement' => 'Windows 2000',
    ),
    34 => 
    array (
      'regex' => '(WinNT4.0)',
      'os_replacement' => 'Windows NT 4.0',
    ),
    35 => 
    array (
      'regex' => '(Windows ?CE)',
      'os_replacement' => 'Windows CE',
    ),
    36 => 
    array (
      'regex' => 'Win ?(95|98|3.1|NT|ME|2000)',
      'os_replacement' => 'Windows $1',
    ),
    37 => 
    array (
      'regex' => 'Win16',
      'os_replacement' => 'Windows 3.1',
    ),
    38 => 
    array (
      'regex' => 'Win32',
      'os_replacement' => 'Windows 95',
    ),
    39 => 
    array (
      'regex' => '(Tizen)/(\\d+)\\.(\\d+)',
    ),
    40 => 
    array (
      'regex' => '(Mac OS X) (\\d+)[_.](\\d+)(?:[_.](\\d+))?',
    ),
    41 => 
    array (
      'regex' => ' (Dar)(win)/(9).(\\d+).*\\((?:i386|x86_64|Power Macintosh)\\)',
      'os_replacement' => 'Mac OS X',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '5',
    ),
    42 => 
    array (
      'regex' => ' (Dar)(win)/(10).(\\d+).*\\((?:i386|x86_64)\\)',
      'os_replacement' => 'Mac OS X',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '6',
    ),
    43 => 
    array (
      'regex' => ' (Dar)(win)/(11).(\\d+).*\\((?:i386|x86_64)\\)',
      'os_replacement' => 'Mac OS X',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '7',
    ),
    44 => 
    array (
      'regex' => ' (Dar)(win)/(12).(\\d+).*\\((?:i386|x86_64)\\)',
      'os_replacement' => 'Mac OS X',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '8',
    ),
    45 => 
    array (
      'regex' => ' (Dar)(win)/(13).(\\d+).*\\((?:i386|x86_64)\\)',
      'os_replacement' => 'Mac OS X',
      'os_v1_replacement' => '10',
      'os_v2_replacement' => '9',
    ),
    46 => 
    array (
      'regex' => 'Mac_PowerPC',
      'os_replacement' => 'Mac OS',
    ),
    47 => 
    array (
      'regex' => '(?:PPC|Intel) (Mac OS X)',
    ),
    48 => 
    array (
      'regex' => '(CPU OS|iPhone OS|CPU iPhone) +(\\d+)[_\\.](\\d+)(?:[_\\.](\\d+))?',
      'os_replacement' => 'iOS',
    ),
    49 => 
    array (
      'regex' => '(iPhone|iPad|iPod); Opera',
      'os_replacement' => 'iOS',
    ),
    50 => 
    array (
      'regex' => '(iPhone|iPad|iPod).*Mac OS X.*Version/(\\d+)\\.(\\d+)',
      'os_replacement' => 'iOS',
    ),
    51 => 
    array (
      'regex' => '(AppleTV)/(\\d+)\\.(\\d+)',
      'os_replacement' => 'ATV OS X',
    ),
    52 => 
    array (
      'regex' => '(CFNetwork)/(5)48\\.0\\.3.* Darwin/11\\.0\\.0',
      'os_replacement' => 'iOS',
    ),
    53 => 
    array (
      'regex' => '(CFNetwork)/(5)48\\.(0)\\.4.* Darwin/(1)1\\.0\\.0',
      'os_replacement' => 'iOS',
    ),
    54 => 
    array (
      'regex' => '(CFNetwork)/(5)48\\.(1)\\.4',
      'os_replacement' => 'iOS',
    ),
    55 => 
    array (
      'regex' => '(CFNetwork)/(4)85\\.1(3)\\.9',
      'os_replacement' => 'iOS',
    ),
    56 => 
    array (
      'regex' => '(CFNetwork)/(6)09\\.(1)\\.4',
      'os_replacement' => 'iOS',
    ),
    57 => 
    array (
      'regex' => '(CFNetwork)/(6)(0)9',
      'os_replacement' => 'iOS',
    ),
    58 => 
    array (
      'regex' => '(CFNetwork)/6(7)2\\.(1)\\.13',
      'os_replacement' => 'iOS',
    ),
    59 => 
    array (
      'regex' => '(CFNetwork)/6(7)2\\.(1)\\.(1)4',
      'os_replacement' => 'iOS',
    ),
    60 => 
    array (
      'regex' => '(CF)(Network)/6(7)(2)\\.1\\.15',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '7',
      'os_v2_replacement' => '1',
    ),
    61 => 
    array (
      'regex' => '(CFNetwork)/6(7)2\\.(0)\\.(?:2|8)',
      'os_replacement' => 'iOS',
    ),
    62 => 
    array (
      'regex' => '(CFNetwork)/709\\.1',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '8',
      'os_v2_replacement' => '0.b5',
    ),
    63 => 
    array (
      'regex' => 'CFNetwork/.* Darwin/(9)\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '1',
    ),
    64 => 
    array (
      'regex' => 'CFNetwork/.* Darwin/(10)\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '4',
    ),
    65 => 
    array (
      'regex' => 'CFNetwork/.* Darwin/(11)\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '5',
    ),
    66 => 
    array (
      'regex' => 'CFNetwork/.* Darwin/(13)\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '6',
    ),
    67 => 
    array (
      'regex' => 'CFNetwork/6.* Darwin/(14)\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '7',
    ),
    68 => 
    array (
      'regex' => 'CFNetwork/7.* Darwin/(14)\\.\\d+',
      'os_replacement' => 'iOS',
      'os_v1_replacement' => '8',
      'os_v2_replacement' => '0',
    ),
    69 => 
    array (
      'regex' => '\\b(iOS[ /]|iPhone(?:/| v|[ _]OS[/,]|; | OS : |\\d,\\d/|\\d,\\d; )|iPad/)(\\d{1,2})[_\\.](\\d{1,2})(?:[_\\.](\\d+))?',
      'os_replacement' => 'iOS',
    ),
    70 => 
    array (
      'regex' => '(CrOS) [a-z0-9_]+ (\\d+)\\.(\\d+)(?:\\.(\\d+))?',
      'os_replacement' => 'Chrome OS',
    ),
    71 => 
    array (
      'regex' => '([Dd]ebian)',
      'os_replacement' => 'Debian',
    ),
    72 => 
    array (
      'regex' => '(Linux Mint)(?:/(\\d+))?',
    ),
    73 => 
    array (
      'regex' => '(Mandriva)(?: Linux)?/(?:[\\d.-]+m[a-z]{2}(\\d+).(\\d))?',
    ),
    74 => 
    array (
      'regex' => '(Symbian[Oo][Ss])[/ ](\\d+)\\.(\\d+)',
      'os_replacement' => 'Symbian OS',
    ),
    75 => 
    array (
      'regex' => '(Symbian/3).+NokiaBrowser/7\\.3',
      'os_replacement' => 'Symbian^3 Anna',
    ),
    76 => 
    array (
      'regex' => '(Symbian/3).+NokiaBrowser/7\\.4',
      'os_replacement' => 'Symbian^3 Belle',
    ),
    77 => 
    array (
      'regex' => '(Symbian/3)',
      'os_replacement' => 'Symbian^3',
    ),
    78 => 
    array (
      'regex' => '\\b(Series 60|SymbOS|S60Version|S60V\\d|S60\\b)',
      'os_replacement' => 'Symbian OS',
    ),
    79 => 
    array (
      'regex' => '(MeeGo)',
    ),
    80 => 
    array (
      'regex' => 'Symbian [Oo][Ss]',
      'os_replacement' => 'Symbian OS',
    ),
    81 => 
    array (
      'regex' => 'Series40;',
      'os_replacement' => 'Nokia Series 40',
    ),
    82 => 
    array (
      'regex' => 'Series30Plus;',
      'os_replacement' => 'Nokia Series 30 Plus',
    ),
    83 => 
    array (
      'regex' => '(BB10);.+Version/(\\d+)\\.(\\d+)\\.(\\d+)',
      'os_replacement' => 'BlackBerry OS',
    ),
    84 => 
    array (
      'regex' => '(Black[Bb]erry)[0-9a-z]+/(\\d+)\\.(\\d+)\\.(\\d+)(?:\\.(\\d+))?',
      'os_replacement' => 'BlackBerry OS',
    ),
    85 => 
    array (
      'regex' => '(Black[Bb]erry).+Version/(\\d+)\\.(\\d+)\\.(\\d+)(?:\\.(\\d+))?',
      'os_replacement' => 'BlackBerry OS',
    ),
    86 => 
    array (
      'regex' => '(RIM Tablet OS) (\\d+)\\.(\\d+)\\.(\\d+)',
      'os_replacement' => 'BlackBerry Tablet OS',
    ),
    87 => 
    array (
      'regex' => '(Play[Bb]ook)',
      'os_replacement' => 'BlackBerry Tablet OS',
    ),
    88 => 
    array (
      'regex' => '(Black[Bb]erry)',
      'os_replacement' => 'BlackBerry OS',
    ),
    89 => 
    array (
      'regex' => '\\((?:Mobile|Tablet);.+Firefox/\\d+\\.\\d+',
      'os_replacement' => 'Firefox OS',
    ),
    90 => 
    array (
      'regex' => '(BREW)[ /](\\d+)\\.(\\d+)\\.(\\d+)',
    ),
    91 => 
    array (
      'regex' => '(BREW);',
    ),
    92 => 
    array (
      'regex' => '(Brew MP|BMP)[ /](\\d+)\\.(\\d+)\\.(\\d+)',
      'os_replacement' => 'Brew MP',
    ),
    93 => 
    array (
      'regex' => 'BMP;',
      'os_replacement' => 'Brew MP',
    ),
    94 => 
    array (
      'regex' => '(GoogleTV)(?: (\\d+)\\.(\\d+)(?:\\.(\\d+))?|/[\\da-z]+)',
    ),
    95 => 
    array (
      'regex' => '(WebTV)/(\\d+).(\\d+)',
    ),
    96 => 
    array (
      'regex' => '(hpw|web)OS/(\\d+)\\.(\\d+)(?:\\.(\\d+))?',
      'os_replacement' => 'webOS',
    ),
    97 => 
    array (
      'regex' => '(VRE);',
    ),
    98 => 
    array (
      'regex' => '(Fedora|Red Hat|PCLinuxOS|Puppy|Ubuntu|Kindle|Bada|Lubuntu|BackTrack|Slackware|(?:Free|Open|Net|\\b)BSD)[/ ](\\d+)\\.(\\d+)(?:\\.(\\d+)(?:\\.(\\d+))?)?',
    ),
    99 => 
    array (
      'regex' => '(Linux)[ /](\\d+)\\.(\\d+)(?:\\.(\\d+))?.*gentoo',
      'os_replacement' => 'Gentoo',
    ),
    100 => 
    array (
      'regex' => '\\((Bada);',
    ),
    101 => 
    array (
      'regex' => '(Windows|Android|WeTab|Maemo)',
    ),
    102 => 
    array (
      'regex' => '(Ubuntu|Kubuntu|Arch Linux|CentOS|Slackware|Gentoo|openSUSE|SUSE|Red Hat|Fedora|PCLinuxOS|Gentoo|Mageia|(?:Free|Open|Net|\\b)BSD)',
    ),
    103 => 
    array (
      'regex' => '(Linux)(?:[ /](\\d+)\\.(\\d+)(?:\\.(\\d+))?)?',
    ),
    104 => 
    array (
      'regex' => 'SunOS',
      'os_replacement' => 'Solaris',
    ),
  ),
  'device_parsers' => 
  array (
    0 => 
    array (
      'regex' => 'HTC ([A-Z][a-z0-9]+) Build',
      'device_replacement' => 'HTC $1',
    ),
    1 => 
    array (
      'regex' => 'HTC ([A-Z][a-z0-9 ]+) \\d+\\.\\d+\\.\\d+\\.\\d+',
      'device_replacement' => 'HTC $1',
    ),
    2 => 
    array (
      'regex' => 'HTC_Touch_([A-Za-z0-9]+)',
      'device_replacement' => 'HTC Touch ($1)',
    ),
    3 => 
    array (
      'regex' => 'USCCHTC(\\d+)',
      'device_replacement' => 'HTC $1 (US Cellular)',
    ),
    4 => 
    array (
      'regex' => 'Sprint APA(9292)',
      'device_replacement' => 'HTC $1 (Sprint)',
    ),
    5 => 
    array (
      'regex' => 'HTC ([A-Za-z0-9]+ [A-Z])',
      'device_replacement' => 'HTC $1',
    ),
    6 => 
    array (
      'regex' => 'HTC[-_/\\s]([A-Za-z0-9]+)',
      'device_replacement' => 'HTC $1',
    ),
    7 => 
    array (
      'regex' => '(ADR[A-Za-z0-9]+)',
      'device_replacement' => 'HTC $1',
    ),
    8 => 
    array (
      'regex' => '(HTC)',
    ),
    9 => 
    array (
      'regex' => '(QtCarBrowser)',
      'device_replacement' => 'Tesla Model S',
    ),
    10 => 
    array (
      'regex' => '(SamsungSGHi560)',
      'device_replacement' => 'Samsung SGHi560',
    ),
    11 => 
    array (
      'regex' => '(SCH-[A-Za-z0-9_-]+)',
      'device_replacement' => 'Samsung $1',
    ),
    12 => 
    array (
      'regex' => '(SGH-[A-Za-z0-9_-]+)',
      'device_replacement' => 'Samsung $1',
    ),
    13 => 
    array (
      'regex' => '(GT-[A-Za-z0-9_-]+)',
      'device_replacement' => 'Samsung $1',
    ),
    14 => 
    array (
      'regex' => '(SM-[A-Za-z0-9_-]+)',
      'device_replacement' => 'Samsung $1',
    ),
    15 => 
    array (
      'regex' => '(SPH-[A-Za-z0-9_-]+)',
      'device_replacement' => 'Samsung $1',
    ),
    16 => 
    array (
      'regex' => 'SAMSUNG-([A-Za-z0-9_-]+)',
      'device_replacement' => 'Samsung $1',
    ),
    17 => 
    array (
      'regex' => 'SAMSUNG ([A-Za-z0-9_-]+)',
      'device_replacement' => 'Samsung $1',
    ),
    18 => 
    array (
      'regex' => 'SonyEricsson([A-Za-z0-9]+)/',
      'device_replacement' => 'Ericsson $1',
    ),
    19 => 
    array (
      'regex' => 'PLAYSTATION 3',
      'device_replacement' => 'PlayStation 3',
    ),
    20 => 
    array (
      'regex' => '(PlayStation (:?Portable|Vita))',
    ),
    21 => 
    array (
      'regex' => '(PlayStation (:?\\d+))',
    ),
    22 => 
    array (
      'regex' => '(KFOT Build)',
      'device_replacement' => 'Kindle Fire',
    ),
    23 => 
    array (
      'regex' => '(KFTT Build)',
      'device_replacement' => 'Kindle Fire HD',
    ),
    24 => 
    array (
      'regex' => '(KFJWI Build)',
      'device_replacement' => 'Kindle Fire HD 8.9" WiFi',
    ),
    25 => 
    array (
      'regex' => '(KFJWA Build)',
      'device_replacement' => 'Kindle Fire HD 8.9" 4G',
    ),
    26 => 
    array (
      'regex' => '(KFSOWI Build)',
      'device_replacement' => 'Kindle Fire HD 7" WiFi',
    ),
    27 => 
    array (
      'regex' => '(KFTHWI Build)',
      'device_replacement' => 'Kindle Fire HDX 7" WiFi',
    ),
    28 => 
    array (
      'regex' => '(KFTHWA Build)',
      'device_replacement' => 'Kindle Fire HDX 7" 4G',
    ),
    29 => 
    array (
      'regex' => '(KFAPWI Build)',
      'device_replacement' => 'Kindle Fire HDX 8.9" WiFi',
    ),
    30 => 
    array (
      'regex' => '(KFAPWA Build)',
      'device_replacement' => 'Kindle Fire HDX 8.9" 4G',
    ),
    31 => 
    array (
      'regex' => '(Kindle Fire)',
    ),
    32 => 
    array (
      'regex' => '(Kindle)',
    ),
    33 => 
    array (
      'regex' => '(Silk)/(\\d+)\\.(\\d+)(?:\\.([0-9\\-]+))?',
      'device_replacement' => 'Kindle Fire',
    ),
    34 => 
    array (
      'regex' => 'NokiaN([0-9]+)',
      'device_replacement' => 'Nokia N$1',
    ),
    35 => 
    array (
      'regex' => 'NOKIA([A-Za-z0-9\\v-]+)',
      'device_replacement' => 'Nokia $1',
    ),
    36 => 
    array (
      'regex' => 'Nokia([A-Za-z0-9\\v-]+)',
      'device_replacement' => 'Nokia $1',
    ),
    37 => 
    array (
      'regex' => 'NOKIA ([A-Za-z0-9\\-]+)',
      'device_replacement' => 'Nokia $1',
    ),
    38 => 
    array (
      'regex' => 'Nokia ([A-Za-z0-9\\-]+)',
      'device_replacement' => 'Nokia $1',
    ),
    39 => 
    array (
      'regex' => 'Lumia ([A-Za-z0-9\\-]+)',
      'device_replacement' => 'Lumia $1',
    ),
    40 => 
    array (
      'regex' => 'Symbian',
      'device_replacement' => 'Nokia',
    ),
    41 => 
    array (
      'regex' => 'BB10; ([A-Za-z0-9\\- ]+)\\)',
      'device_replacement' => 'BlackBerry $1',
    ),
    42 => 
    array (
      'regex' => '(PlayBook).+RIM Tablet OS',
      'device_replacement' => 'BlackBerry Playbook',
    ),
    43 => 
    array (
      'regex' => 'Black[Bb]erry ([0-9]+);',
      'device_replacement' => 'BlackBerry $1',
    ),
    44 => 
    array (
      'regex' => 'Black[Bb]erry([0-9]+)',
      'device_replacement' => 'BlackBerry $1',
    ),
    45 => 
    array (
      'regex' => 'Black[Bb]erry;',
      'device_replacement' => 'BlackBerry',
    ),
    46 => 
    array (
      'regex' => '(Pre)/(\\d+)\\.(\\d+)',
      'device_replacement' => 'Palm Pre',
    ),
    47 => 
    array (
      'regex' => '(Pixi)/(\\d+)\\.(\\d+)',
      'device_replacement' => 'Palm Pixi',
    ),
    48 => 
    array (
      'regex' => '(Touch[Pp]ad)/(\\d+)\\.(\\d+)',
      'device_replacement' => 'HP TouchPad',
    ),
    49 => 
    array (
      'regex' => 'HPiPAQ([A-Za-z0-9]+)/(\\d+).(\\d+)',
      'device_replacement' => 'HP iPAQ $1',
    ),
    50 => 
    array (
      'regex' => 'Palm([A-Za-z0-9]+)',
      'device_replacement' => 'Palm $1',
    ),
    51 => 
    array (
      'regex' => 'Treo([A-Za-z0-9]+)',
      'device_replacement' => 'Palm Treo $1',
    ),
    52 => 
    array (
      'regex' => 'webOS.*(P160UNA)/(\\d+).(\\d+)',
      'device_replacement' => 'HP Veer',
    ),
    53 => 
    array (
      'regex' => '(AppleTV)',
      'device_replacement' => 'AppleTV',
    ),
    54 => 
    array (
      'regex' => 'AdsBot-Google-Mobile',
      'device_replacement' => 'Spider',
    ),
    55 => 
    array (
      'regex' => 'Googlebot-Mobile/(\\d+).(\\d+)',
      'device_replacement' => 'Spider',
    ),
    56 => 
    array (
      'regex' => 'Googlebot/\\d+.\\d+',
      'device_replacement' => 'Spider',
    ),
    57 => 
    array (
      'regex' => 'NING/(\\d+).(\\d+)',
      'device_replacement' => 'Spider',
    ),
    58 => 
    array (
      'regex' => 'MsnBot-Media /(\\d+).(\\d+)',
      'device_replacement' => 'Spider',
    ),
    59 => 
    array (
      'regex' => '(iPad) Simulator;',
    ),
    60 => 
    array (
      'regex' => '(iPad);',
    ),
    61 => 
    array (
      'regex' => '(iPod) touch;',
    ),
    62 => 
    array (
      'regex' => '(iPod);',
    ),
    63 => 
    array (
      'regex' => '(iPhone) Simulator;',
    ),
    64 => 
    array (
      'regex' => '(iPhone);',
    ),
    65 => 
    array (
      'regex' => 'acer_([A-Za-z0-9]+)_',
      'device_replacement' => 'Acer $1',
    ),
    66 => 
    array (
      'regex' => 'acer_([A-Za-z0-9]+)_',
      'device_replacement' => 'Acer $1',
    ),
    67 => 
    array (
      'regex' => 'ALCATEL-([A-Za-z0-9]+)',
      'device_replacement' => 'Alcatel $1',
    ),
    68 => 
    array (
      'regex' => 'Alcatel-([A-Za-z0-9]+)',
      'device_replacement' => 'Alcatel $1',
    ),
    69 => 
    array (
      'regex' => 'ALCATEL_ONE_TOUCH_([A-Za-z0-9]+)',
      'device_replacement' => 'Alcatel ONE TOUCH $1',
    ),
    70 => 
    array (
      'regex' => 'ALCATEL (ONE TOUCH [A-Za-z0-9]+)',
      'device_replacement' => 'Alcatel $1',
    ),
    71 => 
    array (
      'regex' => 'ALCATEL (one touch [A-Za-z0-9]+)',
      'device_replacement' => 'Alcatel $1',
    ),
    72 => 
    array (
      'regex' => 'ALCATEL ([A-Za-z0-9]+)',
      'device_replacement' => 'Alcatel $1',
    ),
    73 => 
    array (
      'regex' => 'Amoi\\-([A-Za-z0-9]+)',
      'device_replacement' => 'Amoi $1',
    ),
    74 => 
    array (
      'regex' => 'AMOI\\-([A-Za-z0-9]+)',
      'device_replacement' => 'Amoi $1',
    ),
    75 => 
    array (
      'regex' => 'Asus\\-([A-Za-z0-9]+)',
      'device_replacement' => 'Asus $1',
    ),
    76 => 
    array (
      'regex' => 'ASUS\\-([A-Za-z0-9]+)',
      'device_replacement' => 'Asus $1',
    ),
    77 => 
    array (
      'regex' => 'BIRD\\-([A-Za-z0-9]+)',
      'device_replacement' => 'Bird $1',
    ),
    78 => 
    array (
      'regex' => 'BIRD\\.([A-Za-z0-9]+)',
      'device_replacement' => 'Bird $1',
    ),
    79 => 
    array (
      'regex' => 'BIRD ([A-Za-z0-9]+)',
      'device_replacement' => 'Bird $1',
    ),
    80 => 
    array (
      'regex' => 'Dell ([A-Za-z0-9]+)',
      'device_replacement' => 'Dell $1',
    ),
    81 => 
    array (
      'regex' => 'DoCoMo/2\\.0 ([A-Za-z0-9]+)',
      'device_replacement' => 'DoCoMo $1',
    ),
    82 => 
    array (
      'regex' => '([A-Za-z0-9]+)_W\\;FOMA',
      'device_replacement' => 'DoCoMo $1',
    ),
    83 => 
    array (
      'regex' => '([A-Za-z0-9]+)\\;FOMA',
      'device_replacement' => 'DoCoMo $1',
    ),
    84 => 
    array (
      'regex' => 'Huawei([A-Za-z0-9]+)',
      'device_replacement' => 'Huawei $1',
    ),
    85 => 
    array (
      'regex' => 'HUAWEI-([A-Za-z0-9]+)',
      'device_replacement' => 'Huawei $1',
    ),
    86 => 
    array (
      'regex' => 'vodafone([A-Za-z0-9]+)',
      'device_replacement' => 'Huawei Vodafone $1',
    ),
    87 => 
    array (
      'regex' => 'i\\-mate ([A-Za-z0-9]+)',
      'device_replacement' => 'i-mate $1',
    ),
    88 => 
    array (
      'regex' => 'Kyocera\\-([A-Za-z0-9]+)',
      'device_replacement' => 'Kyocera $1',
    ),
    89 => 
    array (
      'regex' => 'KWC\\-([A-Za-z0-9]+)',
      'device_replacement' => 'Kyocera $1',
    ),
    90 => 
    array (
      'regex' => 'Lenovo\\-([A-Za-z0-9]+)',
      'device_replacement' => 'Lenovo $1',
    ),
    91 => 
    array (
      'regex' => 'Lenovo_([A-Za-z0-9]+)',
      'device_replacement' => 'Lenovo $1',
    ),
    92 => 
    array (
      'regex' => '(HbbTV)/[0-9]+\\.[0-9]+\\.[0-9]+',
    ),
    93 => 
    array (
      'regex' => 'LG/([A-Za-z0-9]+)',
      'device_replacement' => 'LG $1',
    ),
    94 => 
    array (
      'regex' => 'LG-LG([A-Za-z0-9]+)',
      'device_replacement' => 'LG $1',
    ),
    95 => 
    array (
      'regex' => 'LGE-LG([A-Za-z0-9]+)',
      'device_replacement' => 'LG $1',
    ),
    96 => 
    array (
      'regex' => 'LGE VX([A-Za-z0-9]+)',
      'device_replacement' => 'LG $1',
    ),
    97 => 
    array (
      'regex' => 'LG ([A-Za-z0-9]+)',
      'device_replacement' => 'LG $1',
    ),
    98 => 
    array (
      'regex' => 'LGE LG\\-AX([A-Za-z0-9]+)',
      'device_replacement' => 'LG $1',
    ),
    99 => 
    array (
      'regex' => 'LG\\-([A-Za-z0-9]+)',
      'device_replacement' => 'LG $1',
    ),
    100 => 
    array (
      'regex' => 'LGE\\-([A-Za-z0-9]+)',
      'device_replacement' => 'LG $1',
    ),
    101 => 
    array (
      'regex' => 'LG([A-Za-z0-9]+)',
      'device_replacement' => 'LG $1',
    ),
    102 => 
    array (
      'regex' => '(KIN)\\.One (\\d+)\\.(\\d+)',
      'device_replacement' => 'Microsoft $1',
    ),
    103 => 
    array (
      'regex' => '(KIN)\\.Two (\\d+)\\.(\\d+)',
      'device_replacement' => 'Microsoft $1',
    ),
    104 => 
    array (
      'regex' => '(Motorola)\\-([A-Za-z0-9]+)',
    ),
    105 => 
    array (
      'regex' => 'MOTO\\-([A-Za-z0-9]+)',
      'device_replacement' => 'Motorola $1',
    ),
    106 => 
    array (
      'regex' => 'MOT\\-([A-Za-z0-9]+)',
      'device_replacement' => 'Motorola $1',
    ),
    107 => 
    array (
      'regex' => ' (DROID RAZR [A-Za-z0-9 ]+) ',
      'device_replacement' => 'Motorola $1',
    ),
    108 => 
    array (
      'regex' => ' (DROID[2 ][A-Za-z0-9 ]+) ',
      'device_replacement' => 'Motorola $1',
    ),
    109 => 
    array (
      'regex' => ' (Droid2| )',
      'device_replacement' => 'Motorola $1',
    ),
    110 => 
    array (
      'regex' => ' (DROID2| )',
      'device_replacement' => 'Motorola $1',
    ),
    111 => 
    array (
      'regex' => '(Nintendo WiiU)',
      'device_replacement' => 'Nintendo Wii U',
    ),
    112 => 
    array (
      'regex' => 'Nintendo (DS|3DS|DSi|Wii);',
      'device_replacement' => 'Nintendo $1',
    ),
    113 => 
    array (
      'regex' => 'Pantech([A-Za-z0-9]+)',
      'device_replacement' => 'Pantech $1',
    ),
    114 => 
    array (
      'regex' => 'Philips([A-Za-z0-9]+)',
      'device_replacement' => 'Philips $1',
    ),
    115 => 
    array (
      'regex' => 'Philips ([A-Za-z0-9]+)',
      'device_replacement' => 'Philips $1',
    ),
    116 => 
    array (
      'regex' => 'SAMSUNG-([A-Za-z0-9\\-]+)',
      'device_replacement' => 'Samsung $1',
    ),
    117 => 
    array (
      'regex' => 'SAMSUNG\\; ([A-Za-z0-9\\-]+)',
      'device_replacement' => 'Samsung $1',
    ),
    118 => 
    array (
      'regex' => 'ZTE-([A-Za-z0-9\\-]+)',
      'device_replacement' => 'ZTE $1',
    ),
    119 => 
    array (
      'regex' => 'ZTE ([A-Za-z0-9\\-]+)',
      'device_replacement' => 'ZTE $1',
    ),
    120 => 
    array (
      'regex' => 'ZTE_([A-Za-z0-9\\-]+)',
      'device_replacement' => 'ZTE $1',
    ),
    121 => 
    array (
      'regex' => 'Dreamcast',
      'device_replacement' => 'Sega Dreamcast',
    ),
    122 => 
    array (
      'regex' => 'Softbank/1\\.0/([A-Za-z0-9]+)',
      'device_replacement' => 'Softbank $1',
    ),
    123 => 
    array (
      'regex' => 'Softbank/2\\.0/([A-Za-z0-9]+)',
      'device_replacement' => 'Softbank $1',
    ),
    124 => 
    array (
      'regex' => 'Sony([^ ]+) ',
      'device_replacement' => 'Sony $1',
    ),
    125 => 
    array (
      'regex' => '(WebTV)/(\\d+).(\\d+)',
    ),
    126 => 
    array (
      'regex' => 'Android[\\- ][\\d]+\\.[\\d]+\\.[\\d]+; [^;]+; ([A-Za-z0-9 _-]+) ',
    ),
    127 => 
    array (
      'regex' => 'Android[\\- ][\\d]+\\.[\\d]+; [^;]+; ([A-Za-z0-9 _-]+) ',
    ),
    128 => 
    array (
      'regex' => 'Android[\\- ][\\d]+\\.[\\d]+; [^;]+; WOWMobile ([A-Za-z0-9 _-]+) ',
    ),
    129 => 
    array (
      'regex' => 'Android[\\- ][\\d]+\\.[\\d]+\\-update1; [^;]+; ([A-Za-z0-9 _-]+) ',
    ),
    130 => 
    array (
      'regex' => 'Android[\\- ][\\d]+\\.[\\d]+\\.[\\d]+;[^;]+;([A-Za-z0-9 _-]+) ',
    ),
    131 => 
    array (
      'regex' => 'Android[\\- ][\\d]+\\.[\\d]+\\.[\\d]+; ([A-Za-z0-9 _-]+) ',
    ),
    132 => 
    array (
      'regex' => 'Android[\\- ][\\d]+\\.[\\d]+; ([A-Za-z0-9 _-]+) ',
    ),
    133 => 
    array (
      'regex' => 'Android[\\- ][\\d]+\\.[\\d]+\\.[\\d]+; [^;]+; ([A-Za-z0-9\\.\\/_-]+) ',
    ),
    134 => 
    array (
      'regex' => 'Android[\\- ][\\d]+\\.[\\d]+; [^;]+; ([A-Za-z0-9\\.\\/_-]+) ',
    ),
    135 => 
    array (
      'regex' => '(hiptop|avantgo|plucker|xiino|blazer|elaine|up.browser|up.link|mmp|smartphone|midp|wap|vodafone|o2|pocket|mobile|pda)',
      'device_replacement' => 'Generic Smartphone',
    ),
    136 => 
    array (
      'regex' => '^(1207|3gso|4thp|501i|502i|503i|504i|505i|506i|6310|6590|770s|802s|a wa|acer|acs\\-|airn|alav|asus|attw|au\\-m|aur |aus |abac|acoo|aiko|alco|alca|amoi|anex|anny|anyw|aptu|arch|argo|bell|bird|bw\\-n|bw\\-u|beck|benq|bilb|blac|c55/|cdm\\-|chtm|capi|comp|cond|craw|dall|dbte|dc\\-s|dica|ds\\-d|ds12|dait|devi|dmob|doco|dopo|el49|erk0|esl8|ez40|ez60|ez70|ezos|ezze|elai|emul|eric|ezwa|fake|fly\\-|fly_|g\\-mo|g1 u|g560|gf\\-5|grun|gene|go.w|good|grad|hcit|hd\\-m|hd\\-p|hd\\-t|hei\\-|hp i|hpip|hs\\-c|htc |htc\\-|htca|htcg)',
      'device_replacement' => 'Generic Feature Phone',
    ),
    137 => 
    array (
      'regex' => '^(htcp|htcs|htct|htc_|haie|hita|huaw|hutc|i\\-20|i\\-go|i\\-ma|i230|iac|iac\\-|iac/|ig01|im1k|inno|iris|jata|java|kddi|kgt|kgt/|kpt |kwc\\-|klon|lexi|lg g|lg\\-a|lg\\-b|lg\\-c|lg\\-d|lg\\-f|lg\\-g|lg\\-k|lg\\-l|lg\\-m|lg\\-o|lg\\-p|lg\\-s|lg\\-t|lg\\-u|lg\\-w|lg/k|lg/l|lg/u|lg50|lg54|lge\\-|lge/|lynx|leno|m1\\-w|m3ga|m50/|maui|mc01|mc21|mcca|medi|meri|mio8|mioa|mo01|mo02|mode|modo|mot |mot\\-|mt50|mtp1|mtv |mate|maxo|merc|mits|mobi|motv|mozz|n100|n101|n102|n202|n203|n300|n302|n500|n502|n505|n700|n701|n710|nec\\-|nem\\-|newg|neon)',
      'device_replacement' => 'Generic Feature Phone',
    ),
    138 => 
    array (
      'regex' => '^(netf|noki|nzph|o2 x|o2\\-x|opwv|owg1|opti|oran|ot\\-s|p800|pand|pg\\-1|pg\\-2|pg\\-3|pg\\-6|pg\\-8|pg\\-c|pg13|phil|pn\\-2|pt\\-g|palm|pana|pire|pock|pose|psio|qa\\-a|qc\\-2|qc\\-3|qc\\-5|qc\\-7|qc07|qc12|qc21|qc32|qc60|qci\\-|qwap|qtek|r380|r600|raks|rim9|rove|s55/|sage|sams|sc01|sch\\-|scp\\-|sdk/|se47|sec\\-|sec0|sec1|semc|sgh\\-|shar|sie\\-|sk\\-0|sl45|slid|smb3|smt5|sp01|sph\\-|spv |spv\\-|sy01|samm|sany|sava|scoo|send|siem|smar|smit|soft|sony|t\\-mo|t218|t250|t600|t610|t618|tcl\\-|tdg\\-|telm|tim\\-|ts70|tsm\\-|tsm3|tsm5|tx\\-9|tagt)',
      'device_replacement' => 'Generic Feature Phone',
    ),
    139 => 
    array (
      'regex' => '^(talk|teli|topl|tosh|up.b|upg1|utst|v400|v750|veri|vk\\-v|vk40|vk50|vk52|vk53|vm40|vx98|virg|vite|voda|vulc|w3c |w3c\\-|wapj|wapp|wapu|wapm|wig |wapi|wapr|wapv|wapy|wapa|waps|wapt|winc|winw|wonu|x700|xda2|xdag|yas\\-|your|zte\\-|zeto|aste|audi|avan|blaz|brew|brvw|bumb|ccwa|cell|cldc|cmd\\-|dang|eml2|fetc|hipt|http|ibro|idea|ikom|ipaq|jbro|jemu|jigs|keji|kyoc|kyok|libw|m\\-cr|midp|mmef|moto|mwbp|mywa|newt|nok6|o2im|pant|pdxg|play|pluc|port|prox|rozo|sama|seri|smal|symb|treo|upsi|vx52|vx53|vx60|vx61|vx70|vx80|vx81|vx83|vx85|wap\\-|webc|whit|wmlb|xda\\-|xda_)',
      'device_replacement' => 'Generic Feature Phone',
    ),
    140 => 
    array (
      'regex' => '(bingbot|bot|borg|google(^tv)|yahoo|slurp|msnbot|msrbot|openbot|archiver|netresearch|lycos|scooter|altavista|teoma|gigabot|baiduspider|blitzbot|oegp|charlotte|furlbot|http%20client|polybot|htdig|ichiro|mogimogi|larbin|pompos|scrubby|searchsight|seekbot|semanticdiscovery|silk|snappy|speedy|spider|voila|vortex|voyager|zao|zeal|fast\\-webcrawler|converacrawler|dataparksearch|findlinks|crawler|Netvibes|Sogou Pic Spider|ICC\\-Crawler|Innovazion Crawler|Daumoa|EtaoSpider|A6\\-Indexer|YisouSpider|Riddler|DBot|wsr\\-agent|Xenu|SeznamBot|PaperLiBot|SputnikBot|CCBot|ProoXiBot|Scrapy|Genieo|Screaming Frog|YahooCacheSystem|CiBra|Nutch)',
      'device_replacement' => 'Spider',
    ),
  ),
);