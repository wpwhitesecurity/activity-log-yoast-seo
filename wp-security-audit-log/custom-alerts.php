<?php
// phpcs:ignoreFile
/**
 * File is ignored by PHPCS as it falsly flags a get_text error.
 */

$custom_alerts = array(
	__( 'Yoast SEO', 'activity-log-wp-seo' ) => array(
		__( 'Post Changes', 'activity-log-wp-seo' )            => array(
			array( 8801, WSAL_INFORMATIONAL, __( 'User changed title of a post', 'activity-log-wp-seo' ), __( 'The <strong>SEO title</strong> of the post %PostTitle% %LineBreak% Post ID: %PostID% %LineBreak% Post type: %PostType% %LineBreak% Post status: %PostStatus% %LineBreak% Previous title: %OldSEOTitle% %LineBreak% New title: %NewSEOTitle% %LineBreak% %EditorLinkPost%', 'activity-log-wp-seo' ), 'yoast-seo-metabox', 'modified' ),
			array( 8802, WSAL_INFORMATIONAL, __( 'User changed the meta description of a post', 'activity-log-wp-seo' ), __( 'The <strong>Meta description</strong> of the post %PostTitle% %LineBreak% Post ID: %PostID% %LineBreak% Post type: %PostType% %LineBreak% Post status: %PostStatus% %LineBreak% Previous description: %old_desc% %LineBreak% New description: %new_desc% %LineBreak% %EditorLinkPost%', 'activity-log-wp-seo' ), 'yoast-seo-metabox', 'modified' ),
			array( 8803, WSAL_INFORMATIONAL, __( 'User changed setting to allow search engines to show post in search results of a post', 'activity-log-wp-seo' ), __( 'The setting <strong>Allow seach engines to show post in search results</strong> for the post %PostTitle% %LineBreak% Post ID: %PostID% %LineBreak% Post type: %PostType% %LineBreak% Post status: %PostStatus% %LineBreak% Previous setting: %OldStatus% %LineBreak% New setting: %NewStatus% %LineBreak% %EditorLinkPost%', 'activity-log-wp-seo' ), 'yoast-seo-metabox', 'modified' ),
			array( 8804, WSAL_INFORMATIONAL, __( 'User Enabled/Disabled the option for search engine to follow links of a post', 'activity-log-wp-seo' ), __( 'The setting for <strong>Search engines to follow links in post</strong> %PostTitle% %LineBreak% Post ID: %PostID% %LineBreak% Post type: %PostType% %LineBreak% Post status: %PostStatus% %LineBreak% %EditorLinkPost%', 'activity-log-wp-seo' ), 'yoast-seo-metabox', 'enabled' ),
			array( 8805, WSAL_LOW, __( 'User set the Meta robots advanced setting of a post', 'activity-log-wp-seo' ), __( 'The <strong>Meta robots advanced</strong> setting for the post %PostTitle% %LineBreak% Post ID: %PostID% %LineBreak% Post type: %PostType% %LineBreak% Post status: %PostStatus% %LineBreak% Previous setting: %OldStatus% %LineBreak% New setting: %NewStatus% %LineBreak% %EditorLinkPost%', 'activity-log-wp-seo' ), 'yoast-seo-metabox', 'modified' ),
			array( 8806, WSAL_INFORMATIONAL, __( 'User changed the canonical URL of a post', 'activity-log-wp-seo' ), __( 'The <strong>Canonical URL</strong> of the post %PostTitle% %LineBreak% Post ID: %PostID% %LineBreak% Post type: %PostType% %LineBreak% Post status: %PostStatus% %LineBreak% Previous URL: %OldCanonicalUrl% %LineBreak% New URL: %NewCanonicalUrl% %LineBreak% %EditorLinkPost%', 'activity-log-wp-seo' ), 'yoast-seo-metabox', 'modified' ),
			array( 8807, WSAL_INFORMATIONAL, __( 'User changed the focus keyword of a post', 'activity-log-wp-seo' ), __( 'The <strong>focus keyword</strong> for the post %PostTitle% %LineBreak% Post ID: %PostID% %LineBreak% Post type: %PostType% %LineBreak% Post status: %PostStatus% %LineBreak% Previous keyword: %old_keywords% %LineBreak% New keyword: %new_keywords% %LineBreak% %EditorLinkPost%', 'activity-log-wp-seo' ), 'yoast-seo-metabox', 'modified' ),
			array( 8808, WSAL_INFORMATIONAL, __( 'User Enabled/Disabled the option Cornerston Content of a post', 'activity-log-wp-seo' ), __( 'The setting <strong>Cornerstone content</strong> in the post %PostTitle% %LineBreak% Post ID: %PostID% %LineBreak% Post type: %PostType% %LineBreak% Post status: %PostStatus% %LineBreak% %EditorLinkPost%', 'activity-log-wp-seo' ), 'yoast-seo-metabox', 'enabled' ),
		),

		__( 'Website Changes', 'activity-log-wp-seo' )         => array(
			array( 8809, WSAL_INFORMATIONAL, __( 'User changed the Title Separator', 'activity-log-wp-seo' ), __( 'Changed the <strong>Title separator</strong> in the plugin settings %LineBreak% Previous separator: %old% %LineBreak% New separator: %new%', 'activity-log-wp-seo' ), 'yoast-seo', 'modified' ),
			// 8810/8811 Are obsolete but remain for backwards compatibilty.
			array( 8810, WSAL_MEDIUM, __( 'User changed the Homepage Title', 'activity-log-wp-seo' ), __( 'Changed the homepage Meta title %LineBreak% Previous title: %old% %LineBreak% New title: %new%', 'activity-log-wp-seo' ), 'yoast-seo', 'modified' ),
			array( 8811, WSAL_MEDIUM, __( 'User changed the Homepage Meta description', 'activity-log-wp-seo' ), __( 'Changed the homepage Meta description %LineBreak% Previous description: %old% %LineBreak% New description: %new%', 'activity-log-wp-seo' ), 'yoast-seo', 'modified' ),
			array( 8812, WSAL_INFORMATIONAL, __( 'User changed the Knowledge Graph & Schema.org', 'activity-log-wp-seo' ), __( 'Changed the <strong>Knowledge Graph & Schema.org</strong> in the plugin settings %LineBreak% Previous setting: %old% %LineBreak% New setting: %new%', 'activity-log-wp-seo' ), 'yoast-seo', 'modified' ),
		),

		__( 'Plugin Settings Changes', 'activity-log-wp-seo' ) => array(
			array( 8815, WSAL_MEDIUM, __( 'User Enabled/Disabled SEO analysis in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'The <strong>SEO Analysis</strong> feature', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			array( 8816, WSAL_MEDIUM, __( 'User Enabled/Disabled readability analysis in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'The <strong>Readability Analysis</strong> feature', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			array( 8817, WSAL_MEDIUM, __( 'User Enabled/Disabled cornerstone content in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'The <strong>Cornerstone content</strong> feature', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			array( 8818, WSAL_MEDIUM, __( 'User Enabled/Disabled the text link counter in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'The <strong>Text link counter</strong> feature', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			array( 8819, WSAL_MEDIUM, __( 'User Enabled/Disabled XML sitemaps in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'The <strong>XML sitemap</strong> feature', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			array( 8820, WSAL_MEDIUM, __( 'User Enabled/Disabled ryte integration in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'The <strong>Ryte integration</strong> feature', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			array( 8821, WSAL_MEDIUM, __( 'User Enabled/Disabled the admin bar menu in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'The <strong>Admin bar menu</strong> feature', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			array( 8822, WSAL_INFORMATIONAL, __( 'User changed the Posts/Pages meta description template in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'Changed the %SEOPostType% Meta description template %LineBreak% Previous template: %old% %LineBreak% New template: %new%', 'activity-log-wp-seo' ), 'yoast-seo', 'modified' ),
			array( 8824, WSAL_LOW, __( 'User set the option to show the Yoast SEO Meta Box for Posts/Pages in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'The option to show the <strong>Yoast SEO Meta Box</strong> for %SEOPostType%', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			array( 8825, WSAL_LOW, __( 'User Enabled/Disabled the advanced or schema settings for authors in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'The setting <strong>Security: advanced or schema settings for authors</strong> in the plugin.', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			array( 8826, WSAL_LOW, __( 'User Enabled/Disabled redirecting attachment URLs in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'The setting <strong>Redirect attachment URLs</strong> in the <strong>Media</strong> search appearance settings', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),

			array( 8827, WSAL_MEDIUM, __( 'User Enabled/Disabled Usage tracking in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( '<strong>Usage tracking</strong> in the plugin settings', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			array( 8828, WSAL_MEDIUM, __( 'User Enabled/Disabled REST API: Head endpoint in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'The <strong>REST API: Head endpoint</strong> in the plugin settings', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			array( 8829, WSAL_LOW, __( 'User Added/Removed a social profile in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'The %social_profile% URL %LineBreak% Old URL: %old_url% %LineBreak% New URL: %new_url%', 'activity-log-wp-seo' ), 'yoast-seo', 'added' ),

			array( 8813, WSAL_MEDIUM, __( 'User Enabled/Disabled the option Show Posts/Pages in Search Results in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'The content type setting to show %SEOPostType% in search results', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			array( 8814, WSAL_INFORMATIONAL, __( 'User changed the Posts/Pages title template in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'The %SEOPostType% SEO title template in the plugin settings %LineBreak% Previous template: %old% %LineBreak% New template: %new%', 'activity-log-wp-seo' ), 'yoast-seo', 'modified' ),

			array( 8830, WSAL_MEDIUM, __( 'User Enabled/Disabled the taxonomies to show in search results setting in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'The taxonomies setting to show %SEOPostType% in search results', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			array( 8831, WSAL_LOW, __( 'User Modified the SEO title template for a taxonomy in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'Changed the SEO title template for the taxonomy %SEOPostType% %LineBreak% Previous title: %old% New %LineBreak% title: %new%', 'activity-log-wp-seo' ), 'yoast-seo', 'modified' ),
			array( 8832, WSAL_LOW, __( 'User Modified the Meta description template for a taxonomy in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'Changed the Meta description template for the taxonomy %SEOPostType% %LineBreak% Previous description: %old% %LineBreak% New description: %new%', 'activity-log-wp-seo' ), 'yoast-seo', 'modified' ),
			array( 8833, WSAL_MEDIUM, __( 'User Enabled/Disabled Author or Data archives in Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'The <strong>%archive_type%</strong> archives', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			array( 8834, WSAL_MEDIUM, __( 'User Enabled/Disabled showing Author or Date archives in search results in Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'The setting to show the <strong>%archive_type%</strong> archives in the search results', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			array( 8835, WSAL_LOW, __( 'User Modified the SEO title template for Author or Date archives in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'Changed the SEO title template for the <strong>%archive_type%</strong> archives %LineBreak% Previous title: %old% %LineBreak% New title: %new%', 'activity-log-wp-seo' ), 'yoast-seo', 'modified' ),
			array( 8836, WSAL_LOW, __( 'User Modified the SEO Meta description for Author or Date archives in the Yoast SEO plugin settings', 'activity-log-wp-seo' ), __( 'Changed the Meta description template for the <strong>%archive_type%</strong> archives %LineBreak% Previous description: %old% %LineBreak% New description: %new%', 'activity-log-wp-seo' ), 'yoast-seo', 'modified' ),
			array( 8837, WSAL_LOW, __( 'User Enabled/Disabled the SEO meta box for a taxonomy', 'activity-log-wp-seo' ), __( 'The setting to show SEO settings for the %SEOPostType% taxonomy', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			//Multisite
			array( 8838, WSAL_HIGH, __( 'User changed who should have access to the setting on Network Level', 'activity-log-wp-seo' ), __( 'The setting to access level has changed from %old% to %new%', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			array( 8839, WSAL_LOW, __( 'New sites inherit their SEO options from site changed', 'activity-log-wp-seo' ), __( 'The setting for SEO options inheritance has changed from %old% to %new%', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
			array( 8840, WSAL_MEDIUM, __( "Reset the site's SEO settings to default", 'activity-log-wp-seo' ), __( 'Site ID: %old%', 'activity-log-wp-seo' ), 'yoast-seo', 'enabled' ),
		),
	),
);
