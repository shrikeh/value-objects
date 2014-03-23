<?php

namespace spec\Shrikeh\TabletopGaming\ValueObject\Unit;

use \PhpSpec\ObjectBehavior;
use \Prophecy\Argument;

class TypeSpec extends ObjectBehavior
{
    public function let()
    {
        $this->beConstructedWith(
           'Light Infantry',
            'LI',
            'The common backbone of every army. These are fast troops, with limited armour but a good number of Support Weapons.'
        );
    }

    function it_gives_me_the_type_name()
    {
        $this->getName()->shouldReturn('Light Infantry');
    }

    function it_gives_me_the_type_code()
    {
        $this->getCode()->shouldReturn('LI');
    }

    function it_gives_me_the_type_description()
    {
        $this->getDescription()->shouldReturn('The common backbone of every army. These are fast troops, with limited armour but a good number of Support Weapons.');
    }
}