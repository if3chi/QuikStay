<?php

declare(strict_types=1);

namespace App\Services;

use Generator;
use JustSteveKing\Ollama\Requests\Prompt;
use JustSteveKing\Ollama\Responses\GenerateResponse;
use JustSteveKing\Ollama\SDK;

final readonly class Ollama
{
    public function __construct(private SDK $sdk)
    {
    }

    public function ask(string $prompt): GenerateResponse|Generator
    {
        return $this->sdk->generate(
            prompt: new Prompt(
                model: 'llama3',
                prompt: $prompt,
                format: 'json',
                stream: false
            )
        );
    }
}
