<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BroadcastEvent.
 * 
 * @method BroadcastEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method BroadcastEvent setPublishedOn(Property\PublishedOn $publishedOn)
 */
class BroadcastEvent extends PublicationEvent {

	/**
	 * @var Property\BroadcastOfEvent
	 */
	private $broadcastOfEvent;

	/**
	 * @var Property\IsLiveBroadcast
	 */
	private $isLiveBroadcast;

	/**
	 * @var Property\VideoFormat
	 */
	private $videoFormat;

	/**
	 * Get broadcast of event.
	 * 
	 * @return Property\BroadcastOfEvent
	 */
	public function getBroadcastOfEvent() {
		return $this->broadcastOfEvent;
	}

	/**
	 * Get is live broadcast.
	 * 
	 * @return Property\IsLiveBroadcast
	 */
	public function getIsLiveBroadcast() {
		return $this->isLiveBroadcast;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BroadcastEvent';
	}

	/**
	 * Get video format.
	 * 
	 * @return Property\VideoFormat
	 */
	public function getVideoFormat() {
		return $this->videoFormat;
	}

	/**
	 * Set broadcast of event.
	 * 
	 * @param Property\BroadcastOfEvent $broadcastOfEvent
	 * @return BroadcastEvent
	 */
	public function setBroadcastOfEvent(Property\BroadcastOfEvent $broadcastOfEvent) {
		$this->broadcastOfEvent = $broadcastOfEvent;

		return $this;
	}

	/**
	 * Set is live broadcast.
	 * 
	 * @param Property\IsLiveBroadcast $isLiveBroadcast
	 * @return BroadcastEvent
	 */
	public function setIsLiveBroadcast(Property\IsLiveBroadcast $isLiveBroadcast) {
		$this->isLiveBroadcast = $isLiveBroadcast;

		return $this;
	}

	/**
	 * Set video format.
	 * 
	 * @param Property\VideoFormat $videoFormat
	 * @return BroadcastEvent
	 */
	public function setVideoFormat(Property\VideoFormat $videoFormat) {
		$this->videoFormat = $videoFormat;

		return $this;
	}
}