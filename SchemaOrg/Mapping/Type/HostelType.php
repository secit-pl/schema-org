<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HostelType.
 * 
 * @method HostelType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HostelType setAddress(Property\AddressProperty $address)
 * @method HostelType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HostelType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HostelType setAlumni(Property\AlumniProperty $alumni)
 * @method HostelType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method HostelType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method HostelType setAudience(Property\AudienceProperty $audience)
 * @method HostelType setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage)
 * @method HostelType setAward(Property\AwardProperty $award)
 * @method HostelType setBrand(Property\BrandProperty $brand)
 * @method HostelType setCheckinTime(Property\CheckinTimeProperty $checkinTime)
 * @method HostelType setCheckoutTime(Property\CheckoutTimeProperty $checkoutTime)
 * @method HostelType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method HostelType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HostelType setDepartment(Property\DepartmentProperty $department)
 * @method HostelType setDescription(Property\DescriptionProperty $description)
 * @method HostelType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HostelType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method HostelType setDuns(Property\DunsProperty $duns)
 * @method HostelType setEmail(Property\EmailProperty $email)
 * @method HostelType setEmployee(Property\EmployeeProperty $employee)
 * @method HostelType setEvent(Property\EventProperty $event)
 * @method HostelType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HostelType setFounder(Property\FounderProperty $founder)
 * @method HostelType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method HostelType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method HostelType setFunder(Property\FunderProperty $funder)
 * @method HostelType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HostelType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method HostelType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method HostelType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HostelType setImage(Property\ImageProperty $image)
 * @method HostelType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HostelType setLegalName(Property\LegalNameProperty $legalName)
 * @method HostelType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method HostelType setLocation(Property\LocationProperty $location)
 * @method HostelType setLogo(Property\LogoProperty $logo)
 * @method HostelType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HostelType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method HostelType setMember(Property\MemberProperty $member)
 * @method HostelType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method HostelType setNaics(Property\NaicsProperty $naics)
 * @method HostelType setName(Property\NameProperty $name)
 * @method HostelType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method HostelType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HostelType setOwns(Property\OwnsProperty $owns)
 * @method HostelType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method HostelType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HostelType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method HostelType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HostelType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HostelType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method HostelType setReview(Property\ReviewProperty $review)
 * @method HostelType setSameAs(Property\SameAsProperty $sameAs)
 * @method HostelType setSeeks(Property\SeeksProperty $seeks)
 * @method HostelType setSponsor(Property\SponsorProperty $sponsor)
 * @method HostelType setStarRating(Property\StarRatingProperty $starRating)
 * @method HostelType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method HostelType setTaxID(Property\TaxIDProperty $taxID)
 * @method HostelType setTelephone(Property\TelephoneProperty $telephone)
 * @method HostelType setUrl(Property\UrlProperty $url)
 * @method HostelType setVatID(Property\VatIDProperty $vatID)
 */
class HostelType extends LodgingBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Hostel';
	}
}