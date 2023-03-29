<?php

namespace Konnco\FilamentImport\Concerns;

trait HasFieldDefault
{
    protected ?string $default = null;

    /**
     * @return $this
     */
    public function default($text): static
    {
        $this->default = $text;

        return $this;
    }

    public function getDefault(): ?string
    {
        return $this->default;
    }
}
