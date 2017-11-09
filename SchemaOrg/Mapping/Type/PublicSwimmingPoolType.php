<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PublicSwimmingPoolType.
 * 
 * @method PublicSwimmingPoolType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PublicSwimmingPoolType setAddress(Property\AddressProperty $address)
 * @method PublicSwimmingPoolType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PublicSwimmingPoolType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PublicSwimmingPoolType setAlumni(Property\AlumniProperty $alumni)
 * @method PublicSwimmingPoolType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method PublicSwimmingPoolType setAward(Property\AwardProperty $award)
 * @method PublicSwimmingPoolType setBrand(Property\BrandProperty $brand)
 * @method PublicSwimmingPoolType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method PublicSwimmingPoolType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method PublicSwimmingPoolType setDepartment(Property\DepartmentProperty $department)
 * @method PublicSwimmingPoolType setDescription(Property\DescriptionProperty $description)
 * @method PublicSwimmingPoolType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PublicSwimmingPoolType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method PublicSwimmingPoolType setDuns(Property\DunsProperty $duns)
 * @method PublicSwimmingPoolType setEmail(Property\EmailProperty $email)
 * @method PublicSwimmingPoolType setEmployee(Property\EmployeeProperty $employee)
 * @method PublicSwimmingPoolType setEvent(Property\EventProperty $event)
 * @method PublicSwimmingPoolType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PublicSwimmingPoolType setFounder(Property\FounderProperty $founder)
 * @method PublicSwimmingPoolType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method PublicSwimmingPoolType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method PublicSwimmingPoolType setFunder(Property\FunderProperty $funder)
 * @method PublicSwimmingPoolType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PublicSwimmingPoolType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method PublicSwimmingPoolType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method PublicSwimmingPoolType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PublicSwimmingPoolType setImage(Property\ImageProperty $image)
 * @method PublicSwimmingPoolType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PublicSwimmingPoolType setLegalName(Property\LegalNameProperty $legalName)
 * @method PublicSwimmingPoolType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method PublicSwimmingPoolType setLocation(Property\LocationProperty $location)
 * @method PublicSwimmingPoolType setLogo(Property\LogoProperty $logo)
 * @method PublicSwimmingPoolType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PublicSwimmingPoolType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method PublicSwimmingPoolType setMember(Property\MemberProperty $member)
 * @method PublicSwimmingPoolType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method PublicSwimmingPoolType setNaics(Property\NaicsProperty $naics)
 * @method PublicSwimmingPoolType setName(Property\NameProperty $name)
 * @method PublicSwimmingPoolType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method PublicSwimmingPoolType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PublicSwimmingPoolType setOwns(Property\OwnsProperty $owns)
 * @method PublicSwimmingPoolType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method PublicSwimmingPoolType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method PublicSwimmingPoolType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PublicSwimmingPoolType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method PublicSwimmingPoolType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method PublicSwimmingPoolType setReview(Property\ReviewProperty $review)
 * @method PublicSwimmingPoolType setSameAs(Property\SameAsProperty $sameAs)
 * @method PublicSwimmingPoolType setSeeks(Property\SeeksProperty $seeks)
 * @method PublicSwimmingPoolType setSponsor(Property\SponsorProperty $sponsor)
 * @method PublicSwimmingPoolType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method PublicSwimmingPoolType setTaxID(Property\TaxIDProperty $taxID)
 * @method PublicSwimmingPoolType setTelephone(Property\TelephoneProperty $telephone)
 * @method PublicSwimmingPoolType setUrl(Property\UrlProperty $url)
 * @method PublicSwimmingPoolType setVatID(Property\VatIDProperty $vatID)
 */
class PublicSwimmingPoolType extends SportsActivityLocationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PublicSwimmingPool';
	}
}