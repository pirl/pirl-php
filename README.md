# PHP interface to Pirl JSON-RPC API

### Usage

```
composer require ...

```

#### Extend

```
use Pirl\PirlClient;
use Pirl\Pirl_Message;
use Pirl\Pirl_Transaction;

class PirlController extends ControllerBase {

  public $client;

  public function __construct($host = FALSE) {
    if (!$host) {
      $host = 'http://localhost:8445'
    }
    $this->client = new PirlClient($host);
  }

}
```

#### Use
```
    try {
      $Pirl = new PirlController();
      $Pirl->client->pirl_protocolVersion();
    }
    catch (\Exception $exception) {
      die ("Unable to connect.");
    }

```
