<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of capturing sound and moving images on film, video, or digitally.
 * 
 * @method FilmActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method FilmActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FilmActionType setAgent(Property\AgentProperty $agent)
 * @method FilmActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FilmActionType setDescription(Property\DescriptionProperty $description)
 * @method FilmActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FilmActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method FilmActionType setError(Property\ErrorProperty $error)
 * @method FilmActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FilmActionType setImage(Property\ImageProperty $image)
 * @method FilmActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method FilmActionType setLocation(Property\LocationProperty $location)
 * @method FilmActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FilmActionType setName(Property\NameProperty $name)
 * @method FilmActionType setObject(Property\ObjectProperty $object)
 * @method FilmActionType setParticipant(Property\ParticipantProperty $participant)
 * @method FilmActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FilmActionType setResult(Property\ResultProperty $result)
 * @method FilmActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method FilmActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method FilmActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FilmActionType setTarget(Property\TargetProperty $target)
 * @method FilmActionType setUrl(Property\UrlProperty $url)
 */
class FilmActionType extends CreateActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FilmAction';
	}
}