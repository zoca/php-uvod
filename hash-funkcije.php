<?php

echo 'MD5 od teksta test123 je: ';
echo md5('test123');

echo '<br>';

echo 'SHA1 od teksta test123 je: '; // HASH funkcije pretvaraju string u hash uvek iste duzine
echo sha1('test123');