<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A permit issued by an organization, e.g. a parking pass.
 * 
 * @method PermitType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PermitType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PermitType setDescription(Property\DescriptionProperty $description)
 * @method PermitType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PermitType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PermitType setImage(Property\ImageProperty $image)
 * @method PermitType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PermitType setName(Property\NameProperty $name)
 * @method PermitType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PermitType setSameAs(Property\SameAsProperty $sameAs)
 * @method PermitType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PermitType setUrl(Property\UrlProperty $url)
 */
class PermitType extends IntangibleType {

	/**
	 * @var Property\IssuedByProperty
	 */
	private $issuedBy;

	/**
	 * @var Property\IssuedThroughProperty
	 */
	private $issuedThrough;

	/**
	 * @var Property\PermitAudienceProperty
	 */
	private $permitAudience;

	/**
	 * @var Property\ValidForProperty
	 */
	private $validFor;

	/**
	 * @var Property\ValidFromProperty
	 */
	private $validFrom;

	/**
	 * @var Property\ValidInProperty
	 */
	private $validIn;

	/**
	 * @var Property\ValidUntilProperty
	 */
	private $validUntil;

	/**
	 * Get issued by.
	 *
	 * @return Property\IssuedByProperty
	 */
	public function getIssuedBy() {
		return $this->issuedBy;
	}

	/**
	 * Get issued through.
	 *
	 * @return Property\IssuedThroughProperty
	 */
	public function getIssuedThrough() {
		return $this->issuedThrough;
	}

	/**
	 * Get permit audience.
	 *
	 * @return Property\PermitAudienceProperty
	 */
	public function getPermitAudience() {
		return $this->permitAudience;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Permit';
	}

	/**
	 * Get valid for.
	 *
	 * @return Property\ValidForProperty
	 */
	public function getValidFor() {
		return $this->validFor;
	}

	/**
	 * Get valid from.
	 *
	 * @return Property\ValidFromProperty
	 */
	public function getValidFrom() {
		return $this->validFrom;
	}

	/**
	 * Get valid in.
	 *
	 * @return Property\ValidInProperty
	 */
	public function getValidIn() {
		return $this->validIn;
	}

	/**
	 * Get valid until.
	 *
	 * @return Property\ValidUntilProperty
	 */
	public function getValidUntil() {
		return $this->validUntil;
	}

	/**
	 * Set issued by.
	 *
	 * @param Property\IssuedByProperty $issuedBy
	 * @return PermitType
	 */
	public function setIssuedBy(Property\IssuedByProperty $issuedBy) {
		$this->issuedBy = $issuedBy;

		return $this;
	}

	/**
	 * Set issued through.
	 *
	 * @param Property\IssuedThroughProperty $issuedThrough
	 * @return PermitType
	 */
	public function setIssuedThrough(Property\IssuedThroughProperty $issuedThrough) {
		$this->issuedThrough = $issuedThrough;

		return $this;
	}

	/**
	 * Set permit audience.
	 *
	 * @param Property\PermitAudienceProperty $permitAudience
	 * @return PermitType
	 */
	public function setPermitAudience(Property\PermitAudienceProperty $permitAudience) {
		$this->permitAudience = $permitAudience;

		return $this;
	}

	/**
	 * Set valid for.
	 *
	 * @param Property\ValidForProperty $validFor
	 * @return PermitType
	 */
	public function setValidFor(Property\ValidForProperty $validFor) {
		$this->validFor = $validFor;

		return $this;
	}

	/**
	 * Set valid from.
	 *
	 * @param Property\ValidFromProperty $validFrom
	 * @return PermitType
	 */
	public function setValidFrom(Property\ValidFromProperty $validFrom) {
		$this->validFrom = $validFrom;

		return $this;
	}

	/**
	 * Set valid in.
	 *
	 * @param Property\ValidInProperty $validIn
	 * @return PermitType
	 */
	public function setValidIn(Property\ValidInProperty $validIn) {
		$this->validIn = $validIn;

		return $this;
	}

	/**
	 * Set valid until.
	 *
	 * @param Property\ValidUntilProperty $validUntil
	 * @return PermitType
	 */
	public function setValidUntil(Property\ValidUntilProperty $validUntil) {
		$this->validUntil = $validUntil;

		return $this;
	}
}