<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FireStationType.
 * 
 * @method FireStationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FireStationType setAddress(Property\AddressProperty $address)
 * @method FireStationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method FireStationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FireStationType setAlumni(Property\AlumniProperty $alumni)
 * @method FireStationType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method FireStationType setAward(Property\AwardProperty $award)
 * @method FireStationType setBrand(Property\BrandProperty $brand)
 * @method FireStationType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method FireStationType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method FireStationType setDepartment(Property\DepartmentProperty $department)
 * @method FireStationType setDescription(Property\DescriptionProperty $description)
 * @method FireStationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FireStationType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method FireStationType setDuns(Property\DunsProperty $duns)
 * @method FireStationType setEmail(Property\EmailProperty $email)
 * @method FireStationType setEmployee(Property\EmployeeProperty $employee)
 * @method FireStationType setEvent(Property\EventProperty $event)
 * @method FireStationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method FireStationType setFounder(Property\FounderProperty $founder)
 * @method FireStationType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method FireStationType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method FireStationType setFunder(Property\FunderProperty $funder)
 * @method FireStationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method FireStationType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method FireStationType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method FireStationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FireStationType setImage(Property\ImageProperty $image)
 * @method FireStationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method FireStationType setLegalName(Property\LegalNameProperty $legalName)
 * @method FireStationType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method FireStationType setLocation(Property\LocationProperty $location)
 * @method FireStationType setLogo(Property\LogoProperty $logo)
 * @method FireStationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FireStationType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method FireStationType setMember(Property\MemberProperty $member)
 * @method FireStationType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method FireStationType setNaics(Property\NaicsProperty $naics)
 * @method FireStationType setName(Property\NameProperty $name)
 * @method FireStationType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method FireStationType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method FireStationType setOwns(Property\OwnsProperty $owns)
 * @method FireStationType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method FireStationType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method FireStationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FireStationType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method FireStationType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method FireStationType setReview(Property\ReviewProperty $review)
 * @method FireStationType setSameAs(Property\SameAsProperty $sameAs)
 * @method FireStationType setSeeks(Property\SeeksProperty $seeks)
 * @method FireStationType setSponsor(Property\SponsorProperty $sponsor)
 * @method FireStationType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method FireStationType setTaxID(Property\TaxIDProperty $taxID)
 * @method FireStationType setTelephone(Property\TelephoneProperty $telephone)
 * @method FireStationType setUrl(Property\UrlProperty $url)
 * @method FireStationType setVatID(Property\VatIDProperty $vatID)
 */
class FireStationType extends EmergencyServiceType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FireStation';
	}
}