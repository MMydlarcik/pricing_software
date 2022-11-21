<?php 

require_once 'inc.php';


// switch data to products
$products = $data;

foreach($products as $product) {

    echo '<h2>'.$product->name.'</h2>';
    echo '<strong>EAN: '.$product->ean.'</strong>';

    echo '<h4>Konkurence</h4>';
    echo '<table>';
    echo '<col width="150px" />';
    echo '<col width="80px" />';
        foreach($product->concurence as $concurence) {
            echo '<tr>';
                echo '<td>'.$concurence->getKey().'</td>';
                echo '<td>'.format_amount($concurence->getPrice()).'</td>';
                echo '<td>'.$concurence->getAvailability().'</td>';
            echo '</tr>';
        }
    echo '</table>';


    echo '<h4>Zdroje</h4>';
    echo '<table>';
    echo '<col width="150px" />';
    echo '<col width="80px" />';
        foreach($product->source as $source) {
            echo '<tr>';
                echo '<td>'.$source->getKey().'</td>';
                echo '<td>'.format_amount($source->getPrice()).'</td>';
                echo '<td>'.$source->getAvailability().'</td>';
                echo '<td>'.format_amount($source->getPrices(0)).'</td>';
                echo '<td>'.format_amount($source->getPrices(1)).'</td>';
                echo '<td>'.format_amount($source->getPrices(2)).'</td>';
            echo '</tr>';
        }
    echo '</table>';


    echo '<hr/>';

}