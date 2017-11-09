<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RecyclingCenterType.
 * 
 * @method RecyclingCenterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RecyclingCenterType setAddress(Property\AddressProperty $address)
 * @method RecyclingCenterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method RecyclingCenterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RecyclingCenterType setAlumni(Property\AlumniProperty $alumni)
 * @method RecyclingCenterType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method RecyclingCenterType setAward(Property\AwardProperty $award)
 * @method RecyclingCenterType setBrand(Property\BrandProperty $brand)
 * @method RecyclingCenterType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method RecyclingCenterType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method RecyclingCenterType setDepartment(Property\DepartmentProperty $department)
 * @method RecyclingCenterType setDescription(Property\DescriptionProperty $description)
 * @method RecyclingCenterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RecyclingCenterType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method RecyclingCenterType setDuns(Property\DunsProperty $duns)
 * @method RecyclingCenterType setEmail(Property\EmailProperty $email)
 * @method RecyclingCenterType setEmployee(Property\EmployeeProperty $employee)
 * @method RecyclingCenterType setEvent(Property\EventProperty $event)
 * @method RecyclingCenterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method RecyclingCenterType setFounder(Property\FounderProperty $founder)
 * @method RecyclingCenterType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method RecyclingCenterType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method RecyclingCenterType setFunder(Property\FunderProperty $funder)
 * @method RecyclingCenterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method RecyclingCenterType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method RecyclingCenterType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method RecyclingCenterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RecyclingCenterType setImage(Property\ImageProperty $image)
 * @method RecyclingCenterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method RecyclingCenterType setLegalName(Property\LegalNameProperty $legalName)
 * @method RecyclingCenterType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method RecyclingCenterType setLocation(Property\LocationProperty $location)
 * @method RecyclingCenterType setLogo(Property\LogoProperty $logo)
 * @method RecyclingCenterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RecyclingCenterType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method RecyclingCenterType setMember(Property\MemberProperty $member)
 * @method RecyclingCenterType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method RecyclingCenterType setNaics(Property\NaicsProperty $naics)
 * @method RecyclingCenterType setName(Property\NameProperty $name)
 * @method RecyclingCenterType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method RecyclingCenterType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method RecyclingCenterType setOwns(Property\OwnsProperty $owns)
 * @method RecyclingCenterType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method RecyclingCenterType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method RecyclingCenterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RecyclingCenterType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method RecyclingCenterType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method RecyclingCenterType setReview(Property\ReviewProperty $review)
 * @method RecyclingCenterType setSameAs(Property\SameAsProperty $sameAs)
 * @method RecyclingCenterType setSeeks(Property\SeeksProperty $seeks)
 * @method RecyclingCenterType setSponsor(Property\SponsorProperty $sponsor)
 * @method RecyclingCenterType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method RecyclingCenterType setTaxID(Property\TaxIDProperty $taxID)
 * @method RecyclingCenterType setTelephone(Property\TelephoneProperty $telephone)
 * @method RecyclingCenterType setUrl(Property\UrlProperty $url)
 * @method RecyclingCenterType setVatID(Property\VatIDProperty $vatID)
 */
class RecyclingCenterType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RecyclingCenter';
	}
}