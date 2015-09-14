<?php
/**
 * Banner Behavior
 *
 * PHP version 5
 *
 * @category Behavior
 * @package  Croogo
 * @version  1.0
 * @author   Chris De Rouck Rader <chris@2minds.be>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class BannerBehavior extends ModelBehavior {

    /**
     * Nodeattachment model
     *
     * @var object
     */
    private $Banner = null;

    /**
     * Setup
     *
     * @param object $model
     * @param array  $config
     * @return void
     */
    public function setup(Model $model, $config = Array()) {
        if (is_string($config)) {
                $config = array($config);
        }

        if(Configure::read('Assets.installed')) {
            $model->contain(
                array(
                    'AssetsAssetUsage' => 'AssetsAsset',
                )
            );
        }

        $this->settings[$model->alias] = $config;
    }

    public function beforeFind(Model $model, $query){
        parent::beforeFind($model, $query);

        return $query;
    }

    /**
     * After find callback
     *
     * @param object $model
     * @param array $results
     * @param boolean $primary
     * @return array
     */
     public function  afterFind(Model $model, $results, $primary = false) {
        parent::afterFind($model, $results, $primary);

        return $results;
    }
}