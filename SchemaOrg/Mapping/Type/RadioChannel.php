<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RadioChannel.
 * 
 * @method RadioChannel setBroadcastChannelId(Property\BroadcastChannelId $broadcastChannelId)
 * @method RadioChannel setBroadcastServiceTier(Property\BroadcastServiceTier $broadcastServiceTier)
 * @method RadioChannel setGenre(Property\Genre $genre)
 * @method RadioChannel setInBroadcastLineup(Property\InBroadcastLineup $inBroadcastLineup)
 * @method RadioChannel setProvidesBroadcastService(Property\ProvidesBroadcastService $providesBroadcastService)
 */
class RadioChannel extends BroadcastChannel {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RadioChannel';
	}
}