<?php
/**
 * Banner Activation
 *
 * Activation class for Banner plugin.
 *
 * @package  Croogo
 * @author   Chris De Rouck <chris@2minds.be>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class EventActivation {

	public function beforeActivation(Controller $controller) {
		return true;
	}

	public function onActivation(Controller $controller) {
        // Create an example banner block
        $controller->loadModel('Block');
        $result = $controller->Block->save(array(
            'Block' => array(
                'id' => '',
                'region_id' => '4',
                'title' => 'Banner with pictures',
                'alias' => 'banner-head',
                'body' => '[node:banner-head conditions=Node.type:blog;Node.status:1 order=Node.id DESC; limit=3 element=Banner.photo-banner]',
                'show_title' => '0',
                'status' => '1',
                'class' => '',
                'element' => ''
            )
        ));
    }

	public function beforeDeactivation(Controller $controller) {
		return true;
	}

	public function onDeactivation(Controller $controller) {
        // Remove block for upcoming events
        $controller->loadModel('Block');
        $block = $controller->Block->findByAlias('banner-head');

        if($block){
            if(! $controller->Block->delete($block['Block']['id'])) {
                return false;
            }
        }
	}
 }