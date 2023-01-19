<?php

namespace Spatie\Html\Test\Html;

class LegendTest extends TestCase
{
    /** @test */
    public function it_can_create_a_legend()
    {
        assertHtmlStringEqualsHtmlString(
            '<legend></legend>',
            $this->html->legend()
        );
    }

    /** @test */
    public function it_can_create_a_legend_with_contents()
    {
        assertHtmlStringEqualsHtmlString(
            '<legend>Hi</legend>',
            $this->html->legend('Hi')
        );
    }
}
