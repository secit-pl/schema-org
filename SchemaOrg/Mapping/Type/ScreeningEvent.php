<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ScreeningEvent.
 */
class ScreeningEvent {

	/**
	 */
	private $id;

	/**
	 * @var Property\SubtitleLanguage
	 */
	private $subtitleLanguage;

	/**
	 * @var Property\VideoFormat
	 */
	private $videoFormat;

	/**
	 * @var Property\WorkPresented
	 */
	private $workPresented;

	/**
	 * ScreeningEvent constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
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
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ScreeningEvent';
	}

	/**
	 * Get subtitle language.
	 * 
	 * @return Property\SubtitleLanguage
	 */
	public function getSubtitleLanguage() {
		return $this->subtitleLanguage;
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
	 * Get work presented.
	 * 
	 * @return Property\WorkPresented
	 */
	public function getWorkPresented() {
		return $this->workPresented;
	}

	/**
	 * Set subtitle language.
	 * 
	 * @param Property\SubtitleLanguage $subtitleLanguage
	 * @return ScreeningEvent
	 */
	public function setSubtitleLanguage(Property\SubtitleLanguage $subtitleLanguage) {
		$this->subtitleLanguage = $subtitleLanguage;

		return $this;
	}

	/**
	 * Set video format.
	 * 
	 * @param Property\VideoFormat $videoFormat
	 * @return ScreeningEvent
	 */
	public function setVideoFormat(Property\VideoFormat $videoFormat) {
		$this->videoFormat = $videoFormat;

		return $this;
	}

	/**
	 * Set work presented.
	 * 
	 * @param Property\WorkPresented $workPresented
	 * @return ScreeningEvent
	 */
	public function setWorkPresented(Property\WorkPresented $workPresented) {
		$this->workPresented = $workPresented;

		return $this;
	}
}