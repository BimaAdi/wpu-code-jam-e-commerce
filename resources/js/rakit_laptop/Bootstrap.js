import ReactDOM from 'react-dom'
import React, { useState } from 'react'
import axios from 'axios'
import Rakit from './Rakit'

const Main = ({initial_data}) => {
    const [selectData, setSelectData] = useState(initial_data)

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

let element = document.querySelector('#Rakit')
if (document.querySelector('#Rakit')) {
    let initial_data = JSON.parse(element.getAttribute('data-initial'))
    ReactDOM.render(<Main initial_data={initial_data}/>, document.querySelector('#Rakit'))
}
