import React, { useState, useEffect } from 'react'
import RakitItem from './RakitItem'

const Rakit = ({selectItems}) => {
    const [selected, setSelected] = useState(selectItems)

    const onClickSelect = (id) => {
        let newSelect = selected.map((x) => {
            if (x.id === id) {
                return {...x, selected: 1}
            } else {
                return {...x, selected: 0}
            }
        })
        setSelected(newSelect)
    }

    return (
        <div className="rakit__grid">
            {selected.map((x) => {
                return (
                    <RakitItem 
                        key={x.id}
                        id={x.id}
                        name={x.name}
                        price={x.price}
                        selected={x.selected}
                        onClickSelect={onClickSelect}
                    />
                )
            })}
        </div>
    )
}

export default Rakit
