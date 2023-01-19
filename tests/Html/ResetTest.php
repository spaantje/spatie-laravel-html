<?php

namespace Spatie\Html\Test\Html;

class ResetTest extends TestCase
{
    /** @test */
    public function it_can_create_a_reset_button()
    {
        assertHtmlStringEqualsHtmlString(
            '<button type="reset"></button>',
            $this->html->reset()
        );
    }

    /** @test */
    public function it_can_create_a_reset_button_with_contents()
    {
        assertHtmlStringEqualsHtmlString(
            '<button type="reset">Reset</button>',
            $this->html->reset('Reset')
        );
    }
}
