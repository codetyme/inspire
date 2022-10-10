<?php

namespace Codetyme\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justQuote() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}

?>
