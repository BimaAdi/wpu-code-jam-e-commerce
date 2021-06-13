import React from 'react'
import ReactDOM from 'react-dom'
import Produk from './Produk';

if (document.querySelector('#Produk')) {
    ReactDOM.render(<Produk />, document.querySelector('#Produk'))
}
