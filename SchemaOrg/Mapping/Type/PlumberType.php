<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PlumberType.
 * 
 * @method PlumberType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PlumberType setAddress(Property\AddressProperty $address)
 * @method PlumberType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PlumberType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PlumberType setAlumni(Property\AlumniProperty $alumni)
 * @method PlumberType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method PlumberType setAward(Property\AwardProperty $award)
 * @method PlumberType setBrand(Property\BrandProperty $brand)
 * @method PlumberType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method PlumberType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method PlumberType setDepartment(Property\DepartmentProperty $department)
 * @method PlumberType setDescription(Property\DescriptionProperty $description)
 * @method PlumberType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PlumberType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method PlumberType setDuns(Property\DunsProperty $duns)
 * @method PlumberType setEmail(Property\EmailProperty $email)
 * @method PlumberType setEmployee(Property\EmployeeProperty $employee)
 * @method PlumberType setEvent(Property\EventProperty $event)
 * @method PlumberType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PlumberType setFounder(Property\FounderProperty $founder)
 * @method PlumberType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method PlumberType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method PlumberType setFunder(Property\FunderProperty $funder)
 * @method PlumberType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PlumberType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method PlumberType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method PlumberType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PlumberType setImage(Property\ImageProperty $image)
 * @method PlumberType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PlumberType setLegalName(Property\LegalNameProperty $legalName)
 * @method PlumberType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method PlumberType setLocation(Property\LocationProperty $location)
 * @method PlumberType setLogo(Property\LogoProperty $logo)
 * @method PlumberType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PlumberType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method PlumberType setMember(Property\MemberProperty $member)
 * @method PlumberType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method PlumberType setNaics(Property\NaicsProperty $naics)
 * @method PlumberType setName(Property\NameProperty $name)
 * @method PlumberType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method PlumberType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PlumberType setOwns(Property\OwnsProperty $owns)
 * @method PlumberType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method PlumberType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method PlumberType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PlumberType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method PlumberType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method PlumberType setReview(Property\ReviewProperty $review)
 * @method PlumberType setSameAs(Property\SameAsProperty $sameAs)
 * @method PlumberType setSeeks(Property\SeeksProperty $seeks)
 * @method PlumberType setSponsor(Property\SponsorProperty $sponsor)
 * @method PlumberType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method PlumberType setTaxID(Property\TaxIDProperty $taxID)
 * @method PlumberType setTelephone(Property\TelephoneProperty $telephone)
 * @method PlumberType setUrl(Property\UrlProperty $url)
 * @method PlumberType setVatID(Property\VatIDProperty $vatID)
 */
class PlumberType extends HomeAndConstructionBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Plumber';
	}
}