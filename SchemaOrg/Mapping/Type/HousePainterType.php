<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HousePainterType.
 * 
 * @method HousePainterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HousePainterType setAddress(Property\AddressProperty $address)
 * @method HousePainterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HousePainterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HousePainterType setAlumni(Property\AlumniProperty $alumni)
 * @method HousePainterType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method HousePainterType setAward(Property\AwardProperty $award)
 * @method HousePainterType setBrand(Property\BrandProperty $brand)
 * @method HousePainterType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method HousePainterType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HousePainterType setDepartment(Property\DepartmentProperty $department)
 * @method HousePainterType setDescription(Property\DescriptionProperty $description)
 * @method HousePainterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HousePainterType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method HousePainterType setDuns(Property\DunsProperty $duns)
 * @method HousePainterType setEmail(Property\EmailProperty $email)
 * @method HousePainterType setEmployee(Property\EmployeeProperty $employee)
 * @method HousePainterType setEvent(Property\EventProperty $event)
 * @method HousePainterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HousePainterType setFounder(Property\FounderProperty $founder)
 * @method HousePainterType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method HousePainterType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method HousePainterType setFunder(Property\FunderProperty $funder)
 * @method HousePainterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HousePainterType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method HousePainterType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method HousePainterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HousePainterType setImage(Property\ImageProperty $image)
 * @method HousePainterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HousePainterType setLegalName(Property\LegalNameProperty $legalName)
 * @method HousePainterType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method HousePainterType setLocation(Property\LocationProperty $location)
 * @method HousePainterType setLogo(Property\LogoProperty $logo)
 * @method HousePainterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HousePainterType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method HousePainterType setMember(Property\MemberProperty $member)
 * @method HousePainterType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method HousePainterType setNaics(Property\NaicsProperty $naics)
 * @method HousePainterType setName(Property\NameProperty $name)
 * @method HousePainterType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method HousePainterType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HousePainterType setOwns(Property\OwnsProperty $owns)
 * @method HousePainterType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method HousePainterType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HousePainterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HousePainterType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HousePainterType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method HousePainterType setReview(Property\ReviewProperty $review)
 * @method HousePainterType setSameAs(Property\SameAsProperty $sameAs)
 * @method HousePainterType setSeeks(Property\SeeksProperty $seeks)
 * @method HousePainterType setSponsor(Property\SponsorProperty $sponsor)
 * @method HousePainterType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method HousePainterType setTaxID(Property\TaxIDProperty $taxID)
 * @method HousePainterType setTelephone(Property\TelephoneProperty $telephone)
 * @method HousePainterType setUrl(Property\UrlProperty $url)
 * @method HousePainterType setVatID(Property\VatIDProperty $vatID)
 */
class HousePainterType extends HomeAndConstructionBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HousePainter';
	}
}