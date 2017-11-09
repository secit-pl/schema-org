<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BroadcastChannelType.
 * 
 * @method BroadcastChannelType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BroadcastChannelType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BroadcastChannelType setDescription(Property\DescriptionProperty $description)
 * @method BroadcastChannelType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BroadcastChannelType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BroadcastChannelType setImage(Property\ImageProperty $image)
 * @method BroadcastChannelType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BroadcastChannelType setName(Property\NameProperty $name)
 * @method BroadcastChannelType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BroadcastChannelType setSameAs(Property\SameAsProperty $sameAs)
 * @method BroadcastChannelType setUrl(Property\UrlProperty $url)
 */
class BroadcastChannelType extends IntangibleType {

	/**
	 * @var Property\BroadcastChannelIdProperty
	 */
	private $broadcastChannelId;

	/**
	 * @var Property\BroadcastServiceTierProperty
	 */
	private $broadcastServiceTier;

	/**
	 * @var Property\GenreProperty
	 */
	private $genre;

	/**
	 * @var Property\InBroadcastLineupProperty
	 */
	private $inBroadcastLineup;

	/**
	 * @var Property\ProvidesBroadcastServiceProperty
	 */
	private $providesBroadcastService;

	/**
	 * Get broadcast channel id.
	 * 
	 * @return Property\BroadcastChannelIdProperty
	 */
	public function getBroadcastChannelId() {
		return $this->broadcastChannelId;
	}

	/**
	 * Get broadcast service tier.
	 * 
	 * @return Property\BroadcastServiceTierProperty
	 */
	public function getBroadcastServiceTier() {
		return $this->broadcastServiceTier;
	}

	/**
	 * Get genre.
	 * 
	 * @return Property\GenreProperty
	 */
	public function getGenre() {
		return $this->genre;
	}

	/**
	 * Get in broadcast lineup.
	 * 
	 * @return Property\InBroadcastLineupProperty
	 */
	public function getInBroadcastLineup() {
		return $this->inBroadcastLineup;
	}

	/**
	 * Get provides broadcast service.
	 * 
	 * @return Property\ProvidesBroadcastServiceProperty
	 */
	public function getProvidesBroadcastService() {
		return $this->providesBroadcastService;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BroadcastChannel';
	}

	/**
	 * Set broadcast channel id.
	 * 
	 * @param Property\BroadcastChannelIdProperty $broadcastChannelId
	 * @return BroadcastChannelType
	 */
	public function setBroadcastChannelId(Property\BroadcastChannelIdProperty $broadcastChannelId) {
		$this->broadcastChannelId = $broadcastChannelId;

		return $this;
	}

	/**
	 * Set broadcast service tier.
	 * 
	 * @param Property\BroadcastServiceTierProperty $broadcastServiceTier
	 * @return BroadcastChannelType
	 */
	public function setBroadcastServiceTier(Property\BroadcastServiceTierProperty $broadcastServiceTier) {
		$this->broadcastServiceTier = $broadcastServiceTier;

		return $this;
	}

	/**
	 * Set genre.
	 * 
	 * @param Property\GenreProperty $genre
	 * @return BroadcastChannelType
	 */
	public function setGenre(Property\GenreProperty $genre) {
		$this->genre = $genre;

		return $this;
	}

	/**
	 * Set in broadcast lineup.
	 * 
	 * @param Property\InBroadcastLineupProperty $inBroadcastLineup
	 * @return BroadcastChannelType
	 */
	public function setInBroadcastLineup(Property\InBroadcastLineupProperty $inBroadcastLineup) {
		$this->inBroadcastLineup = $inBroadcastLineup;

		return $this;
	}

	/**
	 * Set provides broadcast service.
	 * 
	 * @param Property\ProvidesBroadcastServiceProperty $providesBroadcastService
	 * @return BroadcastChannelType
	 */
	public function setProvidesBroadcastService(Property\ProvidesBroadcastServiceProperty $providesBroadcastService) {
		$this->providesBroadcastService = $providesBroadcastService;

		return $this;
	}
}