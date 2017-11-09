<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DepartmentStoreType.
 * 
 * @method DepartmentStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DepartmentStoreType setAddress(Property\AddressProperty $address)
 * @method DepartmentStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method DepartmentStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DepartmentStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method DepartmentStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method DepartmentStoreType setAward(Property\AwardProperty $award)
 * @method DepartmentStoreType setBrand(Property\BrandProperty $brand)
 * @method DepartmentStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method DepartmentStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method DepartmentStoreType setDepartment(Property\DepartmentProperty $department)
 * @method DepartmentStoreType setDescription(Property\DescriptionProperty $description)
 * @method DepartmentStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DepartmentStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method DepartmentStoreType setDuns(Property\DunsProperty $duns)
 * @method DepartmentStoreType setEmail(Property\EmailProperty $email)
 * @method DepartmentStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method DepartmentStoreType setEvent(Property\EventProperty $event)
 * @method DepartmentStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method DepartmentStoreType setFounder(Property\FounderProperty $founder)
 * @method DepartmentStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method DepartmentStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method DepartmentStoreType setFunder(Property\FunderProperty $funder)
 * @method DepartmentStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method DepartmentStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method DepartmentStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method DepartmentStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DepartmentStoreType setImage(Property\ImageProperty $image)
 * @method DepartmentStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method DepartmentStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method DepartmentStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method DepartmentStoreType setLocation(Property\LocationProperty $location)
 * @method DepartmentStoreType setLogo(Property\LogoProperty $logo)
 * @method DepartmentStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DepartmentStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method DepartmentStoreType setMember(Property\MemberProperty $member)
 * @method DepartmentStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method DepartmentStoreType setNaics(Property\NaicsProperty $naics)
 * @method DepartmentStoreType setName(Property\NameProperty $name)
 * @method DepartmentStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method DepartmentStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method DepartmentStoreType setOwns(Property\OwnsProperty $owns)
 * @method DepartmentStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method DepartmentStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method DepartmentStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DepartmentStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method DepartmentStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method DepartmentStoreType setReview(Property\ReviewProperty $review)
 * @method DepartmentStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method DepartmentStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method DepartmentStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method DepartmentStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method DepartmentStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method DepartmentStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method DepartmentStoreType setUrl(Property\UrlProperty $url)
 * @method DepartmentStoreType setVatID(Property\VatIDProperty $vatID)
 */
class DepartmentStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DepartmentStore';
	}
}