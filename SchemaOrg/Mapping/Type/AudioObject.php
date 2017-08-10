<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AudioObject.
 */
class AudioObject {

	/**
	 */
	private $id;

	/**
	 * @var Property\Transcript
	 */
	private $transcript;

	/**
	 * AudioObject constructor.
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
		return 'https://schema.org/AudioObject';
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
	 * Set transcript.
	 * 
	 * @param Property\Transcript $transcript
	 * @return AudioObject
	 */
	public function setTranscript(Property\Transcript $transcript) {
		$this->transcript = $transcript;

		return $this;
	}
}