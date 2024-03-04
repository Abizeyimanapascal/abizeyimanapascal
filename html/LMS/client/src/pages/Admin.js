import React, { useEffect, useState } from 'react'
import Axios from 'axios';
import Mainlayout from '../components/Mainlayout';
import Header from '../components/Header';
import Navbar from '../components/Navbar';
import Footer from '../components/Footer';

function Admin() {

  const [usersList, setUsersList] = useState([]);
  useEffect(() => {
    Axios.get('http://localhost:3001/api/getusers').then((response) => {
      setUsersList(response.data);
    });
  }, []);



  const deleteuser = (Id) => {
    Axios.delete(`http://localhost:3001/api/deleteuser/${Id}`).then(() => {
      alert('User deleted');
    });
  }

  const [Title, setBookTitle] = useState("");
  const [Isbn, setIsbn] = useState("");
  const [BookNumber, setBookNumber] = useState("");
  const [PublishedDate, setPublishedDate] = useState("");
  const [Author, setBookAuthor] = useState("");
  const [Genre, setBookGenre] = useState("");
  const [Description, setDescription] = useState("");
  const addbook = () => {

    Axios.post('http://localhost:3001/api/addbook', {
      title: Title,
      isbn: Isbn,
      bookNumber: BookNumber,
      publishedDate: PublishedDate,
      author: Author,
      genre: Genre,
      description: Description,
    }).then(() => {
      alert('Book Added');
    });
  };

  const [booksList, setBooksList] = useState([]);
  useEffect(() => {
    Axios.get('http://localhost:3001/api/getbooks').then((response) => {
      setBooksList(response.data)
    });
  }, []);
  return (
    <div>
      <Header />



      <Mainlayout>




        <div class="bd-example-snippet bd-code-snippet">
          <div class="bd-example m-0 border-0">

            <nav>
              <div class="nav nav-tabs mb-3 justify-content-center" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                  type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                <button class="nav-link" id="nav-users-tab" data-bs-toggle="tab" data-bs-target="#nav-users"
                  type="button" role="tab" aria-controls="nav-users" aria-selected="false">Users</button>
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
                  <code>.nav</code>-powered navigation.</p><br />

                <button type="button" className='btn btn-lg p-color' data-bs-toggle="modal" data-bs-target="#addbookmodal">Add Book</button>
              </div>

              <div class="tab-pane fade" id="nav-users" role="tabpanel" aria-labelledby="nav-users-tab">
                <p>This is some placeholder content the <strong>Profile tab's</strong> associated content. Clicking
                  another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to
                  control the content visibility and styling. You can use it with tabs, pills, and any other
                  <code>.nav</code>-powered navigation.</p>
                <div class="book-table-div">
                  <table class="shadow book-table rounded">
                    <thead>
                      <tr class="text-warning rounded text-light">
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">UserName</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col" colSpan="3">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      {
                        usersList.map((value) => {
                          return (
                            <tr>
                              <th>{value.id}</th>
                              <td>{value.firstname}</td>
                              <td>{value.lastname}</td>
                              <td>{value.username}</td>
                              <td>{value.email}</td>
                              <td>{value.password}</td>
                              <td style={{ width: "30px" }}><i class="fa-solid fa-circle-info text-secondary"></i></td>
                              <td style={{ width: "30px" }}><i class="fa-solid fa-pen-to-square text-primary" data-bs-toggle="modal" data-bs-target="#signupmodal"></i></td>
                              <td style={{ width: "30px" }}><i class="fa-solid fa-trash-can text-danger" onClick={() => deleteuser(value.id)}></i></td>
                            </tr>
                          )
                        })
                      }
                    </tbody>
                  </table>

                </div>
              </div>


              <div class="tab-pane fade" id="nav-books" role="tabpanel" aria-labelledby="nav-books-tab">
                <p>This is some placeholder content the <strong>Profile tab's</strong> associated content. Clicking
                  another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to
                  control the content visibility and styling. You can use it with tabs, pills, and any other
                  <code>.nav</code>-powered navigation.</p>
                <div class="book-table-div">
                  <table class="shadow book-table rounded">
                    <thead>
                      <tr class="text-warning rounded text-light">
                        <th scope="col">ID</th>
                        <th scope="col">Book Title</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Number</th>
                        <th scope="col">Published Date</th>
                        <th scope="col">Author</th>
                        <th scope="col">Description</th>
                        <th scope="col" colSpan="3">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      {
                        booksList.map((book) => {
                          return (
                          <tr>
                            <th scope="row">{book.id}</th>
                            <td>{book.booktitle}</td>
                            <td>{book.bookisbn}</td>
                            <td>{book.bookgenre}</td>
                            <td>{book.booknumber}</td>
                            <td>{book.publisheddate}</td>
                            <td>{book.bookauthor}</td>
                            <td>{book.description}</td>
                            <td style={{ width: "30px" }}><i class="fa-solid fa-circle-info text-secondary"></i></td>
                            <td style={{ width: "30px" }}><i class="fa-solid fa-pen-to-square text-primary"></i></td>
                            <td style={{ width: "30px" }}><i class="fa-solid fa-trash-can text-danger"></i></td>
                          </tr>
                          )
                        })
                      }
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











        <div class="modal modal-lg fade" id="signupmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
          <div class="modal-dialog" >
            <div class="modal-content">
              <div class="modal-header p-color text-light">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Sign up form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="row g-3 needs-validation" novalidate>
                  <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">First name</label>
                    <input type="text" name="Firstname" onChange={(e) => { setFirstname(e.target.value) }} class="form-control" id="validationCustom01" />
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" name="Lastname" onChange={(e) => { setLastname(e.target.value) }} class="form-control" id="validationCustom02" />
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="text" name="Username" onChange={(e) => { setUsername(e.target.value) }} class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" />
                      <div class="invalid-feedback">
                        Please choose a username.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">e-mail</label>
                    <input type="text" name="Email" onChange={(e) => { setEmail(e.target.value) }} class="form-control" id="validationCustom03" />
                    <div class="invalid-feedback">
                      Please provide a valid city.
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Password</label>
                    <input type="text" name="Password" onChange={(e) => { setPassword(e.target.value) }} class="form-control" id="validationCustom05" />
                    <div class="invalid-feedback">
                      Please provide a valid zip.
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Connfirm</label>
                    <input type="text" class="form-control" id="validationCustom05" />
                    <div class="invalid-feedback">
                      Please provide a valid zip.
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" />
                      <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                      </label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>






        <div class="modal modal-lg fade" id="addbookmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
          <div class="modal-dialog" >
            <div class="modal-content">
              <div class="modal-header p-color text-light">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Book form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="row g-3 needs-validation" novalidate>
                  <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">Book Title</label>
                    <input type="text" name="booktitle" onChange={(e) => { setBookTitle(e.target.value) }} class="form-control" id="validationCustom01" required />
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom02" class="form-label">ISBN</label>
                    <input type="text" name="bookisbn" onChange={(e) => { setIsbn(e.target.value) }} class="form-control" id="validationCustom02" required />
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustomUsername" class="form-label">Book Genre</label>
                    <input type="text" name="bookgenre" onChange={(e) => { setBookGenre(e.target.value) }} class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required />
                    <div class="invalid-feedback">
                      Please choose a username.
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Book Number</label>
                    <input type="number" name="booknumber" onChange={(e) => { setBookNumber(e.target.value) }} class="form-control" id="validationCustom03" required />
                    <div class="invalid-feedback">
                      Please provide a valid city.
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom05" class="form-label">Published Date</label>
                    <input type="date" name="publisheddate" onChange={(e) => { setPublishedDate(e.target.value) }} class="form-control" id="validationCustom05" required />
                    <div class="invalid-feedback">
                      Please provide a valid zip.
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom05" class="form-label">Book Author</label>
                    <input type="text" name="bookauthor" onChange={(e) => { setBookAuthor(e.target.value) }} class="form-control" id="validationCustom05" required />
                    <div class="invalid-feedback">
                      Please provide a valid zip.
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom05" class="form-label">Description</label>
                    <textarea name="description" onChange={(e) => { setDescription(e.target.value) }} class="form-control" id="validationCustom05" required />
                    <div class="invalid-feedback">
                      Please provide a valid zip.
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
                      <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                      </label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn p-color" type="submit" onClick={() => { confirm('Do you want to add this book?'), addbook() }}>Add Book</button>
                  </div>
                </form>
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
