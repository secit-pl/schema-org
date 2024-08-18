# Schema.org class mapping

A class mapping for the schema.org data types, types and properties.

#### BC break warning
From release 3.3.2 all properties should be suffixed by the word Property and all types should be suffixed
by the word Type.
All properties without Property suffix and and all types without Type suffix are now marked as deprecated. 
This change is required to support PHP 7.x which have a few new restricted words which cannot be used
as a class names.

Please change your code and add the suffix to use the new naming schema. 

**All deprecated (non suffixed) classes will be removed in release 3.4.**

## Installation

From the command line run

```
$ composer require secit-pl/schema-org
```

## Usage

First create the data structure:

```php
use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Property;
use SecIT\SchemaOrg\Mapping\Type;

$breadcrumbs = new Type\BreadcrumbListType();

$element1 = new Type\ListItemType();
$element1->setPosition(new Property\PositionProperty(new DataType\IntegerType(1)));
$element1->setItem(
    new Property\Item(
        (new Type\ThingType('http://google.pl/#test'))->setName(
            new Property\NameProperty(
                new DataType\TextType('Test')
            )
        )
    )
);
$breadcrumbs->addItemListElement(new Property\ItemListElementProperty($element1));

$element2 = new Type\ListItemType();
$element2->setPosition(new Property\PositionProperty(new DataType\IntegerType(2)));
$element2->setItem(
    new Property\ItemProperty(
        (new Type\ThingType('http://google.pl/#qweqwe'))->setName(
            new Property\NameProperty(
                new DataType\TextType('Test 122')
            )
        )
    )
);
$breadcrumbs->addItemListElement(new Property\ItemListElementProperty($element2));

$breadcrumbs->setNumberOfItems(
    new Property\NumberOfItemsProperty(
        new DataType\IntegerType(
            count($breadcrumbs->getItemListElements())
        )
    )
);
```

Now you can convert it to the JSON-LD string as following

```php
$schemaOrg = new \SecIT\SchemaOrg();
echo $schemaOrg->toJsonLd($breadcrumbs);
```

The output should be a valid schema.org JSON-LD:
```html
<script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","item":{"@type":"Thing","@id":"http:\/\/google.pl\/#test","name":"Test"},"position":1},{"@type":"ListItem","item":{"@type":"Thing","@id":"http:\/\/google.pl\/#qweqwe","name":"Test 122"},"position":2}],"numberOfItems":2}</script>
```

If you'd like to check the output validation you can use the tool provided by Google:
https://search.google.com/structured-data/testing-tool

## Code examples

### Breadcrumbs
```php
use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Property;
use SecIT\SchemaOrg\Mapping\Type;

$breadcrumbs = new Type\BreadcrumbListType();

$element1 = new Type\ListItemType();
$element1->setPosition(new Property\PositionProperty(new DataType\IntegerType(1)));
$element1->setItem(
    new Property\ItemProperty(
        (new Type\ThingType('http://google.pl/#test'))->setName(
            new Property\NameProperty(
                new DataType\TextType('Test')
            )
        )
    )
);
$breadcrumbs->addItemListElement(new Property\ItemListElementProperty($element1));

$element2 = new Type\ListItemType();
$element2->setPosition(new Property\PositionProperty(new DataType\IntegerType(2)));
$element2->setItem(
    new Property\ItemProperty(
        (new Type\ThingType('http://google.pl/#qweqwe'))->setName(
            new Property\NameProperty(
                new DataType\TextType('Test 122')
            )
        )
    )
);
$breadcrumbs->addItemListElement(new Property\ItemListElementProperty($element2));

$breadcrumbs->setNumberOfItems(
    new Property\NumberOfItemsProperty(
        new DataType\IntegerType(
            count($breadcrumbs->getItemListElements())
        )
    )
);
```

The output:
```html
<script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","item":{"@type":"Thing","@id":"http:\/\/google.pl\/#test","name":"Test"},"position":1},{"@type":"ListItem","item":{"@type":"Thing","@id":"http:\/\/google.pl\/#qweqwe","name":"Test 122"},"position":2}],"numberOfItems":2}</script>
```

### Product

```php
use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Property;
use SecIT\SchemaOrg\Mapping\Type;

$product = new Type\ProductType();
$product
    ->setName(
        new Property\NameProperty(
            new DataType\TextType('Kenmore White 17" Microwave')
        )
    )
    ->setDescription(
        new Property\DescriptionProperty(
            new DataType\TextType('0.7 cubic feet countertop microwave. Has six preset cooking categories and convenience features like Add-A-Minute and Child Lock.')
        )
    )
    ->setImage(
        new Property\ImageProperty(
            new DataType\URLType('kenmore-microwave-17in.jpg')
        )
    )
    ->setAggregateRating(
        new Property\AggregateRatingProperty(
            (new Type\AggregateRatingType())
                ->setRatingValue(
                    new Property\RatingValueProperty(
                        new DataType\NumberType(3.5)
                    )
                )
                ->setReviewCount(
                    new Property\ReviewCountProperty(
                        new DataType\IntegerType(11)
                    )
                )
        )
    )
    ->setOffers(
        new Property\OffersProperty(
            (new Type\OfferType())
                ->setPriceCurrency(
                    new Property\PriceCurrencyProperty(
                        new DataType\TextType('USD')
                    )
                )
                ->setPrice(
                    new Property\PriceProperty(
                        new DataType\NumberType(55.00)
                    )
                )
                ->setAvailability(new Property\AvailabilityProperty(
                    new Type\InStockType()
                ))
        )
    )
    ->setReview(
        new Property\ReviewProperty([
            (new Type\ReviewType())
                ->setReviewRating(
                    new Property\ReviewRatingProperty(
                        (new Type\RatingType())
                            ->setBestRating(
                                new Property\BestRatingProperty(
                                    new DataType\NumberType(5)
                                )
                            )
                            ->setRatingValue(
                                new Property\RatingValueProperty(
                                    new DataType\NumberType(1)
                                )
                            )
                            ->setWorstRating(
                                new Property\WorstRatingProperty(
                                    new DataType\NumberType(1)
                                )
                            )
                    )
                )
                ->setAuthor(
                    new Property\AuthorProperty(
                        (new Type\PersonType())
                            ->setName(
                                new Property\NameProperty(
                                    new DataType\TextType('Ellie')
                                )
                            )
                    )
                )
                ->setDatePublished(
                    new Property\DatePublishedProperty(
                        new DataType\DateType('2011-04-01')
                    )
                )
                ->setDescription(
                    new Property\DescriptionProperty(
                        new DataType\TextType('The lamp burned out and now I have to replace it.')
                    )
                )
                ->setName(
                    new Property\NameProperty(
                        new DataType\TextType('Not a happy camper')
                    )
                )
            ,
            (new Type\ReviewType())
                ->setReviewRating(
                    new Property\ReviewRatingProperty(
                        (new Type\RatingType())
                            ->setBestRating(
                                new Property\BestRatingProperty(
                                    new DataType\NumberType(5)
                                )
                            )
                            ->setRatingValue(
                                new Property\RatingValueProperty(
                                    new DataType\NumberType(4)
                                )
                            )
                            ->setWorstRating(
                                new Property\WorstRatingProperty(
                                    new DataType\NumberType(1)
                                )
                            )
                    )
                )
                ->setAuthor(
                    new Property\AuthorProperty(
                        (new Type\PersonType())
                            ->setName(
                                new Property\NameProperty(
                                    new DataType\TextType('Lucas')
                                )
                            )
                    )
                )
                ->setDatePublished(
                    new Property\DatePublishedProperty(
                        new DataType\DateType('2011-03-25')
                    )
                )
                ->setDescription(
                    new Property\DescriptionProperty(
                        new DataType\TextType('Great microwave for the price. It is small and fits in my apartment.')
                    )
                )
                ->setName(
                    new Property\NameProperty(
                        new DataType\TextType('Value purchase')
                    )
                )
            ,
        ])
    )
;
```

The output:
```html
<script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"Product","aggregateRating":{"@type":"AggregateRating","reviewCount":11,"ratingValue":3.5},"offers":{"@type":"Offer","availability":"https:\/\/schema.org\/InStock","price":55,"priceCurrency":"USD"},"review":[{"@type":"Review","reviewRating":{"@type":"Rating","bestRating":5,"ratingValue":1,"worstRating":1},"author":{"@type":"Person","name":"Ellie"},"datePublished":"2011-04-01","description":"The lamp burned out and now I have to replace it.","name":"Not a happy camper"},{"@type":"Review","reviewRating":{"@type":"Rating","bestRating":5,"ratingValue":4,"worstRating":1},"author":{"@type":"Person","name":"Lucas"},"datePublished":"2011-03-25","description":"Great microwave for the price. It is small and fits in my apartment.","name":"Value purchase"}],"description":"0.7 cubic feet countertop microwave. Has six preset cooking categories and convenience features like Add-A-Minute and Child Lock.","image":"kenmore-microwave-17in.jpg","name":"Kenmore White 17\" Microwave"}</script>
```

## Project tags
As you maybe noticed the bundle don't use the standard tag numeration flow. Each two first parts of the tag 
corresponds to the version of the schema from schema.org from which the mapping classed were generated.

The schema.org releases history can be found here:
https://schema.org/docs/releases.html

## Want to support this bundle?

Consider using our [random code generator](https://codito.io/) service at [codito.io](https://codito.io/).

With [codito.io](https://codito.io/) you can generate up to 250,000 codes in the format of your choice for free. You can use the generated codes for purposes such as promotional codes (which you can, for example, print on the inside of packaging), serial numbers, one-time or multi-use passwords, lottery coupons, discount codes, vouchers, random strings and much more - for more use cases see our [examples](https://codito.io/free-random-code-generator/examples). If 250,000 codes are not enough for you, you can use our [commercial code generation service](https://codito.io/commercial-code-generator/).

[![Random Code Generator](https://codito.io/build/favicons/logo.e56f7fb1.webp)](https://codito.io/)
