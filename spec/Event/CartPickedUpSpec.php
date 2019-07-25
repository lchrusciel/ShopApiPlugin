<?php

declare(strict_types=1);

namespace spec\Sylius\ShopApiPlugin\Event;

use PhpSpec\ObjectBehavior;

final class CartPickedUpSpec extends ObjectBehavior
{
    function let(): void
    {
        $this->beConstructedWith('ORDERTOKEN');
    }

    function it_has_an_order_token(): void
    {
        $this->orderToken()->shouldReturn('ORDERTOKEN');
    }
}
