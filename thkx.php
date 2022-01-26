<?
// KEY FOR PAYMENT APPROOVED
// wh_i6ORQ8rjCKXmY8Lrk2IT3CUTlANgHy7OP4NjJ

function hmac_signature(array $body, $webHookSecret)
{
  $payload = json_encode($body);

  return base64_encode(hash_hmac('sha256', $payload, $webHookSecret, true));
}

// Calculando a assinatura

$body = [
  'event' => 'order.created',
  'time' => '2020-06-20 00:00:00',
  'resource' => [
    'id' => 1121333,
    // Aqui vem todo o payload do resource.
  ],
];

$signature = hmac_signature($body, 'wh_i6ORQ8rjCKXmY8Lrk2IT3CUTlANgHy7OP4NjJ');
