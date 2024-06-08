<?php

namespace App\Livewire\Support;

use App\Services\Ollama;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class SearchSupport extends Component
{
    public ?string $prompt;

    public string $response = '';

    public function submit(Ollama $ollama): void
    {
        $this->response = $ollama->ask($this->prompt)->response;
    }

    public function render(Factory $factory): View|Factory
    {
        return $factory->make(view: 'livewire.support.search-support');
    }
}
