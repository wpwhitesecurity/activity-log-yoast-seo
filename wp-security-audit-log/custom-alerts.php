<?php
// phpcs:ignoreFile
/**
 * File is ignored by PHPCS as it falsly flags a get_text error.
 */

$custom_alerts = [
    __( 'Yoast SEO', 'activity-log-wp-seo' ) => [
        __( 'Post Changes', 'activity-log-wp-seo' )    => [
            [
                8801,
                WSAL_INFORMATIONAL,
                __( 'User changed title of a post', 'activity-log-wp-seo' ),
                __( 'The <strong>SEO title</strong> of the post %PostTitle%', 'activity-log-wp-seo' ),
                [
                    __( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
                    __( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
                    __( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
                    __( 'Previous title', 'activity-log-wp-seo' ) => '%OldSEOTitle%',
                    __( 'New title', 'activity-log-wp-seo' ) => '%NewSEOTitle%',
                ],
                [
                    __( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%'
                ],
                'yoast-seo-metabox',
                'modified',
            ],
            [
                8802,
                WSAL_INFORMATIONAL,
                __( 'User changed the meta description of a post', 'activity-log-wp-seo' ),
                __( 'The <strong>Meta description</strong> of the post %PostTitle%', 'activity-log-wp-seo' ),
                [
                    __( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
                    __( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
                    __( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
                    __( 'Previous description', 'activity-log-wp-seo' ) => '%old_desc%',
                    __( 'New description', 'activity-log-wp-seo' ) => '%new_desc%',
                ],
                [
                    __( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%'
                ],
                'yoast-seo-metabox',
                'modified',
            ],
            [
                8803,
                WSAL_INFORMATIONAL,
                __( 'User changed setting to allow search engines to show post in search results of a post', 'activity-log-wp-seo' ),
                __( 'The setting <strong>Allow seach engines to show post in search results</strong> for the post %PostTitle%', 'activity-log-wp-seo' ),
                [
                    __( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
                    __( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
                    __( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
                    __( 'Previous setting', 'activity-log-wp-seo' ) => '%OldStatus%',
                    __( 'New setting', 'activity-log-wp-seo' ) => '%NewStatus%',
                ],
                [
                    __( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%'
                ],
                'yoast-seo-metabox',
                'modified',
            ],
            [
                8804,
                WSAL_INFORMATIONAL,
                __( 'User Enabled/Disabled the option for search engine to follow links of a post', 'activity-log-wp-seo' ),
                __( 'The setting for <strong>Search engines to follow links in post</strong> %PostTitle%', 'activity-log-wp-seo' ),
                [
                    __( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
                    __( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
                    __( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
                ],
                [
                    __( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%'
                ],
                'yoast-seo-metabox',
                'enabled',
            ],
            [
                8805,
                WSAL_LOW,
                __( 'User set the Meta robots advanced setting of a post', 'activity-log-wp-seo' ),
                __( 'The <strong>Meta robots advanced</strong> setting for the post %PostTitle%', 'activity-log-wp-seo' ),
                [
                    __( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
                    __( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
                    __( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
                    __( 'Previous setting', 'activity-log-wp-seo' ) => '%OldStatus%',
                    __( 'New setting', 'activity-log-wp-seo' ) => '%NewStatus%',
                ],
                [
                    __( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%'
                ],
                'yoast-seo-metabox',
                'modified',
            ],
            [
                8806,
                WSAL_INFORMATIONAL,
                __( 'User changed the canonical URL of a post', 'activity-log-wp-seo' ),
                __( 'The <strong>Canonical URL</strong> of the post %PostTitle%', 'activity-log-wp-seo' ),
                [
                    __( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
                    __( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
                    __( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
                    __( 'Previous URL', 'activity-log-wp-seo' ) => '%OldCanonicalUrl%',
                    __( 'New URL', 'activity-log-wp-seo' ) => '%NewCanonicalUrl%',
                ],
                [
					__( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%'
                ],
                'yoast-seo-metabox',
                'modified',
            ],
            [
                8807,
                WSAL_INFORMATIONAL,
                __( 'User changed the focus keyword of a post', 'activity-log-wp-seo' ),
                __( 'The <strong>focus keyword</strong> for the post %PostTitle%', 'activity-log-wp-seo' ),
                [
                    __( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
                    __( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
                    __( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
                    __( 'Previous keyword', 'activity-log-wp-seo' ) => '%old_keywords%',
                    __( 'New keyword', 'activity-log-wp-seo' ) => '%new_keywords%',
                ],
                [
                    __( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%'
                ],
                'yoast-seo-metabox',
                'modified',
            ],
            [
                8808,
                WSAL_INFORMATIONAL,
                __( 'User Enabled/Disabled the option Cornerston Content of a post', 'activity-log-wp-seo' ),
                __( 'The setting <strong>Cornerstone content</strong> in the post %PostTitle%', 'activity-log-wp-seo' ),
                [
                    __( 'Post ID', 'activity-log-wp-seo' ) => '%PostID%',
                    __( 'Post type', 'activity-log-wp-seo' ) => '%PostType%',
                    __( 'Post status', 'activity-log-wp-seo' ) => '%PostStatus%',
                ],
                [
                    __( 'View the post in editor', 'wp-security-audit-log' ) => '%EditorLinkPost%'
                ],
                'yoast-seo-metabox',
                'enabled',
            ],
        ],

        __( 'Website Changes', 'activity-log-wp-seo' ) => [
            [
                8809,
                WSAL_INFORMATIONAL,
                __( 'User changed the Title Separator', 'activity-log-wp-seo' ),
                __( 'Changed the <strong>Title separator</strong> in the plugin settings', 'activity-log-wp-seo' ),
                [
                    __( 'Previous separator', 'activity-log-wp-seo' ) => '%old%',
                    __( 'New separator', 'activity-log-wp-seo' ) => '%new%',
                ],
                [],
                'yoast-seo',
                'modified',
            ],
            // 8810/8811 Are obsolete but remain for backwards compatibilty.
            [
                8810,
                WSAL_MEDIUM,
                __( 'User changed the Homepage Title', 'activity-log-wp-seo' ),
                __( 'Changed the homepage Meta title', 'activity-log-wp-seo' ),
                [
                    __( 'Previous title', 'activity-log-wp-seo' ) => '%old%',
                    __( 'New title', 'activity-log-wp-seo' ) => '%new%',
                ],
                [],
                'yoast-seo',
                'modified',
            ],
            [
                8811,
                WSAL_MEDIUM,
                __( 'User changed the Homepage Meta description', 'activity-log-wp-seo' ),
                __( 'Changed the homepage Meta description', 'activity-log-wp-seo' ),
                [
                    __( 'Previous description', 'activity-log-wp-seo' ) => '%old%',
                    __( 'New description', 'activity-log-wp-seo' ) => '%new%',
                ],
                [],
                'yoast-seo',
                'modified',
            ],
            [
                8812,
                WSAL_INFORMATIONAL,
                __( 'User changed the Knowledge Graph & Schema.org', 'activity-log-wp-seo' ),
                __( 'Changed the <strong>Knowledge Graph & Schema.org</strong> in the plugin settings', 'activity-log-wp-seo' ),
                [
                    __( 'Previous setting', 'activity-log-wp-seo' ) => '%old%',
                    __( 'New setting', 'activity-log-wp-seo' ) => '%new%',
                ],
                [],
                'yoast-seo',
                'modified',
            ],
        ],

        __( 'Plugin Settings Changes', 'activity-log-wp-seo' ) => [
            [
                8815,
                WSAL_MEDIUM,
                __( 'User Enabled/Disabled SEO analysis in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'The <strong>SEO Analysis</strong> feature', 'activity-log-wp-seo' ),
                [],
                [],
                'yoast-seo',
                'enabled',
            ],
            [
                8816,
                WSAL_MEDIUM,
                __( 'User Enabled/Disabled readability analysis in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'The <strong>Readability Analysis</strong> feature', 'activity-log-wp-seo' ),
                [],
                [],
                'yoast-seo',
                'enabled',
            ],
            [
                8817,
                WSAL_MEDIUM,
                __( 'User Enabled/Disabled cornerstone content in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'The <strong>Cornerstone content</strong> feature', 'activity-log-wp-seo' ),
                [],
                [],
                'yoast-seo',
                'enabled',
            ],
            [
                8818,
                WSAL_MEDIUM,
                __( 'User Enabled/Disabled the text link counter in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'The <strong>Text link counter</strong> feature', 'activity-log-wp-seo' ),
                [],
                [],
                'yoast-seo',
                'enabled',
            ],
            [
                8819,
                WSAL_MEDIUM,
                __( 'User Enabled/Disabled XML sitemaps in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'The <strong>XML sitemap</strong> feature', 'activity-log-wp-seo' ),
                [],
                [],
                'yoast-seo',
                'enabled',
            ],
            [
                8820,
                WSAL_MEDIUM,
                __( 'User Enabled/Disabled ryte integration in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'The <strong>Ryte integration</strong> feature', 'activity-log-wp-seo' ),
                [],
                [],
                'yoast-seo',
                'enabled',
            ],
            [
                8821,
                WSAL_MEDIUM,
                __( 'User Enabled/Disabled the admin bar menu in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'The <strong>Admin bar menu</strong> feature', 'activity-log-wp-seo' ),
                [],
                [],
                'yoast-seo',
                'enabled',
            ],
            [
                8822,
                WSAL_INFORMATIONAL,
                __( 'User changed the Posts/Pages meta description template in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'Changed the %SEOPostType% Meta description template', 'activity-log-wp-seo' ),
                [
                    __( 'Previous template', 'activity-log-wp-seo' ) => '%old%',
                    __( 'New template', 'activity-log-wp-seo' ) => '%new%',
                ],
                [],
                'yoast-seo',
                'modified',
            ],
            [
                8824,
                WSAL_LOW,
                __( 'User set the option to show the Yoast SEO Meta Box for Posts/Pages in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'The option to show the <strong>Yoast SEO Meta Box</strong> for %SEOPostType%', 'activity-log-wp-seo' ),
                [],
                [],
                'yoast-seo',
                'enabled',
            ],
            [
                8825,
                WSAL_LOW,
                __( 'User Enabled/Disabled the advanced or schema settings for authors in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'The setting <strong>Security: advanced or schema settings for authors</strong> in the plugin.', 'activity-log-wp-seo' ),
                [],
                [],
                'yoast-seo',
                'enabled',
            ],
            [
                8826,
                WSAL_LOW,
                __( 'User Enabled/Disabled redirecting attachment URLs in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'The setting <strong>Redirect attachment URLs</strong> in the <strong>Media</strong> search appearance settings', 'activity-log-wp-seo' ),
                [],
                [],
                'yoast-seo',
                'enabled',
            ],

            [
                8827,
                WSAL_MEDIUM,
                __( 'User Enabled/Disabled Usage tracking in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( '<strong>Usage tracking</strong> in the plugin settings', 'activity-log-wp-seo' ),
                [],
                [],
                'yoast-seo',
                'enabled',
            ],
            [
                8828,
                WSAL_MEDIUM,
                __( 'User Enabled/Disabled REST API: Head endpoint in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'The <strong>REST API: Head endpoint</strong> in the plugin settings', 'activity-log-wp-seo' ),
                [],
                [],
                'yoast-seo',
                'enabled',
            ],
            [
                8829,
                WSAL_LOW,
                __( 'User Added/Removed a social profile in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'The %social_profile% URL', 'activity-log-wp-seo' ),
                [
                    __( 'Old URL', 'activity-log-wp-seo' ) => '%old_url%',
                    __( 'New URL', 'activity-log-wp-seo' ) => '%new_url%',
                ],
                [],
                'yoast-seo',
                'added',
            ],

            [
                8813,
                WSAL_MEDIUM,
                __( 'User Enabled/Disabled the option Show Posts/Pages in Search Results in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'The content type setting to show %SEOPostType% in search results', 'activity-log-wp-seo' ),
                [],
                [],
                'yoast-seo',
                'enabled',
            ],
            [
                8814,
                WSAL_INFORMATIONAL,
                __( 'User changed the Posts/Pages title template in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'The %SEOPostType% SEO title template in the plugin settings', 'activity-log-wp-seo' ),
                [
                    __( 'Previous template', 'activity-log-wp-seo' ) => '%old%',
                    __( 'New template', 'activity-log-wp-seo' ) => '%new%',
                ],
                [],
                'yoast-seo',
                'modified',
            ],

            [
                8830,
                WSAL_MEDIUM,
                __( 'User Enabled/Disabled the taxonomies to show in search results setting in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'The taxonomies setting to show %SEOPostType% in search results', 'activity-log-wp-seo' ),
                [],
                [],
                'yoast-seo',
                'enabled',
            ],
            [
                8831,
                WSAL_LOW,
                __( 'User Modified the SEO title template for a taxonomy in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'Changed the SEO title template for the taxonomy %SEOPostType%', 'activity-log-wp-seo' ),
                [
                    __( 'Previous title', 'activity-log-wp-seo' ) => '%old%',
                    __( 'New title', 'activity-log-wp-seo' ) => '%new%',
                ],
                [],
                'yoast-seo',
                'modified',
            ],
            [
                8832,
                WSAL_LOW,
                __( 'User Modified the Meta description template for a taxonomy in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'Changed the Meta description template for the taxonomy %SEOPostType%', 'activity-log-wp-seo' ),
                [
                    __( 'Previous description', 'activity-log-wp-seo' ) => '%old%',
                    __( 'New description', 'activity-log-wp-seo' ) => '%new%',
                ],
                [],
                'yoast-seo',
                'modified',
            ],
            [
                8833,
                WSAL_MEDIUM,
                __( 'User Enabled/Disabled Author or Data archives in Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'The <strong>%archive_type%</strong> archives', 'activity-log-wp-seo' ),
                [],
                [],
                'yoast-seo',
                'enabled',
            ],
            [
                8834,
                WSAL_MEDIUM,
                __( 'User Enabled/Disabled showing Author or Date archives in search results in Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'The setting to show the <strong>%archive_type%</strong> archives in the search results', 'activity-log-wp-seo' ),
                [],
                [],
                'yoast-seo',
                'enabled',
            ],
            [
                8835,
                WSAL_LOW,
                __( 'User Modified the SEO title template for Author or Date archives in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'Changed the SEO title template for the <strong>%archive_type%</strong> archives', 'activity-log-wp-seo' ),
                [
                    __( 'Previous title', 'activity-log-wp-seo' ) => '%old%',
                    __( 'New title', 'activity-log-wp-seo' ) => '%new%',
                ],
                [],
                'yoast-seo',
                'modified',
            ],
            [
                8836,
                WSAL_LOW,
                __( 'User Modified the SEO Meta description for Author or Date archives in the Yoast SEO plugin settings', 'activity-log-wp-seo' ),
                __( 'Changed the Meta description template for the <strong>%archive_type%</strong> archives', 'activity-log-wp-seo' ),
                [
                    __( 'Previous description', 'activity-log-wp-seo' ) => '%old%',
                    __( 'New description', 'activity-log-wp-seo' ) => '%new%',
                ],
                [],
                'yoast-seo',
                'modified',
            ],
            [
                8837,
                WSAL_LOW,
                __( 'User Enabled/Disabled the SEO meta box for a taxonomy', 'activity-log-wp-seo' ),
                __( 'The setting to show SEO settings for the %SEOPostType% taxonomy', 'activity-log-wp-seo' ),
                [],
                [],
                'yoast-seo',
                'enabled',
            ],
        ],
    ],
];
