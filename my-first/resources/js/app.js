import React from 'react';
import ReactDOM from 'react-dom';
import ProductTable from './Components/ProductTable';

const products = window.products || [];

if (document.getElementById('product-table')) {
    ReactDOM.render(<ProductTable Products={Products} />, document.getElementById('product-table'));
}

