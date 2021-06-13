import React, { useState, useEffect } from 'react'

const Rakititem = ({
    id, name, price, selected, onClickSelect
}) => {
    return (
        <div className="rakit_item__wrapper">
            <div 
                className={selected === 1 ? "rakit_item__select" : "rakit_item__not_select"}
                onClick={() => onClickSelect(id)}
            >
                {name}
            </div>
            <div className="rakit_item__price">
                + Rp {price}
            </div>
        </div>
    )
}

export default Rakititem
