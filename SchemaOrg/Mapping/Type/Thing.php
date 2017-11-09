<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Thing.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ThingType instead.
 */
class Thing implements TypeInterface {

	/**
	 * @var Property\AdditionalType
	 */
	private $additionalType;

	/**
	 * @var Property\AlternateName
	 */
	private $alternateName;

	/**
	 * @var Property\Description
	 */
	private $description;

	/**
	 * @var Property\DisambiguatingDescription
	 */
	private $disambiguatingDescription;

	/**
	 */
	private $id;

	/**
	 * @var Property\Identifier
	 */
	private $identifier;

	/**
	 * @var Property\Image
	 */
	private $image;

	/**
	 * @var Property\MainEntityOfPage
	 */
	private $mainEntityOfPage;

	/**
	 * @var Property\Name
	 */
	private $name;

	/**
	 * @var Property\PotentialAction
	 */
	private $potentialAction;

	/**
	 * @var Property\SameAs
	 */
	private $sameAs;

	/**
	 * @var Property\Url
	 */
	private $url;

	/**
	 * Thing constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get additional type.
	 * 
	 * @return Property\AdditionalType
	 */
	public function getAdditionalType() {
		return $this->additionalType;
	}

	/**
	 * Get alternate name.
	 * 
	 * @return Property\AlternateName
	 */
	public function getAlternateName() {
		return $this->alternateName;
	}

	/**
	 * Get description.
	 * 
	 * @return Property\Description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Get disambiguating description.
	 * 
	 * @return Property\DisambiguatingDescription
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
	 * @return Property\Identifier
	 */
	public function getIdentifier() {
		return $this->identifier;
	}

	/**
	 * Get image.
	 * 
	 * @return Property\Image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Get main entity of page.
	 * 
	 * @return Property\MainEntityOfPage
	 */
	public function getMainEntityOfPage() {
		return $this->mainEntityOfPage;
	}

	/**
	 * Get name.
	 * 
	 * @return Property\Name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Get potential action.
	 * 
	 * @return Property\PotentialAction
	 */
	public function getPotentialAction() {
		return $this->potentialAction;
	}

	/**
	 * Get same as.
	 * 
	 * @return Property\SameAs
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
	 * Get url.
	 * 
	 * @return Property\Url
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Set additional type.
	 * 
	 * @param Property\AdditionalType $additionalType
	 * @return Thing
	 */
	public function setAdditionalType(Property\AdditionalType $additionalType) {
		$this->additionalType = $additionalType;

		return $this;
	}

	/**
	 * Set alternate name.
	 * 
	 * @param Property\AlternateName $alternateName
	 * @return Thing
	 */
	public function setAlternateName(Property\AlternateName $alternateName) {
		$this->alternateName = $alternateName;

		return $this;
	}

	/**
	 * Set description.
	 * 
	 * @param Property\Description $description
	 * @return Thing
	 */
	public function setDescription(Property\Description $description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Set disambiguating description.
	 * 
	 * @param Property\DisambiguatingDescription $disambiguatingDescription
	 * @return Thing
	 */
	public function setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription) {
		$this->disambiguatingDescription = $disambiguatingDescription;

		return $this;
	}

	/**
	 * Set identifier.
	 * 
	 * @param Property\Identifier $identifier
	 * @return Thing
	 */
	public function setIdentifier(Property\Identifier $identifier) {
		$this->identifier = $identifier;

		return $this;
	}

	/**
	 * Set image.
	 * 
	 * @param Property\Image $image
	 * @return Thing
	 */
	public function setImage(Property\Image $image) {
		$this->image = $image;

		return $this;
	}

	/**
	 * Set main entity of page.
	 * 
	 * @param Property\MainEntityOfPage $mainEntityOfPage
	 * @return Thing
	 */
	public function setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage) {
		$this->mainEntityOfPage = $mainEntityOfPage;

		return $this;
	}

	/**
	 * Set name.
	 * 
	 * @param Property\Name $name
	 * @return Thing
	 */
	public function setName(Property\Name $name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Set potential action.
	 * 
	 * @param Property\PotentialAction $potentialAction
	 * @return Thing
	 */
	public function setPotentialAction(Property\PotentialAction $potentialAction) {
		$this->potentialAction = $potentialAction;

		return $this;
	}

	/**
	 * Set same as.
	 * 
	 * @param Property\SameAs $sameAs
	 * @return Thing
	 */
	public function setSameAs(Property\SameAs $sameAs) {
		$this->sameAs = $sameAs;

		return $this;
	}

	/**
	 * Set url.
	 * 
	 * @param Property\Url $url
	 * @return Thing
	 */
	public function setUrl(Property\Url $url) {
		$this->url = $url;

		return $this;
	}
}