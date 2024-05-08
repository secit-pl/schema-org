<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A set of requirements that must be fulfilled in order to perform an Action.
 * 
 * @method ActionAccessSpecificationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ActionAccessSpecificationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ActionAccessSpecificationType setDescription(Property\DescriptionProperty $description)
 * @method ActionAccessSpecificationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ActionAccessSpecificationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ActionAccessSpecificationType setImage(Property\ImageProperty $image)
 * @method ActionAccessSpecificationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ActionAccessSpecificationType setName(Property\NameProperty $name)
 * @method ActionAccessSpecificationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ActionAccessSpecificationType setSameAs(Property\SameAsProperty $sameAs)
 * @method ActionAccessSpecificationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ActionAccessSpecificationType setUrl(Property\UrlProperty $url)
 */
class ActionAccessSpecificationType extends IntangibleType {

	/**
	 * @var Property\AvailabilityEndsProperty
	 */
	private $availabilityEnds;

	/**
	 * @var Property\AvailabilityStartsProperty
	 */
	private $availabilityStarts;

	/**
	 * @var Property\CategoryProperty
	 */
	private $category;

	/**
	 * @var Property\EligibleRegionProperty
	 */
	private $eligibleRegion;

	/**
	 * @var Property\ExpectsAcceptanceOfProperty
	 */
	private $expectsAcceptanceOf;

	/**
	 * @var Property\RequiresSubscriptionProperty
	 */
	private $requiresSubscription;

	/**
	 * Get availability ends.
	 *
	 * @return Property\AvailabilityEndsProperty
	 */
	public function getAvailabilityEnds() {
		return $this->availabilityEnds;
	}

	/**
	 * Get availability starts.
	 *
	 * @return Property\AvailabilityStartsProperty
	 */
	public function getAvailabilityStarts() {
		return $this->availabilityStarts;
	}

	/**
	 * Get category.
	 *
	 * @return Property\CategoryProperty
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Get eligible region.
	 *
	 * @return Property\EligibleRegionProperty
	 */
	public function getEligibleRegion() {
		return $this->eligibleRegion;
	}

	/**
	 * Get expects acceptance of.
	 *
	 * @return Property\ExpectsAcceptanceOfProperty
	 */
	public function getExpectsAcceptanceOf() {
		return $this->expectsAcceptanceOf;
	}

	/**
	 * Get requires subscription.
	 *
	 * @return Property\RequiresSubscriptionProperty
	 */
	public function getRequiresSubscription() {
		return $this->requiresSubscription;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ActionAccessSpecification';
	}

	/**
	 * Set availability ends.
	 *
	 * @param Property\AvailabilityEndsProperty $availabilityEnds
	 * @return ActionAccessSpecificationType
	 */
	public function setAvailabilityEnds(Property\AvailabilityEndsProperty $availabilityEnds) {
		$this->availabilityEnds = $availabilityEnds;

		return $this;
	}

	/**
	 * Set availability starts.
	 *
	 * @param Property\AvailabilityStartsProperty $availabilityStarts
	 * @return ActionAccessSpecificationType
	 */
	public function setAvailabilityStarts(Property\AvailabilityStartsProperty $availabilityStarts) {
		$this->availabilityStarts = $availabilityStarts;

		return $this;
	}

	/**
	 * Set category.
	 *
	 * @param Property\CategoryProperty $category
	 * @return ActionAccessSpecificationType
	 */
	public function setCategory(Property\CategoryProperty $category) {
		$this->category = $category;

		return $this;
	}

	/**
	 * Set eligible region.
	 *
	 * @param Property\EligibleRegionProperty $eligibleRegion
	 * @return ActionAccessSpecificationType
	 */
	public function setEligibleRegion(Property\EligibleRegionProperty $eligibleRegion) {
		$this->eligibleRegion = $eligibleRegion;

		return $this;
	}

	/**
	 * Set expects acceptance of.
	 *
	 * @param Property\ExpectsAcceptanceOfProperty $expectsAcceptanceOf
	 * @return ActionAccessSpecificationType
	 */
	public function setExpectsAcceptanceOf(Property\ExpectsAcceptanceOfProperty $expectsAcceptanceOf) {
		$this->expectsAcceptanceOf = $expectsAcceptanceOf;

		return $this;
	}

	/**
	 * Set requires subscription.
	 *
	 * @param Property\RequiresSubscriptionProperty $requiresSubscription
	 * @return ActionAccessSpecificationType
	 */
	public function setRequiresSubscription(Property\RequiresSubscriptionProperty $requiresSubscription) {
		$this->requiresSubscription = $requiresSubscription;

		return $this;
	}
}