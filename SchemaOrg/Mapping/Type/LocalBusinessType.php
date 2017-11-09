<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LocalBusinessType.
 * 
 * @method LocalBusinessType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LocalBusinessType setAddress(Property\AddressProperty $address)
 * @method LocalBusinessType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LocalBusinessType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LocalBusinessType setAlumni(Property\AlumniProperty $alumni)
 * @method LocalBusinessType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method LocalBusinessType setAward(Property\AwardProperty $award)
 * @method LocalBusinessType setBrand(Property\BrandProperty $brand)
 * @method LocalBusinessType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method LocalBusinessType setDepartment(Property\DepartmentProperty $department)
 * @method LocalBusinessType setDescription(Property\DescriptionProperty $description)
 * @method LocalBusinessType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LocalBusinessType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method LocalBusinessType setDuns(Property\DunsProperty $duns)
 * @method LocalBusinessType setEmail(Property\EmailProperty $email)
 * @method LocalBusinessType setEmployee(Property\EmployeeProperty $employee)
 * @method LocalBusinessType setEvent(Property\EventProperty $event)
 * @method LocalBusinessType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LocalBusinessType setFounder(Property\FounderProperty $founder)
 * @method LocalBusinessType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method LocalBusinessType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method LocalBusinessType setFunder(Property\FunderProperty $funder)
 * @method LocalBusinessType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LocalBusinessType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method LocalBusinessType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method LocalBusinessType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LocalBusinessType setImage(Property\ImageProperty $image)
 * @method LocalBusinessType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LocalBusinessType setLegalName(Property\LegalNameProperty $legalName)
 * @method LocalBusinessType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method LocalBusinessType setLocation(Property\LocationProperty $location)
 * @method LocalBusinessType setLogo(Property\LogoProperty $logo)
 * @method LocalBusinessType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LocalBusinessType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method LocalBusinessType setMember(Property\MemberProperty $member)
 * @method LocalBusinessType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method LocalBusinessType setNaics(Property\NaicsProperty $naics)
 * @method LocalBusinessType setName(Property\NameProperty $name)
 * @method LocalBusinessType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method LocalBusinessType setOwns(Property\OwnsProperty $owns)
 * @method LocalBusinessType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method LocalBusinessType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LocalBusinessType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method LocalBusinessType setReview(Property\ReviewProperty $review)
 * @method LocalBusinessType setSameAs(Property\SameAsProperty $sameAs)
 * @method LocalBusinessType setSeeks(Property\SeeksProperty $seeks)
 * @method LocalBusinessType setSponsor(Property\SponsorProperty $sponsor)
 * @method LocalBusinessType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method LocalBusinessType setTaxID(Property\TaxIDProperty $taxID)
 * @method LocalBusinessType setTelephone(Property\TelephoneProperty $telephone)
 * @method LocalBusinessType setUrl(Property\UrlProperty $url)
 * @method LocalBusinessType setVatID(Property\VatIDProperty $vatID)
 */
class LocalBusinessType extends OrganizationType {

	/**
	 * @var Property\CurrenciesAcceptedProperty
	 */
	private $currenciesAccepted;

	/**
	 * @var Property\OpeningHoursProperty
	 */
	private $openingHours;

	/**
	 * @var Property\PaymentAcceptedProperty
	 */
	private $paymentAccepted;

	/**
	 * @var Property\PriceRangeProperty
	 */
	private $priceRange;

	/**
	 * Get currencies accepted.
	 * 
	 * @return Property\CurrenciesAcceptedProperty
	 */
	public function getCurrenciesAccepted() {
		return $this->currenciesAccepted;
	}

	/**
	 * Get opening hours.
	 * 
	 * @return Property\OpeningHoursProperty
	 */
	public function getOpeningHours() {
		return $this->openingHours;
	}

	/**
	 * Get payment accepted.
	 * 
	 * @return Property\PaymentAcceptedProperty
	 */
	public function getPaymentAccepted() {
		return $this->paymentAccepted;
	}

	/**
	 * Get price range.
	 * 
	 * @return Property\PriceRangeProperty
	 */
	public function getPriceRange() {
		return $this->priceRange;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LocalBusiness';
	}

	/**
	 * Set currencies accepted.
	 * 
	 * @param Property\CurrenciesAcceptedProperty $currenciesAccepted
	 * @return LocalBusinessType
	 */
	public function setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted) {
		$this->currenciesAccepted = $currenciesAccepted;

		return $this;
	}

	/**
	 * Set opening hours.
	 * 
	 * @param Property\OpeningHoursProperty $openingHours
	 * @return LocalBusinessType
	 */
	public function setOpeningHours(Property\OpeningHoursProperty $openingHours) {
		$this->openingHours = $openingHours;

		return $this;
	}

	/**
	 * Set payment accepted.
	 * 
	 * @param Property\PaymentAcceptedProperty $paymentAccepted
	 * @return LocalBusinessType
	 */
	public function setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted) {
		$this->paymentAccepted = $paymentAccepted;

		return $this;
	}

	/**
	 * Set price range.
	 * 
	 * @param Property\PriceRangeProperty $priceRange
	 * @return LocalBusinessType
	 */
	public function setPriceRange(Property\PriceRangeProperty $priceRange) {
		$this->priceRange = $priceRange;

		return $this;
	}
}