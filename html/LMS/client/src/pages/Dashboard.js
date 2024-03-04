import React from 'react'
import Mainlayout from '../components/Mainlayout';
import Header from '../components/Header';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';

function Dashboard() {
    return (
        <div>
            <Header />

            <Mainlayout>
                Dashboard
            </Mainlayout>
            <Footer />
        </div>
    )
}

export default Dashboard
