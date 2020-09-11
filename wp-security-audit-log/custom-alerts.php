<?php
// phpcs:ignoreFile
/**
 * File is ignored by PHPCS as it falsly flags a get_text error.
 */

$custom_alerts = array(
	__( 'Yoast SEO', 'wsal-yoast' ) => array(
		__( 'Post Changes', 'wsal-yoast' )            => array(
			array( 8801, WSAL_INFORMATIONAL, __( 'User changed title of a post', 'wsal-yoast' ), __( 'Changed the Meta title of the post %PostTitle% %LineBreak% ID: %PostID% %LineBreak% Type: %PostType% %LineBreak% Status: %PostStatus% %LineBreak% Previous title: %OldSEOTitle% %LineBreak% New title: %NewSEOTitle% %LineBreak% %EditorLinkPost%', 'wsal-yoast' ), 'yoast-seo-metabox', 'modified' ),
			array( 8802, WSAL_INFORMATIONAL, __( 'User changed the meta description of a post', 'wsal-yoast' ), __( 'Changed the Meta Description of the post %PostTitle% %LineBreak% ID: %PostID% %LineBreak% Type: %PostType% %LineBreak% Status: %PostStatus% %LineBreak% Previous description: %1$old_desc% %LineBreak% New description: %new_desc% %LineBreak% %2$EditorLinkPost%', 'wsal-yoast' ), 'yoast-seo-metabox', 'modified' ),
			array( 8803, WSAL_INFORMATIONAL, __( 'User changed setting to allow search engines to show post in search results of a post', 'wsal-yoast' ), __( 'Changed the setting to allow search engines to show post in search results for the post %PostTitle% %LineBreak% ID: %PostID% %LineBreak% Type: %PostType% %LineBreak% Status: %PostStatus% %LineBreak% Previous setting: %OldStatus% %LineBreak% New setting: %NewStatus% %LineBreak% %EditorLinkPost%', 'wsal-yoast' ), 'yoast-seo-metabox', 'modified' ),
			array( 8804, WSAL_INFORMATIONAL, __( 'User Enabled/Disabled the option for search engine to follow links of a post', 'wsal-yoast' ), __( 'The option for search engine to follow links in post %PostTitle% %LineBreak% ID: %PostID% %LineBreak% Type: %PostType% %LineBreak% Status: %PostStatus% %LineBreak% %EditorLinkPost%', 'wsal-yoast' ), 'yoast-seo-metabox', 'enabled' ),
			array( 8805, WSAL_LOW, __( 'User set the Meta robots advanced setting of a post', 'wsal-yoast' ), __( 'Changed the <b>Meta robots advanced</b> setting for the post %PostTitle% %LineBreak% ID: %PostID% %LineBreak% Type: %PostType% %LineBreak% Status: %PostStatus% %LineBreak% Previous setting: %OldStatus% %LineBreak% New setting: %NewStatus% %LineBreak% %EditorLinkPost%', 'wsal-yoast' ), 'yoast-seo-metabox', 'modified' ),
			array( 8806, WSAL_INFORMATIONAL, __( 'User changed the canonical URL of a post', 'wsal-yoast' ), __( 'Changed the Canonical URL of the post %PostTitle% %LineBreak% ID: %PostID% %LineBreak% Type: %PostType% %LineBreak% Status: %PostStatus% %LineBreak% Previous URL: %OldCanonicalUrl% %LineBreak% New URL: %NewCanonicalUrl% %LineBreak% %EditorLinkPost%', 'wsal-yoast' ), 'yoast-seo-metabox', 'modified' ),
			array( 8807, WSAL_INFORMATIONAL, __( 'User changed the focus keyword of a post', 'wsal-yoast' ), __( 'Changed the focus keyword for the post %PostTitle% %LineBreak% ID: %PostID% %LineBreak% Type: %PostType% %LineBreak% Status: %PostStatus% %LineBreak% Previous keyword: %1$old_keywords% %LineBreak% New keyword: %new_keywords% %LineBreak% %2$EditorLinkPost%', 'wsal-yoast' ), 'yoast-seo-metabox', 'modified' ),
			array( 8808, WSAL_INFORMATIONAL, __( 'User Enabled/Disabled the option Cornerston Content of a post', 'wsal-yoast' ), __( 'The option Cornerstone Content in the post %PostTitle% %LineBreak% ID: %PostID% %LineBreak% Type: %PostType% %LineBreak% Status: %PostStatus% %LineBreak% %EditorLinkPost%', 'wsal-yoast' ), 'yoast-seo-metabox', 'enabled' ),
		),

		__( 'Website Changes', 'wsal-yoast' )         => array(
			array( 8809, WSAL_INFORMATIONAL, __( 'User changed the Title Separator', 'wsal-yoast' ), __( 'Changed the default title separator %LineBreak% Previous separator: %old% %LineBreak% New separator: %new%', 'wsal-yoast' ), 'yoast-seo', 'modified' ),
			array( 8810, WSAL_MEDIUM, __( 'User changed the Homepage Title', 'wsal-yoast' ), __( 'Changed the homepage Meta title %LineBreak% Previous title: %old% %LineBreak% New title: %new%', 'wsal-yoast' ), 'yoast-seo', 'modified' ),
			array( 8811, WSAL_MEDIUM, __( 'User changed the Homepage Meta description', 'wsal-yoast' ), __( 'Changed the homepage Meta description %LineBreak% Previous description: %old% %LineBreak% New description: %new%', 'wsal-yoast' ), 'yoast-seo', 'modified' ),
			array( 8812, WSAL_INFORMATIONAL, __( 'User changed the Knowledge Graph & Schema.org', 'wsal-yoast' ), __( 'Changed the <b>Knowledge Graph & Schema.org</b> setting %LineBreak% Previous setting: %old% %LineBreak% New setting: %new%', 'wsal-yoast' ), 'yoast-seo', 'modified' ),
		),

		__( 'Plugin Settings Changes', 'wsal-yoast' ) => array(
			array( 8815, WSAL_MEDIUM, __( 'User Enabled/Disabled SEO analysis in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'The <b>SEO Analysis</b> feature', 'wsal-yoast' ), 'yoast-seo', 'enabled' ),
			array( 8816, WSAL_MEDIUM, __( 'User Enabled/Disabled readability analysis in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'The <b>Readability Analysis</b> feature', 'wsal-yoast' ), 'yoast-seo', 'enabled' ),
			array( 8817, WSAL_MEDIUM, __( 'User Enabled/Disabled cornerstone content in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'The <b>Cornerstone content</b> feature', 'wsal-yoast' ), 'yoast-seo', 'enabled' ),
			array( 8818, WSAL_MEDIUM, __( 'User Enabled/Disabled the text link counter in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'The <b>Text link counter</b> feature', 'wsal-yoast' ), 'yoast-seo', 'enabled' ),
			array( 8819, WSAL_MEDIUM, __( 'User Enabled/Disabled XML sitemaps in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'The <b>XML sitemap</b> feature', 'wsal-yoast' ), 'yoast-seo', 'enabled' ),
			array( 8820, WSAL_MEDIUM, __( 'User Enabled/Disabled ryte integration in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'The <b>Ryte integration</b> feature', 'wsal-yoast' ), 'yoast-seo', 'enabled' ),
			array( 8821, WSAL_MEDIUM, __( 'User Enabled/Disabled the admin bar menu in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'The <b>Admin bar menu</b> feature', 'wsal-yoast' ), 'yoast-seo', 'enabled' ),
			array( 8822, WSAL_INFORMATIONAL, __( 'User changed the Posts/Pages meta description template in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'Changed the %SEOPostType% Meta description template %LineBreak% Previous template: %old% New template: %new%', 'wsal-yoast' ), 'yoast-seo', 'modified' ),
			array( 8824, WSAL_LOW, __( 'User set the option to show the Yoast SEO Meta Box for Posts/Pages in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'The option to show the <b>Yoast SEO Meta Box</b> for <b>%SEOPostType%</b>', 'wsal-yoast' ), 'yoast-seo', 'enabled' ),
			array( 8825, WSAL_LOW, __( 'User Enabled/Disabled the advanced or schema settings for authors in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'The setting <b>Security: advanced or schema settings for authors</b> in the plugin.', 'wsal-yoast' ), 'yoast-seo', 'enabled' ),
			array( 8826, WSAL_LOW, __( 'User Enabled/Disabled redirecting attachment URLs in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'The setting <b>Redirect attachment URLs</b> in the <b>Media</b> search appearance settings', 'wsal-yoast' ), 'yoast-seo', 'enabled' ),

			array( 8827, WSAL_MEDIUM, __( 'User Enabled/Disabled Usage tracking in the Yoast SEO plugin settings', 'wsal-yoast' ), __( '<b>Usage tracking</b> in the plugin settings', 'wsal-yoast' ), 'yoast-seo', 'enabled' ),
			array( 8828, WSAL_MEDIUM, __( 'User Enabled/Disabled REST API: Head endpoint in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'The <b>REST API: Head endpoint</b> in the plugin settings', 'wsal-yoast' ), 'yoast-seo', 'enabled' ),
			array( 8829, WSAL_LOW, __( 'User Added/Removed a social profile in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'The %social_profile% URL %LineBreak% Old URL: %old_url% %LineBreak% New URL: %new_url%', 'wsal-yoast' ), 'yoast-seo', 'added' ),

			array( 8813, WSAL_MEDIUM, __( 'User Enabled/Disabled the option Show Posts/Pages in Search Results in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'The option to show %SEOPostType% in search results', 'wsal-yoast' ), 'yoast-seo', 'enabled' ),
			array( 8814, WSAL_INFORMATIONAL, __( 'User changed the Posts/Pages title template in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'Changed the %SEOPostType% Meta (SEO) title template %LineBreak% Previous template: %old% %LineBreak% New template: %new%', 'wsal-yoast' ), 'yoast-seo', 'modified' ),
			array( 8830, WSAL_MEDIUM, __( 'User Enabled/Disabled the taxonomies to show in search results setting in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'The taxonomies setting to show %SEOPostType% in search results', 'wsal-yoast' ), 'yoast-seo', 'enabled' ),
			array( 8831, WSAL_LOW, __( 'User Modified the SEO title template for a taxonomy in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'Changed the SEO title template for the taxonomy %SEOPostType% %LineBreak% Previous title: %old% New %LineBreak% title: %new%', 'wsal-yoast' ), 'yoast-seo', 'modified' ),
			array( 8832, WSAL_LOW, __( 'User Modified the Meta description template for a taxonomy in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'Changed the Meta description template for the taxonomy %SEOPostType% %LineBreak% Previous description: %old% %LineBreak% New description: %new%', 'wsal-yoast' ), 'yoast-seo', 'modified' ),
			array( 8833, WSAL_MEDIUM, __( 'User Enabled/Disabled Author or Data archives in Yoast SEO plugin settings', 'wsal-yoast' ), __( 'The <b>%archive_type%</b> archives', 'wsal-yoast' ), 'yoast-seo', 'enabled' ),
			array( 8834, WSAL_MEDIUM, __( 'User Enabled/Disabled showing Author or Date archives in search results in Yoast SEO plugin settings', 'wsal-yoast' ), __( 'The setting to show the <b>%archive_type%</b> archives in the search results', 'wsal-yoast' ), 'yoast-seo', 'enabled' ),
			array( 8835, WSAL_LOW, __( 'User Modified the SEO title template for Author or Date archives in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'Changed the SEO title template for the <b>%archive_type%</b> archives %LineBreak% Previous title: %old% %LineBreak% New title: %new%', 'wsal-yoast' ), 'yoast-seo', 'modified' ),
			array( 8836, WSAL_LOW, __( 'User Modified the SEO Meta description for Author or Date archives in the Yoast SEO plugin settings', 'wsal-yoast' ), __( 'Changed the Meta description template for the <b>%archive_type%</b> archives %LineBreak% Previous description: %old% %LineBreak% New description: %new%', 'wsal-yoast' ), 'yoast-seo', 'modified' ),
			array( 8837, WSAL_LOW, __( 'User Enabled/Disabled the SEO meta box for a taxonomy', 'wsal-yoast' ), __( 'The setting to show SEO settings for the %SEOPostType% taxonomy', 'wsal-yoast' ), 'yoast-seo', 'enabled' ),
		),
	),
);
