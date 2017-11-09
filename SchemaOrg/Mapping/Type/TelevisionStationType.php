<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TelevisionStationType.
 * 
 * @method TelevisionStationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TelevisionStationType setAddress(Property\AddressProperty $address)
 * @method TelevisionStationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TelevisionStationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TelevisionStationType setAlumni(Property\AlumniProperty $alumni)
 * @method TelevisionStationType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method TelevisionStationType setAward(Property\AwardProperty $award)
 * @method TelevisionStationType setBrand(Property\BrandProperty $brand)
 * @method TelevisionStationType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method TelevisionStationType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method TelevisionStationType setDepartment(Property\DepartmentProperty $department)
 * @method TelevisionStationType setDescription(Property\DescriptionProperty $description)
 * @method TelevisionStationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TelevisionStationType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method TelevisionStationType setDuns(Property\DunsProperty $duns)
 * @method TelevisionStationType setEmail(Property\EmailProperty $email)
 * @method TelevisionStationType setEmployee(Property\EmployeeProperty $employee)
 * @method TelevisionStationType setEvent(Property\EventProperty $event)
 * @method TelevisionStationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method TelevisionStationType setFounder(Property\FounderProperty $founder)
 * @method TelevisionStationType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method TelevisionStationType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method TelevisionStationType setFunder(Property\FunderProperty $funder)
 * @method TelevisionStationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method TelevisionStationType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method TelevisionStationType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method TelevisionStationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TelevisionStationType setImage(Property\ImageProperty $image)
 * @method TelevisionStationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method TelevisionStationType setLegalName(Property\LegalNameProperty $legalName)
 * @method TelevisionStationType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method TelevisionStationType setLocation(Property\LocationProperty $location)
 * @method TelevisionStationType setLogo(Property\LogoProperty $logo)
 * @method TelevisionStationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TelevisionStationType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method TelevisionStationType setMember(Property\MemberProperty $member)
 * @method TelevisionStationType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method TelevisionStationType setNaics(Property\NaicsProperty $naics)
 * @method TelevisionStationType setName(Property\NameProperty $name)
 * @method TelevisionStationType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method TelevisionStationType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method TelevisionStationType setOwns(Property\OwnsProperty $owns)
 * @method TelevisionStationType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method TelevisionStationType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method TelevisionStationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TelevisionStationType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method TelevisionStationType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method TelevisionStationType setReview(Property\ReviewProperty $review)
 * @method TelevisionStationType setSameAs(Property\SameAsProperty $sameAs)
 * @method TelevisionStationType setSeeks(Property\SeeksProperty $seeks)
 * @method TelevisionStationType setSponsor(Property\SponsorProperty $sponsor)
 * @method TelevisionStationType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method TelevisionStationType setTaxID(Property\TaxIDProperty $taxID)
 * @method TelevisionStationType setTelephone(Property\TelephoneProperty $telephone)
 * @method TelevisionStationType setUrl(Property\UrlProperty $url)
 * @method TelevisionStationType setVatID(Property\VatIDProperty $vatID)
 */
class TelevisionStationType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TelevisionStation';
	}
}