import React, { useState, useEffect } from 'react'
import ReactDOM from 'react-dom'
import axios from 'axios'
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

    useEffect(() => {
        axios.get('/api/produk', {
            params: {
                page: 1,
                size: 6
            }
        })
        .then((response) => {
            setData(response.data.map((x) => {
                return {
                    id: x.id,
                    product_name: x.name,
                    price: x.price,
                    img_url: ''
                }
            }))
        })
        .catch((err) => {
            console.error(err)
        })
    }, [])

    return (
        <div className="produk_grid">
            {data.map((x) => {
                return (
                    <ProdukItem 
                        key={x.id}
                        id={x.id}
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
