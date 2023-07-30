<?php
# This file was automatically generated by the MediaWiki 1.39.1
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See docs/Configuration.md for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "IIT Palakkad";
$wgMetaNamespace = "IIT_Palakkad";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://localhost:9000";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "";
$wgPasswordSender = "";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "IITPalakkad";
$wgDBuser = "root";
$wgDBpassword = "password";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Shared database table
# This has no effect unless $wgSharedDB is also set.
$wgSharedTables[] = "actor";

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = false;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

# Site language code, should be one of the list in ./includes/languages/data/Names.php
$wgLanguageCode = "en-gb";

# Time zone
$wgLocaltimezone = "UTC";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

$wgSecretKey = "GoogleOAuthKey";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "upgradekey";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, e.g. 'vector' or 'monobook':
$wgDefaultSkin = "timeless";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'MinervaNeue' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );


# End of automatically generated settings.
# Add more configuration options below.

wfLoadExtension( 'GoogleLogin' );
wfLoadExtension( 'SemanticMediaWiki' );
enableSemantics( 'localhost:9000' );
wfLoadExtension( 'SemanticACL' );
$wgShowDebug = false;
$wgDevelopmentWarnings = false;
$wgDeprecationReleaseLimit = '1.0';

$wgGLSecret = 'anotherGoogleOAuthKey';
$wgGLAppId = 'anotherAnotherGoogleOAuthKey';

$wgAuthManagerConfig = [
    'primaryauth' => [
        GoogleLogin\Auth\GooglePrimaryAuthenticationProvider::class => [
            'class' => GoogleLogin\Auth\GooglePrimaryAuthenticationProvider::class,
            'sort' => 0
        ]
    ],
    'preauth' => [],
    'secondaryauth' => []
];

$wgInvalidUsernameCharacters = ':~';
$wgUserrightsInterwikiDelimiter = '~';
$wgGroupPermissions['*']['autocreateaccount'] = true;
$wgGroupPermissions['*']['edit'] = false;

$wgGroupPermissions['user']['edit'] = false;
$wgGroupPermissions['Acad_admin']['edit'] = false;
$wgGroupPermissions['sysop']['edit'] = true;
$wgGroupPermissions['administrator']['edit'] = true;
$wgGLAllowedDomains = ['iitpkd.ac.in'];
// $wgLogos = [ 'icon' => '/IITPkd_Master_Lockup_colour_RGB.png'] ;
$wgTimelessLogo = '/IITPkd_Master_Lockup_colour_RGB copy.png';
$wgLogos = [
    '1x' => "/IITPkd_Master_Lockup_colour_RGB.png",       // path to 1x version
    '1.5x' => "/IITPkd_Master_Lockup_colour_RGB.png",   // path to 1.5x version
    '2x' => "/IITPkd_Master_Lockup_colour_RGB.png",       // path to 2x version
    'svg' => "/IITPkd_Master_Lockup_colour_RGB.png",     // path to svg version
    'icon' => "/IITPkd_Master_Lockup_colour_RGB.png",           // A version of the logo without wordmark and tagline
    'wordmark' => [
        'src' => "/IITPkd_Master_Lockup_colour_RGB copy.png",    // path to wordmark version
        'width' => 135,
        'height' => 20,
    ],
    'tagline' => [
        'src' => "/IITPkd_Master_Lockup_colour_RGB.png",     // path to tagline version
        'width' => 135,
        'height' => 15,
    ],
];
$wgHooks['BaseTemplateToolbox'][] = 'modifyToolbox';

function modifyToolbox( BaseTemplate $baseTemplate, array &$toolbox ) {

	static $keywords = array( 'WHATLINKSHERE', 'RECENTCHANGESLINKED', 'FEEDS', 'CONTRIBUTIONS', 'LOG', 'BLOCKIP', 'EMAILUSER', 'USERRIGHTS', 'UPLOAD', 'SPECIALPAGES', 'PRINT', 'PERMALINK', 'INFO' );

	$modifiedToolbox = array();

	// Walk in the MediaWiki:Sidebar message, section toolbox
	foreach ( $baseTemplate->data['sidebar']['TOOLBOX'] as $value ) {
		$specialLink = false;

		// Search if the keyword exists
		foreach ( $keywords as $key ) {
			if ( $value['href'] == Title::newFromText($key)->fixSpecialName()->getLinkURL() ) {
				$specialLink = true;

				// This is a keyword, hence add this special link
				if ( array_key_exists( strtolower($key), $toolbox ) ) {
					$modifiedToolbox[strtolower($key)] = $toolbox[strtolower($key)];
					break;
				}
			}
		}

		// This is a normal link
		if ( !$specialLink ) {
			$modifiedToolbox[] = $value;
		}
	}

	$toolbox = $modifiedToolbox;

	return true;
}


wfLoadExtension( 'JsCalendar' );
$wgExtraNamespaces = array(
    100 => "Event",
    101 => "Event_talk",
);
$wgNamespacesToBeSearchedDefault = array(
    NS_MAIN => true,
    100     => true,
);
$wgECMaxCacheTime = 60*60*24;
wfLoadExtension( 'SemanticResultFormats' );
wfLoadExtension( 'YouTube' );

wfLoadExtension( 'PageForms' );

$wgGroupPermissions['*']['viewedittab'] = false;
$wgGroupPermissions['sysop']['viewedittab'] = true;

$wgGroupPermissions['*']['multipageedit'] = false;
$wgGroupPermissions['sysop']['multipageedit'] = true;
$wgGroupPermissions['*']['createclass'] = false;
$wgGroupPermissions['sysop']['createclass'] = true;



