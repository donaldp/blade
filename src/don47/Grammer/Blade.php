<?php

namespace Don47\Grammer;

use App\Touch\Fluent;
use App\Touch\Grammer;

class ControlStructure extends Grammer implements Fluent
{
  /**
   * (incomeplete)
   */
  public function handle()
  {
    $code = $this->translate('/\@\bif\b \((.*)\)/', function($match) {
      return "<?php if ($match[1]) : ?>";
    });

    $code = $this->translate('/\@\belseif\b \((.*)\)/', function($match) {
      return "<?php elseif ($match[1]) : ?>";
    });

    $code = $this->translate('/\@\belse\b/', function($match) {
      return "<?php else : ?>";
    });

    $code = $this->translate('/\@\bendif\b/', function($match) {
      return "<?php endif; ?>";
    });
    
    return $code;
  }
}