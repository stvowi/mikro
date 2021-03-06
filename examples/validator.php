<?php

$validator = validator\validate([
    'title' => 'foobar',
    'age' => 15,
    'email' => 'foo@bar.baz'
], [
    'title|Başlık' => 'required|maxlen:100',
    'age|Yaş' => 'nullable|min:18',
    'email' => 'required|email'
]);

if ($validator->fails) {
    // failed
}

if ($validator->success) {
    // success
}

$titleErrors = $validator->fieldErrors['title'] ?? [];
$allErrors = $validator->errors;
$validatedValues = $validator->values; // passed values
