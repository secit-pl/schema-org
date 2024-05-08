<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of obtaining an object under an agreement to return it at a later date. Reciprocal of LendAction. Related actions: LendAction: Reciprocal of BorrowAction.
 * 
 * @method BorrowActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method BorrowActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BorrowActionType setAgent(Property\AgentProperty $agent)
 * @method BorrowActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BorrowActionType setDescription(Property\DescriptionProperty $description)
 * @method BorrowActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BorrowActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method BorrowActionType setError(Property\ErrorProperty $error)
 * @method BorrowActionType setFromLocation(Property\FromLocationProperty $fromLocation)
 * @method BorrowActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BorrowActionType setImage(Property\ImageProperty $image)
 * @method BorrowActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method BorrowActionType setLocation(Property\LocationProperty $location)
 * @method BorrowActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BorrowActionType setName(Property\NameProperty $name)
 * @method BorrowActionType setObject(Property\ObjectProperty $object)
 * @method BorrowActionType setParticipant(Property\ParticipantProperty $participant)
 * @method BorrowActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BorrowActionType setResult(Property\ResultProperty $result)
 * @method BorrowActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method BorrowActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method BorrowActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BorrowActionType setTarget(Property\TargetProperty $target)
 * @method BorrowActionType setToLocation(Property\ToLocationProperty $toLocation)
 * @method BorrowActionType setUrl(Property\UrlProperty $url)
 */
class BorrowActionType extends TransferActionType {

	/**
	 * @var Property\LenderProperty
	 */
	private $lender;

	/**
	 * Get lender.
	 *
	 * @return Property\LenderProperty
	 */
	public function getLender() {
		return $this->lender;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BorrowAction';
	}

	/**
	 * Set lender.
	 *
	 * @param Property\LenderProperty $lender
	 * @return BorrowActionType
	 */
	public function setLender(Property\LenderProperty $lender) {
		$this->lender = $lender;

		return $this;
	}
}