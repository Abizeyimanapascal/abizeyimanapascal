import React, { Component } from 'react'

function Mainlayout(props){
    return (
      <div className='container-fluid d-flex mt-2 mb-2 main-layout'>
        <div className='col-10 bg-light me-1 left-side text-dark shadow p-3 mb-5 bg-body-tertiary rounded'> {props.children}<br /></div>
        <div className='col-2 me-2 sticky-top bg-warning align-self-start mr-0 shadow p-3 mb-5 rounded'> g<br /></div>
      </div>
    )
  }

export default Mainlayout
