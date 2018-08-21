<?php
## Model "Event"
declare(strict_types=1); # -*- coding: utf-8 -*-

namespace Inpsyde\Events\Model;

final class Event
{

    public static function fromPost(\WP_Post $post): Event
    {
        return new static($post);
    }

    public function id(): int
    {
        return 0;
    }

    public function startDate(): \DateTimeImmutable
    {
        return new \DateTimeImmutable('now');
    }

    public function endDate(): \DateTimeImmutable
    {
        return new \DateTimeImmutable('now');
    }

    public function registrationEnd(): \DateTimeImmutable
    {
        return new \DateTimeImmutable('now');
    }

    public function includedInPrice(): array
    {
        return [
            'drinks',
            'food',
        ];
    }

    public function subscribedMin(): int
    {
        return 1;
    }

    public function subscribedMax(): int
    {
        return 5;
    }


    public function additionalNotes(): string
    {
        return 'Additional information about this event can be found on tour website www.example.com';
    }

    public function location(): Location
    {
        return new Location();
    }

    public function contactPerson(): ContactPerson
    {
        return new ContactPerson();
    }
}

## Location
// declare(strict_types=1); # -*- coding: utf-8 -*-

namespace Inpsyde\Events\Model;

final class Location
{

    public function street(): string
    {
        return 'Musterstraße 2';
    }

    public function postalCode(): string
    {
        return '123456';
    }

    public function city(): string
    {
        return 'Musterhausen';
    }

    public function name(): string
    {
        return 'Muster City Hill';
    }

	public function country(): string
	{
		return 'Germany';
	}
}



## ContactPerson
// declare(strict_types=1); # -*- coding: utf-8 -*-

namespace Inpsyde\Events\Model;

final class ContactPerson
{

    public function firstName(): string
    {
        return 'Max';
    }

    public function lastName(): string
    {
        return 'Mustermann';
    }

    public function email(): string
    {
        return 'max@mustermann.com';
    }

    public function position(): string
    {
        return 'Chief of Organization';
    }

    public function telephone(): string
    {
        return '+49 1234 567 89';
    }
}
