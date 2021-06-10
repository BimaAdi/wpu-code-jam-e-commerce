import React from 'react'
import ReactDOM from 'react-dom'

const ProdukItem = ({img_url, product_name, price}) => {
    return (
        <div className="produk_item__flex">
            <div className="produk_item__img">
                {/* <Image 
                    src={img_url}
                    width={150}
                    height={150}
                /> */}
            </div>
            <div className="produk_item__produk_description">
                <div className="produk_item__name">{product_name}</div>
                <div className="produk_item__price">Rp {price}</div>
                <button className="produk_item__button">Beli Sekarang</button>
            </div>
        </div>
    )
}

export default ProdukItem
