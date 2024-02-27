import React from 'react'
import Mainlayout from '../components/Mainlayout';
import Header from '../components/Header';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';

function Admin() {
  return (
    <div>
      <Header />

      <Navbar />

      <Mainlayout>




        <div class="bd-example-snippet bd-code-snippet">
          <div class="bd-example m-0 border-0">

            <nav>
              <div class="nav nav-tabs mb-3 justify-content-center" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                  type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                <button class="nav-link" id="nav-books-tab" data-bs-toggle="tab" data-bs-target="#nav-books"
                  type="button" role="tab" aria-controls="nav-books" aria-selected="false">Books</button>
                <button class="nav-link" id="nav-borrowers-tab" data-bs-toggle="tab" data-bs-target="#nav-borrowers"
                  type="button" role="tab" aria-controls="nav-borrowers" aria-selected="false">Borrowers</button>
              </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <p>This is some placeholder content the <strong>Home tab's</strong> associated content. Clicking
                  another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to
                  control the content visibility and styling. You can use it with tabs, pills, and any other
                  <code>.nav</code>-powered navigation.</p>
              </div>


              <div class="tab-pane fade" id="nav-books" role="tabpanel" aria-labelledby="nav-books-tab">
                <p>This is some placeholder content the <strong>Profile tab's</strong> associated content. Clicking
                  another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to
                  control the content visibility and styling. You can use it with tabs, pills, and any other
                  <code>.nav</code>-powered navigation.</p>
                <div class="book-table-div">
                  <table class="shadow book-table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Book Title</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Author</th>
                        <th scope="col" colspan="3">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td style={{width:"30px"}}><i class="fa-solid fa-circle-info text-secondary"></i></td>
                        <td style={{width:"30px"}}><i class="fa-solid fa-pen-to-square text-primary"></i></td>
                        <td style={{width:"30px"}}><i class="fa-solid fa-trash-can text-danger"></i></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>


              <div class="tab-pane fade" id="nav-borrowers" role="tabpanel" aria-labelledby="nav-borrowers-tab">
                <p>This is some placeholder content the <strong>Contact tab's</strong> associated content. Clicking
                  another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to
                  control the content visibility and styling. You can use it with tabs, pills, and any other
                  <code>.nav</code>-powered navigation.</p>
                <div class="book-table-div">
                  <table class="shadow book-table">
                    <thead class="rounded">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Other Names</th>
                        <th scope="col">Id</th>
                        <th scope="col">National Id</th>
                        <th scope="col">Address</th>
                        <th scope="col">Return Date</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>v</td>
                        <td>u</td>
                        <td>d</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>




      </Mainlayout>

      <Footer />
    </div>
  )
}

export default Admin
