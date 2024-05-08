<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A predefined value for a product characteristic, e.g. the power cord plug type 'US' or the garment sizes 'S', 'M', 'L', and 'XL'.
 * 
 * @method QualitativeValueType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method QualitativeValueType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method QualitativeValueType setDescription(Property\DescriptionProperty $description)
 * @method QualitativeValueType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method QualitativeValueType setIdentifier(Property\IdentifierProperty $identifier)
 * @method QualitativeValueType setImage(Property\ImageProperty $image)
 * @method QualitativeValueType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method QualitativeValueType setName(Property\NameProperty $name)
 * @method QualitativeValueType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method QualitativeValueType setSameAs(Property\SameAsProperty $sameAs)
 * @method QualitativeValueType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method QualitativeValueType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method QualitativeValueType setUrl(Property\UrlProperty $url)
 */
class QualitativeValueType extends EnumerationType {

	/**
	 * @var Property\AdditionalProperty
	 */
	private $additionalProperty;

	/**
	 * @var Property\EqualProperty
	 */
	private $equal;

	/**
	 * @var Property\GreaterProperty
	 */
	private $greater;

	/**
	 * @var Property\GreaterOrEqualProperty
	 */
	private $greaterOrEqual;

	/**
	 * @var Property\LesserProperty
	 */
	private $lesser;

	/**
	 * @var Property\LesserOrEqualProperty
	 */
	private $lesserOrEqual;

	/**
	 * @var Property\NonEqualProperty
	 */
	private $nonEqual;

	/**
	 * @var Property\ValueReferenceProperty
	 */
	private $valueReference;

	/**
	 * Get additional property.
	 *
	 * @return Property\AdditionalProperty
	 */
	public function getAdditionalProperty() {
		return $this->additionalProperty;
	}

	/**
	 * Get equal.
	 *
	 * @return Property\EqualProperty
	 */
	public function getEqual() {
		return $this->equal;
	}

	/**
	 * Get greater.
	 *
	 * @return Property\GreaterProperty
	 */
	public function getGreater() {
		return $this->greater;
	}

	/**
	 * Get greater or equal.
	 *
	 * @return Property\GreaterOrEqualProperty
	 */
	public function getGreaterOrEqual() {
		return $this->greaterOrEqual;
	}

	/**
	 * Get lesser.
	 *
	 * @return Property\LesserProperty
	 */
	public function getLesser() {
		return $this->lesser;
	}

	/**
	 * Get lesser or equal.
	 *
	 * @return Property\LesserOrEqualProperty
	 */
	public function getLesserOrEqual() {
		return $this->lesserOrEqual;
	}

	/**
	 * Get non equal.
	 *
	 * @return Property\NonEqualProperty
	 */
	public function getNonEqual() {
		return $this->nonEqual;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/QualitativeValue';
	}

	/**
	 * Get value reference.
	 *
	 * @return Property\ValueReferenceProperty
	 */
	public function getValueReference() {
		return $this->valueReference;
	}

	/**
	 * Set additional property.
	 *
	 * @param Property\AdditionalProperty $additionalProperty
	 * @return QualitativeValueType
	 */
	public function setAdditionalProperty(Property\AdditionalProperty $additionalProperty) {
		$this->additionalProperty = $additionalProperty;

		return $this;
	}

	/**
	 * Set equal.
	 *
	 * @param Property\EqualProperty $equal
	 * @return QualitativeValueType
	 */
	public function setEqual(Property\EqualProperty $equal) {
		$this->equal = $equal;

		return $this;
	}

	/**
	 * Set greater.
	 *
	 * @param Property\GreaterProperty $greater
	 * @return QualitativeValueType
	 */
	public function setGreater(Property\GreaterProperty $greater) {
		$this->greater = $greater;

		return $this;
	}

	/**
	 * Set greater or equal.
	 *
	 * @param Property\GreaterOrEqualProperty $greaterOrEqual
	 * @return QualitativeValueType
	 */
	public function setGreaterOrEqual(Property\GreaterOrEqualProperty $greaterOrEqual) {
		$this->greaterOrEqual = $greaterOrEqual;

		return $this;
	}

	/**
	 * Set lesser.
	 *
	 * @param Property\LesserProperty $lesser
	 * @return QualitativeValueType
	 */
	public function setLesser(Property\LesserProperty $lesser) {
		$this->lesser = $lesser;

		return $this;
	}

	/**
	 * Set lesser or equal.
	 *
	 * @param Property\LesserOrEqualProperty $lesserOrEqual
	 * @return QualitativeValueType
	 */
	public function setLesserOrEqual(Property\LesserOrEqualProperty $lesserOrEqual) {
		$this->lesserOrEqual = $lesserOrEqual;

		return $this;
	}

	/**
	 * Set non equal.
	 *
	 * @param Property\NonEqualProperty $nonEqual
	 * @return QualitativeValueType
	 */
	public function setNonEqual(Property\NonEqualProperty $nonEqual) {
		$this->nonEqual = $nonEqual;

		return $this;
	}

	/**
	 * Set value reference.
	 *
	 * @param Property\ValueReferenceProperty $valueReference
	 * @return QualitativeValueType
	 */
	public function setValueReference(Property\ValueReferenceProperty $valueReference) {
		$this->valueReference = $valueReference;

		return $this;
	}
}