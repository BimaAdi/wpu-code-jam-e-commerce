import React from 'react'

const RakitSubItem = ({
    id, name, price, selected
}) => {
    return (
        <div className="rakit_sub_item__wrapper">
            <div 
                className={selected == true ? "rakit_sub_item__select" : "rakit_sub_item__not_select"}
            >
                {name}
            </div>
            <div className="rakit_sub_item__price">
                + Rp {price}
            </div>
        </div>
    )
}

export default RakitSubItem
