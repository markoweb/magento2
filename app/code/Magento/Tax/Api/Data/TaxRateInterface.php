<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Tax\Api\Data;

interface TaxRateInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{
    /**#@+
     * Constants defined for keys of array, makes typos less likely
     */
    const KEY_ID = 'id';
    const KEY_COUNTRY_ID = 'tax_country_id';
    const KEY_REGION_ID = 'tax_region_id';
    const KEY_REGION_NAME = 'region_name';
    const KEY_POSTCODE = 'tax_postcode';
    const KEY_ZIP_IS_RANGE = 'zip_is_range';
    const KEY_ZIP_RANGE_FROM = 'zip_from';
    const KEY_ZIP_RANGE_TO = 'zip_to';
    const KEY_PERCENTAGE_RATE = 'rate';
    const KEY_CODE = 'code';
    const KEY_TITLES = 'titles';
    /**#@-*/

    /**
     * Get id
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set id
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Get country id
     *
     * @return string
     */
    public function getTaxCountryId();

    /**
     * Set country id
     *
     * @param string $taxCountryId
     * @return $this
     */
    public function setTaxCountryId($taxCountryId);

    /**
     * Get region id
     *
     * @return int|null
     */
    public function getTaxRegionId();

    /**
     * Set region id
     *
     * @param int $taxRegionId
     * @return $this
     */
    public function setTaxRegionId($taxRegionId);

    /**
     * Get region name
     *
     * @return string|null
     */
    public function getRegionName();

    /**
     * Set region name
     *
     * @param string $regionName
     * @return $this
     */
    public function setRegionName($regionName);

    /**
     * Get postcode
     *
     * @return string|null
     */
    public function getTaxPostcode();

    /**
     * Set postcode
     *
     * @param string $taxPostCode
     * @return $this
     */
    public function setTaxPostcode($taxPostCode);

    /**
     * Get zip is range
     *
     * @return int|null
     */
    public function getZipIsRange();

    /**
     * Set zip is range
     *
     * @param int $zipIsRange
     * @return $this
     */
    public function setZipIsRange($zipIsRange);

    /**
     * Get zip range from
     *
     * @return int|null
     */
    public function getZipFrom();

    /**
     * Set zip range from
     *
     * @param int $zipFrom
     * @return $this
     */
    public function setZipFrom($zipFrom);

    /**
     * Get zip range to
     *
     * @return int|null
     */
    public function getZipTo();

    /**
     * Set zip range to
     *
     * @param int $zipTo
     * @return $this
     */
    public function setZipTo($zipTo);

    /**
     * Get tax rate in percentage
     *
     * @return float
     */
    public function getRate();

    /**
     * Set tax rate in percentage
     *
     * @param float $rate
     * @return $this
     */
    public function setRate($rate);

    /**
     * Get tax rate code
     *
     * @return string
     */
    public function getCode();

    /**
     * Set tax rate code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code);

    /**
     * Get tax rate titles
     *
     * @return \Magento\Tax\Api\Data\TaxRateTitleInterface[]|null
     */
    public function getTitles();

    /**
     * Set tax rate titles
     *
     * @param \Magento\Tax\Api\Data\TaxRateTitleInterface[] $titles
     * @return $this
     */
    public function setTitles(array $titles = null);
}