<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InstallActionType.
 * 
 * @method InstallActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method InstallActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InstallActionType setAgent(Property\AgentProperty $agent)
 * @method InstallActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InstallActionType setDescription(Property\DescriptionProperty $description)
 * @method InstallActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InstallActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method InstallActionType setError(Property\ErrorProperty $error)
 * @method InstallActionType setExpectsAcceptanceOf(Property\ExpectsAcceptanceOfProperty $expectsAcceptanceOf)
 * @method InstallActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InstallActionType setImage(Property\ImageProperty $image)
 * @method InstallActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method InstallActionType setLocation(Property\LocationProperty $location)
 * @method InstallActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InstallActionType setName(Property\NameProperty $name)
 * @method InstallActionType setObject(Property\ObjectProperty $object)
 * @method InstallActionType setParticipant(Property\ParticipantProperty $participant)
 * @method InstallActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InstallActionType setResult(Property\ResultProperty $result)
 * @method InstallActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method InstallActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method InstallActionType setTarget(Property\TargetProperty $target)
 * @method InstallActionType setUrl(Property\UrlProperty $url)
 */
class InstallActionType extends ConsumeActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InstallAction';
	}
}