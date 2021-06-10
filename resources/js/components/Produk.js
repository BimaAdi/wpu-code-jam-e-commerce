import React, { useState } from 'react'
import ReactDOM from 'react-dom'
import ProdukItem from './ProdukItem'

const Produk = () => {
    const [data, setData] = useState([
        {
            img_url: '',
            product_name: 'Thinkpad x270',
            price: 9000000
        },
        {
            img_url: '',
            product_name: 'Dell Latitude',
            price: 15000000
        },
        {
            img_url: '',
            product_name: 'Dell Inspiron',
            price: 6000000
        },
        {
            img_url: '',
            product_name: 'Thinkpad X1 Carbon',
            price: 16000000
        },
        {
            img_url: '',
            product_name: 'HP Pavilion',
            price: 13000000
        },
        {
            img_url: '',
            product_name: 'Thinkpad x250',
            price: 6000000
        },
    ])
    return (
        <div className="produk_grid">
            {data.map((x) => {
                return (
                    <ProdukItem 
                        img_url={x.img_url}
                        product_name={x.product_name}
                        price={x.price}
                    />
                )
            })}
        </div>
    )
}

export default Produk

if (document.querySelector('#Produk')) {
    ReactDOM.render(<Produk />, document.querySelector('#Produk'))
}
