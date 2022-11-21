<?php

require_once 'Product.php';
require_once 'data.php';

function format_amount($amount) {
    return number_format($amount, 2, '.', ' ');
}