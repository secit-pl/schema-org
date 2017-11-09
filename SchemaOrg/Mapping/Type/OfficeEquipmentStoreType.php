<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OfficeEquipmentStoreType.
 * 
 * @method OfficeEquipmentStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OfficeEquipmentStoreType setAddress(Property\AddressProperty $address)
 * @method OfficeEquipmentStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method OfficeEquipmentStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OfficeEquipmentStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method OfficeEquipmentStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method OfficeEquipmentStoreType setAward(Property\AwardProperty $award)
 * @method OfficeEquipmentStoreType setBrand(Property\BrandProperty $brand)
 * @method OfficeEquipmentStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method OfficeEquipmentStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method OfficeEquipmentStoreType setDepartment(Property\DepartmentProperty $department)
 * @method OfficeEquipmentStoreType setDescription(Property\DescriptionProperty $description)
 * @method OfficeEquipmentStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OfficeEquipmentStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method OfficeEquipmentStoreType setDuns(Property\DunsProperty $duns)
 * @method OfficeEquipmentStoreType setEmail(Property\EmailProperty $email)
 * @method OfficeEquipmentStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method OfficeEquipmentStoreType setEvent(Property\EventProperty $event)
 * @method OfficeEquipmentStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method OfficeEquipmentStoreType setFounder(Property\FounderProperty $founder)
 * @method OfficeEquipmentStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method OfficeEquipmentStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method OfficeEquipmentStoreType setFunder(Property\FunderProperty $funder)
 * @method OfficeEquipmentStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method OfficeEquipmentStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method OfficeEquipmentStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method OfficeEquipmentStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OfficeEquipmentStoreType setImage(Property\ImageProperty $image)
 * @method OfficeEquipmentStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method OfficeEquipmentStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method OfficeEquipmentStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method OfficeEquipmentStoreType setLocation(Property\LocationProperty $location)
 * @method OfficeEquipmentStoreType setLogo(Property\LogoProperty $logo)
 * @method OfficeEquipmentStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OfficeEquipmentStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method OfficeEquipmentStoreType setMember(Property\MemberProperty $member)
 * @method OfficeEquipmentStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method OfficeEquipmentStoreType setNaics(Property\NaicsProperty $naics)
 * @method OfficeEquipmentStoreType setName(Property\NameProperty $name)
 * @method OfficeEquipmentStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method OfficeEquipmentStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method OfficeEquipmentStoreType setOwns(Property\OwnsProperty $owns)
 * @method OfficeEquipmentStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method OfficeEquipmentStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method OfficeEquipmentStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OfficeEquipmentStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method OfficeEquipmentStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method OfficeEquipmentStoreType setReview(Property\ReviewProperty $review)
 * @method OfficeEquipmentStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method OfficeEquipmentStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method OfficeEquipmentStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method OfficeEquipmentStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method OfficeEquipmentStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method OfficeEquipmentStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method OfficeEquipmentStoreType setUrl(Property\UrlProperty $url)
 * @method OfficeEquipmentStoreType setVatID(Property\VatIDProperty $vatID)
 */
class OfficeEquipmentStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OfficeEquipmentStore';
	}
}