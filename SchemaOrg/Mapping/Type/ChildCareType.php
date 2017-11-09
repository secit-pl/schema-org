<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ChildCareType.
 * 
 * @method ChildCareType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ChildCareType setAddress(Property\AddressProperty $address)
 * @method ChildCareType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ChildCareType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ChildCareType setAlumni(Property\AlumniProperty $alumni)
 * @method ChildCareType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method ChildCareType setAward(Property\AwardProperty $award)
 * @method ChildCareType setBrand(Property\BrandProperty $brand)
 * @method ChildCareType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method ChildCareType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ChildCareType setDepartment(Property\DepartmentProperty $department)
 * @method ChildCareType setDescription(Property\DescriptionProperty $description)
 * @method ChildCareType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ChildCareType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method ChildCareType setDuns(Property\DunsProperty $duns)
 * @method ChildCareType setEmail(Property\EmailProperty $email)
 * @method ChildCareType setEmployee(Property\EmployeeProperty $employee)
 * @method ChildCareType setEvent(Property\EventProperty $event)
 * @method ChildCareType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ChildCareType setFounder(Property\FounderProperty $founder)
 * @method ChildCareType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method ChildCareType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method ChildCareType setFunder(Property\FunderProperty $funder)
 * @method ChildCareType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ChildCareType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method ChildCareType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method ChildCareType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ChildCareType setImage(Property\ImageProperty $image)
 * @method ChildCareType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ChildCareType setLegalName(Property\LegalNameProperty $legalName)
 * @method ChildCareType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method ChildCareType setLocation(Property\LocationProperty $location)
 * @method ChildCareType setLogo(Property\LogoProperty $logo)
 * @method ChildCareType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ChildCareType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method ChildCareType setMember(Property\MemberProperty $member)
 * @method ChildCareType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method ChildCareType setNaics(Property\NaicsProperty $naics)
 * @method ChildCareType setName(Property\NameProperty $name)
 * @method ChildCareType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method ChildCareType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ChildCareType setOwns(Property\OwnsProperty $owns)
 * @method ChildCareType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method ChildCareType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ChildCareType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ChildCareType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ChildCareType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ChildCareType setReview(Property\ReviewProperty $review)
 * @method ChildCareType setSameAs(Property\SameAsProperty $sameAs)
 * @method ChildCareType setSeeks(Property\SeeksProperty $seeks)
 * @method ChildCareType setSponsor(Property\SponsorProperty $sponsor)
 * @method ChildCareType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method ChildCareType setTaxID(Property\TaxIDProperty $taxID)
 * @method ChildCareType setTelephone(Property\TelephoneProperty $telephone)
 * @method ChildCareType setUrl(Property\UrlProperty $url)
 * @method ChildCareType setVatID(Property\VatIDProperty $vatID)
 */
class ChildCareType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ChildCare';
	}
}