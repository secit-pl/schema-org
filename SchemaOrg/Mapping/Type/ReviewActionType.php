<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of producing a balanced opinion about the object for an audience. An agent reviews an object with participants resulting in a review.
 * 
 * @method ReviewActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ReviewActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReviewActionType setAgent(Property\AgentProperty $agent)
 * @method ReviewActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReviewActionType setDescription(Property\DescriptionProperty $description)
 * @method ReviewActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReviewActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ReviewActionType setError(Property\ErrorProperty $error)
 * @method ReviewActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReviewActionType setImage(Property\ImageProperty $image)
 * @method ReviewActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ReviewActionType setLocation(Property\LocationProperty $location)
 * @method ReviewActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReviewActionType setName(Property\NameProperty $name)
 * @method ReviewActionType setObject(Property\ObjectProperty $object)
 * @method ReviewActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ReviewActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReviewActionType setResult(Property\ResultProperty $result)
 * @method ReviewActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReviewActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ReviewActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ReviewActionType setTarget(Property\TargetProperty $target)
 * @method ReviewActionType setUrl(Property\UrlProperty $url)
 */
class ReviewActionType extends AssessActionType {

	/**
	 * @var Property\ResultReviewProperty
	 */
	private $resultReview;

	/**
	 * Get result review.
	 *
	 * @return Property\ResultReviewProperty
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
	 * @param Property\ResultReviewProperty $resultReview
	 * @return ReviewActionType
	 */
	public function setResultReview(Property\ResultReviewProperty $resultReview) {
		$this->resultReview = $resultReview;

		return $this;
	}
}