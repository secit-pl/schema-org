<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MusicStoreType.
 * 
 * @method MusicStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MusicStoreType setAddress(Property\AddressProperty $address)
 * @method MusicStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MusicStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MusicStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method MusicStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method MusicStoreType setAward(Property\AwardProperty $award)
 * @method MusicStoreType setBrand(Property\BrandProperty $brand)
 * @method MusicStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method MusicStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MusicStoreType setDepartment(Property\DepartmentProperty $department)
 * @method MusicStoreType setDescription(Property\DescriptionProperty $description)
 * @method MusicStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MusicStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method MusicStoreType setDuns(Property\DunsProperty $duns)
 * @method MusicStoreType setEmail(Property\EmailProperty $email)
 * @method MusicStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method MusicStoreType setEvent(Property\EventProperty $event)
 * @method MusicStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MusicStoreType setFounder(Property\FounderProperty $founder)
 * @method MusicStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method MusicStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method MusicStoreType setFunder(Property\FunderProperty $funder)
 * @method MusicStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MusicStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method MusicStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method MusicStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MusicStoreType setImage(Property\ImageProperty $image)
 * @method MusicStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MusicStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method MusicStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method MusicStoreType setLocation(Property\LocationProperty $location)
 * @method MusicStoreType setLogo(Property\LogoProperty $logo)
 * @method MusicStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MusicStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method MusicStoreType setMember(Property\MemberProperty $member)
 * @method MusicStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method MusicStoreType setNaics(Property\NaicsProperty $naics)
 * @method MusicStoreType setName(Property\NameProperty $name)
 * @method MusicStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method MusicStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MusicStoreType setOwns(Property\OwnsProperty $owns)
 * @method MusicStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method MusicStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MusicStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MusicStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MusicStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method MusicStoreType setReview(Property\ReviewProperty $review)
 * @method MusicStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method MusicStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method MusicStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method MusicStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method MusicStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method MusicStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method MusicStoreType setUrl(Property\UrlProperty $url)
 * @method MusicStoreType setVatID(Property\VatIDProperty $vatID)
 */
class MusicStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusicStore';
	}
}