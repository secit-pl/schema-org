<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MobilePhoneStoreType.
 * 
 * @method MobilePhoneStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MobilePhoneStoreType setAddress(Property\AddressProperty $address)
 * @method MobilePhoneStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MobilePhoneStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MobilePhoneStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method MobilePhoneStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method MobilePhoneStoreType setAward(Property\AwardProperty $award)
 * @method MobilePhoneStoreType setBrand(Property\BrandProperty $brand)
 * @method MobilePhoneStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method MobilePhoneStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MobilePhoneStoreType setDepartment(Property\DepartmentProperty $department)
 * @method MobilePhoneStoreType setDescription(Property\DescriptionProperty $description)
 * @method MobilePhoneStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MobilePhoneStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method MobilePhoneStoreType setDuns(Property\DunsProperty $duns)
 * @method MobilePhoneStoreType setEmail(Property\EmailProperty $email)
 * @method MobilePhoneStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method MobilePhoneStoreType setEvent(Property\EventProperty $event)
 * @method MobilePhoneStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MobilePhoneStoreType setFounder(Property\FounderProperty $founder)
 * @method MobilePhoneStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method MobilePhoneStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method MobilePhoneStoreType setFunder(Property\FunderProperty $funder)
 * @method MobilePhoneStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MobilePhoneStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method MobilePhoneStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method MobilePhoneStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MobilePhoneStoreType setImage(Property\ImageProperty $image)
 * @method MobilePhoneStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MobilePhoneStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method MobilePhoneStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method MobilePhoneStoreType setLocation(Property\LocationProperty $location)
 * @method MobilePhoneStoreType setLogo(Property\LogoProperty $logo)
 * @method MobilePhoneStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MobilePhoneStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method MobilePhoneStoreType setMember(Property\MemberProperty $member)
 * @method MobilePhoneStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method MobilePhoneStoreType setNaics(Property\NaicsProperty $naics)
 * @method MobilePhoneStoreType setName(Property\NameProperty $name)
 * @method MobilePhoneStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method MobilePhoneStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MobilePhoneStoreType setOwns(Property\OwnsProperty $owns)
 * @method MobilePhoneStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method MobilePhoneStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MobilePhoneStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MobilePhoneStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MobilePhoneStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method MobilePhoneStoreType setReview(Property\ReviewProperty $review)
 * @method MobilePhoneStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method MobilePhoneStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method MobilePhoneStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method MobilePhoneStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method MobilePhoneStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method MobilePhoneStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method MobilePhoneStoreType setUrl(Property\UrlProperty $url)
 * @method MobilePhoneStoreType setVatID(Property\VatIDProperty $vatID)
 */
class MobilePhoneStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MobilePhoneStore';
	}
}