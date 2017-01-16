[<img src="https://cdn.rawgit.com/lutsen/lagan/master/lagan-logo.svg" width="100" alt="Lagan">](https://github.com/lutsen/lagan)

Lagan Slug Property Controller
==============================

Controller for the Lagan Hashid property.  
Generate YouTube-like ids based on the conten object id's. Use it when you don't want to expose your database ids to the user. A Hashid is only set on creation of the content object and cannot be edited. Uses the [Hashids PHP library](http://hashids.org/php/). Optionally a salt, padding and alphabet for the Hasid can be set in the property array.   
Salt will make the id's unique for that salt.  
Padding sets the length of the id.  
Alphabet defines the characters that can be used for the id, with a minimum of 16 characters.  

Example:
```php
[
	'name' => 'uid',
	'description' => 'U.I.D.',
	'autovalue' => true,
	'salt' => 'some salt to make the hasid unique',
	'padding' => 10,
	'alphabet' => 'abcdefghABCDEFGH',
	'type' => '\Lagan\Property\Hashid',
	'input' => 'readonly'
]
```

To be used with [Lagan](https://github.com/lutsen/lagan). Lagan lets you create flexible content objects with a simple class, and manage them with a web interface.

Lagan is a project of [Lútsen Stellingwerff](http://lutsen.land/) from [HoverKraft](http://www.hoverkraft.nl/).