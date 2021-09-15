<?php

namespace WPC\Widgets;

use Elementor\Widget_Base; // methods etc. 
use Elementor\Controls_Manager; // sidebar stuff

if (!defined('ABSPATH')) exit; // exit if accessed directly

class Advertisement extends Widget_Base {

	// required methods for widgets
	public function get_name() {
		return 'advertisement';
	}

	public function get_title() {
		return 'Advertisement';
	}

	public function get_icon() {
		return 'fa fa-camera';
	}

	public function get_categories() {
		return ['general'];
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'section_contenet',
			['label' => 'Settings']
		);

		$this->add_control(
			'image',
			[
				'label' => __('Choose Image', 'plugin-domain'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'label_heading',
			[
				'label' => 'Label Heading',
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => 'My Example Heading'
			]
		);

		$this->add_control(
			'content',
			[
				'label' => 'Content',
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => 'Some example content. Start Editing Here.'
			]
		);

		$this->end_controls_section();
	}

	// PHP RENDER
	protected function render() {
		$settings = $this->get_settings_for_display();
		$this->add_inline_editing_attributes('label_heading', 'basic');
		$this->add_render_attribute(
			'label_heading',
			[
				// can't just add class in html
				'class' => ['advertisement__label-heading']
			]
		);
		$labelHeadingClass = $this->get_render_attribute_string('label_heading');
?>
		<div class="advertisement">
			<img class="advertisement__image" src=" <?php echo $settings['image']['url']; ?> " alt="">

			<div class="advertisement__content">
				<div <?php echo $labelHeadingClass; ?>>
					<?php echo $settings['label_heading']; ?>
				</div>
				<div class="advertisement__content__copy">
					<?php echo $settings['content']; ?>
				</div>
			</div>
		</div>
<?php
	}

	// JS RENDER
	protected function _content_template() {
		echo '<h2>I work in JS as well</h2>';
	}
}
