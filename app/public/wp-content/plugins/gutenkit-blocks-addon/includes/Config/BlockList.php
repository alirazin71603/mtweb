<?php

namespace Gutenkit\Config;

defined('ABSPATH') || exit;

class BlockList extends \Gutenkit\Core\ConfigList
{

	protected $type = 'blocks';

	protected function set_required_list()
	{
		$this->required_list = array(
			'container' => array(
				'slug'		=> 'container',
				'title'		=> 'Container',
				'package'	=> 'free',
				'category'  => 'general',
				'status' 	=> 'active',
				// 'badge'		=> ['new', 'beta', 'freemium'] use if necessary
			),
		);
	}

	protected function set_optional_list()
	{
		$this->optional_list = apply_filters(
			'gutenkit/blocks/list',
			array(
				'container' => array(
					'slug'		=> 'container',
					'title'		=> 'Container',
					'package'	=> 'free',
					'category'  => 'general',
					'status'	=> 'active',
					'required' => true,
				),
				'advanced-accordion' => array(
					'slug'		=> 'advanced-accordion',
					'title'		=> 'Advanced Accordion',
					'package'	=> 'free',
					'category'  => 'general',
					'badge' 	=> ['freemium'],
					'status'	=> 'active',
				),
				'advanced-accordion-item' => array(
					'slug'		=> 'advanced-accordion-item',
					'title'		=> 'Advanced Accordion Item',
					'package'	=> 'free',
					'category'  => 'general',
					'parent' => 'advanced-accordion',
					'status'	=> 'active',
				),
				'button' => array(
					'slug'		=> 'button',
					'title'		=> 'Button',
					'package'	=> 'free',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'blog-posts' => array(
					'slug'		=> 'blog-posts',
					'title'		=> 'Blog Posts',
					'package'	=> 'free',
					'category'  => 'wp-posts',
					'status' 	=> 'active',
				),
				'heading' => array(
					'slug'		=> 'heading',
					'title'		=> 'Heading',
					'package'	=> 'free',
					'category'  => 'general',
					'status'	=> 'active',
				),
				'icon-box' => array(
					'slug'		=> 'icon-box',
					'title'		=> 'Icon Box',
					'package'	=> 'free',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'image-box' => array(
					'slug'		=> 'image-box',
					'title'		=> 'Image Box',
					'package'	=> 'free',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'dual-button' => array(
					'slug'		=> 'dual-button',
					'title'		=> 'Dual Button',
					'package'	=> 'free',
					'category'  => 'general',
					'status'	=> 'active',
				),
				'social-icons' => array(
					'slug'		=> 'social-icons',
					'title'		=> 'Social Icons',
					'package'	=> 'free',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'image-accordion' => array(
					'slug'		=> 'image-accordion',
					'title'		=> 'Image Accordion',
					'package' 	=> 'free',
					'category'  => 'general',
					'status'	=> 'active',
				),
				'faq' => array(
					'slug'		=> 'faq',
					'title'		=> 'FAQ',
					'package'	=> 'free',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'faq-item' => array(
					'slug'            => 'faq-item',
					'title'           => 'Faq Item',
					'parent'          => 'faq',
					'package'         => 'free',
					'category'        => 'general',
					'status'          => 'active',
				),
				'drop-cap' => array(
					'slug'		=> 'drop-cap',
					'title'		=> 'Drop Cap',
					'package'	=> 'free',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'social-share' => array(
					'slug'		=> 'social-share',
					'title'		=> 'Social Share',
					'package'	=> 'free',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'back-to-top' => array(
					'slug'		=> 'back-to-top',
					'title'		=> 'Back to Top',
					'package'	=> 'free',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'business-hours' => array(
					'slug'		=> 'business-hours',
					'title'		=> 'Business Hours',
					'package'	=> 'free',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'business-hours-item' => array(
					'slug'            => 'business-hours-item',
					'title'           => 'Business Hours Item',
					'parent'          => 'business-hours',
					'package'         => 'free',
					'category'        => 'general',
					'status'          => 'active',
				),
				'progress-bar' => array(
					'slug'		=> 'progress-bar',
					'title'		=> 'Progress Bar',
					'package'	=> 'free',
					'category'  => 'general',
					'status' 	=> 'active',
					'badge' 	=> ['new'],
				),
				'team' => array(
					'slug'		=> 'team',
					'title'		=> 'Team',
					'package'	=> 'free',
					'category'  => 'general',
					'status' 	=> 'active',
					'badge' 	=> ['new'],
				),
				'countdown-timer' => array(
					'slug'		=> 'countdown-timer',
					'title'		=> 'Countdown Timer',
					'package'	=> 'free',
					'category'  => 'general',
					'status' 	=> 'active',
					'badge' 	=> ['new'],
				),
				'video' => array(
					'slug'            => 'video',
					'title'           => 'Video',
					'package'         => 'free',
					'category'  => 'general',
					'status' => 'active',
				),
				'page-list' => array(
					'slug'            => 'page-list',
					'title'           => 'Page List',
					'package'         => 'free',
					'category'  => 'header-footer',
					'status' 	=> 'active',
				),
				'header-info' => array(
					'slug'            => 'header-info',
					'title'           => 'Header Info',
					'package'         => 'free',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'offcanvas' => array(
					'slug'            => 'offcanvas',
					'title'           => 'Offcanvas',
					'package'         => 'free',
					'badge' 		  => ['freemium'],
					'category'  	  => 'header-footer',
					'status' 	      => 'active',
				),
				'nav-menu' 		 => array(
					'slug'            => 'nav-menu',
					'title'           => 'Nav Menu',
					'package'         => 'free',
					'category'  => 'header-footer',
					'status' 	=> 'active',
					'badge'		=> ['freemium'],
				),
				'nav-menu-item' => array(
					'slug'            => 'nav-menu-item',
					'title'           => 'Nav Menu Item',
					'package'         => 'free',
					'category'  => 'header-footer',
					'parent' => 'nav-menu',
					'status' 	=> 'active',
				),
				'nav-menu-submenu' => array(
					'slug'            => 'nav-menu-submenu',
					'title'           => 'Nav Menu Submenu',
					'package'         => 'free',
					'category'  => 'header-footer',
					'parent' => 'nav-menu',
					'status' 	=> 'active',
				),
				'mega-menu' => array(
					'slug'            => 'mega-menu',
					'title'           => 'Mega Menu',
					'package'         => 'pro',
					'category'  	  => 'header-footer',
					'parent' 		  => 'nav-menu',
					'status' 		  => 'active',
				),
				'pricing-table' => array(
					'slug'            => 'pricing-table',
					'title'           => 'Pricing Table',
					'package'         => 'free',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'donut-progress-bar' => array(
					'slug'            => 'donut-progress-bar',
					'title'           => 'Donut Progress Bar',
					'package'         => 'free',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'fun-fact' => array(
					'slug'            => 'fun-fact',
					'title'           => 'Fun Fact',
					'package'         => 'free',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'testimonial' => array(
					'slug'            => 'testimonial',
					'title'           => 'Testimonial',
					'package'         => 'free',
					'category'        => 'general',
					'status'          => 'active',
				),
				'image-comparison' => array(
					'slug'            => 'image-comparison',
					'title'           => 'Image Comparison',
					'package'         => 'free',
					'category'  	  => 'general',
					'status'          => 'active',
				),
				'post-tab' => array(
					'slug'            => 'post-tab',
					'title'           => 'Post Tab',
					'package'         => 'free',
					'category'  => 'wp-posts',
					'status' 	=> 'active',
				),
				'post-grid' => array(
					'slug'            => 'post-grid',
					'title'           => 'Post Grid',
					'package'         => 'free',
					'category'  => 'wp-posts',
					'status' 	=> 'active',
				),
				'advanced-tab' => array(
					'slug'            => 'advanced-tab',
					'title'           => 'Advanced Tab',
					'package'         => 'free',
					'category'  => 'general',
					'status' 	=> 'active',
					'badge' 	=> ['freemium'],
				),
				'advanced-tab-item' => array(
					'slug'            => 'advanced-tab-item',
					'title'           => 'Advanced Tab Item',
					'package'         => 'free',
					'category'  => 'general',
					'parent' => 'advanced-tab',
					'status' 	=> 'active',
				),
				'google-map' => array(
					'slug'            => 'google-map',
					'title'           => 'Google Map',
					'package'         => 'pro',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'fancy-animated-text' => array(
					'slug'            => 'fancy-animated-text',
					'title'           => 'Fancy Animated Text',
					'package'         => 'pro',
					'category'  => 'general',
					'status' => 'active'
				),
				'stylish-list' => array(
					'slug'            => 'stylish-list',
					'title'           => 'Stylish List',
					'package'         => 'pro',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'stylish-list-item' => array(
					'slug'            => 'stylish-list-item',
					'title'           => 'Stylish List Item',
					'parent'          => 'stylish-list',
					'package'         => 'pro',
					'category'        => 'general',
					'status'          => 'active',
				),
				'creative-button' => array(
					'slug'            => 'creative-button',
					'title'           => 'Creative Button',
					'package'         => 'pro',
					'category'  => 'general',
					'status' => 'active',
				),
				'breadcrumb' => array(
					'slug'            => 'breadcrumb',
					'title'           => 'Breadcrumb',
					'package'         => 'pro',
					'category'  	  => 'general',
					'status' 		  => 'active',
				),
				'icon' => array(
					'slug'            => 'icon',
					'title'           => 'Icon',
					'package'         => 'free',
					'category'  	  => 'general',
					'status'          => 'active',
				),
				'timeline' => array(
					'slug'            => 'timeline',
					'title'           => 'Timeline',
					'package'         => 'pro',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'advanced-image' => array(
					'slug'      => 'advanced-image',
					'title'     => 'Advanced Image',
					'package'   => 'free',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'image-hover-effect' => array(
					'slug'            => 'image-hover-effect',
					'title'           => 'Image Hover Effect',
					'package'         => 'pro',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'price-menu' => array(
					'slug'            => 'price-menu',
					'title'           => 'Price Menu',
					'package'         => 'pro',
					'category'  => 'general',
					'status' => 'active',
				),
				'price-menu-item' => array(
					'slug'            => 'price-menu-item',
					'title'           => 'Price Menu Item',
					'package'         => 'pro',
					'category'  => 'general',
					'parent' => 'price-menu',
					'status' => 'active',
				),
				'whatsapp' => array(
					'slug'            => 'whatsapp',
					'title'           => 'WhatsApp',
					'package'         => 'pro',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'advanced-paragraph' => array(
					'slug'      	=> 'advanced-paragraph',
					'title'     	=> 'Advanced Paragraph',
					'package'  		=> 'free',
					'category'  	=> 'general',
					'status' 		=> 'active',
				),
				'client-logo' => array(
					'slug'            => 'client-logo',
					'title'           => 'Client Logo',
					'package'         => 'pro',
					'category'  	  => 'general',
					'status'          => 'active'
				),
				'rating' => array(
					'slug'     => 'rating',
					'title'    => 'Rating',
					'package'  => 'pro',
					'category' => 'general',
					'status'   => 'active',
				),
				'flip-box' => array(
					'slug'            => 'flip-box',
					'title'           => 'Flip Box',
					'package'         => 'pro',
					'category'  	  => 'general',
					'status'          => 'active',
				),
				'reading-progress-bar' => array(
					'slug'     => 'reading-progress-bar',
					'title'    => 'Reading Progress Bar',
					'package'  => 'pro',
					'category' => 'general',
					'status'   => 'active',
				),
				'advanced-masonry' => array(
					'slug'            => 'advanced-masonry',
					'title'           => 'Advanced Masonry',
					'package'         => 'pro',
					'category'  => 'general',
					'status' => 'active',
				),
				'advanced-masonry-item' => array(
					'slug'            => 'advanced-masonry-item',
					'title'           => 'Advanced Masonry Item',
					'package'         => 'pro',
					'category'  => 'general',
					'parent' => 'advanced-masonry',
					'status' => 'active',
				),
				'advanced-toggle' => array(
					'slug'            => 'advanced-toggle',
					'title'           => 'Advanced Toggle',
					'package'         => 'pro',
					'category'  => 'general',
					'status' 	=> 'active',
				),
				'advanced-toggle-item' => array(
					'slug'            => 'advanced-toggle-item',
					'title'           => 'Advanced Toggle Item',
					'package'         => 'pro',
					'category'  => 'general',
					'parent' => 'advanced-toggle',
					'status' 	=> 'active',
				),
				'query-builder' => array(
					'slug'            => 'query-builder',
					'title'           => 'Query Builder',
					'package'         => 'pro',
					'category'        => 'wp-posts',
					'status'          => 'active',
				),
				'query-template' => array(
					'slug'            => 'query-template',
					'title'           => 'Query Template',
					'package'         => 'pro',
					'category'        => 'wp-posts',
					'parent'          => 'query-builder',
					'status'          => 'active',
				),
				'query-pagination' => array(
					'slug'            => 'query-pagination',
					'title'           => 'Query Pagination',
					'package'         => 'pro',
					'category'        => 'wp-posts',
					'parent'          => 'query-builder',
					'status'          => 'active'
				),
				'featured-image' => array(
					'slug'            => 'featured-image',
					'title'           => 'Featured Image',
					'parent'          => 'query-template',
					'package'         => 'pro',
					'category'  => 'general',
					'status' => 'active',
				),
				'post-title' => array(
					'slug'            => 'post-title',
					'title'           => 'Post Title',
					'package'         => 'pro',
					'category'        => 'wp-posts',
					'parent'          => 'query-template',
					'status'          => 'active',
				),
				'post-info' => array(
					'slug'            => 'post-info',
					'title'           => 'Post Info',
					'package'         => 'pro',
					'category'        => 'wp-posts',
					'parent'          => 'query-template',
					'status'          => 'active',
				),
				'post-excerpt' => array(
					'slug'            => 'post-excerpt',
					'title'           => 'Post Excerpt',
					'package'         => 'pro',
					'category'        => 'wp-posts',
					'parent'          => 'query-template',
					'status'          => 'active',
				),
				'post-content' => array(
					'slug'            => 'post-content',
					'title'           => 'Post Content',
					'package'         => 'pro',
					'category'        => 'wp-posts',
					'parent'          => 'query-template',
					'status'          => 'active',
				),
				'unfold' => array(
					'slug'            => 'unfold',
					'title'           => 'Unfold',
					'package'         => 'pro',
					'category'  	  => 'general',
					'status'          => 'active'
				),
				'lottie' => array(
					'slug'     => 'lottie',
					'title'    => 'Lottie',
					'package'  => 'pro',
					'category' => 'general',
					'status'   => 'active',
				),
				'chart' => array(
					'slug'     => 'chart',
					'title'    => 'Chart',
					'package'  => 'pro',
					'category' => 'general',
					'status'   => 'active',
				),
				'table-builder' => array(
					'slug'     => 'table-builder',
					'title'    => 'Table Builder',
					'package'  => 'free',
					'category' => 'general',
					'status'   => 'inactive',
					'badge'    => ['freemium', 'new', 'beta'],
					'dependency' => array(
						'slug' => 'table-builder-block',
						'url' => 'https://demo.wpmet.com/gutenberg/wp-content/uploads/gutenkit/table-builder-block.zip',
					),
				),
				// 'advanced-slider' => array(
				// 	'slug'     => 'advanced-slider',
				// 	'title'    => 'Advanced Slider',
				// 	'package'  => 'pro',
				// 	'category' => 'general',
				// 	'status'   => 'active',
				// ),
				// 'advanced-slider-item' => array(
				// 	'slug'     => 'advanced-slider-item',
				// 	'title'    => 'Advanced Slider Item',
				// 	'package'  => 'pro',
				// 	'category' => 'general',
				// 	'parent'   => 'advanced-slider',
				// 	'status'   => 'active',
				// ),
				'mail-chimp' => array(
					'slug'     => 'mail-chimp',
					'title'    => 'Mailchimp',
					'package'  => 'free',
					'category' => 'general',
					'status'   => 'active',
				)
			)
		);
	}
}
