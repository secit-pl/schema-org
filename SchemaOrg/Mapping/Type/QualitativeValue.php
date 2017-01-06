<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class QualitativeValue.
 * 
 * @method QualitativeValue setAdditionalType(Property\AdditionalType $additionalType)
 * @method QualitativeValue setAlternateName(Property\AlternateName $alternateName)
 * @method QualitativeValue setDescription(Property\Description $description)
 * @method QualitativeValue setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method QualitativeValue setImage(Property\Image $image)
 * @method QualitativeValue setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method QualitativeValue setName(Property\Name $name)
 * @method QualitativeValue setPotentialAction(Property\PotentialAction $potentialAction)
 * @method QualitativeValue setSameAs(Property\SameAs $sameAs)
 * @method QualitativeValue setUrl(Property\Url $url)
 */
class QualitativeValue extends Enumeration {

	/**
	 * @var Property\AdditionalProperty
	 */
	private $additionalProperty;

	/**
	 * @var Property\Equal
	 */
	private $equal;

	/**
	 * @var Property\Greater
	 */
	private $greater;

	/**
	 * @var Property\GreaterOrEqual
	 */
	private $greaterOrEqual;

	/**
	 * @var Property\Lesser
	 */
	private $lesser;

	/**
	 * @var Property\LesserOrEqual
	 */
	private $lesserOrEqual;

	/**
	 * @var Property\NonEqual
	 */
	private $nonEqual;

	/**
	 * @var Property\ValueReference
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
	 * @return Property\Equal
	 */
	public function getEqual() {
		return $this->equal;
	}

	/**
	 * Get greater.
	 * 
	 * @return Property\Greater
	 */
	public function getGreater() {
		return $this->greater;
	}

	/**
	 * Get greater or equal.
	 * 
	 * @return Property\GreaterOrEqual
	 */
	public function getGreaterOrEqual() {
		return $this->greaterOrEqual;
	}

	/**
	 * Get lesser.
	 * 
	 * @return Property\Lesser
	 */
	public function getLesser() {
		return $this->lesser;
	}

	/**
	 * Get lesser or equal.
	 * 
	 * @return Property\LesserOrEqual
	 */
	public function getLesserOrEqual() {
		return $this->lesserOrEqual;
	}

	/**
	 * Get non equal.
	 * 
	 * @return Property\NonEqual
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
	 * @return Property\ValueReference
	 */
	public function getValueReference() {
		return $this->valueReference;
	}

	/**
	 * Set additional property.
	 * 
	 * @param Property\AdditionalProperty $additionalProperty
	 * @return QualitativeValue
	 */
	public function setAdditionalProperty(Property\AdditionalProperty $additionalProperty) {
		$this->additionalProperty = $additionalProperty;

		return $this;
	}

	/**
	 * Set equal.
	 * 
	 * @param Property\Equal $equal
	 * @return QualitativeValue
	 */
	public function setEqual(Property\Equal $equal) {
		$this->equal = $equal;

		return $this;
	}

	/**
	 * Set greater.
	 * 
	 * @param Property\Greater $greater
	 * @return QualitativeValue
	 */
	public function setGreater(Property\Greater $greater) {
		$this->greater = $greater;

		return $this;
	}

	/**
	 * Set greater or equal.
	 * 
	 * @param Property\GreaterOrEqual $greaterOrEqual
	 * @return QualitativeValue
	 */
	public function setGreaterOrEqual(Property\GreaterOrEqual $greaterOrEqual) {
		$this->greaterOrEqual = $greaterOrEqual;

		return $this;
	}

	/**
	 * Set lesser.
	 * 
	 * @param Property\Lesser $lesser
	 * @return QualitativeValue
	 */
	public function setLesser(Property\Lesser $lesser) {
		$this->lesser = $lesser;

		return $this;
	}

	/**
	 * Set lesser or equal.
	 * 
	 * @param Property\LesserOrEqual $lesserOrEqual
	 * @return QualitativeValue
	 */
	public function setLesserOrEqual(Property\LesserOrEqual $lesserOrEqual) {
		$this->lesserOrEqual = $lesserOrEqual;

		return $this;
	}

	/**
	 * Set non equal.
	 * 
	 * @param Property\NonEqual $nonEqual
	 * @return QualitativeValue
	 */
	public function setNonEqual(Property\NonEqual $nonEqual) {
		$this->nonEqual = $nonEqual;

		return $this;
	}

	/**
	 * Set value reference.
	 * 
	 * @param Property\ValueReference $valueReference
	 * @return QualitativeValue
	 */
	public function setValueReference(Property\ValueReference $valueReference) {
		$this->valueReference = $valueReference;

		return $this;
	}
}