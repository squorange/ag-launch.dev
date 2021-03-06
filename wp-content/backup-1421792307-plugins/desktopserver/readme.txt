=== DesktopServer for WordPress ===
Contributors: steveorevo
Tags: localhost, isp, hosting
Requires at least: 3.0
Tested up to: 3.5.1
Stable tag: 1.4.0
License: GPLv2 or later

DesktopServer for WordPress

== Description ==

DesktopServer for WordPress eases localhost to live server deployment by publishing hosting provider server details via a protected XML-RPC feed to an authorized administrator only. It also provides assisted deployments to hosting providers that support file system direct.

== Installation ==

Upload the DesktopServer for WordPress plugin and activate it. Then using DesktopServer's export feature, select Export, followed by the "Fetch live hosting server details" checkbox. For more information, please visit http://serverpress.com/.

== Changelog ==

= 1.4.0 =
* Updated support for GoDaddy's non-standard, ever changing, SUBDOMIN_DOCUMENT_ROOT definition for addon domains.

= 1.3.0 =
* Added support for GoDaddy's REAL_DOCUMENT_ROOT, supports subdomain and addon domains

= 1.2.0 =
* Added temporary session details for processing database thread in chunks.
* Added expanded memory and timeout overrides for limited hosts.

= 1.1.2 =
* Enforce correct file and folder permissions

= 1.1.1 =
* Add fix for deployment from/to Windows based systems

= 1.1.0 =
* Allow only users with core update capability only
* Added deployment functionality
* Re-coded into OPP

= 1.0.0 =
* Initial release
