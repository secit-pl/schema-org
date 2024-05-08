<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of authoring written creative content.
 * 
 * @method WriteActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method WriteActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WriteActionType setAgent(Property\AgentProperty $agent)
 * @method WriteActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WriteActionType setDescription(Property\DescriptionProperty $description)
 * @method WriteActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WriteActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method WriteActionType setError(Property\ErrorProperty $error)
 * @method WriteActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WriteActionType setImage(Property\ImageProperty $image)
 * @method WriteActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method WriteActionType setLocation(Property\LocationProperty $location)
 * @method WriteActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WriteActionType setName(Property\NameProperty $name)
 * @method WriteActionType setObject(Property\ObjectProperty $object)
 * @method WriteActionType setParticipant(Property\ParticipantProperty $participant)
 * @method WriteActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WriteActionType setResult(Property\ResultProperty $result)
 * @method WriteActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method WriteActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method WriteActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method WriteActionType setTarget(Property\TargetProperty $target)
 * @method WriteActionType setUrl(Property\UrlProperty $url)
 */
class WriteActionType extends CreateActionType {

	/**
	 * @var Property\InLanguageProperty
	 */
	private $inLanguage;

	/**
	 * Get in language.
	 *
	 * @return Property\InLanguageProperty
	 */
	public function getInLanguage() {
		return $this->inLanguage;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WriteAction';
	}

	/**
	 * Set in language.
	 *
	 * @param Property\InLanguageProperty $inLanguage
	 * @return WriteActionType
	 */
	public function setInLanguage(Property\InLanguageProperty $inLanguage) {
		$this->inLanguage = $inLanguage;

		return $this;
	}
}