<?php

$aliases = [
    Illuminate\Support\Str::class => IlluminateAgnostic\Str\Support\Str::class,
    Illuminate\Support\Pluralizer::class => IlluminateAgnostic\Str\Support\Pluralizer::class,
    Illuminate\Support\Debug\Dumper::class => IlluminateAgnostic\Str\Support\Debug\Dumper::class,
    Illuminate\Support\Debug\HtmlDumper::class => IlluminateAgnostic\Str\Support\Debug\HtmlDumper::class,
];

foreach ($aliases as $illuminate => $tighten) {
    if (class_exists($illuminate) && ! interface_exists($illuminate) && ! trait_exists($illuminate)) {
        class_alias($illuminate, $tighten);
    }
}
