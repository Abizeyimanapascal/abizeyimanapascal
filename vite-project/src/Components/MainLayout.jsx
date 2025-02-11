import React from "react";
import Header from "./Header";
import Footer from "./Footer";
function MainLayout(props) {
    return(
        <>
        <Header></Header> <br /><br />
        <main>
            {props.children}
        </main>
        <Footer></Footer>
        </>
    )
}
export default MainLayout