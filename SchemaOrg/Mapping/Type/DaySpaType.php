<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DaySpaType.
 * 
 * @method DaySpaType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DaySpaType setAddress(Property\AddressProperty $address)
 * @method DaySpaType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method DaySpaType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DaySpaType setAlumni(Property\AlumniProperty $alumni)
 * @method DaySpaType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method DaySpaType setAward(Property\AwardProperty $award)
 * @method DaySpaType setBrand(Property\BrandProperty $brand)
 * @method DaySpaType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method DaySpaType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method DaySpaType setDepartment(Property\DepartmentProperty $department)
 * @method DaySpaType setDescription(Property\DescriptionProperty $description)
 * @method DaySpaType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DaySpaType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method DaySpaType setDuns(Property\DunsProperty $duns)
 * @method DaySpaType setEmail(Property\EmailProperty $email)
 * @method DaySpaType setEmployee(Property\EmployeeProperty $employee)
 * @method DaySpaType setEvent(Property\EventProperty $event)
 * @method DaySpaType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method DaySpaType setFounder(Property\FounderProperty $founder)
 * @method DaySpaType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method DaySpaType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method DaySpaType setFunder(Property\FunderProperty $funder)
 * @method DaySpaType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method DaySpaType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method DaySpaType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method DaySpaType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DaySpaType setImage(Property\ImageProperty $image)
 * @method DaySpaType setIsicV4(Property\IsicV4Property $isicV4)
 * @method DaySpaType setLegalName(Property\LegalNameProperty $legalName)
 * @method DaySpaType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method DaySpaType setLocation(Property\LocationProperty $location)
 * @method DaySpaType setLogo(Property\LogoProperty $logo)
 * @method DaySpaType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DaySpaType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method DaySpaType setMember(Property\MemberProperty $member)
 * @method DaySpaType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method DaySpaType setNaics(Property\NaicsProperty $naics)
 * @method DaySpaType setName(Property\NameProperty $name)
 * @method DaySpaType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method DaySpaType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method DaySpaType setOwns(Property\OwnsProperty $owns)
 * @method DaySpaType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method DaySpaType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method DaySpaType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DaySpaType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method DaySpaType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method DaySpaType setReview(Property\ReviewProperty $review)
 * @method DaySpaType setSameAs(Property\SameAsProperty $sameAs)
 * @method DaySpaType setSeeks(Property\SeeksProperty $seeks)
 * @method DaySpaType setSponsor(Property\SponsorProperty $sponsor)
 * @method DaySpaType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method DaySpaType setTaxID(Property\TaxIDProperty $taxID)
 * @method DaySpaType setTelephone(Property\TelephoneProperty $telephone)
 * @method DaySpaType setUrl(Property\UrlProperty $url)
 * @method DaySpaType setVatID(Property\VatIDProperty $vatID)
 */
class DaySpaType extends HealthAndBeautyBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DaySpa';
	}
}