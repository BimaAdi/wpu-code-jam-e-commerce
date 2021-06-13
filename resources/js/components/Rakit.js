import React, { useState, useEffect } from 'react'
import axios from 'axios'
// import RakitItem from './RakitItem'

const Rakit = () => {
    const [data, setData] = useState([])

    useEffect(() => {
        axios.get('/api/rakit-laptop')
        .then((x) => {
            setData(x.data)
        })
        .catch((err) => {
            console.error(err)
        })
    }, [])

    return (
        <div>
            {data.map((x) => {
                return (
                    <div> 
                        <h1>{x.title}</h1>

                    </div>
                )
            })}
        </div>
    )
}

export default Rakit;
