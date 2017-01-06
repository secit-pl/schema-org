<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BroadcastChannel.
 * 
 * @method BroadcastChannel setAdditionalType(Property\AdditionalType $additionalType)
 * @method BroadcastChannel setAlternateName(Property\AlternateName $alternateName)
 * @method BroadcastChannel setDescription(Property\Description $description)
 * @method BroadcastChannel setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BroadcastChannel setImage(Property\Image $image)
 * @method BroadcastChannel setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BroadcastChannel setName(Property\Name $name)
 * @method BroadcastChannel setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BroadcastChannel setSameAs(Property\SameAs $sameAs)
 * @method BroadcastChannel setUrl(Property\Url $url)
 */
class BroadcastChannel extends Intangible {

	/**
	 * @var Property\BroadcastChannelId
	 */
	private $broadcastChannelId;

	/**
	 * @var Property\BroadcastServiceTier
	 */
	private $broadcastServiceTier;

	/**
	 * @var Property\InBroadcastLineup
	 */
	private $inBroadcastLineup;

	/**
	 * @var Property\ProvidesBroadcastService
	 */
	private $providesBroadcastService;

	/**
	 * Get broadcast channel id.
	 * 
	 * @return Property\BroadcastChannelId
	 */
	public function getBroadcastChannelId() {
		return $this->broadcastChannelId;
	}

	/**
	 * Get broadcast service tier.
	 * 
	 * @return Property\BroadcastServiceTier
	 */
	public function getBroadcastServiceTier() {
		return $this->broadcastServiceTier;
	}

	/**
	 * Get in broadcast lineup.
	 * 
	 * @return Property\InBroadcastLineup
	 */
	public function getInBroadcastLineup() {
		return $this->inBroadcastLineup;
	}

	/**
	 * Get provides broadcast service.
	 * 
	 * @return Property\ProvidesBroadcastService
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
	 * @param Property\BroadcastChannelId $broadcastChannelId
	 * @return BroadcastChannel
	 */
	public function setBroadcastChannelId(Property\BroadcastChannelId $broadcastChannelId) {
		$this->broadcastChannelId = $broadcastChannelId;

		return $this;
	}

	/**
	 * Set broadcast service tier.
	 * 
	 * @param Property\BroadcastServiceTier $broadcastServiceTier
	 * @return BroadcastChannel
	 */
	public function setBroadcastServiceTier(Property\BroadcastServiceTier $broadcastServiceTier) {
		$this->broadcastServiceTier = $broadcastServiceTier;

		return $this;
	}

	/**
	 * Set in broadcast lineup.
	 * 
	 * @param Property\InBroadcastLineup $inBroadcastLineup
	 * @return BroadcastChannel
	 */
	public function setInBroadcastLineup(Property\InBroadcastLineup $inBroadcastLineup) {
		$this->inBroadcastLineup = $inBroadcastLineup;

		return $this;
	}

	/**
	 * Set provides broadcast service.
	 * 
	 * @param Property\ProvidesBroadcastService $providesBroadcastService
	 * @return BroadcastChannel
	 */
	public function setProvidesBroadcastService(Property\ProvidesBroadcastService $providesBroadcastService) {
		$this->providesBroadcastService = $providesBroadcastService;

		return $this;
	}
}