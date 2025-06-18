import React, { useEffect } from 'react';
import Mainlayout from './components/Mainlayout';
import Header from './components/Header';
import Footer from './components/Footer';


function Dashboard() {

  useEffect(() => {
    new Chart(document.getElementById("myChart"), {
      type: "bar",
      data: {
        labels: ["Science", "History", "Technology", ],
        datasets: [{
          label: "How books having intrest",
          data: [90, 45, 60],
          backgroundColor: ['#4caf50', '#2196f3', '#ff9800']
        }]
      }
    });
  }, []);

  return (
    <div>
      <Header />

      <Mainlayout>
        <div style={{width:"500px",height:"500px"}}><canvas id="myChart" style={{width:"100px"}}></canvas></div>
      </Mainlayout>

      <Footer />
    </div>
  );
}

export default Dashboard;
