<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TennisComplexType.
 * 
 * @method TennisComplexType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TennisComplexType setAddress(Property\AddressProperty $address)
 * @method TennisComplexType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TennisComplexType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TennisComplexType setAlumni(Property\AlumniProperty $alumni)
 * @method TennisComplexType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method TennisComplexType setAward(Property\AwardProperty $award)
 * @method TennisComplexType setBrand(Property\BrandProperty $brand)
 * @method TennisComplexType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method TennisComplexType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method TennisComplexType setDepartment(Property\DepartmentProperty $department)
 * @method TennisComplexType setDescription(Property\DescriptionProperty $description)
 * @method TennisComplexType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TennisComplexType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method TennisComplexType setDuns(Property\DunsProperty $duns)
 * @method TennisComplexType setEmail(Property\EmailProperty $email)
 * @method TennisComplexType setEmployee(Property\EmployeeProperty $employee)
 * @method TennisComplexType setEvent(Property\EventProperty $event)
 * @method TennisComplexType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method TennisComplexType setFounder(Property\FounderProperty $founder)
 * @method TennisComplexType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method TennisComplexType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method TennisComplexType setFunder(Property\FunderProperty $funder)
 * @method TennisComplexType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method TennisComplexType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method TennisComplexType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method TennisComplexType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TennisComplexType setImage(Property\ImageProperty $image)
 * @method TennisComplexType setIsicV4(Property\IsicV4Property $isicV4)
 * @method TennisComplexType setLegalName(Property\LegalNameProperty $legalName)
 * @method TennisComplexType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method TennisComplexType setLocation(Property\LocationProperty $location)
 * @method TennisComplexType setLogo(Property\LogoProperty $logo)
 * @method TennisComplexType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TennisComplexType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method TennisComplexType setMember(Property\MemberProperty $member)
 * @method TennisComplexType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method TennisComplexType setNaics(Property\NaicsProperty $naics)
 * @method TennisComplexType setName(Property\NameProperty $name)
 * @method TennisComplexType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method TennisComplexType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method TennisComplexType setOwns(Property\OwnsProperty $owns)
 * @method TennisComplexType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method TennisComplexType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method TennisComplexType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TennisComplexType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method TennisComplexType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method TennisComplexType setReview(Property\ReviewProperty $review)
 * @method TennisComplexType setSameAs(Property\SameAsProperty $sameAs)
 * @method TennisComplexType setSeeks(Property\SeeksProperty $seeks)
 * @method TennisComplexType setSponsor(Property\SponsorProperty $sponsor)
 * @method TennisComplexType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method TennisComplexType setTaxID(Property\TaxIDProperty $taxID)
 * @method TennisComplexType setTelephone(Property\TelephoneProperty $telephone)
 * @method TennisComplexType setUrl(Property\UrlProperty $url)
 * @method TennisComplexType setVatID(Property\VatIDProperty $vatID)
 */
class TennisComplexType extends SportsActivityLocationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TennisComplex';
	}
}