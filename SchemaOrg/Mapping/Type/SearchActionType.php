<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of searching for an object. Related actions: FindAction: SearchAction generally leads to a FindAction, but not necessarily.
 * 
 * @method SearchActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method SearchActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SearchActionType setAgent(Property\AgentProperty $agent)
 * @method SearchActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SearchActionType setDescription(Property\DescriptionProperty $description)
 * @method SearchActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SearchActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method SearchActionType setError(Property\ErrorProperty $error)
 * @method SearchActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SearchActionType setImage(Property\ImageProperty $image)
 * @method SearchActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method SearchActionType setLocation(Property\LocationProperty $location)
 * @method SearchActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SearchActionType setName(Property\NameProperty $name)
 * @method SearchActionType setObject(Property\ObjectProperty $object)
 * @method SearchActionType setParticipant(Property\ParticipantProperty $participant)
 * @method SearchActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SearchActionType setResult(Property\ResultProperty $result)
 * @method SearchActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method SearchActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method SearchActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SearchActionType setTarget(Property\TargetProperty $target)
 * @method SearchActionType setUrl(Property\UrlProperty $url)
 */
class SearchActionType extends ActionType {

	/**
	 * @var Property\QueryProperty
	 */
	private $query;

	/**
	 * Get query.
	 *
	 * @return Property\QueryProperty
	 */
	public function getQuery() {
		return $this->query;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SearchAction';
	}

	/**
	 * Set query.
	 *
	 * @param Property\QueryProperty $query
	 * @return SearchActionType
	 */
	public function setQuery(Property\QueryProperty $query) {
		$this->query = $query;

		return $this;
	}
}