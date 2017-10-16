<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReviewAction.
 * 
 * @method ReviewAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ReviewAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ReviewAction setAgent(Property\Agent $agent)
 * @method ReviewAction setAlternateName(Property\AlternateName $alternateName)
 * @method ReviewAction setDescription(Property\Description $description)
 * @method ReviewAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ReviewAction setEndTime(Property\EndTime $endTime)
 * @method ReviewAction setError(Property\Error $error)
 * @method ReviewAction setIdentifier(Property\Identifier $identifier)
 * @method ReviewAction setImage(Property\Image $image)
 * @method ReviewAction setInstrument(Property\Instrument $instrument)
 * @method ReviewAction setLocation(Property\Location $location)
 * @method ReviewAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ReviewAction setName(Property\Name $name)
 * @method ReviewAction setObject(Property\Object $object)
 * @method ReviewAction setParticipant(Property\Participant $participant)
 * @method ReviewAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ReviewAction setResult(Property\Result $result)
 * @method ReviewAction setSameAs(Property\SameAs $sameAs)
 * @method ReviewAction setStartTime(Property\StartTime $startTime)
 * @method ReviewAction setTarget(Property\Target $target)
 * @method ReviewAction setUrl(Property\Url $url)
 */
class ReviewAction extends AssessAction {

	/**
	 * @var Property\ResultReview
	 */
	private $resultReview;

	/**
	 * Get result review.
	 * 
	 * @return Property\ResultReview
	 */
	public function getResultReview() {
		return $this->resultReview;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReviewAction';
	}

	/**
	 * Set result review.
	 * 
	 * @param Property\ResultReview $resultReview
	 * @return ReviewAction
	 */
	public function setResultReview(Property\ResultReview $resultReview) {
		$this->resultReview = $resultReview;

		return $this;
	}
}