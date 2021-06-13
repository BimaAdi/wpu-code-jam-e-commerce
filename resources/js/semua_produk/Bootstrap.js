import React, { useState, useEffect } from 'react'
import ReactDOM from 'react-dom'
import axios from 'axios'
import Produk from './Produk'
import Search from './Search'

const Main = () => {
    const [produkData, setProdukData] = useState([])
    const [searchData, setSearchData] = useState({
        type: '',
        brand: '',
        processor: '',
        ram_size: '',
        GPU: '',
        search: ''
    })

    useEffect(() => {
        axios.get('/api/produk', {
            params: {
                page: 1,
                size: 15
            }
        })
        .then((response) => {
            setProdukData(response.data.map((x) => {
                return {
                    id: x.id,
                    brand: x.brand,
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

    const handleSearchChange = (key, event) => {
        event.preventDefault()
        if (key === 'type') {
            setSearchData({
                ...searchData,
                type: event.target.value,
            })
        } else if (key === 'brand') {
            setSearchData({
                ...searchData,
                brand: event.target.value,
            })
        } else if (key === 'processor') {
            setSearchData({
                ...searchData,
                processor: event.target.value,
            })
        } else if (key === 'ram_size') {
            setSearchData({
                ...searchData,
                ram_size: event.target.value,
            })
        } else if (key === 'GPU') {
            setSearchData({
                ...searchData,
                GPU: event.target.value,
            })
        } else if (key === 'search') {
            setSearchData({
                ...searchData,
                search: event.target.value
            })
        }
    }

    const handleSearchClick = async () => {
        try {
            let response = await axios.get('/api/produk', {
                params: {
                    page: 1,
                    size: 15,
                    ...searchData
                }
            })
    
            setProdukData(response.data.map((x) => {
                return {
                    id: x.id,
                    brand: x.brand,
                    product_name: x.name,
                    price: x.price,
                    img_url: ''
                }
            })) 
        } catch (error) {
            console.error(error)
        }
        
    }

    return (
        <div className="semua_produk__container">
            <Search 
                searchData={searchData} 
                handleSearchChange={handleSearchChange}
                handleSearchClick={handleSearchClick}
            />
            <Produk produkData={produkData}/>
        </div>
    )
}

if (document.querySelector('#Produk')) {
    ReactDOM.render(<Main />, document.querySelector('#Produk'))
}
