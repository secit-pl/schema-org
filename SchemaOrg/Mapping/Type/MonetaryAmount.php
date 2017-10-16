<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MonetaryAmount.
 * 
 * @method MonetaryAmount setAdditionalType(Property\AdditionalType $additionalType)
 * @method MonetaryAmount setAlternateName(Property\AlternateName $alternateName)
 * @method MonetaryAmount setDescription(Property\Description $description)
 * @method MonetaryAmount setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MonetaryAmount setIdentifier(Property\Identifier $identifier)
 * @method MonetaryAmount setImage(Property\Image $image)
 * @method MonetaryAmount setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MonetaryAmount setName(Property\Name $name)
 * @method MonetaryAmount setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MonetaryAmount setSameAs(Property\SameAs $sameAs)
 * @method MonetaryAmount setUrl(Property\Url $url)
 */
class MonetaryAmount extends StructuredValue {

	/**
	 * @var Property\MaxValue
	 */
	private $maxValue;

	/**
	 * @var Property\MinValue
	 */
	private $minValue;

	/**
	 * @var Property\ValidFrom
	 */
	private $validFrom;

	/**
	 * @var Property\ValidThrough
	 */
	private $validThrough;

	/**
	 * @var Property\Value
	 */
	private $value;

	/**
	 * Get max value.
	 * 
	 * @return Property\MaxValue
	 */
	public function getMaxValue() {
		return $this->maxValue;
	}

	/**
	 * Get min value.
	 * 
	 * @return Property\MinValue
	 */
	public function getMinValue() {
		return $this->minValue;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MonetaryAmount';
	}

	/**
	 * Get valid from.
	 * 
	 * @return Property\ValidFrom
	 */
	public function getValidFrom() {
		return $this->validFrom;
	}

	/**
	 * Get valid through.
	 * 
	 * @return Property\ValidThrough
	 */
	public function getValidThrough() {
		return $this->validThrough;
	}

	/**
	 * Get value.
	 * 
	 * @return Property\Value
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Set max value.
	 * 
	 * @param Property\MaxValue $maxValue
	 * @return MonetaryAmount
	 */
	public function setMaxValue(Property\MaxValue $maxValue) {
		$this->maxValue = $maxValue;

		return $this;
	}

	/**
	 * Set min value.
	 * 
	 * @param Property\MinValue $minValue
	 * @return MonetaryAmount
	 */
	public function setMinValue(Property\MinValue $minValue) {
		$this->minValue = $minValue;

		return $this;
	}

	/**
	 * Set valid from.
	 * 
	 * @param Property\ValidFrom $validFrom
	 * @return MonetaryAmount
	 */
	public function setValidFrom(Property\ValidFrom $validFrom) {
		$this->validFrom = $validFrom;

		return $this;
	}

	/**
	 * Set valid through.
	 * 
	 * @param Property\ValidThrough $validThrough
	 * @return MonetaryAmount
	 */
	public function setValidThrough(Property\ValidThrough $validThrough) {
		$this->validThrough = $validThrough;

		return $this;
	}

	/**
	 * Set value.
	 * 
	 * @param Property\Value $value
	 * @return MonetaryAmount
	 */
	public function setValue(Property\Value $value) {
		$this->value = $value;

		return $this;
	}
}