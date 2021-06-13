import React, { useState } from 'react'

const Search = ({searchData, handleSearchChange, handleSearchClick}) => {

    return (
        <div>
            <div className="search__search_container">
                <input 
                    type="text" 
                    className="search__input_text"
                    value={searchData['search']}
                    onChange={(e) => handleSearchChange('search', e)}
                ></input>
                <button 
                    className="search__input_button" 
                    onClick={() => handleSearchClick()}
                >
                    Cari
                </button>
            </div>
            <div className="search__select_container">
                <select 
                    name="type" 
                    value={searchData['type']}
                    className="search__select_item"
                    onChange={(e) => handleSearchChange('type', e)}
                >
                    <option value="" disabled selected>Tipe</option>
                    <option value="">Semua</option>
                    <option value="Office">Office</option>
                    <option value="Gaming">Gaming</option>
                </select>
                <select 
                    name="Merek" 
                    value={searchData['brand']}
                    className="search__select_item"
                    onChange={(e) => handleSearchChange('brand', e)}
                >
                    <option value="" disabled selected>Merek</option>
                    <option value="">Semua</option>
                    <option value="Lenovo">Lenovo</option>
                    <option value="Dell">Dell</option>
                    <option value="HP">HP</option>
                </select>
                <select 
                    name="Processor" 
                    value={searchData['processor']}
                    className="search__select_item"
                    onChange={(e) => handleSearchChange('processor', e)}
                >
                    <option value="" disabled selected>Processor</option>
                    <option value="">Semua</option>
                    <option value="Intel Core i3">Intel Core i3</option>
                    <option value="Intel Core i5">Intel Core i5</option>
                    <option value="Intel Core i7">Intel Core i7</option>
                    <option value="AMD Ryzen 3">AMD Ryzen 3</option>
                    <option value="AMD Ryzen 5">AMD Ryzen 5</option>
                    <option value="AMD Ryzen 7">AMD Ryzen 7</option>
                </select>
                <select 
                    name="Ukuran Ram" 
                    value={searchData['ram_size']}
                    className="search__select_item"
                    onChange={(e) => handleSearchChange('ram_size', e)}
                >
                    <option value="" disabled selected>Ukuran Ram</option>
                    <option value="">Semua</option>
                    <option value="4">4 GB</option>
                    <option value="8">8 GB</option>
                    <option value="16">16 GB</option>
                </select>
                <select 
                    name="GPU" 
                    value={searchData['GPU']}
                    className="search__select_item"
                    onChange={(e) => handleSearchChange('GPU', e)}
                >
                    <option value="" disabled selected>GPU</option>
                    <option value="">Semua</option>
                    <option value="Nvidia GeForce">Nvidia GeForce</option>
                </select>
            </div>
        </div>
    )
}

export default Search
