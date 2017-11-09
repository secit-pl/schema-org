<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SportsActivityLocationType.
 * 
 * @method SportsActivityLocationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SportsActivityLocationType setAddress(Property\AddressProperty $address)
 * @method SportsActivityLocationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SportsActivityLocationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SportsActivityLocationType setAlumni(Property\AlumniProperty $alumni)
 * @method SportsActivityLocationType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method SportsActivityLocationType setAward(Property\AwardProperty $award)
 * @method SportsActivityLocationType setBrand(Property\BrandProperty $brand)
 * @method SportsActivityLocationType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method SportsActivityLocationType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method SportsActivityLocationType setDepartment(Property\DepartmentProperty $department)
 * @method SportsActivityLocationType setDescription(Property\DescriptionProperty $description)
 * @method SportsActivityLocationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SportsActivityLocationType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method SportsActivityLocationType setDuns(Property\DunsProperty $duns)
 * @method SportsActivityLocationType setEmail(Property\EmailProperty $email)
 * @method SportsActivityLocationType setEmployee(Property\EmployeeProperty $employee)
 * @method SportsActivityLocationType setEvent(Property\EventProperty $event)
 * @method SportsActivityLocationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SportsActivityLocationType setFounder(Property\FounderProperty $founder)
 * @method SportsActivityLocationType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method SportsActivityLocationType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method SportsActivityLocationType setFunder(Property\FunderProperty $funder)
 * @method SportsActivityLocationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SportsActivityLocationType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method SportsActivityLocationType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method SportsActivityLocationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SportsActivityLocationType setImage(Property\ImageProperty $image)
 * @method SportsActivityLocationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SportsActivityLocationType setLegalName(Property\LegalNameProperty $legalName)
 * @method SportsActivityLocationType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method SportsActivityLocationType setLocation(Property\LocationProperty $location)
 * @method SportsActivityLocationType setLogo(Property\LogoProperty $logo)
 * @method SportsActivityLocationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SportsActivityLocationType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method SportsActivityLocationType setMember(Property\MemberProperty $member)
 * @method SportsActivityLocationType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method SportsActivityLocationType setNaics(Property\NaicsProperty $naics)
 * @method SportsActivityLocationType setName(Property\NameProperty $name)
 * @method SportsActivityLocationType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method SportsActivityLocationType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method SportsActivityLocationType setOwns(Property\OwnsProperty $owns)
 * @method SportsActivityLocationType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method SportsActivityLocationType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method SportsActivityLocationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SportsActivityLocationType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method SportsActivityLocationType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method SportsActivityLocationType setReview(Property\ReviewProperty $review)
 * @method SportsActivityLocationType setSameAs(Property\SameAsProperty $sameAs)
 * @method SportsActivityLocationType setSeeks(Property\SeeksProperty $seeks)
 * @method SportsActivityLocationType setSponsor(Property\SponsorProperty $sponsor)
 * @method SportsActivityLocationType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method SportsActivityLocationType setTaxID(Property\TaxIDProperty $taxID)
 * @method SportsActivityLocationType setTelephone(Property\TelephoneProperty $telephone)
 * @method SportsActivityLocationType setUrl(Property\UrlProperty $url)
 * @method SportsActivityLocationType setVatID(Property\VatIDProperty $vatID)
 */
class SportsActivityLocationType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SportsActivityLocation';
	}
}