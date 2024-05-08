<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of expressing a preference from a set of options or a large or unbounded set of choices/options.
 * 
 * @method ChooseActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ChooseActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ChooseActionType setAgent(Property\AgentProperty $agent)
 * @method ChooseActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ChooseActionType setDescription(Property\DescriptionProperty $description)
 * @method ChooseActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ChooseActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ChooseActionType setError(Property\ErrorProperty $error)
 * @method ChooseActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ChooseActionType setImage(Property\ImageProperty $image)
 * @method ChooseActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ChooseActionType setLocation(Property\LocationProperty $location)
 * @method ChooseActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ChooseActionType setName(Property\NameProperty $name)
 * @method ChooseActionType setObject(Property\ObjectProperty $object)
 * @method ChooseActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ChooseActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ChooseActionType setResult(Property\ResultProperty $result)
 * @method ChooseActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ChooseActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ChooseActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ChooseActionType setTarget(Property\TargetProperty $target)
 * @method ChooseActionType setUrl(Property\UrlProperty $url)
 */
class ChooseActionType extends AssessActionType {

	/**
	 * @var Property\ActionOptionProperty
	 */
	private $actionOption;

	/**
	 * Get action option.
	 *
	 * @return Property\ActionOptionProperty
	 */
	public function getActionOption() {
		return $this->actionOption;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ChooseAction';
	}

	/**
	 * Set action option.
	 *
	 * @param Property\ActionOptionProperty $actionOption
	 * @return ChooseActionType
	 */
	public function setActionOption(Property\ActionOptionProperty $actionOption) {
		$this->actionOption = $actionOption;

		return $this;
	}
}