import React from 'react'
import JsonData from './11-08-2022.json'
 function JsonDataDisplay(){
    const DisplayData=JsonData.map(
        (info)=>{
            return(
                <tr>
                    <td>{info.name}</td>
                    <td>{info.date}</td>
                    <td>{info.time}</td>
                </tr>
            )
        }
    )
 
    return(
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                 
                    
                    {DisplayData}
                    
                </tbody>
            </table>
             
        </div>
    )
 }
 
 export default JsonDataDisplay;