<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ConvenienceStoreType.
 * 
 * @method ConvenienceStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ConvenienceStoreType setAddress(Property\AddressProperty $address)
 * @method ConvenienceStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ConvenienceStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ConvenienceStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method ConvenienceStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method ConvenienceStoreType setAward(Property\AwardProperty $award)
 * @method ConvenienceStoreType setBrand(Property\BrandProperty $brand)
 * @method ConvenienceStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method ConvenienceStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ConvenienceStoreType setDepartment(Property\DepartmentProperty $department)
 * @method ConvenienceStoreType setDescription(Property\DescriptionProperty $description)
 * @method ConvenienceStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ConvenienceStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method ConvenienceStoreType setDuns(Property\DunsProperty $duns)
 * @method ConvenienceStoreType setEmail(Property\EmailProperty $email)
 * @method ConvenienceStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method ConvenienceStoreType setEvent(Property\EventProperty $event)
 * @method ConvenienceStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ConvenienceStoreType setFounder(Property\FounderProperty $founder)
 * @method ConvenienceStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method ConvenienceStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method ConvenienceStoreType setFunder(Property\FunderProperty $funder)
 * @method ConvenienceStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ConvenienceStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method ConvenienceStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method ConvenienceStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ConvenienceStoreType setImage(Property\ImageProperty $image)
 * @method ConvenienceStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ConvenienceStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method ConvenienceStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method ConvenienceStoreType setLocation(Property\LocationProperty $location)
 * @method ConvenienceStoreType setLogo(Property\LogoProperty $logo)
 * @method ConvenienceStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ConvenienceStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method ConvenienceStoreType setMember(Property\MemberProperty $member)
 * @method ConvenienceStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method ConvenienceStoreType setNaics(Property\NaicsProperty $naics)
 * @method ConvenienceStoreType setName(Property\NameProperty $name)
 * @method ConvenienceStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method ConvenienceStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ConvenienceStoreType setOwns(Property\OwnsProperty $owns)
 * @method ConvenienceStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method ConvenienceStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ConvenienceStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ConvenienceStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ConvenienceStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ConvenienceStoreType setReview(Property\ReviewProperty $review)
 * @method ConvenienceStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method ConvenienceStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method ConvenienceStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method ConvenienceStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method ConvenienceStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method ConvenienceStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method ConvenienceStoreType setUrl(Property\UrlProperty $url)
 * @method ConvenienceStoreType setVatID(Property\VatIDProperty $vatID)
 */
class ConvenienceStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ConvenienceStore';
	}
}