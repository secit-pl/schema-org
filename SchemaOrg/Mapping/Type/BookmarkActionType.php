<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BookmarkActionType.
 * 
 * @method BookmarkActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method BookmarkActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BookmarkActionType setAgent(Property\AgentProperty $agent)
 * @method BookmarkActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BookmarkActionType setDescription(Property\DescriptionProperty $description)
 * @method BookmarkActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BookmarkActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method BookmarkActionType setError(Property\ErrorProperty $error)
 * @method BookmarkActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BookmarkActionType setImage(Property\ImageProperty $image)
 * @method BookmarkActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method BookmarkActionType setLocation(Property\LocationProperty $location)
 * @method BookmarkActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BookmarkActionType setName(Property\NameProperty $name)
 * @method BookmarkActionType setObject(Property\ObjectProperty $object)
 * @method BookmarkActionType setParticipant(Property\ParticipantProperty $participant)
 * @method BookmarkActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BookmarkActionType setResult(Property\ResultProperty $result)
 * @method BookmarkActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method BookmarkActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method BookmarkActionType setTarget(Property\TargetProperty $target)
 * @method BookmarkActionType setUrl(Property\UrlProperty $url)
 */
class BookmarkActionType extends OrganizeActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BookmarkAction';
	}
}