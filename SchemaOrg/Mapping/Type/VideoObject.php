<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class VideoObject.
 */
class VideoObject {

	/**
	 * @var Property\Actor
	 */
	private $actor;

	/**
	 * @var Property\Caption
	 */
	private $caption;

	/**
	 * @var Property\Director
	 */
	private $director;

	/**
	 */
	private $id;

	/**
	 * @var Property\MusicBy
	 */
	private $musicBy;

	/**
	 * @var Property\Thumbnail
	 */
	private $thumbnail;

	/**
	 * @var Property\Transcript
	 */
	private $transcript;

	/**
	 * @var Property\VideoFrameSize
	 */
	private $videoFrameSize;

	/**
	 * @var Property\VideoQuality
	 */
	private $videoQuality;

	/**
	 * VideoObject constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get actor.
	 * 
	 * @return Property\Actor
	 */
	public function getActor() {
		return $this->actor;
	}

	/**
	 * Get caption.
	 * 
	 * @return Property\Caption
	 */
	public function getCaption() {
		return $this->caption;
	}

	/**
	 * Get director.
	 * 
	 * @return Property\Director
	 */
	public function getDirector() {
		return $this->director;
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
	 * Get music by.
	 * 
	 * @return Property\MusicBy
	 */
	public function getMusicBy() {
		return $this->musicBy;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VideoObject';
	}

	/**
	 * Get thumbnail.
	 * 
	 * @return Property\Thumbnail
	 */
	public function getThumbnail() {
		return $this->thumbnail;
	}

	/**
	 * Get transcript.
	 * 
	 * @return Property\Transcript
	 */
	public function getTranscript() {
		return $this->transcript;
	}

	/**
	 * Get video frame size.
	 * 
	 * @return Property\VideoFrameSize
	 */
	public function getVideoFrameSize() {
		return $this->videoFrameSize;
	}

	/**
	 * Get video quality.
	 * 
	 * @return Property\VideoQuality
	 */
	public function getVideoQuality() {
		return $this->videoQuality;
	}

	/**
	 * Set actor.
	 * 
	 * @param Property\Actor $actor
	 * @return VideoObject
	 */
	public function setActor(Property\Actor $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set caption.
	 * 
	 * @param Property\Caption $caption
	 * @return VideoObject
	 */
	public function setCaption(Property\Caption $caption) {
		$this->caption = $caption;

		return $this;
	}

	/**
	 * Set director.
	 * 
	 * @param Property\Director $director
	 * @return VideoObject
	 */
	public function setDirector(Property\Director $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set music by.
	 * 
	 * @param Property\MusicBy $musicBy
	 * @return VideoObject
	 */
	public function setMusicBy(Property\MusicBy $musicBy) {
		$this->musicBy = $musicBy;

		return $this;
	}

	/**
	 * Set thumbnail.
	 * 
	 * @param Property\Thumbnail $thumbnail
	 * @return VideoObject
	 */
	public function setThumbnail(Property\Thumbnail $thumbnail) {
		$this->thumbnail = $thumbnail;

		return $this;
	}

	/**
	 * Set transcript.
	 * 
	 * @param Property\Transcript $transcript
	 * @return VideoObject
	 */
	public function setTranscript(Property\Transcript $transcript) {
		$this->transcript = $transcript;

		return $this;
	}

	/**
	 * Set video frame size.
	 * 
	 * @param Property\VideoFrameSize $videoFrameSize
	 * @return VideoObject
	 */
	public function setVideoFrameSize(Property\VideoFrameSize $videoFrameSize) {
		$this->videoFrameSize = $videoFrameSize;

		return $this;
	}

	/**
	 * Set video quality.
	 * 
	 * @param Property\VideoQuality $videoQuality
	 * @return VideoObject
	 */
	public function setVideoQuality(Property\VideoQuality $videoQuality) {
		$this->videoQuality = $videoQuality;

		return $this;
	}
}