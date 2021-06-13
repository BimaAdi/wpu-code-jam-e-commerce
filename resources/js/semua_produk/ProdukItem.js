import React from 'react'

const ProdukItem = ({id, img_url, brand, product_name, price}) => {
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
                <div className="produk_item__name">{brand} {product_name}</div>
                <div className="produk_item__price">Rp {price}</div>
                <a className="produk_item__button" href={`detail-produk/${id}`}>Lihat Detail</a>
            </div>
        </div>
    )
}

export default ProdukItem
