<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LodgingBusinessType.
 * 
 * @method LodgingBusinessType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LodgingBusinessType setAddress(Property\AddressProperty $address)
 * @method LodgingBusinessType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LodgingBusinessType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LodgingBusinessType setAlumni(Property\AlumniProperty $alumni)
 * @method LodgingBusinessType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method LodgingBusinessType setAward(Property\AwardProperty $award)
 * @method LodgingBusinessType setBrand(Property\BrandProperty $brand)
 * @method LodgingBusinessType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method LodgingBusinessType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method LodgingBusinessType setDepartment(Property\DepartmentProperty $department)
 * @method LodgingBusinessType setDescription(Property\DescriptionProperty $description)
 * @method LodgingBusinessType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LodgingBusinessType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method LodgingBusinessType setDuns(Property\DunsProperty $duns)
 * @method LodgingBusinessType setEmail(Property\EmailProperty $email)
 * @method LodgingBusinessType setEmployee(Property\EmployeeProperty $employee)
 * @method LodgingBusinessType setEvent(Property\EventProperty $event)
 * @method LodgingBusinessType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LodgingBusinessType setFounder(Property\FounderProperty $founder)
 * @method LodgingBusinessType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method LodgingBusinessType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method LodgingBusinessType setFunder(Property\FunderProperty $funder)
 * @method LodgingBusinessType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LodgingBusinessType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method LodgingBusinessType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method LodgingBusinessType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LodgingBusinessType setImage(Property\ImageProperty $image)
 * @method LodgingBusinessType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LodgingBusinessType setLegalName(Property\LegalNameProperty $legalName)
 * @method LodgingBusinessType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method LodgingBusinessType setLocation(Property\LocationProperty $location)
 * @method LodgingBusinessType setLogo(Property\LogoProperty $logo)
 * @method LodgingBusinessType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LodgingBusinessType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method LodgingBusinessType setMember(Property\MemberProperty $member)
 * @method LodgingBusinessType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method LodgingBusinessType setNaics(Property\NaicsProperty $naics)
 * @method LodgingBusinessType setName(Property\NameProperty $name)
 * @method LodgingBusinessType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method LodgingBusinessType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method LodgingBusinessType setOwns(Property\OwnsProperty $owns)
 * @method LodgingBusinessType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method LodgingBusinessType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method LodgingBusinessType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LodgingBusinessType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method LodgingBusinessType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method LodgingBusinessType setReview(Property\ReviewProperty $review)
 * @method LodgingBusinessType setSameAs(Property\SameAsProperty $sameAs)
 * @method LodgingBusinessType setSeeks(Property\SeeksProperty $seeks)
 * @method LodgingBusinessType setSponsor(Property\SponsorProperty $sponsor)
 * @method LodgingBusinessType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method LodgingBusinessType setTaxID(Property\TaxIDProperty $taxID)
 * @method LodgingBusinessType setTelephone(Property\TelephoneProperty $telephone)
 * @method LodgingBusinessType setUrl(Property\UrlProperty $url)
 * @method LodgingBusinessType setVatID(Property\VatIDProperty $vatID)
 */
class LodgingBusinessType extends LocalBusinessType {

	/**
	 * @var Property\AmenityFeatureProperty
	 */
	private $amenityFeature;

	/**
	 * @var Property\AudienceProperty
	 */
	private $audience;

	/**
	 * @var Property\AvailableLanguageProperty
	 */
	private $availableLanguage;

	/**
	 * @var Property\CheckinTimeProperty
	 */
	private $checkinTime;

	/**
	 * @var Property\CheckoutTimeProperty
	 */
	private $checkoutTime;

	/**
	 * @var Property\PetsAllowedProperty
	 */
	private $petsAllowed;

	/**
	 * @var Property\StarRatingProperty
	 */
	private $starRating;

	/**
	 * Get amenity feature.
	 * 
	 * @return Property\AmenityFeatureProperty
	 */
	public function getAmenityFeature() {
		return $this->amenityFeature;
	}

	/**
	 * Get audience.
	 * 
	 * @return Property\AudienceProperty
	 */
	public function getAudience() {
		return $this->audience;
	}

	/**
	 * Get available language.
	 * 
	 * @return Property\AvailableLanguageProperty
	 */
	public function getAvailableLanguage() {
		return $this->availableLanguage;
	}

	/**
	 * Get checkin time.
	 * 
	 * @return Property\CheckinTimeProperty
	 */
	public function getCheckinTime() {
		return $this->checkinTime;
	}

	/**
	 * Get checkout time.
	 * 
	 * @return Property\CheckoutTimeProperty
	 */
	public function getCheckoutTime() {
		return $this->checkoutTime;
	}

	/**
	 * Get pets allowed.
	 * 
	 * @return Property\PetsAllowedProperty
	 */
	public function getPetsAllowed() {
		return $this->petsAllowed;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LodgingBusiness';
	}

	/**
	 * Get star rating.
	 * 
	 * @return Property\StarRatingProperty
	 */
	public function getStarRating() {
		return $this->starRating;
	}

	/**
	 * Set amenity feature.
	 * 
	 * @param Property\AmenityFeatureProperty $amenityFeature
	 * @return LodgingBusinessType
	 */
	public function setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature) {
		$this->amenityFeature = $amenityFeature;

		return $this;
	}

	/**
	 * Set audience.
	 * 
	 * @param Property\AudienceProperty $audience
	 * @return LodgingBusinessType
	 */
	public function setAudience(Property\AudienceProperty $audience) {
		$this->audience = $audience;

		return $this;
	}

	/**
	 * Set available language.
	 * 
	 * @param Property\AvailableLanguageProperty $availableLanguage
	 * @return LodgingBusinessType
	 */
	public function setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage) {
		$this->availableLanguage = $availableLanguage;

		return $this;
	}

	/**
	 * Set checkin time.
	 * 
	 * @param Property\CheckinTimeProperty $checkinTime
	 * @return LodgingBusinessType
	 */
	public function setCheckinTime(Property\CheckinTimeProperty $checkinTime) {
		$this->checkinTime = $checkinTime;

		return $this;
	}

	/**
	 * Set checkout time.
	 * 
	 * @param Property\CheckoutTimeProperty $checkoutTime
	 * @return LodgingBusinessType
	 */
	public function setCheckoutTime(Property\CheckoutTimeProperty $checkoutTime) {
		$this->checkoutTime = $checkoutTime;

		return $this;
	}

	/**
	 * Set pets allowed.
	 * 
	 * @param Property\PetsAllowedProperty $petsAllowed
	 * @return LodgingBusinessType
	 */
	public function setPetsAllowed(Property\PetsAllowedProperty $petsAllowed) {
		$this->petsAllowed = $petsAllowed;

		return $this;
	}

	/**
	 * Set star rating.
	 * 
	 * @param Property\StarRatingProperty $starRating
	 * @return LodgingBusinessType
	 */
	public function setStarRating(Property\StarRatingProperty $starRating) {
		$this->starRating = $starRating;

		return $this;
	}
}