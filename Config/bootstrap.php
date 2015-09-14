<?php

/**
 * Behavior
 *
 * This plugin's BannerBehavior will be attached whenever Node model is loaded.
 */
	Croogo::hookBehavior('Node', 'Banner.Banner', array());