<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaintActionType.
 * 
 * @method PaintActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method PaintActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PaintActionType setAgent(Property\AgentProperty $agent)
 * @method PaintActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PaintActionType setDescription(Property\DescriptionProperty $description)
 * @method PaintActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PaintActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method PaintActionType setError(Property\ErrorProperty $error)
 * @method PaintActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PaintActionType setImage(Property\ImageProperty $image)
 * @method PaintActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method PaintActionType setLocation(Property\LocationProperty $location)
 * @method PaintActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PaintActionType setName(Property\NameProperty $name)
 * @method PaintActionType setObject(Property\ObjectProperty $object)
 * @method PaintActionType setParticipant(Property\ParticipantProperty $participant)
 * @method PaintActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PaintActionType setResult(Property\ResultProperty $result)
 * @method PaintActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method PaintActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method PaintActionType setTarget(Property\TargetProperty $target)
 * @method PaintActionType setUrl(Property\UrlProperty $url)
 */
class PaintActionType extends CreateActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaintAction';
	}
}