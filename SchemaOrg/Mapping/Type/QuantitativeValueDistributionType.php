<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A statistical distribution of values.
 * 
 * @method QuantitativeValueDistributionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method QuantitativeValueDistributionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method QuantitativeValueDistributionType setDescription(Property\DescriptionProperty $description)
 * @method QuantitativeValueDistributionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method QuantitativeValueDistributionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method QuantitativeValueDistributionType setImage(Property\ImageProperty $image)
 * @method QuantitativeValueDistributionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method QuantitativeValueDistributionType setName(Property\NameProperty $name)
 * @method QuantitativeValueDistributionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method QuantitativeValueDistributionType setSameAs(Property\SameAsProperty $sameAs)
 * @method QuantitativeValueDistributionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method QuantitativeValueDistributionType setUrl(Property\UrlProperty $url)
 */
class QuantitativeValueDistributionType extends StructuredValueType {

	/**
	 * @var Property\DurationProperty
	 */
	private $duration;

	/**
	 * @var Property\MedianProperty
	 */
	private $median;

	/**
	 * @var Property\Percentile10Property
	 */
	private $percentile10;

	/**
	 * @var Property\Percentile25Property
	 */
	private $percentile25;

	/**
	 * @var Property\Percentile75Property
	 */
	private $percentile75;

	/**
	 * @var Property\Percentile90Property
	 */
	private $percentile90;

	/**
	 * Get duration.
	 *
	 * @return Property\DurationProperty
	 */
	public function getDuration() {
		return $this->duration;
	}

	/**
	 * Get median.
	 *
	 * @return Property\MedianProperty
	 */
	public function getMedian() {
		return $this->median;
	}

	/**
	 * Get percentile10.
	 *
	 * @return Property\Percentile10Property
	 */
	public function getPercentile10() {
		return $this->percentile10;
	}

	/**
	 * Get percentile25.
	 *
	 * @return Property\Percentile25Property
	 */
	public function getPercentile25() {
		return $this->percentile25;
	}

	/**
	 * Get percentile75.
	 *
	 * @return Property\Percentile75Property
	 */
	public function getPercentile75() {
		return $this->percentile75;
	}

	/**
	 * Get percentile90.
	 *
	 * @return Property\Percentile90Property
	 */
	public function getPercentile90() {
		return $this->percentile90;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/QuantitativeValueDistribution';
	}

	/**
	 * Set duration.
	 *
	 * @param Property\DurationProperty $duration
	 * @return QuantitativeValueDistributionType
	 */
	public function setDuration(Property\DurationProperty $duration) {
		$this->duration = $duration;

		return $this;
	}

	/**
	 * Set median.
	 *
	 * @param Property\MedianProperty $median
	 * @return QuantitativeValueDistributionType
	 */
	public function setMedian(Property\MedianProperty $median) {
		$this->median = $median;

		return $this;
	}

	/**
	 * Set percentile10.
	 *
	 * @param Property\Percentile10Property $percentile10
	 * @return QuantitativeValueDistributionType
	 */
	public function setPercentile10(Property\Percentile10Property $percentile10) {
		$this->percentile10 = $percentile10;

		return $this;
	}

	/**
	 * Set percentile25.
	 *
	 * @param Property\Percentile25Property $percentile25
	 * @return QuantitativeValueDistributionType
	 */
	public function setPercentile25(Property\Percentile25Property $percentile25) {
		$this->percentile25 = $percentile25;

		return $this;
	}

	/**
	 * Set percentile75.
	 *
	 * @param Property\Percentile75Property $percentile75
	 * @return QuantitativeValueDistributionType
	 */
	public function setPercentile75(Property\Percentile75Property $percentile75) {
		$this->percentile75 = $percentile75;

		return $this;
	}

	/**
	 * Set percentile90.
	 *
	 * @param Property\Percentile90Property $percentile90
	 * @return QuantitativeValueDistributionType
	 */
	public function setPercentile90(Property\Percentile90Property $percentile90) {
		$this->percentile90 = $percentile90;

		return $this;
	}
}