<?php
return [
    'A redirect URI must be supplied when multiple redirect URIs are registered' => 'Átirányítási URI megadása kötelező, ha több van belőle regisztrálva',
    'An unsupported scope was requested' => 'Nem támogatott \'scope\' került kérésre',
    'Authorization code doesn\'t exist or is invalid for the client' => 'A megadott azonosítási kód nem létezik, vagy a klienshez nem megfelelő.',
    'client credentials are required' => 'kliensazonosítók megadása kötelező',
    'Expiration (exp) time must be a unix time stamp' => 'A lejárati időnek (exp) unix időbélyegnek kell lennie',
    'Expiration (exp) time must be present' => 'A lejárati időt (exp) meg kell adni',
    'Invalid audience (aud)' => 'Nem megfelelő közönség (audience, aud)',
    'Invalid issuer (iss) or subject (sub) provided' => 'Nem megfelelő kiállító (issuer, iss) vagy tárgy (subject, sub) lett megadva',
    'Invalid issuer (iss) provided' => 'Nem megfelelő kiállító (issuer, iss) lett megadva',
    'Invalid refresh token' => 'Nem megfelelő \'refresh token\'',
    'Invalid subject (sub) provided' => 'Nem megfelelő tárgy (subject, sub) lett megadva',
    'Invalid user authkey' => 'Nem megfelelő felhasználói azonosító kulcs (user authkey)',
    'Invalid username and password combination' => 'Nem megfelelő felhasználónév vagy jelszó',
    'JSON Token Identifier (jti) has already been used' => 'A SON tokenazonosító (jti) már korábban felhasználva',
    'JWT cannot be used before the Not Before (nbf) time' => 'JWT nem használható fel a \'Not Before\' (nbf) idő előtt',
    'JWT failed signature verification' => 'A JWT megbukott a digitális aláírás-ellenőrzésen',
    'JWT has expired' => 'A JWT lejárt',
    'JWT is malformed' => 'A JWT nem megfelelő formátumú',
    'Malformed auth header' => 'Nem megfelelő formátumú azonosító fejléc (auth header)',
    'Malformed token (missing "expires" or "client_id")' => 'Nem megfelelő formátumú token (hiányzó lejárati idő (expires) vagy kliens-azonosító (client_id))',
    'Missing parameter: "code" is required' => 'Hiányzó paraméter: "code"',
    'Missing parameter: "refresh_token" is required' => 'Hiányzó paraméter: "refresh_token"',
    'Missing parameters: "assertion" required' => 'Hiányzó paraméter: ""assertion"',
    'Missing parameters: "authkey" and "username" required' => 'Hiányzó paraméterek: "authkey" és "username"',
    'Missing parameters: "username" and "password" required' => 'Hiányzó paraméterek: "username" és "password"',
    'No client id supplied' => 'Nincs megadva kliens-azonosító (client_id)',
    'No redirect URI was supplied or stored' => 'Nincs megadva vagy korábban regisztrálva átirányítási URI',
    'Not Before (nbf) time must be a unix time stamp' => 'A \'Not Before\' (nbf) időnek unix időbélyegnek kell lennie',
    'Only one method may be used to authenticate at a time (Auth header, GET or POST)' => 'Egyidejűleg egy azonosítási mód használható (Azonosító fejléc, GET vagy POST)',
    'Refresh token has expired' => 'A \'refresh token\' lejárt',
    'The access token provided has expired' => 'Az \'access token\' lejárt',
    'The access token provided is invalid' => 'A megadott \'access token\' érvénytelen',
    'The authorization code has expired' => 'Az azonosító kód (authorization code) lejárt',
    'The client credentials are invalid' => 'A megadott kliens-azonosító adatok érvénytelenek',
    'The client id supplied is invalid' => 'A megadott kliens-azonosító (client id) érvénytelen',
    'The content type for POST requests must be "application/x-www-form-urlencoded"' => 'A POST kérés "Content-Type" fejléce "application/x-www-form-urlencoded" kell, hogy legyen',
    'The grant type is unauthorized for this client_id' => 'A megadott klienshez (client id) nem engedélyezett \'grant type\'',
    'The grant type was not specified in the request' => 'A kérés nem tartalmaz engedélykérési típust (grant type)',
    'The redirect URI is mandatory and was not supplied' => 'Az átirányítási URI kötelező, de nem lett megadva',
    'The redirect URI is missing or do not match' => 'Az átirányítási URI nem lett megadva, vagy nem egyezik a regisztrálttal',
    'The redirect URI must not contain a fragment' => 'Az átirányítási URI nem tartalmazhat rész-azonosítót (fragment)',
    'The redirect URI provided is missing or does not match' => 'Az átirányítási URI nem lett megadva, vagy nem egyezik a regisztrálttal',
    'The request method must be POST when requesting an access token' => 'A HTTP kérésnek \'access token\' kérésekor POST-nak kell lennie',
    'The request requires higher privileges than provided by the access token' => 'A kérés kiszolgálására nem jogosít a megadott \'access token\'',
    'The scope requested is invalid for this client' => 'A megadott \'scope\' nem engedélyezett ehhez a klienshez',
    'The scope requested is invalid for this request' => 'A megadott \'scope\' nem engedélyezett ehhez a kéréshez',
    'This application requires you specify a scope parameter' => 'Az alkalmazás megköveteli a \'scope\' paraméter megadását',
    'This client is invalid or must authenticate using a client secret' => 'A megadott kliens nem megfelelő, vagy azonosítani kell \'client secret\' megadásával',
    'Unable to retrieve user information' => 'A felhasználói adatok lekérése nem sikerült',
    'When putting the token in the body, the method must be POST' => 'A HTTP kérésnek POST típusúnak kell lennie, ha a token a törzsében szerepel',
    'you must set the user_id on the array returned by getUserDetails' => 'A \'getUserDetails\' által visszaadott tömbben kell megadni a \'user_id\'-t',
];
