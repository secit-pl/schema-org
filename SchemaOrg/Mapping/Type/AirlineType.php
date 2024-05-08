<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An organization that provides flights for passengers.
 * 
 * @method AirlineType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AirlineType setAddress(Property\AddressProperty $address)
 * @method AirlineType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AirlineType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AirlineType setAlumni(Property\AlumniProperty $alumni)
 * @method AirlineType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method AirlineType setAward(Property\AwardProperty $award)
 * @method AirlineType setBrand(Property\BrandProperty $brand)
 * @method AirlineType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method AirlineType setDepartment(Property\DepartmentProperty $department)
 * @method AirlineType setDescription(Property\DescriptionProperty $description)
 * @method AirlineType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AirlineType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method AirlineType setDuns(Property\DunsProperty $duns)
 * @method AirlineType setEmail(Property\EmailProperty $email)
 * @method AirlineType setEmployee(Property\EmployeeProperty $employee)
 * @method AirlineType setEvent(Property\EventProperty $event)
 * @method AirlineType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AirlineType setFounder(Property\FounderProperty $founder)
 * @method AirlineType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method AirlineType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method AirlineType setFunder(Property\FunderProperty $funder)
 * @method AirlineType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AirlineType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method AirlineType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method AirlineType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method AirlineType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AirlineType setImage(Property\ImageProperty $image)
 * @method AirlineType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method AirlineType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AirlineType setKeywords(Property\KeywordsProperty $keywords)
 * @method AirlineType setLegalName(Property\LegalNameProperty $legalName)
 * @method AirlineType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method AirlineType setLocation(Property\LocationProperty $location)
 * @method AirlineType setLogo(Property\LogoProperty $logo)
 * @method AirlineType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AirlineType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method AirlineType setMember(Property\MemberProperty $member)
 * @method AirlineType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method AirlineType setNaics(Property\NaicsProperty $naics)
 * @method AirlineType setName(Property\NameProperty $name)
 * @method AirlineType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method AirlineType setOwns(Property\OwnsProperty $owns)
 * @method AirlineType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method AirlineType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AirlineType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method AirlineType setReview(Property\ReviewProperty $review)
 * @method AirlineType setSameAs(Property\SameAsProperty $sameAs)
 * @method AirlineType setSeeks(Property\SeeksProperty $seeks)
 * @method AirlineType setSlogan(Property\SloganProperty $slogan)
 * @method AirlineType setSponsor(Property\SponsorProperty $sponsor)
 * @method AirlineType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method AirlineType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AirlineType setTaxID(Property\TaxIDProperty $taxID)
 * @method AirlineType setTelephone(Property\TelephoneProperty $telephone)
 * @method AirlineType setUrl(Property\UrlProperty $url)
 * @method AirlineType setVatID(Property\VatIDProperty $vatID)
 */
class AirlineType extends OrganizationType {

	/**
	 * @var Property\BoardingPolicyProperty
	 */
	private $boardingPolicy;

	/**
	 * @var Property\IataCodeProperty
	 */
	private $iataCode;

	/**
	 * Get boarding policy.
	 *
	 * @return Property\BoardingPolicyProperty
	 */
	public function getBoardingPolicy() {
		return $this->boardingPolicy;
	}

	/**
	 * Get iata code.
	 *
	 * @return Property\IataCodeProperty
	 */
	public function getIataCode() {
		return $this->iataCode;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Airline';
	}

	/**
	 * Set boarding policy.
	 *
	 * @param Property\BoardingPolicyProperty $boardingPolicy
	 * @return AirlineType
	 */
	public function setBoardingPolicy(Property\BoardingPolicyProperty $boardingPolicy) {
		$this->boardingPolicy = $boardingPolicy;

		return $this;
	}

	/**
	 * Set iata code.
	 *
	 * @param Property\IataCodeProperty $iataCode
	 * @return AirlineType
	 */
	public function setIataCode(Property\IataCodeProperty $iataCode) {
		$this->iataCode = $iataCode;

		return $this;
	}
}