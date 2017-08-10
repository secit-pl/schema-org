<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TelevisionChannel.
 * 
 * @method TelevisionChannel setBroadcastChannelId(Property\BroadcastChannelId $broadcastChannelId)
 * @method TelevisionChannel setBroadcastServiceTier(Property\BroadcastServiceTier $broadcastServiceTier)
 * @method TelevisionChannel setGenre(Property\Genre $genre)
 * @method TelevisionChannel setInBroadcastLineup(Property\InBroadcastLineup $inBroadcastLineup)
 * @method TelevisionChannel setProvidesBroadcastService(Property\ProvidesBroadcastService $providesBroadcastService)
 */
class TelevisionChannel extends BroadcastChannel {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TelevisionChannel';
	}
}