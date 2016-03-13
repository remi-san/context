<?php

namespace spec\RemiSan\Context;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use RemiSan\Context\Context;

class ContextContainerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('RemiSan\Context\ContextContainer');
    }

    function it_should_store_a_context(Context $context)
    {
        $this::setContext($context);

        $this::getContext()->shouldReturn($context);
    }

    function it_should_reset_the_context(Context $context)
    {
        $this::setContext($context);

        $this::reset();

        $this::getContext()->shouldReturn(null);
    }
}
