<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://panaderia.informaticapp.com/ventas/'.$_GET['id'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'DELETE',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VJMzNOeC5PUUxobnU5eVBnbEJjQVJDMFgydnU5RUtxOm8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdleUY1TXJBdUh4eDZKYjdZR0VPMWE4UjFWYlFad2VnVw=='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
$data = json_decode($response, true);

$curl2 = curl_init();

curl_setopt_array($curl2, array(
  CURLOPT_URL => 'https://panaderia.informaticapp.com/DetalleVentas/'.$_GET['id'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'DELETE',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VJMzNOeC5PUUxobnU5eVBnbEJjQVJDMFgydnU5RUtxOm8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdleUY1TXJBdUh4eDZKYjdZR0VPMWE4UjFWYlFad2VnVw=='
  ),
));

$response = curl_exec($curl2);

curl_close($curl2);
$DetalleVentas = json_decode($response, true);
//var_dump($DetalleVentas); die;
header("location: Ventas.php?usuid=".$_GET['usuid']."&emp=".$_GET['emp']."&sucu=".$_GET['sucu']);
