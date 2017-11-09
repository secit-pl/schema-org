<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MovieTheaterType.
 * 
 * @method MovieTheaterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MovieTheaterType setAddress(Property\AddressProperty $address)
 * @method MovieTheaterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MovieTheaterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MovieTheaterType setAlumni(Property\AlumniProperty $alumni)
 * @method MovieTheaterType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method MovieTheaterType setAward(Property\AwardProperty $award)
 * @method MovieTheaterType setBrand(Property\BrandProperty $brand)
 * @method MovieTheaterType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method MovieTheaterType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MovieTheaterType setDepartment(Property\DepartmentProperty $department)
 * @method MovieTheaterType setDescription(Property\DescriptionProperty $description)
 * @method MovieTheaterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MovieTheaterType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method MovieTheaterType setDuns(Property\DunsProperty $duns)
 * @method MovieTheaterType setEmail(Property\EmailProperty $email)
 * @method MovieTheaterType setEmployee(Property\EmployeeProperty $employee)
 * @method MovieTheaterType setEvent(Property\EventProperty $event)
 * @method MovieTheaterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MovieTheaterType setFounder(Property\FounderProperty $founder)
 * @method MovieTheaterType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method MovieTheaterType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method MovieTheaterType setFunder(Property\FunderProperty $funder)
 * @method MovieTheaterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MovieTheaterType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method MovieTheaterType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method MovieTheaterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MovieTheaterType setImage(Property\ImageProperty $image)
 * @method MovieTheaterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MovieTheaterType setLegalName(Property\LegalNameProperty $legalName)
 * @method MovieTheaterType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method MovieTheaterType setLocation(Property\LocationProperty $location)
 * @method MovieTheaterType setLogo(Property\LogoProperty $logo)
 * @method MovieTheaterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MovieTheaterType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method MovieTheaterType setMember(Property\MemberProperty $member)
 * @method MovieTheaterType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method MovieTheaterType setNaics(Property\NaicsProperty $naics)
 * @method MovieTheaterType setName(Property\NameProperty $name)
 * @method MovieTheaterType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method MovieTheaterType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MovieTheaterType setOwns(Property\OwnsProperty $owns)
 * @method MovieTheaterType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method MovieTheaterType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MovieTheaterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MovieTheaterType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MovieTheaterType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method MovieTheaterType setReview(Property\ReviewProperty $review)
 * @method MovieTheaterType setSameAs(Property\SameAsProperty $sameAs)
 * @method MovieTheaterType setSeeks(Property\SeeksProperty $seeks)
 * @method MovieTheaterType setSponsor(Property\SponsorProperty $sponsor)
 * @method MovieTheaterType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method MovieTheaterType setTaxID(Property\TaxIDProperty $taxID)
 * @method MovieTheaterType setTelephone(Property\TelephoneProperty $telephone)
 * @method MovieTheaterType setUrl(Property\UrlProperty $url)
 * @method MovieTheaterType setVatID(Property\VatIDProperty $vatID)
 */
class MovieTheaterType extends EntertainmentBusinessType {

	/**
	 * @var Property\ScreenCountProperty
	 */
	private $screenCount;

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MovieTheater';
	}

	/**
	 * Get screen count.
	 * 
	 * @return Property\ScreenCountProperty
	 */
	public function getScreenCount() {
		return $this->screenCount;
	}

	/**
	 * Set screen count.
	 * 
	 * @param Property\ScreenCountProperty $screenCount
	 * @return MovieTheaterType
	 */
	public function setScreenCount(Property\ScreenCountProperty $screenCount) {
		$this->screenCount = $screenCount;

		return $this;
	}
}