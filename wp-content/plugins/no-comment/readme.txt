=== No Comment ===

Contributors: oiler
Tags: comments, moderation, email notification
Requires at least: 2.0
Tested up to: 3.2.1
Stable tag: 0.1
	
No Comment is a simple way to remove email notification for just one person out of your list of blog administrators.

== Description ==

If you have a large number of blog administrators - or at least more than one - WordPress doesn't allow each user to manage whether or not they wish to receive email notification of comments in moderation.

So all this plugin does is take the function that is written to send out those notifications, and filter out the blog's main administrator email address before sending.

If you want to add a different email to the filter, it's not that hard but it's not yet written in natively.

Why would you ever use this? I wrote this for the NY Times Regional Media group because we have what seems like thousands of blogs and we're the admin for each and every one. There are admins at the newspapers that do need the notifications, however, so I wrote this in order to stop the flow of emails (appx 300 per day!) coming to just our admin address.

== Installation ==

1. Unzip the downloaded No Comment zip file
2. Upload the `no-comment` folder and its contents into the `wp-content/plugins/` directory of your WordPress installation
3. Activate No Comment from Plugins page

= Configure =

If you want to filter out an email address other than the main blog admin, ie. get_bloginfo('admin_email'), then you'll need to create it on your own.

== Frequently Asked Questions ==

None yet.

== Screenshots ==

None yet.

== Changelog ==

= 0.1 =
* Initial release
