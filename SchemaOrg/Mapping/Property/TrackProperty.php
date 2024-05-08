<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * A music recording (track)—usually a single song. If an ItemList is given, the list should contain items of type MusicRecording.
 * 
 * @method TrackProperty setValue($value)
 */
class TrackProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/track';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\ItemListType || $value instanceof Type\MusicRecordingType;
	}
}