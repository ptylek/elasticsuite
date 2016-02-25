<?php
/**
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade Smile Elastic Suite to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile_ElasticSuiteCore
 * @author    Romain Ruaud <romain.ruaud@smile.fr>
 * @copyright 2016 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */

namespace Smile\ElasticSuiteCore\Model\ResourceModel\Relevance\Config\Data;

/**
 * Relevance configuration collection
 *
 * @category Smile
 * @package  Smile_ElasticSuiteCore
 * @author   Romain Ruaud <romain.ruaud@smile.fr>
 */
class Collection extends \Magento\Config\Model\ResourceModel\Config\Data\Collection
{
    /**
     * Add scope filter to collection
     *
     * @param string $scope     The scope
     * @param string $scopeCode The scope code
     * @param string $section   The section
     *
     * @return Collection
     */
    public function addScopeFilter($scope, $scopeCode, $section)
    {
        $this->addFieldToFilter('scope', $scope);
        $this->addFieldToFilter('scope_code', trim($scopeCode));
        $this->addFieldToFilter('path', ['like' => $section . '/%']);

        return $this;
    }

    /**
     * Define resource model
     *
     * @return void
     */
    // @codingStandardsIgnoreStart This method is inherited
    protected function _construct()
    {
        // @codingStandardsIgnoreEnd
        $this->_init(
            'Smile\ElasticSuiteCore\Model\Relevance\Config\Value',
            'Smile\ElasticSuiteCore\Model\ResourceModel\Relevance\Config\Data'
        );
    }
}
