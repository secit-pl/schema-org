<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ShoeStoreType.
 * 
 * @method ShoeStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ShoeStoreType setAddress(Property\AddressProperty $address)
 * @method ShoeStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ShoeStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ShoeStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method ShoeStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method ShoeStoreType setAward(Property\AwardProperty $award)
 * @method ShoeStoreType setBrand(Property\BrandProperty $brand)
 * @method ShoeStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method ShoeStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ShoeStoreType setDepartment(Property\DepartmentProperty $department)
 * @method ShoeStoreType setDescription(Property\DescriptionProperty $description)
 * @method ShoeStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ShoeStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method ShoeStoreType setDuns(Property\DunsProperty $duns)
 * @method ShoeStoreType setEmail(Property\EmailProperty $email)
 * @method ShoeStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method ShoeStoreType setEvent(Property\EventProperty $event)
 * @method ShoeStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ShoeStoreType setFounder(Property\FounderProperty $founder)
 * @method ShoeStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method ShoeStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method ShoeStoreType setFunder(Property\FunderProperty $funder)
 * @method ShoeStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ShoeStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method ShoeStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method ShoeStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ShoeStoreType setImage(Property\ImageProperty $image)
 * @method ShoeStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ShoeStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method ShoeStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method ShoeStoreType setLocation(Property\LocationProperty $location)
 * @method ShoeStoreType setLogo(Property\LogoProperty $logo)
 * @method ShoeStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ShoeStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method ShoeStoreType setMember(Property\MemberProperty $member)
 * @method ShoeStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method ShoeStoreType setNaics(Property\NaicsProperty $naics)
 * @method ShoeStoreType setName(Property\NameProperty $name)
 * @method ShoeStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method ShoeStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ShoeStoreType setOwns(Property\OwnsProperty $owns)
 * @method ShoeStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method ShoeStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ShoeStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ShoeStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ShoeStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ShoeStoreType setReview(Property\ReviewProperty $review)
 * @method ShoeStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method ShoeStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method ShoeStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method ShoeStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method ShoeStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method ShoeStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method ShoeStoreType setUrl(Property\UrlProperty $url)
 * @method ShoeStoreType setVatID(Property\VatIDProperty $vatID)
 */
class ShoeStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ShoeStore';
	}
}