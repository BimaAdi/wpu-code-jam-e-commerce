import React, { useState, useEffect } from 'react'
import ProdukItem from './ProdukItem'

const Produk = ({produkData}) => {
    const [data, setData] = useState([])

    useEffect(() => {
        setData(produkData)
    })

    if (data.length > 0) {
        return (
            <div className="produk_grid">
                {data.map((x) => {
                    return (
                        <ProdukItem 
                            key={x.id}
                            id={x.id}
                            img_url={x.img_url}
                            brand={x.brand}
                            product_name={x.product_name}
                            price={x.price}
                        />
                    )
                })}
            </div>
        )
    } else {
        return (
            <div className="produk_grid__not_found">
                <h1>Data tidak ditemukan</h1>
            </div>
        )
    }
}

export default Produk
