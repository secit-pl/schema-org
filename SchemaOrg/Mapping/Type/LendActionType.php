<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of providing an object under an agreement that it will be returned at a later date. Reciprocal of BorrowAction. Related actions: BorrowAction: Reciprocal of LendAction.
 * 
 * @method LendActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method LendActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LendActionType setAgent(Property\AgentProperty $agent)
 * @method LendActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LendActionType setDescription(Property\DescriptionProperty $description)
 * @method LendActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LendActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method LendActionType setError(Property\ErrorProperty $error)
 * @method LendActionType setFromLocation(Property\FromLocationProperty $fromLocation)
 * @method LendActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LendActionType setImage(Property\ImageProperty $image)
 * @method LendActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method LendActionType setLocation(Property\LocationProperty $location)
 * @method LendActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LendActionType setName(Property\NameProperty $name)
 * @method LendActionType setObject(Property\ObjectProperty $object)
 * @method LendActionType setParticipant(Property\ParticipantProperty $participant)
 * @method LendActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LendActionType setResult(Property\ResultProperty $result)
 * @method LendActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method LendActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method LendActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LendActionType setTarget(Property\TargetProperty $target)
 * @method LendActionType setToLocation(Property\ToLocationProperty $toLocation)
 * @method LendActionType setUrl(Property\UrlProperty $url)
 */
class LendActionType extends TransferActionType {

	/**
	 * @var Property\BorrowerProperty
	 */
	private $borrower;

	/**
	 * Get borrower.
	 *
	 * @return Property\BorrowerProperty
	 */
	public function getBorrower() {
		return $this->borrower;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LendAction';
	}

	/**
	 * Set borrower.
	 *
	 * @param Property\BorrowerProperty $borrower
	 * @return LendActionType
	 */
	public function setBorrower(Property\BorrowerProperty $borrower) {
		$this->borrower = $borrower;

		return $this;
	}
}