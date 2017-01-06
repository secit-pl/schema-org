<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SearchAction.
 * 
 * @method SearchAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method SearchAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method SearchAction setAgent(Property\Agent $agent)
 * @method SearchAction setAlternateName(Property\AlternateName $alternateName)
 * @method SearchAction setDescription(Property\Description $description)
 * @method SearchAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SearchAction setEndTime(Property\EndTime $endTime)
 * @method SearchAction setError(Property\Error $error)
 * @method SearchAction setImage(Property\Image $image)
 * @method SearchAction setInstrument(Property\Instrument $instrument)
 * @method SearchAction setLocation(Property\Location $location)
 * @method SearchAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SearchAction setName(Property\Name $name)
 * @method SearchAction setObject(Property\Object $object)
 * @method SearchAction setParticipant(Property\Participant $participant)
 * @method SearchAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SearchAction setResult(Property\Result $result)
 * @method SearchAction setSameAs(Property\SameAs $sameAs)
 * @method SearchAction setStartTime(Property\StartTime $startTime)
 * @method SearchAction setTarget(Property\Target $target)
 * @method SearchAction setUrl(Property\Url $url)
 */
class SearchAction extends Action {

	/**
	 * @var Property\Query
	 */
	private $query;

	/**
	 * Get query.
	 * 
	 * @return Property\Query
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
	 * @param Property\Query $query
	 * @return SearchAction
	 */
	public function setQuery(Property\Query $query) {
		$this->query = $query;

		return $this;
	}
}