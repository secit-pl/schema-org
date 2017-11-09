<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SelfStorageType.
 * 
 * @method SelfStorageType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SelfStorageType setAddress(Property\AddressProperty $address)
 * @method SelfStorageType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SelfStorageType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SelfStorageType setAlumni(Property\AlumniProperty $alumni)
 * @method SelfStorageType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method SelfStorageType setAward(Property\AwardProperty $award)
 * @method SelfStorageType setBrand(Property\BrandProperty $brand)
 * @method SelfStorageType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method SelfStorageType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method SelfStorageType setDepartment(Property\DepartmentProperty $department)
 * @method SelfStorageType setDescription(Property\DescriptionProperty $description)
 * @method SelfStorageType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SelfStorageType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method SelfStorageType setDuns(Property\DunsProperty $duns)
 * @method SelfStorageType setEmail(Property\EmailProperty $email)
 * @method SelfStorageType setEmployee(Property\EmployeeProperty $employee)
 * @method SelfStorageType setEvent(Property\EventProperty $event)
 * @method SelfStorageType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SelfStorageType setFounder(Property\FounderProperty $founder)
 * @method SelfStorageType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method SelfStorageType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method SelfStorageType setFunder(Property\FunderProperty $funder)
 * @method SelfStorageType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SelfStorageType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method SelfStorageType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method SelfStorageType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SelfStorageType setImage(Property\ImageProperty $image)
 * @method SelfStorageType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SelfStorageType setLegalName(Property\LegalNameProperty $legalName)
 * @method SelfStorageType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method SelfStorageType setLocation(Property\LocationProperty $location)
 * @method SelfStorageType setLogo(Property\LogoProperty $logo)
 * @method SelfStorageType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SelfStorageType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method SelfStorageType setMember(Property\MemberProperty $member)
 * @method SelfStorageType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method SelfStorageType setNaics(Property\NaicsProperty $naics)
 * @method SelfStorageType setName(Property\NameProperty $name)
 * @method SelfStorageType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method SelfStorageType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method SelfStorageType setOwns(Property\OwnsProperty $owns)
 * @method SelfStorageType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method SelfStorageType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method SelfStorageType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SelfStorageType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method SelfStorageType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method SelfStorageType setReview(Property\ReviewProperty $review)
 * @method SelfStorageType setSameAs(Property\SameAsProperty $sameAs)
 * @method SelfStorageType setSeeks(Property\SeeksProperty $seeks)
 * @method SelfStorageType setSponsor(Property\SponsorProperty $sponsor)
 * @method SelfStorageType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method SelfStorageType setTaxID(Property\TaxIDProperty $taxID)
 * @method SelfStorageType setTelephone(Property\TelephoneProperty $telephone)
 * @method SelfStorageType setUrl(Property\UrlProperty $url)
 * @method SelfStorageType setVatID(Property\VatIDProperty $vatID)
 */
class SelfStorageType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SelfStorage';
	}
}