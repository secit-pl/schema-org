<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CampgroundType.
 * 
 * @method CampgroundType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CampgroundType setAddress(Property\AddressProperty $address)
 * @method CampgroundType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CampgroundType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CampgroundType setAlumni(Property\AlumniProperty $alumni)
 * @method CampgroundType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CampgroundType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method CampgroundType setAudience(Property\AudienceProperty $audience)
 * @method CampgroundType setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage)
 * @method CampgroundType setAward(Property\AwardProperty $award)
 * @method CampgroundType setBrand(Property\BrandProperty $brand)
 * @method CampgroundType setCheckinTime(Property\CheckinTimeProperty $checkinTime)
 * @method CampgroundType setCheckoutTime(Property\CheckoutTimeProperty $checkoutTime)
 * @method CampgroundType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method CampgroundType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method CampgroundType setDepartment(Property\DepartmentProperty $department)
 * @method CampgroundType setDescription(Property\DescriptionProperty $description)
 * @method CampgroundType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CampgroundType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method CampgroundType setDuns(Property\DunsProperty $duns)
 * @method CampgroundType setEmail(Property\EmailProperty $email)
 * @method CampgroundType setEmployee(Property\EmployeeProperty $employee)
 * @method CampgroundType setEvent(Property\EventProperty $event)
 * @method CampgroundType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CampgroundType setFounder(Property\FounderProperty $founder)
 * @method CampgroundType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method CampgroundType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method CampgroundType setFunder(Property\FunderProperty $funder)
 * @method CampgroundType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CampgroundType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method CampgroundType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method CampgroundType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CampgroundType setImage(Property\ImageProperty $image)
 * @method CampgroundType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CampgroundType setLegalName(Property\LegalNameProperty $legalName)
 * @method CampgroundType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method CampgroundType setLocation(Property\LocationProperty $location)
 * @method CampgroundType setLogo(Property\LogoProperty $logo)
 * @method CampgroundType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CampgroundType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method CampgroundType setMember(Property\MemberProperty $member)
 * @method CampgroundType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method CampgroundType setNaics(Property\NaicsProperty $naics)
 * @method CampgroundType setName(Property\NameProperty $name)
 * @method CampgroundType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method CampgroundType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method CampgroundType setOwns(Property\OwnsProperty $owns)
 * @method CampgroundType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method CampgroundType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method CampgroundType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method CampgroundType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CampgroundType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method CampgroundType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method CampgroundType setReview(Property\ReviewProperty $review)
 * @method CampgroundType setSameAs(Property\SameAsProperty $sameAs)
 * @method CampgroundType setSeeks(Property\SeeksProperty $seeks)
 * @method CampgroundType setSponsor(Property\SponsorProperty $sponsor)
 * @method CampgroundType setStarRating(Property\StarRatingProperty $starRating)
 * @method CampgroundType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method CampgroundType setTaxID(Property\TaxIDProperty $taxID)
 * @method CampgroundType setTelephone(Property\TelephoneProperty $telephone)
 * @method CampgroundType setUrl(Property\UrlProperty $url)
 * @method CampgroundType setVatID(Property\VatIDProperty $vatID)
 */
class CampgroundType extends LodgingBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Campground';
	}
}