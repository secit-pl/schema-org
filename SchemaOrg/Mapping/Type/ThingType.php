<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The most generic type of item.
 */
class ThingType implements TypeInterface {

	/**
	 * @var Property\AdditionalTypeProperty
	 */
	private $additionalType;

	/**
	 * @var Property\AlternateNameProperty
	 */
	private $alternateName;

	/**
	 * @var Property\DescriptionProperty
	 */
	private $description;

	/**
	 * @var Property\DisambiguatingDescriptionProperty
	 */
	private $disambiguatingDescription;

	/**
	 */
	private $id;

	/**
	 * @var Property\IdentifierProperty
	 */
	private $identifier;

	/**
	 * @var Property\ImageProperty
	 */
	private $image;

	/**
	 * @var Property\MainEntityOfPageProperty
	 */
	private $mainEntityOfPage;

	/**
	 * @var Property\NameProperty
	 */
	private $name;

	/**
	 * @var Property\PotentialActionProperty
	 */
	private $potentialAction;

	/**
	 * @var Property\SameAsProperty
	 */
	private $sameAs;

	/**
	 * @var Property\SubjectOfProperty
	 */
	private $subjectOf;

	/**
	 * @var Property\UrlProperty
	 */
	private $url;

	/**
	 * ThingType constructor.
	 *
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get additional type.
	 *
	 * @return Property\AdditionalTypeProperty
	 */
	public function getAdditionalType() {
		return $this->additionalType;
	}

	/**
	 * Get alternate name.
	 *
	 * @return Property\AlternateNameProperty
	 */
	public function getAlternateName() {
		return $this->alternateName;
	}

	/**
	 * Get description.
	 *
	 * @return Property\DescriptionProperty
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Get disambiguating description.
	 *
	 * @return Property\DisambiguatingDescriptionProperty
	 */
	public function getDisambiguatingDescription() {
		return $this->disambiguatingDescription;
	}

	/**
	 * Get id.
	 *
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get identifier.
	 *
	 * @return Property\IdentifierProperty
	 */
	public function getIdentifier() {
		return $this->identifier;
	}

	/**
	 * Get image.
	 *
	 * @return Property\ImageProperty
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Get main entity of page.
	 *
	 * @return Property\MainEntityOfPageProperty
	 */
	public function getMainEntityOfPage() {
		return $this->mainEntityOfPage;
	}

	/**
	 * Get name.
	 *
	 * @return Property\NameProperty
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Get potential action.
	 *
	 * @return Property\PotentialActionProperty
	 */
	public function getPotentialAction() {
		return $this->potentialAction;
	}

	/**
	 * Get same as.
	 *
	 * @return Property\SameAsProperty
	 */
	public function getSameAs() {
		return $this->sameAs;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Thing';
	}

	/**
	 * Get subject of.
	 *
	 * @return Property\SubjectOfProperty
	 */
	public function getSubjectOf() {
		return $this->subjectOf;
	}

	/**
	 * Get url.
	 *
	 * @return Property\UrlProperty
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Set additional type.
	 *
	 * @param Property\AdditionalTypeProperty $additionalType
	 * @return ThingType
	 */
	public function setAdditionalType(Property\AdditionalTypeProperty $additionalType) {
		$this->additionalType = $additionalType;

		return $this;
	}

	/**
	 * Set alternate name.
	 *
	 * @param Property\AlternateNameProperty $alternateName
	 * @return ThingType
	 */
	public function setAlternateName(Property\AlternateNameProperty $alternateName) {
		$this->alternateName = $alternateName;

		return $this;
	}

	/**
	 * Set description.
	 *
	 * @param Property\DescriptionProperty $description
	 * @return ThingType
	 */
	public function setDescription(Property\DescriptionProperty $description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Set disambiguating description.
	 *
	 * @param Property\DisambiguatingDescriptionProperty $disambiguatingDescription
	 * @return ThingType
	 */
	public function setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription) {
		$this->disambiguatingDescription = $disambiguatingDescription;

		return $this;
	}

	/**
	 * Set identifier.
	 *
	 * @param Property\IdentifierProperty $identifier
	 * @return ThingType
	 */
	public function setIdentifier(Property\IdentifierProperty $identifier) {
		$this->identifier = $identifier;

		return $this;
	}

	/**
	 * Set image.
	 *
	 * @param Property\ImageProperty $image
	 * @return ThingType
	 */
	public function setImage(Property\ImageProperty $image) {
		$this->image = $image;

		return $this;
	}

	/**
	 * Set main entity of page.
	 *
	 * @param Property\MainEntityOfPageProperty $mainEntityOfPage
	 * @return ThingType
	 */
	public function setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage) {
		$this->mainEntityOfPage = $mainEntityOfPage;

		return $this;
	}

	/**
	 * Set name.
	 *
	 * @param Property\NameProperty $name
	 * @return ThingType
	 */
	public function setName(Property\NameProperty $name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Set potential action.
	 *
	 * @param Property\PotentialActionProperty $potentialAction
	 * @return ThingType
	 */
	public function setPotentialAction(Property\PotentialActionProperty $potentialAction) {
		$this->potentialAction = $potentialAction;

		return $this;
	}

	/**
	 * Set same as.
	 *
	 * @param Property\SameAsProperty $sameAs
	 * @return ThingType
	 */
	public function setSameAs(Property\SameAsProperty $sameAs) {
		$this->sameAs = $sameAs;

		return $this;
	}

	/**
	 * Set subject of.
	 *
	 * @param Property\SubjectOfProperty $subjectOf
	 * @return ThingType
	 */
	public function setSubjectOf(Property\SubjectOfProperty $subjectOf) {
		$this->subjectOf = $subjectOf;

		return $this;
	}

	/**
	 * Set url.
	 *
	 * @param Property\UrlProperty $url
	 * @return ThingType
	 */
	public function setUrl(Property\UrlProperty $url) {
		$this->url = $url;

		return $this;
	}
}