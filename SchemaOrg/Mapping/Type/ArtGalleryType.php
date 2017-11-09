<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ArtGalleryType.
 * 
 * @method ArtGalleryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ArtGalleryType setAddress(Property\AddressProperty $address)
 * @method ArtGalleryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ArtGalleryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ArtGalleryType setAlumni(Property\AlumniProperty $alumni)
 * @method ArtGalleryType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method ArtGalleryType setAward(Property\AwardProperty $award)
 * @method ArtGalleryType setBrand(Property\BrandProperty $brand)
 * @method ArtGalleryType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method ArtGalleryType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ArtGalleryType setDepartment(Property\DepartmentProperty $department)
 * @method ArtGalleryType setDescription(Property\DescriptionProperty $description)
 * @method ArtGalleryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ArtGalleryType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method ArtGalleryType setDuns(Property\DunsProperty $duns)
 * @method ArtGalleryType setEmail(Property\EmailProperty $email)
 * @method ArtGalleryType setEmployee(Property\EmployeeProperty $employee)
 * @method ArtGalleryType setEvent(Property\EventProperty $event)
 * @method ArtGalleryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ArtGalleryType setFounder(Property\FounderProperty $founder)
 * @method ArtGalleryType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method ArtGalleryType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method ArtGalleryType setFunder(Property\FunderProperty $funder)
 * @method ArtGalleryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ArtGalleryType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method ArtGalleryType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method ArtGalleryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ArtGalleryType setImage(Property\ImageProperty $image)
 * @method ArtGalleryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ArtGalleryType setLegalName(Property\LegalNameProperty $legalName)
 * @method ArtGalleryType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method ArtGalleryType setLocation(Property\LocationProperty $location)
 * @method ArtGalleryType setLogo(Property\LogoProperty $logo)
 * @method ArtGalleryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ArtGalleryType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method ArtGalleryType setMember(Property\MemberProperty $member)
 * @method ArtGalleryType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method ArtGalleryType setNaics(Property\NaicsProperty $naics)
 * @method ArtGalleryType setName(Property\NameProperty $name)
 * @method ArtGalleryType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method ArtGalleryType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ArtGalleryType setOwns(Property\OwnsProperty $owns)
 * @method ArtGalleryType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method ArtGalleryType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ArtGalleryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ArtGalleryType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ArtGalleryType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ArtGalleryType setReview(Property\ReviewProperty $review)
 * @method ArtGalleryType setSameAs(Property\SameAsProperty $sameAs)
 * @method ArtGalleryType setSeeks(Property\SeeksProperty $seeks)
 * @method ArtGalleryType setSponsor(Property\SponsorProperty $sponsor)
 * @method ArtGalleryType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method ArtGalleryType setTaxID(Property\TaxIDProperty $taxID)
 * @method ArtGalleryType setTelephone(Property\TelephoneProperty $telephone)
 * @method ArtGalleryType setUrl(Property\UrlProperty $url)
 * @method ArtGalleryType setVatID(Property\VatIDProperty $vatID)
 */
class ArtGalleryType extends EntertainmentBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ArtGallery';
	}
}