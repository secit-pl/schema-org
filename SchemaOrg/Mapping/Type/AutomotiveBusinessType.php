<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AutomotiveBusinessType.
 * 
 * @method AutomotiveBusinessType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AutomotiveBusinessType setAddress(Property\AddressProperty $address)
 * @method AutomotiveBusinessType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AutomotiveBusinessType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AutomotiveBusinessType setAlumni(Property\AlumniProperty $alumni)
 * @method AutomotiveBusinessType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method AutomotiveBusinessType setAward(Property\AwardProperty $award)
 * @method AutomotiveBusinessType setBrand(Property\BrandProperty $brand)
 * @method AutomotiveBusinessType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method AutomotiveBusinessType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AutomotiveBusinessType setDepartment(Property\DepartmentProperty $department)
 * @method AutomotiveBusinessType setDescription(Property\DescriptionProperty $description)
 * @method AutomotiveBusinessType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AutomotiveBusinessType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method AutomotiveBusinessType setDuns(Property\DunsProperty $duns)
 * @method AutomotiveBusinessType setEmail(Property\EmailProperty $email)
 * @method AutomotiveBusinessType setEmployee(Property\EmployeeProperty $employee)
 * @method AutomotiveBusinessType setEvent(Property\EventProperty $event)
 * @method AutomotiveBusinessType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AutomotiveBusinessType setFounder(Property\FounderProperty $founder)
 * @method AutomotiveBusinessType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method AutomotiveBusinessType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method AutomotiveBusinessType setFunder(Property\FunderProperty $funder)
 * @method AutomotiveBusinessType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AutomotiveBusinessType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method AutomotiveBusinessType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method AutomotiveBusinessType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AutomotiveBusinessType setImage(Property\ImageProperty $image)
 * @method AutomotiveBusinessType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AutomotiveBusinessType setLegalName(Property\LegalNameProperty $legalName)
 * @method AutomotiveBusinessType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method AutomotiveBusinessType setLocation(Property\LocationProperty $location)
 * @method AutomotiveBusinessType setLogo(Property\LogoProperty $logo)
 * @method AutomotiveBusinessType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AutomotiveBusinessType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method AutomotiveBusinessType setMember(Property\MemberProperty $member)
 * @method AutomotiveBusinessType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method AutomotiveBusinessType setNaics(Property\NaicsProperty $naics)
 * @method AutomotiveBusinessType setName(Property\NameProperty $name)
 * @method AutomotiveBusinessType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method AutomotiveBusinessType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AutomotiveBusinessType setOwns(Property\OwnsProperty $owns)
 * @method AutomotiveBusinessType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method AutomotiveBusinessType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AutomotiveBusinessType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AutomotiveBusinessType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AutomotiveBusinessType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method AutomotiveBusinessType setReview(Property\ReviewProperty $review)
 * @method AutomotiveBusinessType setSameAs(Property\SameAsProperty $sameAs)
 * @method AutomotiveBusinessType setSeeks(Property\SeeksProperty $seeks)
 * @method AutomotiveBusinessType setSponsor(Property\SponsorProperty $sponsor)
 * @method AutomotiveBusinessType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method AutomotiveBusinessType setTaxID(Property\TaxIDProperty $taxID)
 * @method AutomotiveBusinessType setTelephone(Property\TelephoneProperty $telephone)
 * @method AutomotiveBusinessType setUrl(Property\UrlProperty $url)
 * @method AutomotiveBusinessType setVatID(Property\VatIDProperty $vatID)
 */
class AutomotiveBusinessType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutomotiveBusiness';
	}
}