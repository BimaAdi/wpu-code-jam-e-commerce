import ReactDOM from 'react-dom'
import React, { useState, useEffect } from 'react'
import axios from 'axios'
import Rakit from './Rakit'

const Main = () => {
    const [selectData, setSelectData] = useState([])

    useEffect(() => {
        axios.get('/api/rakit-laptop')
        .then((x) => {
            console.log(x.data)
            setSelectData(x.data)
        })
        .catch((err) => {
            console.error(err)
        })
    }, [])

    return (
        <div>
            {selectData.map((x) => {
                return (
                    <>
                        <h1 className="rakit__sub_title">{x.title}</h1>
                        <Rakit key={x.id} selectItems={x.items}/>
                    </>
                )
            })}
        </div>
    )
}

if (document.querySelector('#Rakit')) {
    ReactDOM.render(<Main />, document.querySelector('#Rakit'))
}
