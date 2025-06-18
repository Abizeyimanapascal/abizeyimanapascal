import React, { useEffect, useState } from 'react'
import Header from './components/Header';
import Mainlayout from './components/Mainlayout';
import { useParams } from 'react-router-dom';
import Axios from 'axios';

function Updatebook() {

    const {id} = useParams();
    const [bookTitle, setBookTitle] = useState("");
    const [bookIsbn, setBookIsbn] = useState("");
    const [bookGenre, setBookGenre] = useState("");
    const [bookNumber, setBookNumber] = useState("");
    const [publishedDate, setPublishedDate] = useState("");
    const [bookAuthor, setBookAuthor] = useState("");
    const [bookDescription, setBookDescription] = useState("");

    useEffect(() => {
        Axios.get('http://localhost:3001/api/getbook/' + id).then((response) => {
            setBookTitle(response.data[0].booktitle);
            setBookIsbn(response.data[0].bookisbn);
            setBookGenre(response.data[0].bookgenre);
            setBookNumber(response.data[0].booknumber);
            setPublishedDate(response.data[0].publisheddate);
            setBookAuthor(response.data[0].bookauthor);
            setBookDescription(response.data[0].bookdescription);
        });
    }, []);

    const updateBook = () => {
        
        Axios.put('http://localhost:3001/api/updatebook/'+id, {
            BookTitle: bookTitle,
            BookIsbn: bookIsbn,
            BookGenre:bookGenre,
            BookNumber:bookNumber,
            PublishedBook:publishedDate,
            BookAuthor:bookAuthor,
            BookDescription:bookDescription,
        }).then(() => {
            alert('Book');
        }).catch(() =>{
            console.log('error');
        })

    }

    return (

        <div>
            <Header />

            <Mainlayout>



                <div className='row'>
                    <div className='col-2'></div>

                                <div class="card col-8" id="updatebookmodal" data-bs-keyboard="false" tabindex="-1" >
                                    <div class="card-header p-color text-light">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Update The book</h1>
                                    </div>
                                    <div class="card-body">
                                        <form class="row g-3 needs-validation" novalidate>
                                            <div class="col-md-6">
                                                <label for="validationCustom01" class="form-label">Book Title</label>
                                                <input type="text" name="booktitle" onChange={e => {setBookTitle(e.target.value)}} value={bookTitle} class="form-control" id="validationCustom01" />
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom02" class="form-label">ISBN</label>
                                                <input type="text" name="bookisbn" onChange={e => {setBookIsbn(e.target.value)}} value={bookIsbn} class="form-control" id="validationCustom02" required />
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustomUsername" class="form-label">Book Genre</label>
                                                <input type="text" name="bookgenre" onChange={e => {setBookGenre(e.target.value)}} value={bookGenre} class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required />
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom03" class="form-label">Book Number</label>
                                                <input type="number" name="booknumber" onChange={e => {setBookNumber(e.target.value)}} value={bookNumber} class="form-control" id="validationCustom03" required />
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom05" class="form-label">Published Date</label>
                                                <input type="date" name="publisheddate" onChange={e => {setPublishedDate(e.target.value)}} value={publishedDate} class="form-control" id="validationCustom05" required />
                                                <div class="invalid-feedback">
                                                    Please provide a valid zip.
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom05" class="form-label">Book Author</label>
                                                <input type="text" name="bookauthor" onChange={e => {setBookAuthor(e.target.value)}} value={bookAuthor} class="form-control" id="validationCustom05" required />
                                                <div class="invalid-feedback">
                                                    Please provide a valid zip.
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom05" class="form-label">Description</label>
                                                <textarea name="description" onChange={e => {setBookDescription(e.target.value)}} value={bookDescription} class="form-control" id="validationCustom05" required />
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
                                                <button class="btn p-color" type="submit" onClick={updateBook}>Apply Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                </div>


            </Mainlayout>
        </div>



    )
}

export default Updatebook
